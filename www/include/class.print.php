<?php

class Printare
{
    public static function getAsignariClientiByFisaGenerataIdPrintFisaSosire($fisa_id, $opts = array())
    {
        $stare_id = isset($opts['stare_id']) ? $opts['stare_id'] : 0;


        $ret = array();
        $query = "SELECT a.client_id, b.nume as nume_client, c.nume as nume_localitate
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
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function PrintFisaSosire($id, $opt = array())
    {
        $ret = array();

        $query = "SELECT a.id, b.nume as nume_traseu, a.traseu_id, c.numar, d.nume as nume_sofer
                  FROM fise_generate as a
                  LEFT JOIN trasee as b on a.traseu_id = b.id
                  LEFT JOIN masini as c on a.masina_id = c.id
                  LEFT JOIN soferi as d on a.sofer_id = d.id
                  WHERE a.id = '".$id."'";


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

            $ret['produse'] = Fise::getProduseVanduteByFisaId($id);
            $ret['clienti'] = self::getAsignariClientiByFisaGenerataIdPrintFisaSosire($id, $opt = array());
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
                $ret['grand_vandute_ar_8_extra'] += $ret['clienti'][$num]['vandute_ar_8_extra'];
                $ret['grand_vandute_ar_9_extra'] += $ret['clienti'][$num]['vandute_ar_9_extra'];


                $ret['grand_valoare_bg_extra'] += $ret['clienti'][$num]['valoare_bg_extra'];
                $ret['grand_valoare_ar_8_extra'] += $ret['clienti'][$num]['valoare_ar_8_extra'];
                $ret['grand_valoare_ar_9_extra'] += $ret['clienti'][$num]['valoare_ar_9_extra'];

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


}