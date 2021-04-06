<?php

class Asignari
{

    public static function getAsignariTraseeByDepozitId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_traseu, c.nume as nume_depozit 
        FROM asignari_trasee_depozite as a  
        left join trasee as b on a.traseu_id = b.id
        left join depozite as c on a.depozit_id = c.id
        where a.depozit_id = '" . $id . "'
        and a.sters = 0
        ORDER BY traseu_id ASC
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignariClientiByTraseuId($id, $opts = array())
    {
        $stari = isset($opts['stari']) ? $opts['stari'] : array(1, 3);

//        am scos de aici c.*
        $ret = array();

        $filter_stari = count($stari) > 0 ? ' AND c.stare_id IN (' . join(', ', $stari) . ') ' : '';

        $query = "SELECT a.id as asignare_id, a.*,c.id, c.telefon, c.telefon_2, 
                  b.nume as nume_traseu, c.nume as nume_client, d.nume as localitate
                  FROM asignari_clienti_trasee as a  
                  left join trasee as b on a.traseu_id = b.id
                  left join clienti as c on a.client_id = c.id
                  left JOIN localitati as d on c.localitate_id = d.id
                  where traseu_id = '" . $id . "'
                  and a.sters = 0
                  ".$filter_stari." 
                  ORDER BY a.ordine ASC
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

    public static function getAsignareTraseuByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT b.nume
        FROM asignari_clienti_trasee as a
        left join trasee as b on a.traseu_id = b.id
        where client_id = '" . $client_id . "'
        and a.sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignareMasinaByTraseuId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.numar as nume_masina
        FROM asignari_masini_trasee as a
        left join masini as b on a.masina_id = b.id
        where traseu_id = '" . $id . "'
        and a.sters = 0 LIMIT 1 ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignareTraseuIdByMasinaId($id)
    {
        $ret = array();
        $query = "SELECT a.*, c.*, b.nume as nume_traseu
        FROM asignari_masini_trasee as a
        left join trasee as b on a.traseu_id = b.id
        left join masini as c on a.masina_id = c.id
        where masina_id = '" . $id . "'
        and a.sters = 0
        and b.sters = 0
        and c.sters = 0
        ";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignareSoferByTraseuId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_sofer
        FROM asignari_soferi_trasee as a
        left join soferi as b on a.sofer_id = b.id       
        where traseu_id = '" . $id . "'
        and a.sters = 0 LIMIT 1";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignareTraseuBySoferId($sofer_id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_traseu, d.numar as nume_masina
                    FROM asignari_soferi_trasee as a  
                    left join trasee as b on a.traseu_id = b.id
                    left join asignari_masini_trasee as c on a.traseu_id = c.traseu_id
                    left join masini as d on c.masina_id = d.id
                    where a.sofer_id = '" . $sofer_id . "'
                    and a.sters = 0
                    and c.sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getAsignareMasinaBySoferId($id)
    {
        $ret = array();
        $query = "SELECT a.*, b.numar
        FROM asignari_soferi_masini as a
        left join masini as b on a.masina_id = b.id       
        where a.sofer_id = '" . $id . "'
        and a.sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getProduseAsignateLaClient($client_id = 0)
    {
        $ret = array();
        $target_by_client_id = "SELECT a.client_id, c . tip as nume_produs,
        a.pret, a.comision    
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


    public static function getAsignariClientiByFisaGenerataId($fisa_id, $opts = array())
    {
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;

        $ret = array();
        $query = "SELECT a.fisa_generata_id, a.client_id, b.nume as nume_client, c.nume as nume_localitate
                  FROM clienti_asignati_fise_generate as a
                  LEFT JOIN clienti as b on a.client_id = b.id
                  LEFT JOIN localitati as c on b.localitate_id = c.id               
                  WHERE a.fisa_generata_id = '" . $fisa_id . "'
                  AND a.sters = 0                  
                  GROUP BY b.id
                  ORDER BY a.ordine ASC
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

}