<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$id  = getRequestParameter('id', 0);
$data_stop = date('Y-m-d');
if ($id) {
    $query     = "update clienti set sters=1 where id='" . $id . "';";
    $nr_update = myExec($query);
    $query2 = "update clienti_target set sters=1, data_stop = '".$data_stop."' where client_id='" . $id . "';";
    $nr = myExec($query2);
    if ($nr_update == 1 or $nr == 1)
        echo "1";
    else echo "0";
} else {
    echo "0";
}
