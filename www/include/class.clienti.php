<?php

class Clienti
{
    public static function getCantitatiExtraByClientIdAndTraseuId($client_id, $traseu_id, $opts = array())
    {

        $an = isset($opts['an']) ? $opts['an'] : date('Y');
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : date('n');

        if ($perioada_id < 10) {
            $perioada_id = '0' . $perioada_id;
        }

        $ret = array();
        $query = "SELECT
                        SUM(a.cantitate) as cantitati_extra
                        FROM detalii_fisa_extra_intoarcere_produse as a
                        LEFT JOIN fise_generate as b on a.fisa_id = b.id
                        WHERE a.client_id = '" . $client_id . "'
                        AND a.stare_produs = 1
                        AND b.traseu_id = '" . $traseu_id . "'
                       AND b.data_intrare LIKE '" . $an . "-" . $perioada_id . "-%'
                       AND a.sters = 0
                       AND b.sters = 0
                       ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }

    public static function getCantitatiExtraByClientId($client_id, $opts = array())
    {

        $an = isset($opts['an']) ? $opts['an'] : 0;
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : 0;

        if ($perioada_id < 10) {
            $perioada_id = '0' . $perioada_id;
        }

        $ret = array();
        $query = "SELECT
                        SUM(a.cantitate) as cantitati_extra
                        FROM detalii_fisa_extra_intoarcere_produse as a
                        LEFT JOIN fise_generate as b on a.fisa_id = b.id
                        WHERE a.client_id = '" . $client_id . "'
                        AND a.stare_produs = 1                       
                        AND b.data_intrare LIKE '" . $an . "-" . $perioada_id . "-%'";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }

    public static function getOrdineByClientIdAndTraseuId($client_id, $traseu_id)
    {
        $ret = array();
        $query = "SELECT ordine from ordine_clienti
                WHERE client_id = '" . $client_id . "'
                AND traseu_id = '" . $traseu_id . "'
                AND sters = 0 
                  ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }

    public static function getNumeClientById($client_id)
    {
        $ret = array();
        $query = "SELECT nume from clienti
                WHERE id = '" . $client_id . "'
                AND sters = 0 
                  ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }


    public static function seteazaRandamentClienti($traseu_id)
    {
        $lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
        $to_add = array();

        foreach ($_POST as $key => $value) {
            if (preg_match('/^randament/', $key)) {
                $splits = explode("_", $key);
                $client_id = $splits[1];
                $traseu = $splits[2];

                if (!isset($to_add[$client_id])) {
                    $to_add[$client_id] = array();
                }

                if (!isset($to_add[$client_id][$traseu])) {
                    $to_add[$client_id][$traseu] = array(
                        'randament' => 0
                    );
                }
                $to_add[$client_id][$traseu][$splits[0]] = $value;
            }
        }

        $id_traseu = getRequestParameter('id_traseu', '');
        $id_perioada = getRequestParameter('id_perioada', '');
        $id_an = getRequestParameter('id_an', '');

        foreach ($lista_clienti as $client) {
            if (isset($to_add[$client['client_id']][$client['traseu_id']])) {
                $a = $to_add[$client['client_id']][$client['traseu_id']];
                $select_randament_clienti = "SELECT id from randament_clienti
                                          WHERE client_id = '" . $client['client_id'] . "' 
                                          AND traseu_id = '" . $client['traseu_id'] . "'
                                          AND an = '" . $id_an . "'
                                          AND perioada_id = '" . $id_perioada . "'
                                          LIMIT 1 ";

                $select_id_randament_clienti = myQuery($select_randament_clienti);
                $ret = $select_id_randament_clienti->fetch(PDO::FETCH_ASSOC);

                $suma_target = Target::getSumaTargetClient($client['client_id']);


                if ($select_id_randament_clienti->rowCount() == 1) {
                    $query = "UPDATE randament_clienti SET
                            randament  = '" . floatval($a['randament']) . "'
                            WHERE client_id = '" . $client['client_id'] . "'
                            AND traseu_id = '" . $client['traseu_id'] . "'
                            AND perioada_id = '" . $id_perioada . "'
                            AND an = '" . $id_an . "'                            
                            ";
                    myExec($query);
                } else {

                    $insert = "INSERT INTO randament_clienti (client_id, traseu_id, an, perioada_id, randament, suma_target) 
                          VALUES ('" . $client['client_id'] . "', '" . $client['traseu_id'] . "',
                          '" . $id_an . "','" . $id_perioada . "','" . floatval($a['randament']) . "','" . $suma_target['suma_target'] . "')";
                    myExec($insert);
                }

                header('Location: /randament_clienti.php?traseu_id=' . $id_traseu . '&an=' . $id_an . '&perioada_id=' . $id_perioada);
            }
        }
    }


    public static function getRandamentByClientIdDinFise($client_id, $opts = array())
    {

        $an = isset($opts['an']) ? $opts['an'] : date('Y');
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : date('n');

        if ($perioada_id < 10) {
            $perioada_id = '0' . $perioada_id;
        }

        $ret = array();

        $query = "SELECT
                    SUM( a.cantitate ) AS randament_client
                FROM
                    detalii_fisa_intoarcere_produse AS a 
                    LEFT JOIN fise_generate as b on a.fisa_id = b.id
                WHERE
                    a.client_id = '" . $client_id . "'
                    AND a.data_intrare LIKE '%" . $an . "%'
                    AND a.data_intrare LIKE '" . $an . "-" . $perioada_id . "-%'
                    AND b.sters = 0
                    AND a.sters = 0
                     ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }

    public static function getRandamentByClientIdDinRandamentClienti($client_id, $opts = array())
    {
        $an = isset($opts['an']) ? $opts['an'] : date('Y');
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : date('n');

        $ret = array();

        $query = "SELECT a.perioada_id as luna_randament, a.randament as randament_lunar
                    FROM randament_clienti as a
                    LEFT JOIN lunile_anului as b on a.perioada_id = b.id	
                    WHERE a.client_id = '" . $client_id . "'
                    AND a.an = '" . $an . "' 
                    AND a.perioada_id ='" . $perioada_id . "' 
                    ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getRandamentByClientIdDinRandamentClienti2($client_id, $opts = array())
    {

        $an = isset($opts['an']) ? $opts['an'] : date('Y');
        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : date('n');
        $ret = array();

        $query = "SELECT
                    SUM( a.randament ) AS randament_client 
                FROM
                    randament_clienti AS a                    
                WHERE
                    a.client_id = '" . $client_id . "'
                    AND a.an = '" . $an . "'
                     ";

        if ($perioada_id > 0) {
            $query .= " AND a.perioada_id = " . $perioada_id;
        }

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;

    }


    public static function getListaClientiByPret($pret, $depozit_id, $tip_produs_id)
    {
        $ret = array();
        $query = "SELECT d.id, d.nume as nume_client, e.nume as nume_localitate, a.pret, a.comision 
                  from clienti_target as  a
                  LEFT JOIN asignari_clienti_trasee as b on a.client_id = b.client_id
                  LEFT JOIN asignari_trasee_depozite as c on b.traseu_id = c.traseu_id
                  LEFT JOIN clienti as d on a.client_id = d.id
                  LEFT JOIN localitati as e on d.localitate_id = e.id
                  WHERE a.pret = '" . $pret . "'
                  AND c.depozit_id = '" . $depozit_id . "'
                  AND a.tip_produs_id = '" . $tip_produs_id . "'
                  AND a.sters = 0
                  AND d.stare_id =1
                  ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getFiseByClientId($client_id)
    {

        $ret = array();
        $query = "SELECT a. fisa_generata_id,a.client_id, d.nume as nume_traseu,e.numar, c.nume as nume_sofer, a.data_intrare 
                  FROM clienti_asignati_fise_generate as a
                  LEFT JOIN fise_generate as b on a.fisa_generata_id = b.id
                  LEFT JOIN soferi as c on b.sofer_id = c.id
                  LEFT JOIN trasee as d on d.id = b.traseu_id
                  LEFT JOIN masini as e on e.id = b.masina_id
                  WHERE a.client_id = '" . $client_id . "'
                  AND a.sters = 0
                  ORDER BY a.data_intrare DESC
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'fisa_id' => $item['fisa_generata_id'],
                    'nume_sofer' => $item['nume_sofer'],
                    'numar' => $item['numar'],
                    'nume_traseu' => $item['nume_traseu'],
                    'data_intrare' => $item['data_intrare'],
                    'observatie' => self::getObservatieClientiByClientIdAndFisaId($item['client_id'], $item['fisa_generata_id']),
                    'produse' => Stocuri::getCantitatiVanduteLaSosireByFisaIdAndClientId($item['fisa_generata_id'], $item['client_id'])
                );

                array_push($ret, $r);
            }
        }

        return $ret;

    }

