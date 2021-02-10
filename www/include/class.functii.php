<?php

class Functii
{
    public static function getZone()
    {
        $ret = array();
        $query = "SELECT * FROM judete order by nume ASC";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

}