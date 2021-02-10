<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
if ($id) {
    $data_intrare = date('Y-m-d');
    $query = "UPDATE fisa_total_intoarcere 
                  SET sters= 1 
                  where id = $id and data_intrare = '".$data_intrare."'";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);