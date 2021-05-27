<?php

class Stocuri
{
    public static function consumaFisaPlecare($id)
    {
        $fisa = Stocuri::getFisaGenerataById($id);
        if (!isset($fisa['id']) || $fisa['consum_plecare'] == 1) {
            return;
        }

        $tip_operatiune_id = 2;
        foreach ($fisa['incarcatura_masina_plecare'] as $tip_produs_id => $item_produs) {
            $data_start = $item_produs['data_intrare'];
            $query = "INSERT INTO stoc_operatiuni(id_fisa, depozit_id, traseu_id, id_produs, stare_produs, cantitate, tip_operatiune_id, data_start)
                        values
                        ('" . $id . "','" . $fisa['depozit_id'] . "','" . $fisa['traseu_id'] . "','" . $item_produs['tip_produs_id'] . "',
                        '" . $item_produs['stare_produs'] . "','" . $item_produs['cantitate'] . "', '" . $tip_operatiune_id . "', '" . $data_start . "')";
            myExec($query);

            $select_pline = "SELECT cantitate from stoc 
                                    where depozit_id = '" . $fisa['depozit_id'] . "'
                                    and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                                    and stare_produs = '" . $item_produs['stare_produs'] . "'
                                    ";
            $cantitate = myQuery($select_pline);
            $ret = $cantitate->fetchAll(PDO::FETCH_ASSOC);

            foreach ($ret as $r) {
                $update_pline = "UPDATE stoc set 
                            cantitate = '" . ($r['cantitate'] - $item_produs['cantitate']) . "'                           
                            where depozit_id = '" . $fisa['depozit_id'] . "'
                            and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                            and stare_produs = '" . $item_produs['stare_produs'] . "'
                            ";
                myExec($update_pline);
            }
            $query = "UPDATE fise_generate set consum_plecare = 1 where id='" . $id . "' ";
            myExec($query);
        }
    }

    public static function consumaFisaSosire($id)
    {

        $fisa = Stocuri::getFisaGenerataById($id);
        if (!isset($fisa['id']) || $fisa['consum_sosire'] == 1) {
            return;
        }

        $tip_operatiune_id = 1;

        foreach ($fisa['incarcatura_masina_intoarcere'] as $tip_produs_id => $item_produs) {
            $data_start = $item_produs['data_start'];
            $stare_produs_pline = 1;
            $stare_produs_goale = 2;
            $stare_produs_defecte = 3;

            $select_operatiuni_stoc = "SELECT * FROM stoc_operatiuni
                                where id_fisa = '" . $id . "'                               
                                and depozit_id	= '" . $fisa['depozit_id'] . "'
                                and traseu_id	= '" . $item_produs['traseu_id'] . "'
                                and id_produs = '" . $item_produs['tip_produs_id'] . "'
                                and (stare_produs = 1 || stare_produs = 2 || stare_produs = 3)
                                and tip_operatiune_id = 1
                                and data_start  = '" . $data_start . "'";

            $id_gasit = myQuery($select_operatiuni_stoc);
            $ret = $id_gasit->fetchAll(PDO::FETCH_ASSOC);
            $id_stoc = $ret['id'];

            if ($id_gasit->rowCount() == 0) {

                if ($item_produs['pline']) {
                    $query = "INSERT INTO stoc_operatiuni(id_fisa, depozit_id, traseu_id, id_produs, stare_produs, cantitate, tip_operatiune_id, data_start)
        values
        ('" . $id . "','" . $fisa['depozit_id'] . "','" . $item_produs['traseu_id'] . "','" . $item_produs['tip_produs_id'] . "',
        '" . $stare_produs_pline . "', '" . $item_produs['pline'] . "', '" . $tip_operatiune_id . "', '" . $data_start . "')";
                    myExec($query);

                    $select_pline = "SELECT cantitate from stoc 
                                    where depozit_id = '" . $fisa['depozit_id'] . "'
                                    and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                                    and stare_produs = '" . $stare_produs_pline . "'
                                    ";
                    $cantitate = myQuery($select_pline);
                    $ret = $cantitate->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($ret as $r) {
                        $update_pline = "UPDATE stoc
                            set cantitate = '" . ($r['cantitate'] + $item_produs['pline']) . "'
                            where depozit_id = '" . $fisa['depozit_id'] . "'
                            and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                            and stare_produs = '" . $stare_produs_pline . "'
                            ";
                        myExec($update_pline);
                    }
                }

                if ($item_produs['goale']) {
                    $query = "INSERT INTO stoc_operatiuni(id_fisa, depozit_id, traseu_id, id_produs, stare_produs, cantitate, tip_operatiune_id, data_start)
        values
        ('" . $id . "','" . $fisa['depozit_id'] . "','" . $item_produs['traseu_id'] . "','" . $item_produs['tip_produs_id'] . "',
        '" . $stare_produs_goale . "', '" . $item_produs['goale'] . "', '" . $tip_operatiune_id . "', '" . $data_start . "')";
                    myExec($query);

                    $select_goale = "SELECT cantitate from stoc 
                                    where depozit_id = '" . $fisa['depozit_id'] . "'
                                    and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                                    and stare_produs = '" . $stare_produs_goale . "'
                                    ";
                    $cantitate = myQuery($select_goale);
                    $ret = $cantitate->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($ret as $r) {
                        $update_goale = "UPDATE stoc
                            set cantitate = '" . ($r['cantitate'] + $item_produs['goale']) . "'
                            where depozit_id = '" . $fisa['depozit_id'] . "'
                            and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                            and stare_produs = '" . $stare_produs_goale . "'
                            ";
                        myExec($update_goale);
                    }
                }

                if ($item_produs['defecte']) {
                    $query = "INSERT INTO stoc_operatiuni(id_fisa, depozit_id, traseu_id, id_produs, stare_produs, cantitate, tip_operatiune_id, data_start)
        values
        ('" . $id . "','" . $fisa['depozit_id'] . "','" . $item_produs['traseu_id'] . "','" . $item_produs['tip_produs_id'] . "',
        '" . $stare_produs_defecte . "', '" . $item_produs['defecte'] . "', '" . $tip_operatiune_id . "', '" . $data_start . "')";
                    myExec($query);

                    $select_defecte = "SELECT cantitate from stoc 
                                    where depozit_id = '" . $fisa['depozit_id'] . "'
                                    and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                                    and stare_produs = '" . $stare_produs_defecte . "'
                                    ";
                    $cantitate = myQuery($select_defecte);
                    $ret = $cantitate->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($ret as $r) {
                        $update_defecte = "UPDATE stoc
                            set cantitate = '" . ($r['cantitate'] + $item_produs['defecte']) . "'
                            where depozit_id = '" . $fisa['depozit_id'] . "'
                            and tip_produs_id = '" . $item_produs['tip_produs_id'] . "'
                            and stare_produs = '" . $stare_produs_defecte . "'
                            ";
                        myExec($update_defecte);
                    }
                }
                $query = "UPDATE fise_generate set consum_sosire = 1 where id='" . $id . "' ";
                myExec($query);
            }
        }

    }


