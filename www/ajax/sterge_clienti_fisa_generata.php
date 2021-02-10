<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$fisa_generata_id = getRequestParameter('fisa_generata_id', 0);
$client_id = getRequestParameter('client_id', 0);

if ($fisa_generata_id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE clienti_asignati_fise_generate 
                  SET sters= 1 
                  where fisa_generata_id = $fisa_generata_id and client_id = $client_id ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);