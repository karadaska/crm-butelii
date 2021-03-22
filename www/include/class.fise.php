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
}