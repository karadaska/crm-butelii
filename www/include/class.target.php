<?php

class Target
{

    public static function getTargetByClientId($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.client_id, a.tip_produs_id,a.target,
                                a.goale_la_client,a.pret, a.comision, b.tip as nume_produs
                                FROM clienti_target as a
                                LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                                WHERE a.client_id = '" . $client_id . "'
                                AND a.sters = 0
                                AND b.sters = 0
                                ORDER BY b.id
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }
        return $ret;
    }

    public static function getTargetByClientIdPrintEditFisa($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.client_id, a.tip_produs_id, a.target,
                                b.tip as nume_produs
                                FROM clienti_target as a
                                LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                                WHERE a.client_id = '" . $client_id . "'
                                AND a.sters = 0
                                AND b.sters = 0
                                ORDER BY b.id
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }
        return $ret;
    }


    public static function getProduseByClientIdNeconcordantaPreturi($client_id, $opts = array())
    {
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;

        $ret = array();

        $target_by_client_id = "SELECT a.*, b.tip as nume_produs, c.traseu_id
                                FROM clienti_target as a
                                LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                                LEFT JOIN asignari_clienti_trasee as c on a.client_id = c.client_id
                                WHERE a.client_id = '" . $client_id . "'
                                AND c.traseu_id = '" . $traseu_id . "'
                                AND a.sters = 0
                                AND b.sters = 0
                                ORDER BY b.id
                                ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = array(
                    'nume_produs' => $item['nume_produs'],
                    'produse_pret' => Clienti::getDiferentePreturiByClientIdAndTraseuId($item['client_id'], $traseu_id, $item['tip_produs_id'])
                );
            }
        }
        return $ret;
    }


    public static function getTargetClient($client_id = 0)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.id, a.client_id, b . nume as  nume_client, a.tip_produs_id, c . tip as nume_produs,
        a.target, a.pret, a.comision, a.goale_la_client        
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


    public static function getTargetClientPentruRaportLivrari($client_id = 0)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.tip_produs_id, a.target, a.pret as pret_contract, a.comision  
        from clienti_target as a
        where a . client_id = '" . $client_id . "'
        and a . sters = 0       
        order by a.tip_produs_id ASC
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }
        return $ret;
    }

    public static function getTargetByClientAndProdusIdPentruRaportLivrari($client_id = 0, $tip_produs_id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, a.target, a.pret as pret_contract, a.comision  
        FROM clienti_target as a
        WHERE a . client_id = '" . $client_id . "'
        AND a . tip_produs_id = '" . $tip_produs_id . "'
        AND a . sters = 0       
        ORDER BY a.tip_produs_id ASC
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getSumaTargetClient($client_id = 0)
    {
        $ret = array();
        $query = "SELECT SUM(target) as suma_target 
                  FROM clienti_target
                  WHERE client_id = '" . $client_id . "'

        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getPreturiClientPentruRaportLivrariDinFise($client_id = 0)
    {
        $ret = array();
        $target_by_client_id = "SELECT  a.tip_produs_id, c . tip as nume_produs,
        a.target, a.pret, a.comision       
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
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }
        }
        return $ret;
    }


}
