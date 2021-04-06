<?php

class Fise
{
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

    public static function getAniRandamentDinFiseByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT date_format(a.data_intrare,'%Y') AS ani_randament, date_format(a.data_intrare,'%m') AS luni_randament
                  FROM detalii_fisa_intoarcere_produse AS a	
                  WHERE a.client_id = '" . $client_id . "'
                  GROUP BY ani_randament
                  ORDER BY a.data_intrare ASC";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['ani_randament']] = array(
                    $item['luni_randament'] => 3
                );
            }
        }
        return $ret;
    }

    public static function getLuniRandamentDinFiseByClientId($client_id)
    {
        $ret = array();
        $query = "SELECT date_format(a.data_intrare,'%m') AS ani_randament
                  FROM detalii_fisa_intoarcere_produse AS a	
                  WHERE a.client_id = '" . $client_id . "'
                  GROUP BY ani_randament
                  ORDER BY a.data_intrare ASC";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['luni_randament']] = array();
            }
        }
        return $ret;
    }

    public static function getRandamentAnualDinFiseByClientId($client_id, $opts = array())
    {
        $an = isset($opts['an']) ? $opts['an'] : 0;

        if ($an == 0) {
            $an = date('Y');
        }

        $ret = array();
        $query = "SELECT an, perioada_id, SUM(randament ) AS randament_lunar 
                FROM randament_clienti 
                WHERE client_id = '" . $client_id . "'
                AND an = '" . $an . "'
                GROUP BY perioada_id ASC                  
               ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getRandamentAnualDinFiseByClientId2($client_id, $opts = array())
    {
        $an = isset($opts['an']) ? $opts['an'] : date('Y');

//        if ($an == 0) {
//            $an = date('Y');
//        }

        $ret = array();
        $query = "SELECT
                    a.client_id,                    
                    date_format(a.data_intrare,'%Y') AS ani_randament,
                    date_format(a.data_intrare,'%m') AS luna_randament,
                    SUM(a.cantitate) as randament_lunar
                FROM
                    randament_clienti AS a
                    WHERE	a.client_id = '" . $client_id . "'
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

}