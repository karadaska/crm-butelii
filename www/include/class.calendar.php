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

    public static function getNumePerioadaById($id)
    {
        $ret = array();

        $query = "SELECT nume
                  FROM lunile_anului
                  where id = '".$id."'
                  ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

}