    public static function getObservatieClientiByClientIdAndFisaId($client_id, $fisa_id)
    {
        $ret = array();
        $query = "SELECT
                  b.nume AS nume_observatie, e.nume as observatie_extra	
                  FROM
                  observatii_clienti_fisa_traseu AS a
                  LEFT JOIN observatii AS b ON a.observatie_id = b.id
                  LEFT JOIN observatii_secundare_fisa AS c ON a.observatie_id = c.parent_obs
                  LEFT JOIN observatii AS d ON c.second_obs = d.id 
                  LEFT JOIN observatii AS e ON a.second_obs = e.id
                  WHERE a.client_id = '" . $client_id . "' 
                  AND a.fisa_id = '" . $fisa_id . "' 
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function getApelTraseuNew($opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

        $ret = array(
            'duration' => 0,
            'list' => array()
        );

        $time_start = microtime(true);

        $query = "SELECT b.id, a.traseu_id, b.nume as nume_client,
                b.telefon, b.telefon_2, c.nume as nume_localitate, d.nume as culoare_butelii
                FROM asignari_clienti_trasee as a
                left join clienti as b on a.client_id = b.id
                left join localitati as c on b.localitate_id = c.id
                left join culori_butelii as d on b.culoare_id = d.id
                where traseu_id = '" . $traseu_id . "'
                and a.sters = 0
                AND b.stare_id !=2
                ";

        if ($stare_id > 0) {
            $query .= " and b.stare_id = " . $stare_id;
        }

        $query .= " order by a.ordine ASC";

        $result = myQuery($query);
        $ret ['total'] = array();
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $client) {
                $client['target'] = self::getProduseByClientId($client['id']);
                array_push($ret['list'], $client);
            }
        }

        $ret['duration'] = microtime(true) - $time_start;

