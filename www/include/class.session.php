<?php

class Session
{
    var $s_id;
    var $s_file;

    function Session()
    {
        session_start();
    }

    function is_logged_in()
    {
        if (isset($_SESSION['user']->id)) {
            $query = "UPDATE users SET last_activity = '" . date("Y-m-d H:i:s") . "' WHERE id ='" . $_SESSION['user']->id . "';";
            myExec($query);
        }
        return isset($_SESSION['user']->id);

    }

    function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['user_rights']);
        unset($_SESSION['agenda_user_id']);
        session_destroy();
    }

    function login($n_user_id)
    {
        if (getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        if (!isset($ip))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (!isset($ip))
            $ip = "0.0.0.0";

        $s_query          = "select * from users where id = " . $n_user_id . " and sters = 0";
        $result           = myQuery($s_query);
        $obj              = $result->fetchObject();
        $_SESSION['user'] = $obj;

        // lista de drepturi
        $_SESSION['user_rights'] = Utilizatori::getRights($n_user_id);
        // end lista drepturi

        $query = "UPDATE users SET data_login = '" . date("Y-m-d H:i:s") . "',ip_login='" . $ip . "' WHERE id ='" . $n_user_id . "';";
        myExec($query);

        $query = "insert into `logs` (tip,user_id,data) values (1,'" . $n_user_id . "','" . date("Y-m-d H:i:s") . "');";
        myExec($query);
    }

}