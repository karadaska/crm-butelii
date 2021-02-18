<?php

class Unused
{
    public static function getFiseOld($opt = array())
    {
        $depozit_id = isset($opt['depozit_id']) ? $opt['depozit_id'] : 0;
        $luna_id = isset($opt['luna_id']) ? $opt['luna_id'] : 0;
        $traseu_id = isset($opt['traseu_id']) ? $opt['traseu_id'] : 0;
        $sofer_id = isset($opt['sofer_id']) ? $opt['sofer_id'] : 0;
        $masina_id = isset($opt['masina_id']) ? $opt['masina_id'] : 0;


        $ret = array();
        $query = "SELECT a .id, a.data_intrare, b . nume as nume_depozit, c . numar as numar_masina, d . nume as nume_sofer, e . nume as nume_traseu 
                  from fise_generate as a
                  left join depozite as b on a . depozit_id = b . id
                  left join masini as c on a . masina_id = c . id
                  left join soferi as d on a . sofer_id = d . id
                  left join trasee as e on a . traseu_id = e . id
                  where a.sters = 0
                  ";

        if ($depozit_id > 0) {
            $query .= " and depozit_id = " . $depozit_id;
        }

        if ($traseu_id > 0) {
            $query .= " and traseu_id = " . $traseu_id;
        }

        if ($sofer_id > 0) {
            $query .= " and sofer_id = " . $sofer_id;
        }

        if ($masina_id > 0) {
            $query .= " and masina_id = " . $masina_id;
        }

        if ($luna_id > 0) {
            if ($luna_id < 10) {
                $luna_id = '0' . $luna_id;
            }
            $query .= " and data_intrare LIKE '%-" . $luna_id . "-%'";
        }

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }


public static function getCantitatiIntoarcereByFisaId($fisa_id)
{
    $ret = array();
    $query = "SELECT a.fisa_id, a.tip_produs_id, a.cantitate,a.stare_produs, b.tip as nume_produs from fisa_total_intoarcere as a
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  WHERE a.fisa_id = '" . $fisa_id . "'
                  AND a.sters = 0
                  AND b.sters = 0
                        ";

    $result = myQuery($query);

    if ($result) {
        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            if (!isset($ret[$item['tip_produs_id']])) {
                $ret[$item['tip_produs_id']] = array(
                    'fisa_id' => $item['fisa_id'],
                    'tip_produs_id' => $item['tip_produs_id'],
                    'nume_produs' => $item['nume_produs'],
                    'pline' => 0,
                    'goale' => 0,
                    'defecte' => 0,
                    'total_pline' => 0
                );
            }
            if ($item['stare_produs'] == 1) {
                $ret[$item['tip_produs_id']]['pline'] += $item['cantitate'];
            } else if ($item['stare_produs'] == 2) {
                $ret[$item['tip_produs_id']]['goale'] += $item['cantitate'];
            } else if ($item['stare_produs'] == 3) {
                $ret[$item['tip_produs_id']]['defecte'] += $item['cantitate'];
            }
        }
    }
    return $ret;
}

    public static function getMiscariByFisaId($id)
    {
        $ret = array();
        $query = "SELECT a.fisa_id, a.casa_marcat,raport_z,a.valoare_z,
                  a.valoare_alimentare, a.km, a.tip_alimentare as tip_alimentare_id, b.tip as tip_alimentare
                  from miscari_fise as a
                  left join tip_alimentare as b on a.tip_alimentare = b.id
                  where a.fisa_id = '" . $id . "'";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getCantitatiProduseFisaSosireByClientId($client_id, $fisa_id)
    {
        $ret = array();
        $query = "SELECT
                b.tip AS nume_produs,
                a.cantitate as vandute,
                a.defecte
                FROM detalii_fisa_intoarcere_produse AS a
                LEFT JOIN tip_produs AS b ON a.tip_produs_id = b.id
                LEFT JOIN fise_generate AS d ON a.fisa_id = d.id
                LEFT JOIN masini AS e ON d.masina_id = e.id
                LEFT JOIN soferi AS f ON d.sofer_id = f.id
                WHERE a.client_id = '" . $client_id . "'
                AND d.id = '" . $fisa_id . "'
                 ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

public static function getRaportLivrariClientiOld($traseu_id, $opts = array())
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
    $query = "SELECT a.id, c.nume as nume_localitate, a.client_id,
                    b.nume as nume_client, b.telefon, b.telefon_2 as telefon_2, a.sters
                    FROM asignari_clienti_trasee AS a
                    LEFT JOIN clienti as b on a.client_id = b.id
                    LEFT JOIN localitati as c on b.localitate_id = c.id
                    WHERE a.traseu_id = '" . $traseu_id . "'
                    ";

    $result = myQuery($query);
    if ($result) {
        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            $r = array(
                'id' => $item['client_id'],
                'client_id' => $item['client_id'],
                'sters' => $item['sters'],
                'nume_localitate' => $item['nume_localitate'],
                'nume_client' => $item['nume_client'],
                'telefon' => $item['telefon'],
                'telefon_2' => $item['telefon_2'],
                'target' => Target::getTargetClientPentruRaportLivrari($item['client_id']),
                'total_produse' => array(
                    'bg_11' => self::getTotalCantitatiBGDinFise($item['client_id'], $traseu_id, $opts = array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    )),
                    'ar_8' => self::getTotalCantitatiAr8DinFise($item['client_id'], $traseu_id, $opts = array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    )),
                    'ar_9' => self::getTotalCantitatiAr9DinFise($item['client_id'], $traseu_id, $opts = array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    )),
                ),
                'lista_preturi_bg_11' => self::getPreturiBG11CuComisionByClientId($item['client_id'], $traseu_id),
                'lista_preturi_ar_9' => self::getPreturiAR9CuComisionByClientId($item['client_id'], $traseu_id),
                'lista_preturi_ar_8' => self::getPreturiAR8CuComisionByClientId($item['client_id'], $traseu_id)
            );

            array_push($ret, $r);
        }
    }
    return $ret;
}



    public static function getFisaCuCantitatiSiObserbatiiByClientId($client_id)
    {

        $ret = array();
        $query = "SELECT c.nume as nume_sofer, d.numar as masina, b.data_intrare, a.client_id, a.fisa_id
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN fise_generate as b on a.fisa_id = b.id
                  LEFT JOIN soferi as c on b.sofer_id = c.id
                  LEFT JOIN masini as d on b.masina_id = d.id
                  WHERE a.client_id= '" . $client_id . "'
                  AND b.sters = 0
                 ";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['observatie_client'] = Clienti::getObservatieByFisaAndByClientId($item['fisa_id'], $item['client_id']);
                $item['cantitati_fisa'] = Clienti::getCantitatiProduseFisaSosireByClientId($item['client_id'],$item['fisa_id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }
}