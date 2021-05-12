<?php

class Fise
{

    public static function getCantitatiExtraByFisaId($fisa_id)
    {
        $ret = array();

        $query = "SELECT
                SUM( a.cantitate ) AS cantitate_extra
                FROM
                detalii_fisa_extra_intoarcere_produse AS a
                LEFT JOIN fise_generate AS b ON a.fisa_id = b.id 
                WHERE
                a.fisa_id = '" . $fisa_id . "'	                
                AND a.sters = 0
                AND b.sters = 0
                AND a.stare_produs = 1
                  ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }


    public static function getCantitatiBgByFisaIdAndClientIdAndTipProdusId($fisa_id, $client_id, $tip_produs_id)
    {
        $ret = array();
        $query = "SELECT a.*
                  FROM detalii_fisa_intoarcere_produse as a                                     
                  WHERE a.fisa_id = '" . $fisa_id . "'
                  AND a.client_id = '" . $client_id . "'
                  AND a.tip_produs_id = '" . $tip_produs_id . "'
                  AND a.sters = 0
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'vandute' => $item['cantitate'],
                        'defecte' => $item['defecte'],
                        'extra' => $item['defecte']
                    );

                }
            }
        }
        return $ret;
    }

    public static function getProduseVanduteByFisaId($id)
    {

        $ret = array();
        $query = "SELECT * from (SELECT DISTINCT (tip_produs_id) AS tip_produs_id, c.tip AS nume_produs     
                  FROM  detalii_fisa_extra_intoarcere_produse AS a
                  LEFT JOIN tip_produs AS c ON a.tip_produs_id = c.id
                  WHERE a.fisa_id = '" . $id . "'
                  AND a.sters = 0
                  AND a.cantitate > 0
                  UNION ALL 
                  SELECT tip_produs_id AS tip_produs_id,
                  d.tip AS nume_produs
                  FROM detalii_fisa_intoarcere_produse AS b
                  LEFT JOIN tip_produs AS d ON b.tip_produs_id = d.id
                  WHERE b.fisa_id = '" . $id . "'
                  AND b.sters = 0
                  AND b.cantitate > 0
                  ORDER BY tip_produs_id ASC) as test
                  GROUP BY test.tip_produs_id";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'fisa_id' => $id,
                        'tip_produs_id' => $item['tip_produs_id'],
                        'nume_produs' => $item['nume_produs'],
                        'cantitate' => $item['cantitate'],
                        'cantitate_extra' => 'extra',
                        'defecte' => $item['defecte']
                    );
                }
            }
        }
        return $ret;
    }

    public static function getProduseExtraByFisaIdAndClientId($fisa_id, $client_id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, b.tip, c.nume as stare, a.cantitate, a.stare_produs, d.nume as nume_client, pret
                  FROM detalii_fisa_extra_intoarcere_produse as a
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  LEFT JOIN stare_produs as c on a.stare_produs = c.id
                  LEFT JOIN clienti as d on a.client_id = d.id
                  WHERE a.fisa_id = '" . $fisa_id . "'
                  AND a.client_id = '" . $client_id . "'
                  AND a.sters = 0
                  ORDER BY b.id ASC
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_client' => $item['nume_client'],
                        'nume_produs' => $item['tip'],
                        'tip_produs_id' => $item['tip_produs_id'],
                        'cantitate' => $item['cantitate'],
                        'pret' => $item['pret'],
                        'pline' => 0,
                        'goale' => 0,
                    );
                }
                if ($item['stare_produs'] == 1) {
                    $ret[$item['tip_produs_id']]['pline'] = $item['cantitate'];
                } else if ($item['stare_produs'] == 2) {
                    $ret[$item['tip_produs_id']]['goale'] = $item['cantitate'];
                }
            }
        }
        return $ret;
    }

    public static function AdaugaProduseExtraFisa($fisa_id, $client_id)
    {
        $tip_produs_id = getRequestParameter('tip_produs_id', '');
        $pline = 1;
        $goale = 2;
        $cantitate = getRequestParameter('cantitate', '');
        $pret = getRequestParameter('pret', '');

        $query = "SELECT id from detalii_fisa_extra_intoarcere_produse
                  WHERE fisa_id = '" . $fisa_id . "'
                  AND client_id = '" . $client_id . "'
                  AND tip_produs_id = '" . $tip_produs_id . "'
                  AND stare_produs = '" . $pline . "'
                  AND sters = 0
                  ";
        $result = myQuery($query);

        if ($result->rowCount() == 0) {
            if ($tip_produs_id > 0) {
                $query = "INSERT INTO detalii_fisa_extra_intoarcere_produse(fisa_id, client_id, tip_produs_id, stare_produs, cantitate, pret)
                     values
                    ('" . $fisa_id . "','" . $client_id . "','" . $tip_produs_id . "','" . $pline . "','" . $cantitate . "','" . $pret . "')";
                myExec($query);
                $query = "INSERT INTO detalii_fisa_extra_intoarcere_produse(fisa_id, client_id, tip_produs_id, stare_produs, cantitate, pret)
                     values
                    ('" . $fisa_id . "','" . $client_id . "','" . $tip_produs_id . "','" . $goale . "','" . $cantitate . "','" . $pret . "')";
                myExec($query);
            }
        } else {
            header('Location: /adauga_produse_extra_fisa.php?fisa_id=' . $fisa_id . '&id_client=' . $client_id);
        }

        header('Location: /adauga_produse_extra_fisa.php?fisa_id=' . $fisa_id . '&id_client=' . $client_id);

    }

    public static function GetProdusExtraByClientIdAndFisa($tip_produs_id, $client_id, $fisa_id)
    {
        $ret = array();

        $query = "SELECT b.tip as nume_produs, c.nume, a.cantitate, a.pret, a.tip_produs_id, a.stare_produs
                FROM
                    detalii_fisa_extra_intoarcere_produse as a
                    LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                    LEFT JOIN stare_produs as c on a.stare_produs = c.id
                WHERE
                    a.tip_produs_id = '" . $tip_produs_id . "'
                    AND a.client_id = '" . $client_id . "'
                    AND a.fisa_id = '" . $fisa_id . "'
                    AND a.sters = 0
                  ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_produs' => $item['nume_produs'],
                        'pline' => array(
                            'cantitate' => 0,
                            'pret' => 0,
                        ),
                        'goale' => array(
                            'cantitate' => 0,
                        ),
                    );
                }
                if ($item['stare_produs'] == 1) {
                    $ret[$item['tip_produs_id']]['pline']['cantitate'] = $item['cantitate'];
                    $ret[$item['tip_produs_id']]['pline']['pret'] = $item['pret'];
                } elseif ($item['stare_produs'] == 2) {
                    $ret[$item['tip_produs_id']]['goale']['cantitate'] = $item['cantitate'];
                }
            }
        }
        return $ret;

    }

    public static function GetProduseExtraByClientIdAndFisa($client_id, $fisa_id)
    {
        $ret = array();

        $query = "SELECT b.tip as nume_produs, c.nume, a.cantitate, a.pret, a.tip_produs_id, a.stare_produs
                FROM
                    detalii_fisa_extra_intoarcere_produse as a
                    LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                    LEFT JOIN stare_produs as c on a.stare_produs = c.id
                    WHERE a.client_id = '" . $client_id . "'
                    AND a.fisa_id = '" . $fisa_id . "'
                    AND a.sters = 0
                  ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_produs' => $item['nume_produs'],
                        'pline' => array(
                            'cantitate' => 0,
                            'pret' => 0,
                        ),
                        'goale' => array(
                            'cantitate' => 0,
                        ),
                    );
                }
                if ($item['stare_produs'] == 1) {
                    $ret[$item['tip_produs_id']]['pline']['cantitate'] = $item['cantitate'];
                    $ret[$item['tip_produs_id']]['pline']['pret'] = $item['pret'];
                } elseif ($item['stare_produs'] == 2) {
                    $ret[$item['tip_produs_id']]['goale']['cantitate'] = $item['cantitate'];
                }
            }
        }
        return $ret;

    }

    public static function GetProdusExtraByClientIdProdusIdAndFisaAnd($client_id, $fisa_id)
    {
        $ret = array();

        $query = "SELECT tip_produs_id, cantitate as cantitate_extra, pret as pret_extra
                  FROM detalii_fisa_extra_intoarcere_produse
                  WHERE client_id = '" . $client_id . "' 
                  AND fisa_id = '" . $fisa_id . "'
                  AND sters = 0
                  AND stare_produs = 1
                  ";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }

        return $ret;

    }

    public static function GetProdusExtraByProdusIdAndFisa($tip_produs_id, $fisa_id)
    {
        $ret = array();

        $query = "SELECT SUM(cantitate) as cantitate_extra, SUM(pret) as pret_extra 
                  FROM detalii_fisa_extra_intoarcere_produse
                  WHERE tip_produs_id = '" . $tip_produs_id . "' 
                  AND fisa_id = '" . $fisa_id . "'
                  AND sters = 0
                  AND stare_produs = 1
                  ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function UpdateProdusExtra($tip_produs_id, $client_id, $fisa_id)
    {
        $cantitate = getRequestParameter('cantitate', 0);
        $pret = getRequestParameter('pret', 0);

        $query = "UPDATE detalii_fisa_extra_intoarcere_produse SET 
                                              cantitate = '" . $cantitate . "',
                                              pret = '" . $pret . "'
                                              WHERE client_id= '" . $client_id . "'
                                              AND fisa_id = '" . $fisa_id . "'
                                              AND tip_produs_id = '" . $tip_produs_id . "'                                             
                                                ";
        myExec($query);

    }

    public static function StergeProdusExtra($tip_produs_id, $client_id, $fisa_id)
    {
        $query = "UPDATE detalii_fisa_extra_intoarcere_produse SET 
                                              sters = 1
                                              WHERE client_id= '" . $client_id . "'
                                              AND fisa_id = '" . $fisa_id . "'
                                              AND tip_produs_id = '" . $tip_produs_id . "'
                                              ";
        myExec($query);

    }

    public static function getObservatieSecundaraDinFisaTraseuByClientIdAndFisaId($client_id, $fisa_id)
    {
        $ret = array();
        $query = "SELECT a.second_obs, b.nume as nume_observatie
                  FROM observatii_secundare_fisa as a
                  LEFT JOIN observatii as b on a.second_obs = b.id  
                  WHERE a.client_id = '" . $client_id . "'
                  AND a.fisa_id = '" . $fisa_id . "'
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignariClientiByFisaGenerataIdPrintEditFisa($fisa_id, $opts = array())
    {

        $ret = array();
        $query = "SELECT a.fisa_generata_id, a.client_id, b.nume as nume_client, c.nume as nume_localitate, b.rastel, d.nume as nume_culoare
                  FROM clienti_asignati_fise_generate as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN localitati as c on b.localitate_id = c.id                  
                  LEFT JOIN culori_butelii as d on b.culoare_id = d.id                  
                  LEFT JOIN ordine_clienti as e on a.client_id = e.client_id
                  WHERE a.fisa_generata_id = '" . $fisa_id . "'
                  AND a.sters = 0                  
                  GROUP BY b.id
                  ORDER BY e.ordine ASC
                  ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['target'] = Target::getTargetByClientIdPrintEditFisa($item['client_id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }

    public static function getPlecareMarfaByFisaIdMiscariFise($id)
    {

        $ret = array();
        $query = "SELECT a.tip_produs_id, a.cantitate, b.tip as  nume_produs, a.cantitate
                  from fisa_total_plecare as a 
                  left join tip_produs as b on a.tip_produs_id = b.id
                  where fisa_id = '" . $id . "'
                  and a.sters = 0
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }
        return $ret;
    }

    public static function getMiscariByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.fisa_id, a.casa_marcat,raport_z,a.valoare_z,
                  a.valoare_alimentare, a.km_parcursi, a.tip_alimentare as tip_alimentare_id, b.tip as tip_plata,
                  a.nr_bg, a.nr_ar_8, a.nr_ar_9, a.valoare_bg, a.valoare_ar_8, a.valoare_ar_9, a.nota_explicativa
                  from miscari_fise as a
                  left join tip_alimentare as b on a.tip_alimentare = b.id
                  where a.fisa_id = '" . $id . "'";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getDetaliiFisaDinEditFisaTraseu($id)
    {
        $ret = array();
        $query = "SELECT a.depozit_id, a.traseu_id, a.sofer_id, a.masina_id, 
                  a.data_intrare, a.consum_plecare, a.consum_sosire 
                  FROM fise_generate as a
                  where a.id = '" . $id . "'";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiBgByFisa($id)
    {
        $ret = array();
        $query = "SELECT SUM(cantitate) as suma_bg from detalii_fisa_intoarcere_produse
                where fisa_id = '" . $id . "'
                and tip_produs_id = 1
                and sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiAr9ByFisa($id)
    {
        $ret = array();
        $query = "SELECT SUM(cantitate) as suma_ar_9 from detalii_fisa_intoarcere_produse
                where fisa_id = '" . $id . "'
                and tip_produs_id = 4
                and sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiAr8ByFisa($id)
    {
        $ret = array();
        $query = "SELECT SUM(cantitate) as suma_ar_8 from detalii_fisa_intoarcere_produse
                where fisa_id = '" . $id . "'
                and tip_produs_id = 3
                and sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getRandamentLunarDinFiseByClientIdAndPerioada($client_id, $opts = array())
    {
        $an = isset($opts['an']) ? $opts['an'] : 0;
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : 0;

        if ($perioada_id < 10) {
            $perioada_id = '0' . $perioada_id;
        }


        $ret = array();
        $query = "SELECT
                  SUM(a.cantitate) as randament_lunar
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "'
                  AND a.data_intrare LIKE '" . $an . "-" . $perioada_id . "-%'
                  ";
        $result = myQuery($query);
//        debug($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getRandamentAnualDinFiseByClientId($client_id, $opts = array())
    {
        $an = isset($opts['an']) ? $opts['an'] : date('Y');
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : date('Y');

        $ret = array();
//        Returneaza randament pe luni
        $query = "SELECT
                    a.client_id,                    
                    date_format(a.data_intrare,'%Y') AS ani_randament,
                    date_format(a.data_intrare,'%m') AS luna_randament,
                    SUM(a.cantitate) as randament_lunar
                FROM
                    detalii_fisa_intoarcere_produse AS a
                    WHERE	a.client_id = '" . $client_id . "'
                    AND a.sters = 0
               ";

        if ($an > 0) {
            $query .= " AND a.data_intrare LIKE '%" . $an . "%'";
        }

        $query .= " GROUP BY luna_randament ORDER BY
                    luna_randament ASC";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function getFiseLivrariMasini($opts = array())
    {
        $masina_id = isset($opts['masina_id']) ? $opts['masina_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $sofer_id = isset($opts['sofer_id']) ? $opts['sofer_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        $ret = array();

        $query = "SELECT a.id, a.data_intrare AS `data`, SUM(b.cantitate) as suma_cantitati 
                  FROM fise_generate AS a
                  LEFT JOIN detalii_fisa_intoarcere_produse as b on a.id = b.fisa_id
                  WHERE a.masina_id = '" . $masina_id . "'
                  AND a.traseu_id = '" . $traseu_id . "'
                  AND a.sofer_id = '" . $sofer_id . "'
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  AND b.sters = 0
                  GROUP BY b.fisa_id
                  ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.tip as  nume_produs
                  FROM detalii_fisa_intoarcere_produse as a 
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  WHERE fisa_id = '" . $id . "'
                  AND a.sters = 0
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'tip_produs_id' => $item['tip_produs_id'],
                        'nume_produs' => $item['nume_produs'],
//                        'pline' => 0,
                    );
                }
                if ($item['cantitate'] > 0) {
                    $ret[$item['tip_produs_id']]['pline'] += $item['cantitate'];
//                    $ret['total_vandute'] += $item['cantitate'];

                    if ($item['tip_produs_id'] == 1) {
//                        $ret['bg_11'] += $item['cantitate'];
                    }

                    if ($item['tip_produs_id'] == 3) {
//                        $ret['ar8'] += $item['cantitate'];
                    }

                    if ($item['tip_produs_id'] == 4) {
//                        $ret['ar9'] += $item['cantitate'];
                    }

                }

            }


        }
        return $ret;
    }

}

//    public static function GetProdusExtraByProdusIdAndFisa($tip_produs_id, $fisa_id)
//    {
//        $ret = array();
//
//        $query = "SELECT b.tip as nume_produs, c.nume, a.cantitate, a.pret, a.tip_produs_id, a.stare_produs
//                FROM
//                    detalii_fisa_extra_intoarcere_produse as a
//                    LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
//                    LEFT JOIN stare_produs as c on a.stare_produs = c.id
//                WHERE
//                    a.tip_produs_id = '" . $tip_produs_id . "'
//                    AND a.fisa_id = '" . $fisa_id . "'
//                    AND a.sters = 0
//                  ";
//        $result = myQuery($query);
//
//        if ($result) {
//            $a = $result->fetchAll(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                if (!isset($ret[$item['tip_produs_id']])) {
//                    $ret[$item['tip_produs_id']] = array(
//                        'nume_produs' => $item['nume_produs'],
//                        'pline' => array(
//                            'cantitate' => 0,
//                            'pret' => 0,
//                        ),
//                    );
//                }
//                if ($item['stare_produs'] == 1) {
//                    $ret[$item['tip_produs_id']]['pline']['cantitate'] += $item['cantitate'];
//                    $ret[$item['tip_produs_id']]['pline']['pret'] +=$item['pret'];
//                }
//            }
//        }
//        return $ret;
//
//    }

//    public static function getRandamentAnualDinFiseByClientId($client_id, $opts = array())
//    {
//        $an = isset($opts['an']) ? $opts['an'] : 0;
//
//        if ($an == 0) {
//            $an = date('Y');
//        }
//
//        $ret = array();
//        $query = "SELECT an, perioada_id, SUM(randament ) AS randament_lunar, suma_target
//                FROM randament_clienti
//                WHERE client_id = '" . $client_id . "'
//                AND an = '" . $an . "'
//                GROUP BY perioada_id ASC
//               ";
//
//        $result = myQuery($query);
//        if ($result) {
//            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
//        }
//        return $ret;
//    }


//    public static function getAniRandamentDinFiseByClientId($client_id)
//    {
//        $ret = array();
//        $query = "SELECT date_format(a.data_intrare,'%Y') AS ani_randament, date_format(a.data_intrare,'%m') AS luni_randament
//                  FROM detalii_fisa_intoarcere_produse AS a
//                  WHERE a.client_id = '" . $client_id . "'
//                  GROUP BY ani_randament
//                  ORDER BY a.data_intrare ASC";
//
//        $result = myQuery($query);
//        if ($result) {
//            $a = $result->fetchAll(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                $ret[$item['ani_randament']] = array(
//                    $item['luni_randament'] => 3
//                );
//            }
//        }
//        return $ret;
//    }

//    public static function getLuniRandamentDinFiseByClientId($client_id)
//    {
//        $ret = array();
//        $query = "SELECT date_format(a.data_intrare,'%m') AS ani_randament
//                  FROM detalii_fisa_intoarcere_produse AS a
//                  WHERE a.client_id = '" . $client_id . "'
//                  GROUP BY ani_randament
//                  ORDER BY a.data_intrare ASC";
//
//        $result = myQuery($query);
//        if ($result) {
//            $a = $result->fetchAll(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                $ret[$item['luni_randament']] = array();
//            }
//        }
//        return $ret;
//    }