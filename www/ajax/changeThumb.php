<?php
require_once "../etc/config.php";

if ($session->is_logged_in()) {
    $imagepath = 'images/avatars/no_avatar_75.jpg';
    $query     = "select poza from users where id = '" . $_SESSION['user']->id . "' and poza!='';";
    $result    = myQuery($query);
    if ($row = $result->fetch()) {
        $pieces = explode('.', $row["poza"]);
        if ($thumbname = Utilizatori::CreateTumb($_SESSION['user']->id, 75)) {
            $thumbname = $pieces[0] . '_tmb_75.' . $pieces[1];
        }
        $imagepath = 'images/avatars/' . $thumbname;
        echo $imagepath;
    } else {
        echo $imagepath;
    }
} else {
    echo "nu e logat";
    debug("nu e logat");
}