        return $ret;
    }

    public static function getProduseByClientId($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.goale_la_client,a.tip_produs_id,a.target,a.client_id, c . tip as nume_produs,
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

    public static function getObservatiiApeluriByClientId($client_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;


        $ret = array();

        $query = "SELECT b.nume as nume_client,e.nume as nume_observatie, 
                if (a.urgent = 1, 'DA','NU')as urgent, d.tip as nume_produs, c.goale, a.data_start 
                from apeluri_clienti as a
                LEFT JOIN clienti as b on a.client_id = b.id
                LEFT JOIN apeluri_clienti_produse as c on a.id = c.apel_id
                LEFT JOIN tip_produs as d on c.tip_produs_id = d.id
                LEFT JOIN observatii as e on a.observatie_id = e.id
                where a.client_id = '" . $client_id . "'";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getObservatieByFisaAndByClientId($fisa_id, $client_id)
    {
        $ret = array();

        $query = "SELECT b.nume as nume_observatie
                        FROM
                            observatii_clienti_fisa_traseu AS a
                        LEFT JOIN observatii AS b ON a.observatie_id = b.id
                        WHERE a.client_id = '" . $client_id . "'
                        AND a.fisa_id = '" . $fisa_id . "'
                  ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getObservatiiClientiDinFiseGenerate($opts = array())
    {

        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $observatii = isset($opts['observatii']) ? $opts['observatii'] : array();

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-d');
        }

        $ret = array();

        $query = "SELECT a.traseu_id, a.fisa_id, a.`data`, b.nume as nume_client,b.telefon, 
                  b.telefon_2, c.nume as nume_observatie, d.nume as nume_localitate,
                  f.nume as nume_sofer, g.numar,i.nume as observatie_extra     
                  FROM observatii_clienti_fisa_traseu as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN observatii as c on a.observatie_id = c.id
                  LEFT JOIN localitati as d on b.localitate_id = d.id
                  LEFT JOIN fise_generate as e on a.fisa_id = e.id
                  LEFT JOIN soferi as f on e.sofer_id = f.id
                  LEFT JOIN masini as g on e.masina_id = g.id                     
                  LEFT JOIN observatii as i on a.second_obs = i.id               
                  WHERE a.data >= ('" . $data_start . "')
                  AND a.data <= ('" . $data_stop . "')
                  ";
        if ($traseu_id > 0) {
            $query .= " and a.traseu_id = " . $traseu_id;
        }

        if (count($observatii) > 0) {
            $query .= " and a.observatie_id IN (" . join(', ', $observatii) . ")";
        }

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getApeluri($opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $observatie_id = isset($opts['observatie_id']) ? $opts['observatie_id'] : 0;
        $urgent = isset($opts['urgent']) ? $opts['urgent'] : -1;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $ret = array();

        $query = "SELECT a.*, b.nume as nume_client, b.telefon, b.telefon_2, c.nume as nume_localitate, d.nume as nume_observatie
                  FROM apeluri_clienti as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN localitati as c on b.localitate_id = c.id
                  LEFT JOIN observatii as d on a.observatie_id = d.id
                  WHERE a.sters = 0 
                  and a.data_start >= ('" . $data_start . "')
                  and a.data_start <= ('" . $data_stop . "')    
                  ";

        if ($traseu_id > 0) {
            $query .= " and a.traseu_id = " . $traseu_id;
        }

        if ($stare_id > 0) {
            $query .= " and b.stare_id = " . $stare_id;
        }

        if ($observatie_id > 0) {
            $query .= " and a.observatie_id = " . $observatie_id;
        }

        if ($urgent > -1) {
            $query .= " and a.urgent = " . $urgent;
        }
        $query .= " ORDER BY b.nume ASC ";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'id' => $item['id'],
                    'client_id' => $item['client_id'],
                    'nume_client' => $item['nume_client'],
                    'telefon' => $item['telefon'],
                    'telefon_2' => $item['telefon_2'],
                    'localitate_id' => $item['localitate_id'],
                    'nume_localitate' => $item['nume_localitate'],
                    'traseu_id' => $item['traseu_id'],
                    'observatie_id' => $item['observatie_id'],
                    'nume_observatie' => $item['nume_observatie'],
                    'urgent' => $item['urgent'],
                    'data' => $item['data_start'],
                    'raspuns' => self::getRaspunsApel($item['id']),
                );
                array_push($ret, $r);
            }
        }

        return $ret;
    }

    public static function getRaspunsApel($apel_id, $opts = array())
    {

        $ret = array();

        $query = "SELECT
	                a.*, b.tip as nume_produs 
                    FROM
                        apeluri_clienti_produse AS a
                    LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                    WHERE
	                a.apel_id = '" . $apel_id . "'";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getCantitatiGoaleApeluriUrgente($client_id, $opts = array())
    {

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        $ret = array();

        $query = "SELECT c.tip as nume_produs, b.goale from apeluri_clienti as a
                LEFT JOIN apeluri_clienti_produse as b on a.id = b.apel_id
                LEFT JOIN tip_produs as c on b.tip_produs_id = c.id
                WHERE a.client_id = '" . $client_id . "'
                AND a.urgent = 1
                AND a.data_start = '" . $data_start . "'
                AND a.sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getProduseGoaleDinApeluriByClientId($client_id, $traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        $ret = array();

        $query = "SELECT a.client_id, b.tip_produs_id, b.goale, c.tip as nume_produs 
                  FROM apeluri_clienti as a
                  LEFT JOIN apeluri_clienti_produse as b on a.id = b.apel_id
                  LEFT JOIN tip_produs as c on b.tip_produs_id = c.id
                  WHERE a.client_id = '" . $client_id . "'
                  AND a.traseu_id = '" . $traseu_id . "'
                  and a.data_start = '" . $data_start . "'
                  ";

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

    public static function getClientiPentruAsignat($opts = array())
    {
        $stari = isset($opts['stari']) ? $opts['stari'] : array(1, 3);
        $ret = array();

        $filter_stari = count($stari) > 0 ? ' AND a.stare_id IN (' . join(', ', $stari) . ') ' : '';

        $query = "SELECT
        a.id, a.nume, d.nume as nume_localitate
        FROM clienti as a   
        LEFT JOIN localitati as d on a.localitate_id = d.id 
		WHERE a.sters = 0
		" . $filter_stari . " 
		ORDER BY d.nume ASC";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getClientiPentruAsignatByDepozit($opts = array())
    {
        $stari = isset($opts['stari']) ? $opts['stari'] : array(1, 3);
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $ret = array();

        $filter_stari = count($stari) > 0 ? ' AND a.stare_id IN (' . join(', ', $stari) . ') ' : '';

        $query = "SELECT
        a.id, a.nume, d.nume as nume_localitate
        FROM clienti as a   
        LEFT JOIN localitati as d on a.localitate_id = d.id
				LEFT JOIN asignari_clienti_trasee as e on a.id = e.client_id 
				LEFT JOIN asignari_trasee_depozite as f on e.traseu_id = f.traseu_id 
		WHERE a.sters = 0
		" . $filter_stari . " 
		AND f.depozit_id = '" . $depozit_id . "'
		GROUP BY a.id
		ORDER BY d.nume ASC
		";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getClienti($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $localitate_id = isset($opts['localitate_id']) ? $opts['localitate_id'] : 0;
        $zona_id = isset($opts['zona_id']) ? $opts['zona_id'] : 0;

        $ret = array();

        $query = "SELECT a.id, a.nume, a.telefon, a.telefon_2,a.rastel,
                         b.nume as nume_stare,c.nume as nume_judet, 
                         d.nume as nume_localitate, e.nume as culoare
        FROM clienti as a   
        LEFT JOIN clienti_stari as b on a.stare_id = b.id
        LEFT JOIN judete as c on a.judet_id = c.id
        LEFT JOIN localitati as d on a.localitate_id = d.id 
        LEFT JOIN culori_butelii as e on a.culoare_id = e.id
        LEFT JOIN ordine_clienti as f on a.id = f.client_id
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

        $query .= " order by f.ordine ASC";

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($tmp as $client) {
                $client['depozit'] = Depozite::getDepozitByClientId($client['id']);
                $client['traseu'] = Trasee::getTraseuByClientId($client['id']);
                $client['target'] = Target::getTargetClient($client['id']);
                $client['observatii_client'] = self::getObsByClientById($client['id']);
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);

                // filtrare...
                $ok = true;

                if ($traseu_id > 0 && $client['traseu'] and $client['traseu']['id'] != $traseu_id) {
                    $ok = false;
                } elseif ($traseu_id > 0 and !$client['traseu']) {
                    $ok = false;
                }

                if ($depozit_id > 0 && $client['depozit'] and $client['depozit']['id'] != $depozit_id) {
                    $ok = false;
                } elseif ($depozit_id > 0 and !$client['depozit']) {
                    $ok = false;
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;
    }

    public static function getListaClienti($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $localitate_id = isset($opts['localitate_id']) ? $opts['localitate_id'] : 0;
        $zona_id = isset($opts['zona_id']) ? $opts['zona_id'] : 0;

        $ret = array();

        $query = "SELECT
        a.id, a.nume, a.telefon, a.telefon_2,a.rastel, b.nume as nume_stare,c.nume as nume_judet, d.nume as nume_localitate, e.nume as culoare
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
                $client['depozit'] = Depozite::getDepozitByClientId($client['id']);
                $client['traseu'] = Trasee::getTraseuByClientId($client['id']);
                $client['observatii_client'] = self::getObsByClientById($client['id']);
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);

                // filtrare...
                $ok = true;

                if ($traseu_id > 0 && $client['traseu'] and $client['traseu']['id'] != $traseu_id) {
                    $ok = false;
                } elseif ($traseu_id > 0 and !$client['traseu']) {
                    $ok = false;
                }

                if ($depozit_id > 0 && $client['depozit'] and $client['depozit']['id'] != $depozit_id) {
                    $ok = false;
                } elseif ($depozit_id > 0 and !$client['depozit']) {
                    $ok = false;
                }

                if ($ok) {
                    array_push($ret, $client);
                }
            }
        }
        return $ret;
    }

    public static function getListaClientiIndex($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;
        $localitate_id = isset($opts['localitate_id']) ? $opts['localitate_id'] : 0;
        $zona_id = isset($opts['zona_id']) ? $opts['zona_id'] : 0;

        $ret = array();

        $query = "SELECT
                a.id,
                a.nume,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start as data_contract,               	
                (SELECT nume from observatii_client where a.id = client_id ORDER BY id DESC LIMIT 1) as nume_observatie
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	
                LEFT JOIN observatii_client AS g ON a.id = g.client_id	
                WHERE a.sters = 0
		";

        if ($localitate_id > 0) {
            $query .= " AND a.localitate_id= " . $localitate_id;
        }

        if ($stare_id > 0) {
            $query .= " AND a.stare_id = " . $stare_id;
        }

        if ($zona_id > 0) {
            $query .= " AND a.judet_id = " . $zona_id;
        }

        if ($depozit_id > 0) {
            $query .= " AND f.depozit_id = " . $depozit_id;;
        }

        if ($traseu_id > 0) {
            $query .= " AND e.traseu_id = " . $traseu_id;
        }
        $query .= " GROUP BY a.id ORDER BY a.nume ASC ";


//        $result = myQuery($query);
//
//        if ($result) {
//            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
//        }
//        return $ret;

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
//
            foreach ($tmp as $client) {
//                $client['depozit'] = Depozite::getDepozitByClientId($client['id']);
//                $client['traseu'] = Trasee::getTraseuByClientId($client['id']);
//                $client['observatii_client'] = self::getObsByClientById($client['id']);
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);
//
//                // filtrare...
//                $ok = true;
//
//                if ($traseu_id > 0 && $client['traseu'] and $client['traseu']['id'] != $traseu_id) {
//                    $ok = false;
//                } elseif ($traseu_id > 0 and !$client['traseu']) {
//                    $ok = false;
//                }
//
//                if ($depozit_id > 0 && $client['depozit'] and $client['depozit']['id'] != $depozit_id) {
//                    $ok = false;
//                } elseif ($depozit_id > 0 and !$client['depozit']) {
//                    $ok = false;
//                }
//
//                if ($ok) {
//                    array_push($ret, $client);
//                }
                array_push($ret, $client);

            }
        }
        return $ret;
    }

    public static function getListaClientiDepozitActivi($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;

        $ret = array();

        $query = "SELECT
                a.id,
                a.nume,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start as data_start,
                a.data_stop as data_stop,
                a.cnp,
                a.ci,
                b.nume as stare_client          	
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	
                LEFT JOIN observatii_client AS g ON a.id = g.client_id	
                WHERE a.sters = 0
                AND a.data_stop LIKE '0000-00-00'
                AND a.stare_id != 2
		        ";

        if ($depozit_id > 0) {
            $query .= " AND f.depozit_id = " . $depozit_id;;
        }

        $query .= " GROUP BY a.id ORDER BY a.nume ASC ";

        $result = myQuery($query);
        if ($result) {
            $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $client) {
                $client['asignare_client_traseu'] = Asignari::getAsignareTraseuByClientId($client['id']);
                array_push($ret, $client);

            }
        }
        return $ret;
    }

    public static function getAsignariClientiByFisaGenerataId($fisa_id, $opts = array())
    {
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

//        am scos a.*

        $ret = array();
        $query = "SELECT a.fisa_generata_id, a.client_id, b.nume as nume_client, c.nume as nume_localitate
                  FROM clienti_asignati_fise_generate as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN localitati as c on b.localitate_id = c.id                  
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
                $item['target'] = Target::getTargetByClientId($item['client_id']);
                $item['traseu_client'] = Trasee::getTraseeAsignateLaClientByClientId($item['client_id']);
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
                  where a.sters = 0
                  ORDER BY a.nume ASC
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getListaObservatiiPentruFiltrare()
    {
        $ret = array();
        $query = "SELECT a.* , b.nume 
                  from observatii_filtrate as a
                  left join observatii as b on a.obs_id = b.id
                  where a.sters = 0
                  ORDER BY b.nume ASC
                  ";
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

    public static function getObservatieApelClientiByClientId($client_id, $traseu_id, $opts = array())
    {
        $data = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data == 0) {
            $data = date('Y-m-d');
        }


        $ret = array();
        $query = "SELECT a.observatie_id, b.nume as nume_observatie 
                  FROM apeluri_clienti as a
                  LEFT JOIN observatii as b on a.observatie_id = b.id
                  WHERE	a.client_id = '" . $client_id . "'
                  AND a.data_start = '" . $data . "'
                  AND a.traseu_id = '" . $traseu_id . "'
                  LIMIT 1";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getUrgentaApelClientiByClientId($client_id, $traseu_id, $opts = array())
    {
        $data = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data == 0) {
            $data = date('Y-m-d');
        }

        $ret = array();
        $query = "SELECT urgent 
                  FROM apeluri_clienti
                  WHERE	client_id = '" . $client_id . "'
                  AND data_start = '" . $data . "'
                  AND traseu_id = '" . $traseu_id . "'
                  LIMIT 1";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getNumeUrgentaApelClientiByClientId($client_id, $traseu_id, $opts = array())
    {
        $data = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data == 0) {
            $data = date('Y-m-d');
        }

        $ret = array();
        $query = "SELECT  if (urgent = 1, 'DA','NU')as urgent
                  FROM apeluri_clienti
                  WHERE	client_id = '" . $client_id . "'
                  AND data_start = '" . $data . "'
                  AND traseu_id = '" . $traseu_id . "'
                  LIMIT 1";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getClientiCuNumarGresitSauNumarLipsaApelClientiByTraseuId($traseu_id, $opts = array())
    {
        $data = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data == 0) {
            $data = 'Y-m-d';
        }

        $ret = array();
        $query = "SELECT b.id, b.nume as nume_client, c.nume as nume_observatie, d.nume as nume_localitate 
                    FROM apeluri_clienti as a
                    LEFT JOIN clienti as b on a.client_id = b.id
                    LEFT JOIN observatii as c on a.observatie_id = c.id
                    LEFT JOIN localitati as d on b.localitate_id = d.id
                    WHERE a.traseu_id = '" . $traseu_id . "'
                    AND a.observatie_id IN ( 7, 16 ) 
                    AND a.data_start = '" . $data . "'
                    ORDER By d.nume ASC";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getClientiCuUrgenteApelClientiByTraseuId($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        $ret = array();
        $query = "SELECT a.client_id, b.nume as nume_client, c.nume as nume_localitate,
                if (a.urgent = 1, 'DA', 'NU') as urgent
                FROM apeluri_clienti as a
                LEFT JOIN clienti as b on a.client_id = b.id
                LEFT JOIN localitati as c on b.localitate_id = c.id                         
                WHERE a.traseu_id = '" . $traseu_id . "'
                AND a.data_start = '" . $data_start . "'
                AND a.urgent = 1
                ORDER BY c.nume ASC
                ";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'client_id' => $item['client_id'],
                    'nume_client' => $item['nume_client'],
                    'nume_localitate' => $item['nume_localitate'],
                    'urgent' => $item['urgent'],
                    'raspuns' => self::getCantitatiGoaleApeluriUrgente($item['client_id'], $opts = array(
                        'data_start' => $data_start
                    )),
                );
                array_push($ret, $r);
            }
        }

        return $ret;
    }

