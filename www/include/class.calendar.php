<?php

class Calendar
{

    public static function getPerioada()
    {
        $ret = array();

        $query = "SELECT *
                  FROM lunile_anului
                  ORDER BY id ASC";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getAni()
    {
        $ret = array();

        $query = "SELECT *
                  FROM ani
                  ORDER BY id ASC";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getAniNewInfiintariClienti($opts = array())
    {
        $depozit_id = isset($opts['depozit_id']) ? $opts['depozit_id'] : 0;
        $ret = array();

        $query = "SELECT *
                  FROM ani
                  ORDER BY id ASC";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['an']] = array(
                    'an'=>$item['an'],
                    'activi' => Clienti::getClientiByDepozitIdAndAn($depozit_id, $item['an']),
                    'infiintati' => Clienti::getClientiActiviInfiintatiByDepozitIdAndAn($depozit_id, $item['an']),
                    'desfiintati' => Clienti::getClientiDesfiintatiByDepozitidAndAn($depozit_id, $item['an']),
                    'fara_data_contract'=>Clienti::getClientiByDepozitIdFaraDataContract($depozit_id)
                );
            }
        }

        return $ret;
    }

    public static function getNumePerioadaById($id)
    {
        $ret = array();

        $query = "SELECT nume
                  FROM lunile_anului
                  where id = '" . $id . "'
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

}