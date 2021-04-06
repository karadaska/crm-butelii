<?php
require_once 'etc/config.php';
header('content-type: application/json');

$zi_curenta = date('Y-m-d');
$traseu_id = 1;
$data_start = '2021-01-01';
$data_stop = '2021-03-31';
//$depozit_id = 0;
//$sofer_id = 0;
//$masina_id = 0;
//$luna_id = 0;
//$stare_id = 1;

//CLIENTI -----------------------------------------------------------


//$b = Clienti::getRandamentByClientIdDinFiseNew(1348, array(
//    'an' => 2021,
//    'perioada_id' => 4
//));
$b = Calendar::getNumePerioadaById(1);
echo json_encode($b);
