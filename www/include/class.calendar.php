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

}