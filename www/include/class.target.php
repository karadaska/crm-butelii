<?php

class Target
{

    public static function getTargetByClientId($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.*, b.tip as nume_produs
        from clienti_target as a
        left join tip_produs as b on a.tip_produs_id = b.id
        where a.client_id = '" . $client_id . "'
        and a.sters = 0
        and b.sters = 0
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

    public static function getProduseByClientIdNeconcordantaPreturi($client_id)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.*, b.tip as nume_produs
        from clienti_target as a
        left join tip_produs as b on a.tip_produs_id = b.id
        left join asignari_clienti_trasee as c on a.client_id = c.client_id
        where a.client_id = '" . $client_id . "'
        and a.sters = 0
        and b.sters = 0
        ORDER BY b.id
        ";

        $result = myQuery($target_by_client_id);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = array(
                    'nume_produs'=>$item['nume_produs'],
                    'produse_pret'=>Clienti::getDiferentePreturiByClientIdAndTraseuId($item['client_id'],36,$item['tip_produs_id'])
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
