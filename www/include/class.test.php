<?php

class Test
{
    public static function getInfoProdusPentruRaportLivrariByClientAndProdus($client_id = 0, $tip_produs_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.tip_produs_id, a.target, a.pret as pret_contract, a.comision, a.client  
        FROM clienti_target as a
        WHERE a . client_id = '" . $client_id . "'
        AND a . tip_produs_id = '" . $tip_produs_id . "'
        AND a . sters = 0       
        ORDER BY a.tip_produs_id ASC
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                $ret[$item['tip_produs_id']] = $item;
//            }
        }
        return $ret;
    }

    public static function getTotalCantitatiDinFiseByProdusId($client_id, $traseu_id, $tip_produs_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : date('Y-m-01');
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : date('Y-m-t');

        $target_by_client_id = "SELECT SUM(a.cantitate) as total_cantitate, SUM(a.cantitate * a.pret) as total_valoare, 
                                a.pret_contract as pret_contract_client, a.comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE a.client_id = '" . $client_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND a.tip_produs_id = '" . $tip_produs_id . "'                                 
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getProduseVanduteByTraseuId($traseu_id, $opts = array())
    {
        $data_start = isset($opt['data_start']) ? $opts['data_start'] : date('Y-m-01');
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : date('Y-m-t');

        $ret = array();

        $query = "SELECT * from (SELECT DISTINCT (tip_produs_id) AS tip_produs_id, c.tip AS nume_produs, a.client_id
                  FROM detalii_fisa_extra_intoarcere_produse AS a
                  LEFT JOIN tip_produs AS c ON a.tip_produs_id = c.id
                  LEFT JOIN fise_generate as e on a.fisa_id = e.id
                  WHERE e.traseu_id = '" . $traseu_id . "'
                  AND e.data_intrare >='" . $data_start . "'
                  AND e.data_intrare <='" . $data_stop . "'
                  AND a.sters = 0
                  AND a.cantitate > 0
                  UNION ALL
                  SELECT tip_produs_id AS tip_produs_id,
                  d.tip AS nume_produs, b.client_id
                  FROM detalii_fisa_intoarcere_produse AS b
                  LEFT JOIN tip_produs AS d ON b.tip_produs_id = d.id
                  LEFT JOIN fise_generate as e on b.fisa_id = e.id
                  WHERE e.traseu_id = '" . $traseu_id . "'
                  AND e.data_intrare >='" . $data_start . "'
                  AND e.data_intrare <='" . $data_stop . "'
                  AND b.sters = 0
                  AND b.cantitate > 0
                  ORDER BY tip_produs_id ASC) as test
                  GROUP BY test.tip_produs_id";


        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = array(
                    'nume_produs' => $item['nume_produs'],
                    'client_id' => $item['client_id'],
                    'target' => self::getInfoProdusPentruRaportLivrariByClientAndProdus($item['client_id'], $item['tip_produs_id']),
//                    'cantitati_vandute' => self::getTotalCantitatiDinFiseByProdusId($item['client_id'], $traseu_id, $item['tip_produs_id'])
                );
            }

        }
        return $ret;
    }

    public static function getRaportLivrariClienti($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : date('Y-m-01');
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : date('Y-m-t');


        $ret = array(
            'livrare_clienti' => array()
        );

        $query = "SELECT  d.nume as nume_localitate, a.client_id, c.nume as nume_client,c.telefon, c.telefon_2 
                  FROM clienti_asignati_fise_generate as a
                  LEFT JOIN fise_generate as b on a.fisa_generata_id = b.id
                  LEFT JOIN clienti as c on a.client_id = c.id
                  LEFT JOIN localitati as d on c.localitate_id = d.id
                  LEFT JOIN ordine_clienti as e on a.client_id = e.client_id
                  WHERE b.traseu_id = '" . $traseu_id . "'
                  AND b.data_intrare >= '" . $data_start . "'
                  AND b.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.client_id
                  ORDER BY e.ordine ASC              
                    ";

        $result = myQuery($query);
        $ret['produse_traseu'] = self::getProduseVanduteByTraseuId($traseu_id, array(
            'data_start' => $data_start,
            'data_stop' => $data_stop
        ));
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'client_id' => $item['client_id'],
                    'nume_client' => $item['nume_client'],
                    'nume_localitate' => $item['nume_localitate'],
                    'telefon' => $item['telefon'],
                    'telefon_2' => $item['telefon_2'],
//                    'detalii_produse_client' => self::getProduseVanduteByTraseuId($traseu_id, array(
//                        'data_start' => $data_start,
//                        'data_stop' => $data_stop
//                    )),
//                    'target' => Target::getTargetClientPentruRaportLivrari($item['client_id'])
//                    'total_produse' => array(
//                        'bg_11' => Clienti::getTotalCantitatiBGDinFise($item['client_id'], $traseu_id, array(
//                            'data_start' => $data_start,
//                            'data_stop' => $data_stop
//                        )),
//                        'ar_8' => Clienti::getTotalCantitatiAr8DinFise($item['client_id'], $traseu_id, array(
//                            'data_start' => $data_start,
//                            'data_stop' => $data_stop
//                        )),
//                        'ar_9' => Clienti::getTotalCantitatiAr9DinFise($item['client_id'], $traseu_id, array(
//                            'data_start' => $data_start,
//                            'data_stop' => $data_stop
//                        )),
//                    ),
//                    'lista_preturi_bg_11' => Clienti::getPreturiBG11CuComisionByClientId($item['client_id'], $traseu_id, array(
//                        'data_start' => $data_start,
//                        'data_stop' => $data_stop
//                    )),
//                    'lista_preturi_ar_9' => Clienti::getPreturiAR9CuComisionByClientId($item['client_id'], $traseu_id, array(
//                        'data_start' => $data_start,
//                        'data_stop' => $data_stop
//                    )),
//                    'lista_preturi_ar_8' => Clienti::getPreturiAR8CuComisionByClientId($item['client_id'], $traseu_id, array(
//                        'data_start' => $data_start,
//                        'data_stop' => $data_stop
//                    ))
                );

                array_push($ret['livrare_clienti'], $r);

            }
        }
        return $ret;
    }

    public static function getCantitatiProduseFisaSosireByClientId($client_id)
    {
        $ret = array();

        $query = "SELECT a.*, b.tip as nume_produs, c.nume as observatii_client, e.numar, f.nume as nume_sofer
                  from detalii_fisa_intoarcere_produse as a
                  left join tip_produs as b on a.tip_produs_id = b.id
                  left join observatii as c on a.observatii = c.id
                  left join detalii_fisa_intoarcere as d on a.raport_detalii_id = d.id
                  left join masini as e on d.masina_id =e.id 
                  left join soferi as f on d.sofer_id =f.id 
                  where a.client_id = '" . $client_id . "'
                  ORDER BY a.data_intrare DESC";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function moveDown($traseu_id, $client_id)
    {
        $ret = array();

        $sql = "SELECT * from asignari_clienti_trasee where traseu_id = '" . $traseu_id . "' and sters = 0 ORDER BY ordine ASC";
        $result = myQuery($sql);

        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
            $pos = -1;
            $i = 0;
            foreach ($tmp as $item) {
                if ($item['client_id'] == $client_id) {
                    $pos = $i;
                }
                $i++;
            }

            if ($pos == -1 || $pos + 1 >= count($tmp)) {
                return false;
            }

            $i = 0;
            foreach ($tmp as $item) {
                if ($i < $pos || $i > $pos + 1) {
                    $ret[$i] = $item;
                }
                $i++;
            }

            $ret[$pos] = $tmp[$pos + 1];
            $ret[$pos + 1] = $tmp[$pos];

            $update = "UPDATE asignari_clienti_trasee set ordine = '" . $ret[$pos]['ordine'] . "' where id = '" . $ret[$pos + 1]['id'] . "'";
            myExec($update);

            $update = "UPDATE asignari_clienti_trasee set ordine = '" . $ret[$pos + 1]['ordine'] . "' where id = '" . $ret[$pos]['id'] . "'";
            myExec($update);

        }
        return true;

    }


    public static function moveUp($traseu_id, $client_id)
    {
        $ret = array();

        $sql = "SELECT * from asignari_clienti_trasee where traseu_id = '" . $traseu_id . "' and sters = 0 ORDER BY ordine ASC";
        $result = myQuery($sql);

        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
            $pos = -1;
            $i = 0;
            foreach ($tmp as $item) {
                if ($item['client_id'] == $client_id) {
                    $pos = $i;
                }
                $i++;
            }

            if ($pos <= 0) {
                return false;
            }

            $i = 0;
            foreach ($tmp as $item) {
                if ($i < $pos - 1 || $i > $pos) {
                    $ret[$i] = $item;
                }
                $i++;
            }

            $ret[$pos] = $tmp[$pos - 1];
            $ret[$pos - 1] = $tmp[$pos];

            $update = "UPDATE asignari_clienti_trasee set ordine = '" . $ret[$pos]['ordine'] . "' where id = '" . $ret[$pos - 1]['id'] . "'";
            myExec($update);

            $update = "UPDATE asignari_clienti_trasee set ordine = '" . $ret[$pos - 1]['ordine'] . "' where id = '" . $ret[$pos]['id'] . "'";
            myExec($update);

        }

        return true;

    }

    public static function getClienti($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $localitate_id = isset($opts['localitate_id']) ? $opts['localitate_id'] : 0;
        $zona_id = isset($opts['zona_id']) ? $opts['zona_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;
        $observatie_id = isset($opts['observatie_id']) ? $opts['observatie_id'] : 0;

        $ret = array();

        $query = "SELECT
        a.*, b.nume as nume_stare,c.nume as nume_judet, d.nume as nume_localitate, e.nume as culoare
        FROM clienti as a   
        left join clienti_stari as b on a.stare_id = b.id
        left join judete as c on a.judet_id = c.id
        left join localitati as d on a.localitate_id = d.id 
        left join culori_butelii as e on a.culoare_id = e.id
		where a.sters = 0
		";

        if ($localitate_id > 0) {
            $query .= " and a.localitate_id= " . $localitate_id;
        }

        if ($stare_id > 0) {
            $query .= " and a.stare_id = " . $stare_id;
        }

        if ($zona_id > 0) {
            $query .= " and a.judet_id = " . $zona_id;
        }

        $query .= " order by a.nume ASC";

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($tmp as $client) {
                $client['traseu'] = Trasee::getTraseuByClientId($client['id']);
                $client['depozit'] = Depozite::getDepozitByClientId($client['id']);
                $client['target'] = Target::getTargetClient($client['id']);
                $client['istoric_suna_traseu'] = Target::getIstoricSunaClient(array(
                    'client_id' => $client['id'],
                    'data_start' => $data_start,
                    'data_stop' => $data_stop,
                    'observatie_id' => $observatie_id
                ));
//                $client['istoric_suna_traseu'] = Target::getIstoricSunaClient($client['id'], $data_start,$data_stop);
                $client['observatii_client'] = self::getObsByClientById($client['id']);
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);

                // filtrare...
                $ok = true;
                if ($traseu_id > 0) {
                    $ok = false;
                    if ($client['traseu'] and $client['traseu']['id'] == $traseu_id) {
                        $ok = true;
                    }
                }

                if ($depozit_id > 0) {
                    $ok = false;
                    if ($client['depozit'] and $client['depozit']['id'] == $depozit_id) {
                        $ok = true;
                    }
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;
    }

    public static function getClientiTest($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $localitate_id = isset($opts['localitate_id']) ? $opts['localitate_id'] : 0;
        $zona_id = isset($opts['zona_id']) ? $opts['zona_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        $ret = array();

        $query = "SELECT
        a.*, b.nume as nume_stare,c.nume as nume_judet, d.nume as nume_localitate, e.nume as culoare
        FROM clienti as a   
        left join clienti_stari as b on a.stare_id = b.id
        left join judete as c on a.judet_id = c.id
        left join localitati as d on a.localitate_id = d.id 
        left join culori_butelii as e on a.culoare_id = e.id
		where a.sters = 0
		and a.id = 2456
		";

        if ($localitate_id > 0) {
            $query .= " and a.localitate_id= " . $localitate_id;
        }

        if ($stare_id > 0) {
            $query .= " and a.stare_id = " . $stare_id;
        }

        if ($zona_id > 0) {
            $query .= " and a.judet_id = " . $zona_id;
        }

        $query .= " order by a.nume ASC";

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($tmp as $client) {
                $client['traseu'] = Trasee::getTraseuByClientId($client['id']);
                $client['depozit'] = Depozite::getDepozitByClientId($client['id']);
                $client['target'] = Target::getTargetClient($client['id']);
                $client['istoric_suna_traseu'] = Target::getIstoricSunaClient($client['id'], $data_start, $data_stop);
                $client['observatii_client'] = self::getObsByClientById($client['id']);
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);

                // filtrare...
                $ok = true;
                if ($traseu_id > 0) {
                    $ok = false;
                    if ($client['traseu'] and $client['traseu']['id'] == $traseu_id) {
                        $ok = true;
                    }
                }

                if ($depozit_id > 0) {
                    $ok = false;
                    if ($client['depozit'] and $client['depozit']['id'] == $depozit_id) {
                        $ok = true;
                    }
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;
    }

    public static function getRaportCompletSunaTraseu($opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        $ret = array();

        $query = "SELECT b.nume as nume_client
                  FROM suna_traseu as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN trasee as  c on a.traseu_id = c.id
                  LEFT JOIN tip_produs as d on a.tip_produs_id = d.id
                  where a.sters = 0
                  ";

        if ($stare_id > 0) {
            $query .= " and a.stare_id = " . $stare_id;
        }

        $query .= "order by b.nume ASC";

        $result = myQuery($query);

        if ($result) {
            $tmp = $result->fetch(PDO::FETCH_ASSOC);

            foreach ($tmp as $client) {
//                $client['traseu'] = Trasee::getTraseuByClientId($client['client_id']);
//                $client['target'] = Target::getTargetClient($client['id']);
//                $client['istoric_suna_traseu'] = Target::getIstoricSunaClient($client['id'],$data_start,$data_stop);
//                $client['observatii_client'] = self::getObsByClientById($client['id']);
//                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);

                // filtrare...
                $ok = true;
                if ($traseu_id > 0) {
                    $ok = false;
                    if ($client['traseu'] and $client['traseu']['id'] == $traseu_id) {
                        $ok = true;
                    }
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;
    }


    public static function getAsignariClientiByFisaGenerataId($fisa_id)
    {
        $ret = array();
        $query = "SELECT a.* , b.nume as nume_client, c.nume as nume_localitate,b.rastel,d.nume as culoare
                  from clienti_asignati_fise_generate as a
                  left join clienti as b on a.client_id = b.id
                  left join localitati as c on b.localitate_id = c.id
                  left join culori_butelii as d on b.culoare_id = d.id
                  where fisa_generata_id = '" . $fisa_id . "'
                  and a.sters = 0
                  ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['target'] = Target::getTargetByClientId($item['client_id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }

    public static function getClientById($id = 0)
    {
        $ret = array();
        $query = "SELECT * FROM clienti WHERE id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignariTraseeByDepozitId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_traseu, c.nume as nume_depozit 
        FROM asignari_trasee_depozite as a  
        left join trasee as b on a.traseu_id = b.id
        left join depozite as c on a.depozit_id = c.id
        where depozit_id = '" . $id . "'
        and a.sters = 0
        ORDER BY traseu_id ASC
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignariById($id)
    {
        $ret = array();
        $query = "SELECT * FROM asignari_trasee_depozite
        where id = '" . $id . "'
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getStariClienti()
    {
        $ret = array();
        $query = "SELECT * from clienti_stari";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTipObservatiiClienti()
    {
        $ret = array();
        $query = "SELECT * from tip_observatii where sters = 0";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatiiClienti()
    {
        $ret = array();
        $query = "SELECT a.* , b.tip 
                  from observatii as a
                  left join tip_observatii as b on a.tip_observatie = b.id
                  where a.sters = 0";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatieById($id = 0)
    {
        $ret = array();
        $query = "SELECT * FROM observatii WHERE id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatieLaClientById($id = 0)
    {
        $ret = array();
        $query = "SELECT * FROM observatii_client WHERE id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatiiByClientById($client_id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_user from observatii_client as a
                  left join users as b on a.user_id = b.id
                  where a.client_id = '" . $client_id . "' 
                  and a.sters = 0";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObsByClientById($client_id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_user from observatii_client as a
                  left join users as b on a.user_id = b.id
                  where a.client_id = '" . $client_id . "' 
                  and a.sters = 0
                  Order by a.id DESC
                  LIMIT 1
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatieByClientByIdAndObservatieId($client_id, $observatie_id)
    {
        $ret = array();
        $query = "select * from suna_traseu 
                  where client_id = '" . $client_id . "'
                  and observatie_id = '" . $observatie_id . "'
                  and sters = 0
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatieByClientId($client_id = 0, $tip_produs_id = 0)
    {
        $ret = array();
        $query = "SELECT observatie_id FROM suna_traseu
                  WHERE client_id = '" . $client_id . "'
                  AND tip_produs_id = '" . $tip_produs_id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                array_push($ret, $item['observatie_id']);
            }
        }
        return $ret;
    }

    public static function getUrgentaSunaTraseuByClientId($client_id = 0, $tip_produs_id = 0)
    {
        $ret = array();
        $query = "SELECT urgent FROM suna_traseu
                  WHERE client_id = '" . $client_id . "'
                  AND tip_produs_id = '" . $tip_produs_id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                array_push($ret, $item['urgent']);
            }
        }
        return $ret;
    }

    public static function getAsignariClientiByCuloare($culoare_id)
    {
        $ret = array();
        $query = "select a.* 
                 from clienti as a
                 where a.sters = 0
                 and culoare_id = '" . $culoare_id . "'";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getInfoClientByClientId($client_id)
    {
        $ret = array();
        $query = "select a.* 
                 from clienti as a
                 where a.id = '" . $client_id . "'
                 and a.sters = 0 LIMIT 1";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getApelTraseu2($opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

        $ret = array();

        $query = "SELECT b.id, a.traseu_id, b.nume as nume_client, b.telefon, b.telefon_2, c.nume as nume_localitate from 
                asignari_clienti_trasee as a
                left join clienti as b on a.client_id = b.id
                left join localitati as c on b.localitate_id = c.id
                where traseu_id = '" . $traseu_id . "'
                and a.sters = 0";

        if ($stare_id > 0) {
            $query .= " and b.stare_id = " . $stare_id;
        }

        $query .= " order by a.ordine ASC";

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $client) {
                $client['target'] = Test::getProduseByClientId($client['id']);
                array_push($ret, $client);
            }
        }
//            foreach ($tmp as $produse) {
//                $produse['produse_traseu'] = Clienti::getProduseGoaleDinApeluriByClientId($produse['id'], $produse['traseu_id']);
//                array_push($ret, $produse);
//            }
        return $ret;
    }

    public static function getProduseByClientId($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.*, c . tip as nume_produs,
        a.target    
        from clienti_target as a
        left join clienti as b on b . id = a . client_id
        left join tip_produs as c on c . id = a . tip_produs_id
        where a . client_id = '" . $client_id . "'
        and a . sters = 0
        and c . sters = 0
        order by a.tip_produs_id ASC
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getApelTraseu3($opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

        $ret = array();
        $query = "SELECT
        a.id, a.nume as nume_client, a.telefon, a.telefon_2, d.nume as nume_localitate
        FROM clienti as a   
        left join clienti_stari as b on a.stare_id = b.id
        left join localitati as d on a.localitate_id = d.id 
		where a.sters = 0
		";

        if ($stare_id > 0) {
            $query .= " and a.stare_id = " . $stare_id;
        }

        $query .= " order by d.nume ASC";
        $result = myQuery($query);

        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($tmp as $client) {
                $client['traseu'] = Trasee::getClientiTraseuByClientIdAndTraseuId($client['id'], $traseu_id);
                $client['target'] = Target::getTargetClient($client['id']);

                // filtrare...
                $ok = true;
                if ($traseu_id > 0) {
                    $ok = false;
                    if ($client['traseu'] and $client['traseu']['id'] == $traseu_id) {
                        $ok = true;
                    }
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;

    }


    public static function getFiseTest($opt = array())
    {
        $depozit_id = isset($opt['depozit_id']) ? $opt['depozit_id'] : 0;
        $luna_id = isset($opt['luna_id']) ? $opt['luna_id'] : 0;
        $traseu_id = isset($opt['traseu_id']) ? $opt['traseu_id'] : 0;
        $sofer_id = isset($opt['sofer_id']) ? $opt['sofer_id'] : 0;
        $masina_id = isset($opt['masina_id']) ? $opt['masina_id'] : 0;


        $ret = array();
        $query = "SELECT a .id,a.data_intrare, b . nume as nume_depozit, c . numar as numar_masina, d . nume as nume_sofer, e . nume as nume_traseu 
                  from fise_generate as a
                  left join depozite as b on a . depozit_id = b . id
                  left join masini as c on a . masina_id = c . id
                  left join soferi as d on a . sofer_id = d . id
                  left join trasee as e on a . traseu_id = e . id
                  where a.sters = 0
                  ";

//        if ($depozit_id > 0) {
//            $query .= " and a.depozit_id = " . $depozit_id;
//        }

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
            $query .= " and a.data_intrare LIKE '%-" . $luna_id . "-%'";
        }

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'id' => $item['id'],
                    'depozit' => $item['nume_depozit'],
                    'traseu' => $item['nume_traseu'],
                    'sofer' => $item['nume_sofer'],
                    'masina' => $item['numar_masina'],
                    'data_intrare' => $item['data_intrare'],
                    'incarcatura_masina_plecare' => Stocuri::getIncarcaturaMasinaPlecareByFisaId($item['id']),
                    'incarcatura_masina_sosire' => Stocuri::getIncarcaturaMasinaSosireByFisaId($item['id']),
                );

                array_push($ret, $r);
            }
        }

        return $ret;

    }

}