    public static function getRealizatClientByFisaId($fisa_id, $client_id)
    {
//        am scos b.*
        $ret = array();
        $produse_by_client_id_fisa_intoarcere = "SELECT b.fisa_id, b.client_id, b.tip_produs_id, b.cantitate, b.defecte, b.pret, 
                                                b.comision, b.pret_contract, c.tip as nume_produs
                                                FROM fise_generate AS a
                                                LEFT JOIN detalii_fisa_intoarcere_produse as b on a.id = b.fisa_id
                                                LEFT JOIN tip_produs as c on b.tip_produs_id = c.id
                                                WHERE a.id = '" . $fisa_id . "'
                                                AND b.client_id = '" . $client_id . "'
                                                AND a.sters = 0
                                                AND b.sters = 0          
                                                AND b.produs_extra = 0          
                                                ";
        $result = myQuery($produse_by_client_id_fisa_intoarcere);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'fisa_id' => $item['fisa_id'],
                        'client_id' => $item['client_id'],
                        'tip_produs_id' => $item['tip_produs_id'],
                        'nume_produs' => $item['nume_produs'],
                        'cantitate' => $item['cantitate'],
                        'defecte' => $item['defecte'],
                        'pret' => $item['pret'],
                        'comision' => $item['comision'],
                        'pret_contract' => $item['pret_contract'],
                    );
                }
            }
        }
        return $ret;
    }


    public static function getPlecareMarfaByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.tip as  nume_produs, a.cantitate
                  from fisa_total_plecare as a 
                  left join tip_produs as b on a.tip_produs_id = b.id
                  WHERE fisa_id = '" . $id . "'
                  AND a.sters = 0
                  AND b.sters = 0
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


//    Functia asta o folosesc doar la pagina de afisare fise
    public static function getIncarcaturaMasinaPlecareByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, b.tip as  nume_produs, a.cantitate
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


    public static function getIntoarcereCantitateMarfaByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.tip as  nume_produs
                  from fisa_total_intoarcere as a 
                  left join tip_produs as b on a.tip_produs_id = b.id
                  where fisa_id = '" . $id . "'
                  and a.sters = 0
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'traseu_id' => $item['traseu_id'],
                        'tip_produs_id' => $item['tip_produs_id'],
                        'cantitate' => $item['cantitate'],
                        'nume_produs' => $item['nume_produs'],
                        'data_start' => $item['data_intrare'],
                        'pline' => 0,
                        'goale' => 0,
                        'defecte' => 0
                    );
                }
                if ($item['stare_produs'] == 1) {
                    $ret[$item['tip_produs_id']]['pline'] += $item['cantitate'];
                } else if ($item['stare_produs'] == 2) {
                    $ret[$item['tip_produs_id']]['goale'] += $item['cantitate'];
                } else if ($item['stare_produs'] == 3) {
                    $ret[$item['tip_produs_id']]['defecte'] += $item['cantitate'];
                }
            }
        }
        return $ret;
    }

//    Am refacut functia pentru pagina de fise
    public static function getIncarcaturaMasinaSosireByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, a.cantitate,a.stare_produs, b.tip as nume_produs
                  FROM fisa_total_intoarcere as a 
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  WHERE a.fisa_id = '" . $id . "'
                  AND a.sters = 0
                  ORDER BY b.id ASC 
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_produs' => $item['nume_produs'],
                        'pline' => 0,
                        'goale' => 0,
