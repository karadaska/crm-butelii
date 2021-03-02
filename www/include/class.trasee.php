<?php

class Trasee
{

    public static function getObservatieDinFisaTraseuByClientIdAndFisaId($client_id, $fisa_id)
    {
        $ret = array();
        $query = "SELECT a.observatie_id, b.nume as nume_observatie
                  FROM observatii_clienti_fisa_traseu as a
                  LEFT JOIN observatii as b on a.observatie_id = b.id  
                  WHERE a.client_id = '" . $client_id . "'
                  AND a.fisa_id = '" . $fisa_id . "'
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getApelTraseu($opts = array())
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
                $client['traseu'] = Clienti::getClientiTraseuByClientIdAndTraseuId($client['id'], $traseu_id);
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

    public static function getNumarUrgenteApelClientiByTraseuId($opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        $ret = array();

        $query = "SELECT count(*) from (select client_id, traseu_id, observatie_id, data_start from apeluri_clienti
                  WHERE traseu_id = '" . $traseu_id . "'
                  AND urgent = 1
                  AND data_start= '" . $data_start . "'
                  GROUP BY client_id) as T";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getNumarObservatiiApelClientiByTraseuId($opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-d');
        }

        $ret = array();

        $query = "select count(*) from (select client_id, traseu_id, observatie_id, data_start from apeluri_clienti
                  where traseu_id = '" . $traseu_id . "'
                  and observatie_id > 0
                  and data_start='" . $data_start . "'
                  group by client_id) as observatii";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTrasee()
    {
        $ret = array();
        $query = "SELECT * FROM trasee where sters = 0 ORDER BY nume ASC";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['asignari_clienti'] = Asignari::getAsignariClientiByTraseuId($item['id']);
                array_push($ret, $item);
            }

        }
        return $ret;
    }

    public static function getTraseuByClientId($id = 0)
    {
        $ret = null;
        $query = "SELECT b.*, 
                      a.id AS asignare_id
                    FROM asignari_clienti_trasee a
                    LEFT JOIN trasee b ON b.id = a.traseu_id 
                    WHERE a.client_id = '" . $id . "' 
                    AND a.sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getTraseeAsignateLaClientByClientId($id = 0)
    {
        $ret = null;
        $query = "SELECT b.id, b.nume as nume_traseu                     
                    FROM asignari_clienti_trasee a
                    LEFT JOIN trasee b ON b.id = a.traseu_id 
                    WHERE a.client_id = '" . $id . "' 
                    AND a.sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getTraseuById($id)
    {
        $ret = array();

        $query = "SELECT * from trasee where id = '" . $id . "' LIMIT 1";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTraseeByMasinaId($masina_id)
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as nume_traseu, d.nume as nume_sofer
                    FROM asignari_masini_trasee as a
                    left join trasee as b on a.traseu_id = b.id
                    left join asignari_soferi_trasee as c on a.traseu_id = c.traseu_id
                    left join soferi as d on c.sofer_id = d.id
                    where masina_id = '" . $masina_id . "'
                    and a.sters = 0 
                    and c.sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTraseuByFisaGenerataId($id)
    {
        $ret = array();
        $id_fisa = "SELECT a . traseu_id, b . nume as  nume_traseu
                from fise_generate as a
                left join trasee as  b on a . traseu_id = b . id
                where a . id = '" . $id . "'
                ORDER BY a . traseu_id DESC
                limit 1
						";

        $result = myQuery($id_fisa);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function getAsignareClientiTraseuByClientid($traseu_id)
    {
        $ret = array();
        $query = "SELECT a.client_id, a.traseu_id, a.ordine,
                  b.nume as nume_client, c.nume as nume_localitate, b.telefon from 
                  asignari_clienti_trasee as a
                  left join clienti as b on a.client_id = b.id
                  left join localitati as c on b.localitate_id = c.id
                  where a.traseu_id = '" . $traseu_id . "'
                  and a.sters = 0
                  and b.stare_id !=2
                  ORDER BY a.ordine ASC
                  ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getTraseuByDepozitId($depozit_id)
    {
        $ret = array();
        $query = "SELECT * FROM trasee WHERE depozit_id = " . $depozit_id . " ORDER BY nume";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getNeconcordantaPreturiClientiByTraseuId($traseu_id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id,d.nume as nume_client, d.telefon, d.telefon_2, e.nume as nume_localitate, a.client_id, b.traseu_id 
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  LEFT JOIN tip_produs as c on a.tip_produs_id = c.id
                  LEFT JOIN clienti as d on a.client_id = d.id
                  LEFT JOIN localitati as e on d.localitate_id = e.id
                  LEFT JOIN ordine_clienti as f on a.client_id = f.client_id
                  WHERE b.traseu_id = '" . $traseu_id . "'
                  AND (a.pret != a.pret_contract)
                  AND a.cantitate > 0
                  AND a.sters = 0
                  AND b.sters = 0
                  GROUP BY a.client_id
                  ORDER BY f.ordine ASC                
                  ";

        $result = myQuery($query);
        $ret['neconcordanta'] = array();
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret['neconcordanta'][$item['client_id']] = array(
                    'nume' => $item['nume_client'],
                    'client_id' => $item['client_id'],
                    'nume_localitate' => $item['nume_localitate'],
                    'telefon' => $item['telefon'],
                    'produse_client' => Target::getProduseByClientIdNeconcordantaPreturi($item['client_id'], array(
                        'traseu_id' => $traseu_id
                    ))
                );
            }
        }
        return $ret;
    }
}