//E folisita in pagina apel clienti
    public static function getGoaleApelClientiByClientId($client_id = 0, $tip_produs_id, $traseu_id, $opts = array())
    {
        $data = isset($opts['data_start']) ? $opts['data_start'] : 0;
        if ($data == 0) {
            $data = date('Y-m-d');
        }

        $query = "SELECT b.goale from apeluri_clienti as a
                  LEFT JOIN apeluri_clienti_produse as  b on a.id = b.apel_id
                  WHERE a.client_id = '" . $client_id . "'
                  AND b.tip_produs_id = '" . $tip_produs_id . "'
                  AND a.traseu_id = '" . $traseu_id . "'
                  AND a.data_start = '" . $data . "'
                  AND a.sters = 0 LIMIT 1";

        $result = myQuery($query);
        return $result->fetch(PDO::FETCH_ASSOC);
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

    public static function getClientiByLocalitateId($localitate_id)
    {
        $ret = array();
        $query = "select a.id, a.nume from 
                  clienti as a
                  where a.localitate_id = '" . $localitate_id . "'
                  and a.sters = 0";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getClientiByTraseuId($traseu_id, $opts = array())
    {
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

        $ret = array();

        $query = "SELECT a.client_id, a.traseu_id, a.ordine
                    FROM asignari_clienti_trasee as a
                    LEFT JOIN clienti as b on a.client_id = b.id
                    WHERE a.traseu_id = '" . $traseu_id . "'
                    AND a.sters = 0
                    AND b.stare_id != 2";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getNumeObservatieByObservatieId($observatie_id)
    {
        $query = "SELECT b.nume as nume_observatie
                  from suna_traseu as a
                  left join observatii as b on b.id = a.observatie_id
                  where a.observatie_id = '" . $observatie_id . "'
                  LIMIT 1";

        $result = myQuery($query);
        $a = $result->fetch(PDO::FETCH_ASSOC);
        return $a;
    }

    public static function getClientiTraseuByClientIdAndTraseuId($id = 0, $traseu_id = 0)
    {
        $ret = null;
        $query = "SELECT b.*, 
                      a.id AS asignare_id
                    FROM asignari_clienti_trasee a
                    LEFT JOIN trasee b ON b.id = a.traseu_id 
                    WHERE a.client_id = '" . $id . "' 
                    AND a.traseu_id = '" . $traseu_id . "' 
                    AND a.sters = 0
                    ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

//    Trebuie scos
    public static function getCantitatiBg11ByPretClient($client_id, $traseu_id, $pret, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT SUM(a.cantitate) as numar_produs_by_pret
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "'
                  AND b.traseu_id =  '" . $traseu_id . "'
                  AND a.pret = '" . $pret . "' 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.tip_produs_id = 1
                  AND a.sters = 0                  
                  ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getCantitatiAr9ByPretClient($client_id, $traseu_id, $pret, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT SUM(a.cantitate) as numar_produs_by_pret
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "'
                  AND b.traseu_id =  '" . $traseu_id . "'
                  AND a.pret = '" . $pret . "' 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.tip_produs_id = 4
                  AND a.sters = 0                  
                  ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getCantitatiAr8ByPretClient($client_id, $traseu_id, $pret, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT SUM(a.cantitate) as numar_produs_by_pret
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "'
                  AND b.traseu_id =  '" . $traseu_id . "'
                  AND a.pret = '" . $pret . "' 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.tip_produs_id = 3
                  AND a.sters = 0                  
                  ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }


    public static function getPreturiBG11CuComisionByClientId($client_id, $traseu_id, $opts = array())
    {
        $ret = array();
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT a.pret, a.pret_contract, a.client_id, a.comision
                  FROM detalii_fisa_intoarcere_produse as a
                  left join fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "' 
                  and b.traseu_id = '" . $traseu_id . "'
                  AND a.tip_produs_id = 1 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  and a.sters = 0
                  and b.sters = 0              
                  GROUP BY a.pret
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'pret' => $item['pret'],
                    'pret_unitar' => $item['pret_contract'] - $item['comision'],
                    'client_id' => $item['client_id'],
                    'total_cantitati_bg_11' => self::getCantitatiBg11ByPretClient($item['client_id'], $traseu_id, $item['pret'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop,
                    )),
                );
                array_push($ret, $r);
            }
        }
        return $ret;
    }

    public static function getPreturiAR8CuComisionByClientId($client_id, $traseu_id, $opts = array())
    {
        $ret = array();
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT a.pret, a.client_id, a.pret_contract, a.comision
                  FROM detalii_fisa_intoarcere_produse as a
                  left join fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "' 
                  and b.traseu_id = '" . $traseu_id . "'
                  AND a.tip_produs_id = 3 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.pret
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'pret' => $item['pret'],
                    'pret_unitar' => $item['pret_contract'] - $item['pret_comision'],
                    'client_id' => $item['client_id'],
                    'total_cantitati_ar_8' => self::getCantitatiAr8ByPretClient($item['client_id'], $traseu_id, $item['pret'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop,
                    )),
                );
                array_push($ret, $r);
            }
        }
        return $ret;
    }

    public static function getPreturiAR9CuComisionByClientId($client_id, $traseu_id, $opts = array())
    {
        $ret = array();
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT a.pret, a.client_id, a.pret_contract, a.comision
                  FROM detalii_fisa_intoarcere_produse as a
                  left join fise_generate as b on a.fisa_id = b.id
                  WHERE a.client_id = '" . $client_id . "' 
                  and b.traseu_id = '" . $traseu_id . "'
                  AND a.tip_produs_id = 4 
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.pret
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'pret' => $item['pret'],
                    'pret_unitar' => $item['pret_contract'] - $item['comision'],
                    'client_id' => $item['client_id'],
                    'total_cantitati_ar_9' => self::getCantitatiAr9ByPretClient($item['client_id'], $traseu_id, $item['pret'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop,
                    )),
                );
                array_push($ret, $r);
            }
        }
        return $ret;
    }

    public static function getTotalCantitatiBGDinFise($client_id, $traseu_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as total_bg_11, SUM(a.cantitate * a.pret) as total_bg_11_cu_pret, 
                                a.pret_contract as pret_contract_client, a.comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE a.client_id = '" . $client_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND a.tip_produs_id = 1                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalCantitatiAr8DinFise($client_id, $traseu_id, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as total_ar_8, SUM(a.cantitate * a.pret) as total_ar_8_cu_pret,
                                a.pret_contract as pret_contract_client, a.comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE a.client_id = '" . $client_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND a.tip_produs_id = 3                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiAr9DinFise($client_id, $traseu_id, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as total_ar_9, SUM(a.cantitate * a.pret) as total_ar_9_cu_pret,
                                a.pret_contract as pret_contract_client, a.comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE a.client_id = '" . $client_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                      
                                AND a.tip_produs_id = 4                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getPreturiProduse($client_id, $opts = array())
    {
        $ret = null;

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as total_ar_9, SUM(a.cantitate * a.pret) as total_ar_9_cu_pret
                                FROM detalii_fisa_intoarcere_produse  as a
                                WHERE a.client_id = '" . $client_id . "'                                
                                AND a.tip_produs_id = 4                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getRaportLivrariClienti($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;


        $ret = array(
            'livrare_clienti' => array()
        );

        $query = "SELECT  d.nume as nume_localitate, a.client_id, c.nume as nume_client, c.telefon, c.telefon_2, b.traseu_id
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
        $ret['grand_produse'] = array();
        $ret['produse_traseu'] = Produse::getProduseVanduteByTraseuId($traseu_id, array(
            'data_start' => $data_start,
            'data_stop' => $data_stop
        ));
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'client_id' => $item['client_id'],
                    'nume_client' => $item['nume_client'],
                    'traseu_id' => $item['traseu_id'],
                    'nume_localitate' => $item['nume_localitate'],
                    'telefon' => $item['telefon'],
                    'telefon_2' => $item['telefon_2'],
                    'target_produse' => array(),
                    'total_produse_vandute' => array(),
                    'preturi_produse' => array(),
                );

                foreach ($ret['produse_traseu'] as $tip_produs_id => $item_tip_produs) {
                    $r['target_produse'][$tip_produs_id] = Target::getTargetByClientAndProdusIdPentruRaportLivrari($item['client_id'], $tip_produs_id);
                    $r['total_produse_vandute'][$tip_produs_id] = Produse::getTotalProduseVanduteByTraseuIdAndProdusId($item['traseu_id'], $item['client_id'], $tip_produs_id, array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));

                    $r['preturi_produse'][$tip_produs_id] = Produse::getPreturiProduseCuComisionByTipProdusIdAndClientAndTraseuId($tip_produs_id, $item['client_id'],$item['traseu_id'] , array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));
                    $ret['grand'][$tip_produs_id] = Produse::getTotalCantitatiByProdusAndTraseuId($tip_produs_id, $item['traseu_id'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));
                }

                array_push($ret['livrare_clienti'], $r);

            }
        }
        return $ret;
    }

    public static function getPreturiByProdusId($id, $traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }
        $ret = array();

        $query = "SELECT a.pret, b.traseu_id from detalii_fisa_intoarcere_produse as a
                  left JOIN fise_generate as b on a.fisa_id = b.id
                  where a.tip_produs_id =  '" . $id . "'
                  AND b.traseu_id =  '" . $traseu_id . "'
                  and a.data_intrare >= '" . $data_start . "'
                  and a.data_intrare <= '" . $data_stop . "'
                  and a.sters = 0 GROUP BY a.pret";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'pret_bg_11' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(1, $item['traseu_id'], $item['pret'],
                            array(
                                'data_start' => $data_start,
                                'data_stop' => $data_stop
                            )),
                    ),
                    'pret_ar_8' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(3, $item['traseu_id'], $item['pret'], array(
                            'data_start' => $data_start,
                            'data_stop' => $data_stop
                        )),
                    ),
                    'pret_ar_9' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(4, $item['traseu_id'], $item['pret'], array(
                            'data_start' => $data_start,
                            'data_stop' => $data_stop
                        )),
                    ),
                );

                array_push($ret, $r);
            }
        }
        return $ret;

    }

    public static function getTotalCantitatiByPret($id, $traseu_id, $pret_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }
        $ret = array();

        $query = "SELECT SUM(a.cantitate) as total_cantitate from detalii_fisa_intoarcere_produse as a
                  left JOIN fise_generate as b on a.fisa_id = b.id
                  where a.tip_produs_id =  '" . $id . "'
                  AND b.traseu_id =  '" . $traseu_id . "'
                  AND a.pret = '" . $pret_id . "'
                  AND a.data_intrare >= '" . $data_start . "' 
                  AND a.data_intrare <= '" . $data_stop . "' 
                  and a.sters = 0
                  and b.sters = 0";


        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getPreturiLivrariClienti($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['$data_stop']) ? $opts['$data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $ret = array();

        $query = "SELECT a.*, b.traseu_id
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  where b.traseu_id = '" . $traseu_id . "'                  
                  AND a.data_intrare >= '" . $data_start . "' 
                  AND a.data_intrare <= '" . $data_stop . "' 
                  AND a.sters = 0
                  GROUP BY a.pret";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        self::getPreturiByProdusId($item['tip_produs_id'], $item['traseu_id'])
                    );
                }
            }
        }
        return $ret;

    }

    public static function actualieazaStocClientiByTraseuId($id)
    {
        $ret = array();
        $query = "SELECT c.id, c.telefon, c.telefon_2, c.nume as nume_client, d.nume as nume_localitate
        FROM asignari_clienti_trasee as a  
        left join trasee as b on a.traseu_id = b.id
        left join clienti as c on a.client_id = c.id
        left JOIN localitati as d on c.localitate_id = d.id
        where traseu_id = '" . $id . "'
        and a.sters = 0
        and c.stare_id != 2
        order by a.ordine ASC
        ";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['target'] = Target::getTargetByClientId($item['id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }

    public static function getNumarClientiByPret($pret, $depozit_id, $produs_id)
    {
        $ret = array();

        $query = "SELECT COUNT(a.client_id) as numar_clienti
                  FROM clienti_target AS a
                  LEFT JOIN asignari_clienti_trasee AS b ON a.client_id = b.client_id
                  LEFT JOIN asignari_trasee_depozite AS c ON b.traseu_id = c.traseu_id
                  LEFT JOIN clienti AS d ON a.client_id = d.id
                  LEFT JOIN localitati AS e ON d.localitate_id = e.id
                  WHERE
                  a.pret = '" . $pret . "'
                  AND c.depozit_id = '" . $depozit_id . "'
                  AND a.tip_produs_id = '" . $produs_id . "'
                  AND a.sters = 0
                  AND d.sters = 0
                  AND c.sters = 0
                  and d.stare_id = 1
                 ";

        $result = myQuery($query);

        if ($result) {
            $a = $result->fetch(PDO::FETCH_ASSOC);
            $ret = $a['numar_clienti'];
        }
        return $ret;
    }


    public static function getCountClientiByPret()
    {
        $ret = array();
        $query = "SELECT * from depozite";
        $result = myQuery($query);

        $ret['depozite'] = array();
        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            $ret['depozite'][$item['id']] = array(
                'depozit_id' => $item['id'],
                'nume' => $item['nume'],
                'produse' => Depozite::getTipProduseByDepozitId($item['id'])
            );
        }

        return $ret;
    }

    public static function getClientiByDepozitIdAndAn($depozit_id, $data_start)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE a.sters = 0 and (a.stare_id  = 1 or stare_id = 3) 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('%" . $data_start . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getClientiActiviByDepozitidAndAn($depozit_id, $an)
    {
        $ret = array();
        $query = "SELECT
                a.id,
                a.nume as nume_client,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start AS data_contract,
                a.data_stop AS data_desfiintare,
                g.nume as stare_client
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	               
                LEFT JOIN clienti_stari AS g ON a.stare_id = g.id	               
                WHERE (a.sters = 0 and a.stare_id = 1 || a.stare_id = 3)
				AND a.exclus = 0
				AND f.depozit_id = '" . $depozit_id . "'
				AND a.data_start LIKE '%" . $an . "%'
				GROUP BY a.id
				ORDER BY a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiStersiByDepozitidAndAn($depozit_id, $an)
    {
        $ret = array();
        $query = "SELECT
                a.id,
                a.nume as nume_client,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start AS data_contract                
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	               
                WHERE a.sters = 1
				AND a.exclus = 0
				AND f.depozit_id = '" . $depozit_id . "'
				AND a.data_start LIKE '%" . $an . "%'
				GROUP BY a.id
				ORDER BY a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiNeasignati()
    {
        $ret = array();
        $query = "SELECT
                    a.id,
                    a.nume AS nume_client,
                    a.telefon,
                    a.telefon_2,
                    b.nume AS nume_stare,
                    c.nume AS nume_judet,
                    d.nume AS nume_localitate,
                    a.data_start AS data_infiintare,
                    a.data_stop AS data_desfiintare                
                FROM clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id
                WHERE a.sters = 0
                AND a.exclus = 0
                AND f.depozit_id IS NULL
                GROUP BY a.id
                ORDER BY a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiInfiintatiByDepozitidAndAn($depozit_id, $an)
    {
        $ret = array();
        $query = "SELECT
                a.id,
                a.nume as nume_client,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start AS data_contract,                
                a.data_stop AS data_desfiintare,
                g.nume as stare_client                
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	               
                LEFT JOIN clienti_stari AS g ON a.stare_id = g.id	               
                WHERE a.sters = 0
				AND a.exclus = 0
				AND f.depozit_id = '" . $depozit_id . "'
				AND a.data_start LIKE '%" . $an . "%'
				GROUP BY a.id
				ORDER BY a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiActiviFaraDataContractByDepozitidAndAn($depozit_id)
    {
        $ret = array();
        $query = "SELECT
                a.id,
                a.nume as nume_client,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start AS data_contract,
                a.data_stop as data_stop_contract,
                g.nume as stare_client                
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	               
                LEFT JOIN clienti_stari AS g ON a.stare_id = g.id	               
                WHERE a.sters = 0             
				AND a.exclus = 0
				AND f.depozit_id = '" . $depozit_id . "'
				AND a.data_start LIKE '0000-00-00'
				AND a.data_stop LIKE '0000-00-00'
				GROUP BY a.id
				ORDER BY a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiDesfiintatiByDepozitidAndAn($depozit_id, $an)
    {
        $ret = array();
        $query = "SELECT
                a.id,
                a.nume as nume_client,
                a.telefon,
                a.telefon_2,
                b.nume AS nume_stare,
                c.nume AS nume_judet,
                d.nume AS nume_localitate,
                a.data_start AS data_contract ,
                a.data_stop as data_finish_contract,
                g.nume as stare_client               
                FROM
                clienti AS a
                LEFT JOIN clienti_stari AS b ON a.stare_id = b.id
                LEFT JOIN judete AS c ON a.judet_id = c.id
                LEFT JOIN localitati AS d ON a.localitate_id = d.id 
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id 
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id	               
                LEFT JOIN clienti_stari AS g ON a.stare_id = g.id             
                WHERE a.stare_id = 2
				AND a.exclus = 0
				AND f.depozit_id = '" . $depozit_id . "'
				AND a.data_stop LIKE '%" . $an . "%'
				GROUP BY a.id
				ORDER By a.nume ASC
				";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);

        }
        return $ret;
    }

    public static function getClientiActiviInfiintatiByDepozitIdAndAn($depozit_id, $an)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE a.sters = 0 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('%" . $an . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getClientiActiviInfiintatiByDepozitIdAndDataStart($depozit_id, $data_start)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE a.sters = 0 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('%" . $data_start . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getClientiByDepozitIdFaraDataContract($depozit_id)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE
                a.sters = 0 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('0000-00-00')
                AND a.data_stop LIKE ('0000-00-00')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getCountClientiByAnAndDepozitId()
    {
        $ret = array();
        $query = "SELECT * from depozite";
        $result = myQuery($query);

        $ret['depozite'] = array();
        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            $ret['depozite'][$item['id']] = array(
                'depozit_id' => $item['id'],
                'nume' => $item['nume'],
            );
        }

        return $ret;
    }


    public static function getClientiActiviByAnAndDepozitId()
    {
        $ret = array();
        $query = "SELECT * from clienti as ";
        $result = myQuery($query);

        $ret['depozite'] = array();
        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            $ret['depozite'][$item['id']] = array(
                'depozit_id' => $item['id'],
                'nume' => $item['nume'],
            );
        }

        return $ret;
    }


    public static function getDiferentePreturiByClientIdAndTraseuId2($client_id, $traseu_id)
    {

        $ret = array();
        $query = "   SELECT a.fisa_id, c.tip as nume_produs, a.cantitate, a.pret as pret_sofer,
                    a.pret_contract, a.comision,a.data_intrare, a.tip_produs_id
                    FROM detalii_fisa_intoarcere_produse as a
                    LEFT JOIN fise_generate as b on a.fisa_id = b.id
                    LEFT JOIN tip_produs as c on a.tip_produs_id = c.id
                    WHERE a.client_id = '" . $client_id . "'
                    AND b.traseu_id = '" . $traseu_id . "'
                    AND (a.cantitate > 0 and a.pret != a.pret_contract)
                    AND a.sters = 0
                    AND b.sters = 0
                    order by a.tip_produs_id ASC
                  ";


        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['nume_produs']] = 3;
            }
        }
        return $ret;

    }

    public static function getDiferentePreturiByClientIdAndTraseuId($client_id, $traseu_id, $tip_produs_id)
    {
        $ret = array();
        $query = "   SELECT a.tip_produs_id, a.cantitate, a.pret, a.pret_contract, a.fisa_id, c.nume as nume_sofer, d.numar
                    FROM
                        detalii_fisa_intoarcere_produse AS a
                    LEFT JOIN fise_generate AS b ON a.fisa_id = b.id
                    LEFT JOIN soferi AS c ON b.sofer_id = c.id
                    LEFT JOIN masini AS d ON b.masina_id = d.id
                    WHERE a.client_id = '" . $client_id . "'
                    AND b.traseu_id = '" . $traseu_id . "'
                    AND a.tip_produs_id = '" . $tip_produs_id . "'
                    AND (a.cantitate > 0 AND a.pret != a.pret_contract)
                    AND a.sters = 0
                    AND b.sters = 0
                  ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;

    }

    public static function getTipRastelByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT tip_rastel_id FROM tip_rastel_clienti WHERE client_id = '" . $client_id . "' and sters = 0 LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTipObservatiiDinApeluri($traseu_id, $opts = array())
    {

        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;

        $ret = array();
        $query = "SELECT a.observatie_id, b.nume as nume_observatie from apeluri_clienti as a
                  LEFT JOIN observatii as b on a.observatie_id = b.id
                  WHERE a.traseu_id = '" . $traseu_id . "'
                  AND a.observatie_id IN (5, 6, 7, 16, 18, 19, 252, 171, 247)
                  AND a.data_start = '" . $data_start . "'
                  ";


        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['observatie_id']] = array(
                    'nume_observatie' => $item['nume_observatie'],
                    'numar_observatie' => self::getTotalObsApeluriClientiByObsAndTraseuIdAndData($item['observatie_id'], $traseu_id, array(
                        'data_start' => $data_start
                    ))
                );
            }
        }
        return $ret;

    }

    public static function getTotalObsApeluriClientiByObsAndTraseuIdAndData($observatie_id, $traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;

        $ret = array();
        $query = "SELECT COUNT(a.observatie_id) as total_observatie
                  FROM apeluri_clienti as a
                  WHERE a.observatie_id = '" . $observatie_id . "'
                  AND a.traseu_id = '" . $traseu_id . "'
                  AND data_start = '" . $data_start . "'
        ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getIstoricPreturiByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT c . tip as nume_produs,
        a.pret, a.comision, a.data_start, a.data_stop    
        FROM istoric_preturi_clienti as a
        LEFT JOIN clienti as b on b . id = a . client_id
        LEFT JOIN tip_produs as c on c . id = a . tip_produs_id
        WHERE a . client_id = '" . $client_id . "'
        AND a.data_stop != '0000-00-00'
        AND a . sters = 0
               
        ORDER BY a.tip_produs_id ASC
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


}