//                        'defecte' => 0,
                    );

                }
                if ($item['stare_produs'] == 1) {
                    $ret[$item['tip_produs_id']]['pline'] += $item['cantitate'];
                } else if ($item['stare_produs'] == 2) {
                    $ret[$item['tip_produs_id']]['goale'] += $item['cantitate'];
                }

//                else if ($item['stare_produs'] == 3) {
//                    $ret[$item['tip_produs_id']]['defecte'] += $item['cantitate'];
//                }
            }
        }
        return $ret;
    }

    public static function getIncarcaturaMasinaSosireByFisaIdCompleteazaFisa($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.tip as nume_produs
                  from fisa_total_intoarcere as a 
                  left join tip_produs as b on a.tip_produs_id = b.id
                  where fisa_id = '" . $id . "'
                  and a.sters = 0
                  ORDER BY b.id ASC 
                 ";

        $result = myQuery($query);

        if ($result) {
            $ret['totaluri'] = array(
                'total_pline' => 0,
                'total_goale' => 0,
                'total_defecte' => 0,
            );

            $ret['marfa_sosire'] = array();
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret['marfa_sosire'][$item['tip_produs_id']])) {
                    $ret['marfa_sosire'][$item['tip_produs_id']] = array(
                        'nume_produs' => $item['nume_produs'],
                        'pline' => 0,
                        'goale' => 0,
                        'defecte' => 0,
                    );

                }

                if ($item['stare_produs'] == 1) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['pline'] += $item['cantitate'];
                    $ret['totaluri']['total_pline'] += $item['cantitate'];

                } else if ($item['stare_produs'] == 2) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['goale'] += $item['cantitate'];
                    $ret['totaluri']['total_goale'] += $item['cantitate'];
                } else if ($item['stare_produs'] == 3) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['defecte'] += $item['cantitate'];
                    $ret['totaluri']['total_defecte'] += $item['cantitate'];
                }
            }
        }
        return $ret;
    }

    public static function getCantitatiVanduteLaSosireByFisaIdAndClientId($fisa_id, $client_id)
    {
        $ret = array();
        $query = "SELECT a.*, b.tip as nume_produs
                  from detalii_fisa_intoarcere_produse as a 
                  left join tip_produs as b on a.tip_produs_id = b.id
                  left join clienti_target as c on a.client_id = c.client_id
                  where a.fisa_id = '" . $fisa_id . "'
                  and a.client_id = '" . $client_id . "'
                  and a.sters = 0
                  GROUP BY a.tip_produs_id
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_produs' => $item['nume_produs'],
                        'vandute' => $item['cantitate'],
                        'defecte' => $item['defecte'],
                        'pret_fisa_sofer' => ($item['pret'] - $item['comision']),
                        'comision' => $item['comision'],
                        'pret_contract' => $item['pret_contract']
                    );

                }
            }
        }
        return $ret;
    }

    public static function getCantitatiProduseClientiByFisaId($id)
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
                        'data_start' => $item['data_intrare'],
                        'pline' => 0,
                        'defecte' => 0,

                    );
                }
                if ($item['cantitate'] > 0) {
                    $ret[$item['tip_produs_id']]['pline'] += $item['cantitate'];
                    $ret['total_vandute'] += $item['cantitate'];

                    if ($item['tip_produs_id'] == 1) {
                        $ret['bg_11'] += $item['cantitate'];
                    }

                    if ($item['tip_produs_id'] == 2) {
                        $ret['bg_9'] += $item['cantitate'];
                    }

                    if ($item['tip_produs_id'] == 3) {
                        $ret['ar8'] += $item['cantitate'];
                    }

                    if ($item['tip_produs_id'] == 4) {
                        $ret['ar9'] += $item['cantitate'];
                    }

                }

                if ($item['defecte'] > 0) {
                    $ret[$item['tip_produs_id']]['defecte'] += $item['defecte'];
                    $ret['total_defecte'] += $item['defecte'];
                }

            }


        }
        return $ret;
    }

    public static function getIntoarcereMarfaByFisaIdAndprodusId($id, $tip_produs_id)
    {
        $ret = array();
        $query = "SELECT a.fisa_id, a.tip_produs_id, a.cantitate, a.stare_produs, b.tip as nume_produs
                  FROM fisa_total_intoarcere as a 
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  WHERE a.fisa_id = '" . $id . "'
                  AND a.tip_produs_id = '" . $tip_produs_id . "'
                  AND a.sters = 0
                  ORDER BY b.id ASC 
                 ";

        $result = myQuery($query);

        if ($result) {

//            $ret['marfa_plecare'] = self::getPlecareMarfaByFisaIdAndprodusId($id, $tip_produs_id);
            $ret['marfa_sosire'] = array();
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret['marfa_sosire'][$item['tip_produs_id']])) {
                    $ret['marfa_sosire'][$item['tip_produs_id']] = array(
                        'pline' => 0,
                        'defecte' => 0,
                        'goale' => 0,
                    );

                }

                if ($item['stare_produs'] == 1) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['pline'] += $item['cantitate'];
//                    $ret['totaluri']['total_goale'] = $ret['marfa_plecare'][$item['tip_produs_id']]['pline_plecare'] - ($ret['marfa_sosire'][$item['tip_produs_id']]['pline'] + $ret['marfa_sosire'][$item['tip_produs_id']]['defecte']);
                } else if ($item['stare_produs'] == 3) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['defecte'] += $item['cantitate'];
