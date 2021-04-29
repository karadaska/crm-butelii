<?php

class Printare
{
    public static function PrintFisaSosire($id, $opt = array())
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



}