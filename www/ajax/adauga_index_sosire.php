<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
$index_sosire = getRequestParameter('index_sosire', 0);
if ($id) {
    $data_intrare = date('Y-m-d');
    $query = "update fise_generate set index_sosire = '" . $index_sosire . "'
              where id='" . $id . "'              
              ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);