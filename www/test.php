<?php
require_once 'etc/config.php';
header('content-type: application/json');

$zi_curenta = date('Y-m-d');
$traseu_id = 36;
$data_start = '2021-01-01';
$data_stop = '2021-02-28';
$depozit_id = 0;
$sofer_id = 0;
$masina_id = 0;
$luna_id = 0;
$stare_id = 1;

echo json_encode($b);

