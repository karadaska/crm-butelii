<?php

class Produse
{
    public static function getProduseExtraByFisaIdAndClientId($fisa_id, $client_id)
    {
        $ret = array();
        $query = "SELECT a.tip_produs_id, b.tip, a.cantitate, pret
                  FROM detalii_fisa_intoarcere_produse as a
                  LEFT JOIN tip_produs as b on a.tip_produs_id = b.id
                  LEFT JOIN clienti as d on a.client_id = d.id
                  WHERE a.fisa_id = '" . $fisa_id . "'
                  AND a.client_id = '" . $client_id . "'
                  AND a.sters = 0
                  AND a.produs_extra = 1
                  ORDER BY b.id ASC
                  ";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                if (!isset($ret[$item['tip_produs_id']])) {
                    $ret[$item['tip_produs_id']] = array(
                        'nume_produs' => $item['tip'],
                        'tip_produs_id' => $item['tip_produs_id'],
                        'cantitate' => $item['cantitate'],
                        'pret' => $item['pret']
                    );
                }
            }
        }
        return $ret;
    }

    public static function GetProdusExtraByClientIdProdusIdAndFisaId($client_id, $fisa_id)
    {
        $ret = array();

        $query = "SELECT tip_produs_id, cantitate as cantitate_extra, pret as pret_extra
                  FROM detalii_fisa_intoarcere_produse
                  WHERE client_id = '" . $client_id . "' 
                  AND fisa_id = '" . $fisa_id . "'
                  AND sters = 0
                  AND produs_extra = 1
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


    public static function getProduseVanduteBySoferId($sofer_id, $opts = array())
    {
        $data_start = isset($opt['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        $ret = array();
        $query = " SELECT c.tip as nume_produs, a.tip_produs_id
                    from detalii_fisa_intoarcere_produse as a
                    LEFT JOIN fise_generate as b on a.fisa_id = b.id
                    LEFT JOIN tip_produs as c on a.tip_produs_id = c.id
                    WHERE b.sofer_id = '" . $sofer_id . "'
                    AND a.data_intrare >= '" . $data_start . "'
                    AND a.data_intrare <= '" . $data_stop . "'
                    AND a.sters = 0
                    AND a.cantitate > 0
                    GROUP BY a.tip_produs_id
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


    public static function getProduseVanduteByMasinaId($masina_id, $opts = array())
    {
        $data_start = isset($opt['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;


        $ret = array();
        $query = " SELECT c.tip as nume_produs, a.tip_produs_id
                    from detalii_fisa_intoarcere_produse as a
                    LEFT JOIN fise_generate as b on a.fisa_id = b.id
                    LEFT JOIN tip_produs as c on a.tip_produs_id = c.id
                    WHERE b.masina_id = '" . $masina_id . "'
                    AND a.data_intrare >= '" . $data_start . "'
                    AND a.data_intrare <= '" . $data_stop . "'
                    AND a.sters = 0
                    AND a.cantitate > 0
                    GROUP BY a.tip_produs_id
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
    public static function getTotalCantitatiByMasinaIdAndTraseuIdAndSoferId($masina_id = 0, $traseu_id, $sofer_id, $opts = array())
    {
        $ret = null;
        $tip_produs_id = isset($opts['tip_produs_id']) ? $opts['tip_produs_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.masina_id = '" . $masina_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND b.sofer_id = '" . $sofer_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        if ($tip_produs_id > 0) {
            $target_by_client_id .= ' AND a.tip_produs_id = ' . $tip_produs_id . ' ';
        }

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }


    public static function getProduseVanduteByTraseuId($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        $ret = array();
        $query = "SELECT c.tip as nume_produs, a.tip_produs_id
                    from detalii_fisa_intoarcere_produse as a
                    LEFT JOIN fise_generate as b on a.fisa_id = b.id
                    LEFT JOIN tip_produs as c on a.tip_produs_id = c.id
                    WHERE b.traseu_id = '" . $traseu_id . "'
                    AND a.data_intrare >= '" . $data_start . "'
                    AND a.data_intrare <= '" . $data_stop . "'
                    AND a.sters = 0
                    AND a.cantitate > 0
                    GROUP BY a.tip_produs_id";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip_produs_id']] = $item;
            }

        }
        return $ret;
    }

    public static function getCuloriButelii()
    {
        $ret = array();
        $query = "SELECT * FROM culori_butelii where sters = 0";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['asignari_culori'] = Clienti::getAsignariClientiByCuloare($item['id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }

    public static function getRastel()
    {
        $ret = array();
        $query = "SELECT * FROM tip_rastel where sters = 0";
        $result = myQuery($query);

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


    public static function getCuloareById($id)
    {
        $ret = array();
        $query = "SELECT * from culori_butelii where id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getStareProdus()
    {
        $ret = array();
        $query = "SELECT * from stare_produs where sters = 0";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTipProdus()
    {
        $ret = array();
        $query = "SELECT * from tip_produs where sters = 0";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }
}