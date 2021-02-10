<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
if ($id) {
    $data_stop = date('Y-m-d');
    $sterge_traseu = "UPDATE trasee 
                  SET sters= 1 
                  where id='" . $id . "';";
    $nr_update = myExec($sterge_traseu);

    $sterge_clineti_asignati = "UPDATE asignari_clienti_trasee set sters = 1 where traseu_id = '" . $id . "'";
    myExec($sterge_clineti_asignati);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);