<?php

class Produse
{

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

    public static function getPreturiByProdusIdAndDepozitId($id, $depozit_id)
    {
        $ret = array();

        $query = "";

        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'pret_bg_11' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(1, $item['traseu_id'], $item['pret'],
                            array(
                                'data_start' => $data_start,
                                'data_stop' => $data_stop
                            )),
                    ),
                    'pret_ar_8' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(3, $item['traseu_id'], $item['pret'], array(
                            'data_start' => $data_start,
                            'data_stop' => $data_stop
                        )),
                    ),
                    'pret_ar_9' => array(
                        'pret' => $item['pret'],
                        'cantitate' => self::getTotalCantitatiByPret(4, $item['traseu_id'], $item['pret'], array(
                            'data_start' => $data_start,
                            'data_stop' => $data_stop
                        )),
                    ),
                );

                array_push($ret, $r);
            }
        }
        return $ret;

    }

}