//    public static function getRandamentClientByAnAndPerioadaId($client_id, $an, $perioada_id)
//    {
////        $an = isset($opts['an']) ? $opts['an'] : 0;
////        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : 0;
//
//        if ($an == 0) {
//            $an = 2;
//        }
//
//        if ($perioada_id == 0) {
//            $perioada_id = date('n');
//        }
//
//        $ret = array();
//        $query = "SELECT randament FROM randament_clienti as a
//                  WHERE a.client_id = '" . $client_id . "'
//                  AND a.an = '" . $an . "'
//                  AND a.perioada_id = '" . $perioada_id . "'
//                  ";
//        $result = myQuery($query);
//        if ($result) {
//            $ret = $result->fetch(PDO::FETCH_ASSOC);
//        }
//
//        return $ret;
//    }


//    public static function getRandamentByClientIdDinFise2($client_id, $opts = array())
//    {
//        $an = isset($opts['an']) ? $opts['an'] : 0;
//        if ($an == 0) {
//            $an = date('Y');
//        }
//
////        $perioada_id = isset($opts['perioada_id']) ? $opts['perioada_id'] : 0;
//
//        $ret = array();
//
//        $query = "SELECT
//                    a.client_id, a.cantitate, a.data_intrare
//                FROM
//                    detalii_fisa_intoarcere_produse AS a
//                    LEFT JOIN fise_generate AS b ON a.fisa_id = b.id
//                WHERE
//                    a.client_id = '" . $client_id . "'
//                AND b.sters = 0
//                    ORDER BY a.data_intrare ASC
//                     ";
//
////        if ($perioada_id > 0) {
////            $query .= " AND a.data_intrare LIKE '" . $an . "-%" . $perioada_id . "-%' ";
////        }
//        $result = myQuery($query);
//
//        if ($result) {
//            $ret['randament'] = array();
//            $a = $result->fetchAll(PDO::FETCH_ASSOC);
//            foreach ($a as $item) {
//                $ret['randament'][$item['client_id']] = array(
//                    'ani' => Fise::getAniRandamentDinFiseByClientId($item['client_id'])
//                );
//
//            }
//        }
//
////        $ret['randament'] = array();
//
////        if ($result) {
////            if($ret)
////            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
////        }
//
//        return $ret;
//
//    }

///$query = "SELECT a.client_id, b.nume as nume_client, c.nume as nume_localitate,
//                if (a.urgent = 1, 'DA', 'NU') as urgent
//                FROM apeluri_clienti as a
//                LEFT JOIN clienti as b on a.client_id = b.id
//                LEFT JOIN localitati as c on b.localitate_id = c.id
//                WHERE a.traseu_id = '" . $traseu_id . "'
//                AND a.data_start = '" . $data_start . "'
//                AND a.urgent = 1
//                ORDER BY c.nume ASC
//                ";
//
//$result = myQuery($query);
//
//if ($result) {
//$a = $result->fetchAll(PDO::FETCH_ASSOC);
//foreach ($a as $item) {
//$r = array(
//'client_id' => $item['client_id'],
//'nume_client' => $item['nume_client'],
//'nume_localitate' => $item['nume_localitate'],
//'urgent' => $item['urgent'],
//'raspuns' => self::getCantitatiGoaleApeluriUrgente($item['client_id'], $opts = array(
//'data_start' => $data_start
//)),
//);
//array_push($ret, $r);
//}