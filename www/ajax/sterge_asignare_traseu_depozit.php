<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$id = getRequestParameter('id', 0);
if ($id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE asignari_trasee_depozite 
                  SET data_stop = '" . $data_stop . "' , sters=1 where id='" . $id . "';";
    $nr_update = myExec($query);
    if ($nr_update == 1)
        echo "1";
    else echo "0";
} else {
    echo "0";
}
