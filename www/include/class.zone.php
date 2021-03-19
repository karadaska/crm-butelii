<?php

class Zone
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

    public static function getLocalitateByClientId($id)
    {
        $ret = array();
        $query = "select b.nume from 
                    clienti as a
                    left join localitati as  b on a.localitate_id = b.id
                    where a.id = '" . $id . "' LIMIT 1";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getLocalitati()
    {
        $ret = array();
        $query = "SELECT a.*, b.nume as zona
                  FROM localitati as a
                  LEFT JOIN judete as b on a.judet_id = b.id
                  WHERE a.sters = 0
                  order by a.nume ASC";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getLocalitateById($id)
    {
        $ret = array();
        $query = "SELECT * FROM localitati where id = '" . $id . "' LIMIT 1";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getZonaByLocalitateId($id)
    {
        $ret = array();
        $query = "SELECT judet_id FROM localitati where id = '" . $id . "' LIMIT 1";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getLocalitatiByJudet($judet_id)
    {
        $ret = array();
        $query = "SELECT * FROM localitati WHERE judet_id = " . $judet_id . " ORDER BY nume";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }
}