//                    $ret['totaluri']['total_goale'] = $ret['marfa_plecare'][$item['tip_produs_id']]['pline_plecare'] - ($ret['marfa_sosire'][$item['tip_produs_id']]['pline'] + $ret['marfa_sosire'][$item['tip_produs_id']]['defecte']);
                } else if ($item['stare_produs'] == 2) {
                    $ret['marfa_sosire'][$item['tip_produs_id']]['goale'] += $item['cantitate'];
                }
            }
        }
        return $ret;
    }

    public static function getPlecareMarfaByFisaIdAndprodusId($id, $tip_produs_id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, a.cantitate as pline_plecare
                  FROM fisa_total_plecare as a 
                  WHERE a.fisa_id = '" . $id . "'
                  AND a.tip_produs_id = '" . $tip_produs_id . "'
                  AND a.sters = 0
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

    public static function getPlecareMarfaByFisaIdAndTraseuId($id, $data_start, $opts = array())
    {
        $fisa_id = isset($opts['fisa_id']) ? $opts['fisa_id'] : 0;
        $sofer_id = isset($opts['sofer_id']) ? $opts['sofer_id'] : 0;
        $masina_id = isset($opts['masina_id']) ? $opts['masina_id'] : 0;
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;

        $ret = array();
        $query = "SELECT a .*, b . tip as  nume_produs 
                  from fisa_total_plecare as a 
                  left join tip_produs as b on a . tip_produs_id = b . id
                  left join fise_generate as c on a.fisa_id = c.id
                  where a.traseu_id = '" . $id . "'                 
                  and a.fisa_id = '" . $fisa_id . "'
                  and a.data_intrare = '" . $data_start . "'
                  and c.sofer_id = '" . $sofer_id . "'
                  and c.masina_id = '" . $masina_id . "'
                  and c.depozit_id = '" . $depozit_id . "'
                  and a . sters = 0
                  and c . sters = 0
                  and b . sters = 0
                  ORDER BY b.tip DESC
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getPlecareMarfaByTraseuId($id, $data_start, $opts = array())
    {
        $sofer_id = isset($opts['sofer_id']) ? $opts['sofer_id'] : 0;
        $masina_id = isset($opts['masina_id']) ? $opts['masina_id'] : 0;
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $ret = array();
        $query = "SELECT a .*, b . tip as  nume_produs 
                  from fisa_total_plecare as a 
                  left join tip_produs as b on a . tip_produs_id = b . id
                  left join fise_generate as c on a.fisa_id = c.id
                  where a.traseu_id = '" . $id . "'                 
                  and a.data_intrare = '" . $data_start . "'
                  and c.sofer_id = '" . $sofer_id . "'
                  and c.masina_id = '" . $masina_id . "'
                  and c.depozit_id = '" . $depozit_id . "'
                  and a . sters = 0
                  and c . sters = 0
                  and b . sters = 0
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function getCantitateProdusByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT tip_produs_id from detalii_fisa_intoarcere_produse
                  where client_id = '" . $client_id . "'";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function consumaStoc($id_fisa, $depozit_id, $traseu_id)
    {
        $ret = array();
        $insert_into_stoc_operatiuni = "INSERT INTO stoc_operatiuni(depozit_id)
                                        VALUES('" . $depozit_id . "')
                                        ";

        $result = myQuery($insert_into_stoc_operatiuni);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getFise($opt = array())
    {
        $an = isset($opt['an']) ? $opt['an'] : 0;
        $depozit_id = isset($opt['depozit_id']) ? $opt['depozit_id'] : 0;
        $luna_id = isset($opt['luna_id']) ? $opt['luna_id'] : 0;
        $traseu_id = isset($opt['traseu_id']) ? $opt['traseu_id'] : 0;
        $sofer_id = isset($opt['sofer_id']) ? $opt['sofer_id'] : 0;
        $masina_id = isset($opt['masina_id']) ? $opt['masina_id'] : 0;

        if ($an == 0) {
            $an = date('Y');
        }

        $ret = array();
        $query = "SELECT a .id, a.data_intrare, b . nume as nume_depozit, c . numar as numar_masina, d . nume as nume_sofer, e . nume as nume_traseu 
                  from fise_generate as a
                  left join depozite as b on a . depozit_id = b . id
                  left join masini as c on a . masina_id = c . id
                  left join soferi as d on a . sofer_id = d . id
                  left join trasee as e on a . traseu_id = e . id
                  where a.sters = 0
                  
                  ";

        if ($depozit_id > 0) {
            $query .= " and a.depozit_id = " . $depozit_id;
        }

        if ($traseu_id > 0) {
            $query .= " and a.traseu_id = " . $traseu_id;
        }

        if ($sofer_id > 0) {
            $query .= " and a.sofer_id = " . $sofer_id;
        }

        if ($masina_id > 0) {
            $query .= " and a.masina_id = " . $masina_id;
        }

        if ($luna_id > 0) {
            if ($luna_id < 10) {
                $luna_id = '0' . $luna_id;
            }
            $query .= " AND a.data_intrare LIKE '%-" . $luna_id . "-%'";
        }

        if ($an > 0) {
            $query .= " AND a.data_intrare LIKE '%" . $an . "%'";
        }

        $query .= " ORDER BY a.data_intrare DESC";
        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'id' => $item['id'],
                    'nume_depozit' => $item['nume_depozit'],
                    'nume_traseu' => $item['nume_traseu'],
                    'nume_sofer' => $item['nume_sofer'],
                    'numar_masina' => $item['numar_masina'],
                    'data_intrare' => $item['data_intrare'],
                    'incarcatura_masina_plecare' => Stocuri::getIncarcaturaMasinaPlecareByFisaId($item['id']),
                    'incarcatura_masina_sosire' => Stocuri::getIncarcaturaMasinaSosireByFisaId($item['id']),
                    'km_fisa' => self::getKmByFisaId($item['id']),
                    'total_cantitati' => Fise::getTotalCantitatiByFisaId($item['id']),
                );

                array_push($ret, $r);
            }
        }

        return $ret;

    }

    public static function getFisaGenerataById($id, $opt = array())
    {
        $ret = array();
        $query = "SELECT a.id, a.depozit_id, a.traseu_id, a.data_intrare, a.consum_sosire,
                  a.consum_plecare, b.nume as nume_depozit,a.sofer_id,a.masina_id,
                  c.nume as nume_traseu, d.nume as nume_sofer, e.numar
                  from fise_generate as a
                  left join depozite as b on a.depozit_id = b.id
                  left join trasee as c on a.traseu_id = c.id
                  left join soferi as d on a.sofer_id = d.id
                  left join masini as e on a.masina_id = e.id
                  where a.id = '" . $id . "'
                  ";


        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
            $ret['grand_vandute_bg'] = 0;
            $ret['grand_vandute_ar_8'] = 0;
            $ret['grand_vandute_ar_9'] = 0;

            $ret['grand_vandute_bg_extra'] = 0;
            $ret['grand_vandute_ar_8_extra'] = 0;
            $ret['grand_vandute_ar_9_extra'] = 0;

            $ret['grand_valoare_bg'] = 0;
            $ret['grand_valoare_ar_8'] = 0;
            $ret['grand_valoare_ar_9'] = 0;

            $ret['grand_valoare_bg_extra'] = 0;
            $ret['grand_valoare_ar_8_extra'] = 0;
            $ret['grand_valoare_ar_9_extra'] = 0;

            $ret['grand_defecte_bg'] = 0;
            $ret['grand_defecte_ar_8'] = 0;
            $ret['grand_defecte_ar_9'] = 0;

            $ret['grand_comision_bg'] = 0;
            $ret['grand_comision_ar_8'] = 0;
            $ret['grand_comision_ar_9'] = 0;

            $ret['grand_defecte_bg'] = 0;
            $ret['grand_defecte_ar_8'] = 0;
            $ret['grand_defecte_ar_9'] = 0;

            $ret['incarcatura_masina_plecare'] = self::getPlecareMarfaByFisaId($id);
            $ret['incarcatura_masina_intoarcere'] = self::getIntoarcereCantitateMarfaByFisaId($id);
            $ret['clienti'] = Clienti::getAsignariClientiByFisaGenerataId($id, $opt = array());
            foreach ($ret['clienti'] as $num => $client) {
                $ret['clienti'][$num]['realizat'] = Stocuri::getRealizatClientByFisaId($id, $client['client_id']);
                $ret['clienti'][$num]['extra'] = Produse::GetProdusExtraByClientIdProdusIdAndFisaId($client['client_id'], $id);

                $ret['clienti'][$num]['total_vandute_bg'] = 0;
                $ret['clienti'][$num]['total_vandute_bg_extra'] = $ret['clienti'][$num]['extra'][1]['cantitate_extra'];
                $ret['clienti'][$num]['total_defecte_bg'] = 0;
                $ret['clienti'][$num]['total_valoare_bg'] = 0;
                $ret['clienti'][$num]['total_valoare_bg_extra'] = ($ret['clienti'][$num]['extra'][1]['cantitate_extra'] * $ret['clienti'][$num]['extra'][1]['pret_extra']) ;

                $ret['clienti'][$num]['total_vandute_ar_8'] = 0;
                $ret['clienti'][$num]['total_vandute_ar_8_extra'] = $ret['clienti'][$num]['extra'][3]['cantitate_extra'];
                $ret['clienti'][$num]['total_defecte_ar_8'] = 0;
                $ret['clienti'][$num]['total_valoare_ar_8'] = 0;
                $ret['clienti'][$num]['total_valoare_ar_8_extra'] = ($ret['clienti'][$num]['extra'][3]['cantitate_extra'] * $ret['clienti'][$num]['extra'][3]['pret_extra']);

                $ret['clienti'][$num]['total_vandute_ar_9'] = 0;
                $ret['clienti'][$num]['total_vandute_ar_9_extra'] = $ret['clienti'][$num]['extra'][4]['cantitate_extra'];
                $ret['clienti'][$num]['total_defecte_ar_9'] = 0;
                $ret['clienti'][$num]['total_valoare_ar_9'] = 0;
                $ret['clienti'][$num]['total_valoare_ar_9_extra'] = ($ret['clienti'][$num]['extra'][4]['cantitate_extra'] * $ret['clienti'][$num]['extra'][4]['pret_extra']);

                $ret['grand_vandute_bg_extra'] += $ret['clienti'][$num]['total_vandute_bg_extra'];
                $ret['grand_vandute_ar_8_extra'] +=  $ret['clienti'][$num]['total_vandute_ar_8_extra'];
                $ret['grand_vandute_ar_9_extra'] +=  $ret['clienti'][$num]['total_vandute_ar_9_extra'];


                $ret['grand_valoare_bg_extra'] +=$ret['clienti'][$num]['total_valoare_bg_extra'];
                $ret['grand_valoare_ar_8_extra'] +=$ret['clienti'][$num]['total_valoare_ar_8_extra'];
                $ret['grand_valoare_ar_9_extra'] +=$ret['clienti'][$num]['total_valoare_ar_9_extra'];

                foreach ($ret['clienti'][$num]['realizat'] as $item_realizat) {
//                    Total per client
                    if ($item_realizat['tip_produs_id'] == 1) {
                        $ret['clienti'][$num]['total_vandute_bg'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['total_valoare_bg'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['total_defecte_bg'] += $item_realizat['defecte'];

                    } elseif ($item_realizat['tip_produs_id'] == 3) {
                        $ret['clienti'][$num]['total_vandute_ar_8'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['total_valoare_ar_8'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['total_defecte_ar_8'] += $item_realizat['defecte'];

                    } elseif ($item_realizat['tip_produs_id'] == 4) {
                        $ret['clienti'][$num]['total_vandute_ar_9'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['total_valoare_ar_9'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['total_defecte_ar_9'] += $item_realizat['defecte'];
                        $ret['clienti'][$num]['total_vandute_ar_9_extra'] += $item_realizat['extra']['cantitate_extra'];

                    }

//                    Grand total
                    if ($item_realizat['tip_produs_id'] == 1) {
                        $ret['grand_total_vandute_bg'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_bg'] += $ret['clienti'][$num]['total_valoare_bg'];
                        $ret['grand_defecte_bg'] += $item_realizat['defecte'];
                        $ret['grand_comision_bg'] += $item_realizat['cantitate'] * $item_realizat['comision'];

                    } elseif ($item_realizat['tip_produs_id'] == 3) {
                        $ret['grand_total_vandute_ar_8'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_ar_8'] += $ret['clienti'][$num]['total_valoare_ar_8'];
                        $ret['grand_defecte_ar_8'] += $item_realizat['defecte'];
                        $ret['grand_comision_ar_8'] += $item_realizat['cantitate'] * $item_realizat['comision'];


                    } elseif ($item_realizat['tip_produs_id'] == 4) {
                        $ret['grand_total_vandute_ar_9'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_ar_9'] += $ret['clienti'][$num]['total_valoare_ar_9'];
                        $ret['grand_defecte_ar_9'] += $item_realizat['defecte'];
                        $ret['grand_comision_ar_9'] += $item_realizat['cantitate'] * $item_realizat['comision'];

                    }
                }
            }
        }

        return $ret;
    }

    public static function getFisaGenerataByIdPrintFisaTraseu($id, $opt = array())
    {
        $ret = array();
        $query = "SELECT a.id, a.depozit_id, a.traseu_id,a.data_intrare, 
                  b.nume as nume_depozit,a.sofer_id,a.masina_id,
                  c.nume as nume_traseu, d.nume as nume_sofer, e.numar
                  from fise_generate as a
                  left join depozite as b on a.depozit_id = b.id
                  left join trasee as c on a.traseu_id = c.id
                  left join soferi as d on a.sofer_id = d.id
                  left join masini as e on a.masina_id = e.id
                  where a.id = '" . $id . "'
                  ";


        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
            $ret['grand_vandute_bg'] = 0;
            $ret['grand_vandute_ar_8'] = 0;
            $ret['grand_vandute_ar_9'] = 0;

            $ret['grand_vandute_bg_extra'] = 0;
            $ret['grand_vandute_ar_8_extra'] = 0;
            $ret['grand_vandute_ar_9_extra'] = 0;

            $ret['grand_valoare_bg'] = 0;
            $ret['grand_valoare_ar_8'] = 0;
            $ret['grand_valoare_ar_9'] = 0;

            $ret['grand_valoare_bg_extra'] = 0;
            $ret['grand_valoare_ar_8_extra'] = 0;
            $ret['grand_valoare_ar_9_extra'] = 0;

            $ret['grand_defecte_bg'] = 0;
            $ret['grand_defecte_ar_8'] = 0;
            $ret['grand_defecte_ar_9'] = 0;

            $ret['grand_comision_bg'] = 0;
            $ret['grand_comision_ar_8'] = 0;
            $ret['grand_comision_ar_9'] = 0;

            $ret['grand_defecte_bg'] = 0;
            $ret['grand_defecte_ar_8'] = 0;
            $ret['grand_defecte_ar_9'] = 0;

            $ret['clienti'] = Fise::getAsignariClientiByFisaGenerataIdPrintEditFisa($id, $opt = array());
            foreach ($ret['clienti'] as $num => $client) {
                $ret['clienti'][$num]['realizat'] = Stocuri::getRealizatClientByFisaId($id, $client['client_id']);
                $ret['clienti'][$num]['extra'] = Fise::GetProdusExtraByClientIdProdusIdAndFisaAnd($client['client_id'], $id);

                $ret['clienti'][$num]['vandute_bg'] = 0;
                $ret['clienti'][$num]['vandute_bg_extra'] = $ret['clienti'][$num]['extra'][1]['cantitate_extra'];
                $ret['clienti'][$num]['valoare_bg'] = 0;
                $ret['clienti'][$num]['valoare_bg_extra'] = $ret['clienti'][$num]['extra'][1]['cantitate_extra'] * $ret['clienti'][$num]['extra'][1]['pret_extra'];
                $ret['clienti'][$num]['defecte_bg'] = 0;

                $ret['clienti'][$num]['vandute_ar_8'] = 0;
                $ret['clienti'][$num]['vandute_ar_8_extra'] = $ret['clienti'][$num]['extra'][3]['cantitate_extra'];
                $ret['clienti'][$num]['valoare_ar_8'] = 0;
                $ret['clienti'][$num]['valoare_ar_8_extra'] = $ret['clienti'][$num]['extra'][3]['cantitate_extra'] * $ret['clienti'][$num]['extra'][3]['pret_extra'];
                $ret['clienti'][$num]['defecte_ar_8'] = 0;

                $ret['clienti'][$num]['vandute_ar_9'] = 0;
                $ret['clienti'][$num]['vandute_ar_9_extra'] = $ret['clienti'][$num]['extra'][4]['cantitate_extra'];
                $ret['clienti'][$num]['valoare_ar_9'] = 0;
                $ret['clienti'][$num]['valoare_ar_9_extra'] = $ret['clienti'][$num]['extra'][4]['cantitate_extra'] * $ret['clienti'][$num]['extra'][4]['pret_extra'];
                $ret['clienti'][$num]['defecte_ar_9'] = 0;

                $ret['grand_vandute_bg_extra'] += $ret['clienti'][$num]['vandute_bg_extra'];
                $ret['grand_vandute_ar_8_extra'] +=  $ret['clienti'][$num]['vandute_ar_8_extra'];
                $ret['grand_vandute_ar_9_extra'] +=  $ret['clienti'][$num]['vandute_ar_9_extra'];


                $ret['grand_valoare_bg_extra'] +=$ret['clienti'][$num]['valoare_bg_extra'];
                $ret['grand_valoare_ar_8_extra'] +=$ret['clienti'][$num]['valoare_ar_8_extra'];
                $ret['grand_valoare_ar_9_extra'] +=$ret['clienti'][$num]['valoare_ar_9_extra'];

                foreach ($ret['clienti'][$num]['realizat'] as $item_realizat) {
//                    Total per client
                    if ($item_realizat['tip_produs_id'] == 1) {
                        $ret['clienti'][$num]['vandute_bg'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['valoare_bg'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['defecte_bg'] += $item_realizat['defecte'];

                    } elseif ($item_realizat['tip_produs_id'] == 3) {
                        $ret['clienti'][$num]['vandute_ar_8'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['valoare_ar_8'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['defecte_ar_8'] += $item_realizat['defecte'];

                    } elseif ($item_realizat['tip_produs_id'] == 4) {
                        $ret['clienti'][$num]['vandute_ar_9'] += $item_realizat['cantitate'];
                        $ret['clienti'][$num]['valoare_ar_9'] += $item_realizat['cantitate'] * ($item_realizat['pret'] - $item_realizat['comision']);
                        $ret['clienti'][$num]['defecte_ar_9'] += $item_realizat['defecte'];

                    }

//                    Grand total
                    if ($item_realizat['tip_produs_id'] == 1) {
                        $ret['grand_vandute_bg'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_bg'] += $ret['clienti'][$num]['valoare_bg'];
                        $ret['grand_defecte_bg'] += $item_realizat['defecte'];
                        $ret['grand_comision_bg'] += $item_realizat['cantitate'] * $item_realizat['comision'];

                    } elseif ($item_realizat['tip_produs_id'] == 3) {
                        $ret['grand_vandute_ar_8'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_ar_8'] += $ret['clienti'][$num]['valoare_ar_8'];
                        $ret['grand_defecte_ar_8'] += $item_realizat['defecte'];
                        $ret['grand_comision_ar_8'] += $item_realizat['cantitate'] * $item_realizat['comision'];


                    } elseif ($item_realizat['tip_produs_id'] == 4) {
                        $ret['grand_vandute_ar_9'] += $item_realizat['cantitate'];
                        $ret['grand_valoare_ar_9'] += $ret['clienti'][$num]['valoare_ar_9'];
                        $ret['grand_defecte_ar_9'] += $item_realizat['defecte'];
                        $ret['grand_comision_ar_9'] += $item_realizat['cantitate'] * $item_realizat['comision'];
                    }
                }
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

    public static function getKmByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.fisa_id, a.km_parcursi              
                  from miscari_fise as a                 
                  where a.fisa_id = '" . $id . "'";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getStocByDepozitId($depozit_id)
    {
        $ret = array();
        $query = "SELECT
	     a.cantitate, 
	     b.id as id_produs,
	     c.nume as stare_produs,c.id as id_stare,
	     e.nume as nume_depozit,
	     d.tip as nume_produs
                  FROM
                  stoc AS a	
                  LEFT JOIN tip_produs AS b ON a.tip_produs_id = b.id 
                  LEFT JOIN stare_produs as c on a.stare_produs = c.id
                  LEFT JOIN tip_produs as d on a.tip_produs_id = d.id
                  LEFT JOIN depozite as e on a.depozit_id = e.id
                  WHERE depozit_id = '" . $depozit_id . "'
                  AND b.sters = 0";
        $result = myQuery($query);

        if ($result) {
            $items = $result->fetchAll(PDO::FETCH_ASSOC);
            $ret['id'] = $depozit_id;
            $ret['nume'] = $items[0]['nume_depozit'];
            $ret['totaluri'] = array(
                'pline' => 0,
                'goale' => 0,
                'defecte' => 0,
                'neconforme' => 0
            );
            $ret['content'] = array();
            foreach ($items as $item) {
                if (!isset($ret['content'][$item['id_produs']])) {
                    $ret['content'][$item['id_produs']] = array(
                        'id' => $item['id_produs'],
                        'nume' => $item['nume_produs'],
                        'pline' => 0,
                        'goale' => 0,
                        'defecte' => 0,
                        'neconforme' => 0,
                    );
                }

                if ($item['id_stare'] == 1) {
                    $ret['content'][$item['id_produs']]['pline'] += $item['cantitate'];
                    $ret['totaluri']['pline'] += $item['cantitate'];
                }

                if ($item['id_stare'] == 2) {
                    $ret['content'][$item['id_produs']]['goale'] += $item['cantitate'];
                    $ret['totaluri']['goale'] += $item['cantitate'];
                }

                if ($item['id_stare'] == 3) {
                    $ret['content'][$item['id_produs']]['defecte'] += $item['cantitate'];
                    $ret['totaluri']['defecte'] += $item['cantitate'];

                }
                if ($item['id_stare'] == 4) {
                    $ret['content'][$item['id_produs']]['neconforme'] += $item['cantitate'];
                    $ret['totaluri']['neconforme'] += $item['cantitate'];

                }
            }
        }
        return $ret;
    }

    public static function getStoc($opt = array())
    {
        $depozit_id = isset($opt['depozit_id']) ? $opt['depozit_id'] : 0;
        $luna_id = isset($opt['luna_id']) ? $opt['luna_id'] : 0;

        $ret = array();
        $query = "SELECT a .*
                  from 
                  depozite as a                
                  where 1 = 1
                  ";

        if ($depozit_id > 0) {
            $query .= " and depozit_id = " . $depozit_id;
        }

        if ($luna_id > 0) {
            if ($luna_id < 10) {
                $luna_id = '0' . $luna_id;
            }
            $query .= " and data_intrare LIKE '%-" . $luna_id . "-%'";
        }

        $result = myQuery($query);
        if ($result) {
            $ret['totaluri'] = array(
                'pline' => 0,
                'goale' => 0,
                'defecte' => 0,
                'neconforme' => 0
            );
            $ret['depozite'] = array();
            $items = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($items as $item) {
                $ret['depozite'][$item['id']] = self::getStocByDepozitId($item['id']);
            }
        }
        return $ret;
    }

    public static function getLunileAnului()
    {
        $ret = array();
        $query = "SELECT * FROM lunile_anului";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

}



//Trebuie verificata functia asta ca intoarce mai mult de 1 row => am facut una noua
//    public static function getIntoarcereMarfaByFisaId($id)
//    {
//        $ret = array();
//        $query = "SELECT
//                        a.tip_produs_id,
//                        a.fisa_id,
//                        b.tip AS nume_produs,
//                        ( SELECT cantitate FROM fisa_total_plecare WHERE tip_produs_id = a.tip_produs_id AND fisa_id = a.fisa_id AND stare_produs = 1 AND sters = 0) AS pline_plecare,
//                        ( SELECT cantitate FROM fisa_total_intoarcere WHERE tip_produs_id = a.tip_produs_id AND fisa_id = a.fisa_id AND stare_produs = 1 ) AS pline_intoarcere,
//                        ( SELECT cantitate FROM fisa_total_intoarcere WHERE tip_produs_id = a.tip_produs_id AND fisa_id = a.fisa_id AND stare_produs = 3 ) AS defecte_intoarcere
//                    FROM fisa_total_intoarcere AS a
//                        LEFT JOIN tip_produs AS b ON a.tip_produs_id = b.id
//                    WHERE a.fisa_id = '" . $id . "'
//                    and a.sters = 0
//                    GROUP BY a.tip_produs_id
//                        ";
//
//        $result = myQuery($query);
//
//        if ($result) {
//            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
//        }
//        return $ret;
//    }


//    public static function getPlecareMarfaByFisaIdAndprodusId($id, $tip_produs_id)
//    {
//        $ret = array();
//        $query = "SELECT a.fisa_id, a.tip_produs_id, a.cantitate, a.stare_produs, b.tip as nume_produs
//                  FROM fisa_total_plecare as a
//                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
//                  WHERE a.fisa_id = '" . $id . "'
//                  AND a.tip_produs_id = '" . $tip_produs_id . "'
//                  AND a.sters = 0
//                  ORDER BY b.id ASC
//                 ";
//
//        $result = myQuery($query);
//
//        if ($result) {
//            $ret['marfa_plecare'] = array();
//            $a = $result->fetchAll(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                if (!isset($ret['marfa_plecare'][$item['tip_produs_id']])) {
//                    $ret['marfa_plecare'][$item['tip_produs_id']] = array(
//                        'pline' => 0,
//                    );
//                }
//                    $ret['marfa_plecare'][$item['tip_produs_id']]['pline'] += $item['cantitate'];
//            }
//        }
//        return $ret;
//    }