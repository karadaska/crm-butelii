<?php

class Utilizatori {
    public static function getUtilizatorLogins($user_id = 0, $an = 0, $luna = 0) {
        if ($an == 0){
            $an = date("Y");
        }
        if ($luna == 0){
            $luna = date("m");
        }
        if (strlen($luna) < 2){
            $luna = '0' . $luna;
        }
        $data = $an . "-" . $luna . "-%";
        $ret  = array();

        $query  = "SELECT DATE_FORMAT(data,'%Y-%m-%d') AS data_log,count(user_id) AS nr FROM logs WHERE tip = 1 AND user_id='" . $user_id . "' AND data LIKE '" . $data . "' GROUP BY data_log;";
        $result = myQuery($query);
        if ($result){
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $res) {
                $ret[ $res['data_log'] ] = $res['nr'];
            }
        }

        return $ret;
    }

    public static function getCurentUserId() {
        global $session;
        if ($session->is_logged_in()){
            return $_SESSION["user"]->id;
        } else {
            return false;
        }
    }

    /** returneaza lista tuturor drepturilor */
    public static function getListaTipDrepturi() {
        $ret    = array();
        $strsql = "SELECT * FROM users_tip_drepturi ORDER BY nume ASC";
        if ($result = myQuery($strsql)){
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    /** returneaza lista drepturilor unui utilizator*/
    public static function getListaDrepturiUtilizator($user_id = 0) {
        $ret    = array();
        $strsql = "SELECT users_tip_drepturi.* FROM users_asignari_drepturi
                        LEFT JOIN users_tip_drepturi ON users_tip_drepturi.id=users_asignari_drepturi.drept_id
                        WHERE users_asignari_drepturi.user_id='" . $user_id . "'
                        ORDER BY users_tip_drepturi.nume ASC";
        if ($result = myQuery($strsql)){
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    /** returneaza drepturile unui utilizator */
    public static function getRights($user_id) {
        //global $sql;
        $drepturi = array();
        $s_query  = "SELECT drept_id FROM users_asignari_drepturi WHERE user_id = " . $user_id . ";";
        if ($result = myQuery($s_query)){
            while ($ret = $result->fetch(PDO::FETCH_ASSOC)) {
                array_push($drepturi, $ret['drept_id']);
            }
        }

        return $drepturi;
    }

    /** returneaza daca un user are un drept sau nu */
    public static function hasRights() {
        $numargs  = func_num_args();
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            if (in_array($arg_list[ $i ], $_SESSION['user_rights'])){
                return true;
            }
        }

        return false;
    }

}