<?php
require_once 'etc/config.php';
header('content-type: application/json');

$zi_curenta = date('Y-m-d');
$traseu_id = 2;
$sofer_id = 22;
$masina_id = 30;
$data_start = '2021-01-01';
$data_stop = '2021-01-31';
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
//$b = Calendar::getNumePerioadaById(1);
//$b = Clienti::getOrdineByClientIdAndTraseuId(1332, 1);

//$b = Clienti::getRandamentByClientIdDinRandamentClienti(1332, array(
//    'an' => 2020,
//    'perioada_id' => 5
//));
//$b = Fise::GetProdusExtraByClientIdAndFisa(1, 1332, 1452);
//$b = Fise::GetProdusExtraByProdusIdAndFisa(1, 1452);
//$b = ParcAuto::getRaportLivrariMasini(26,
//    array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));
//$b = ParcAuto::getCantitatiByTraseuAndSoferAndMasina(4,23,26, array(
//    'data_start' => $data_start,
//        'data_stop' => $data_stop
//));

//$b = Fise::getFiseLivrariMasini(array(
//    'masina_id' => 29,
//    'traseu_id' => 4,
//    'sofer_id' => 22,
//    'data_start' => '2021-01-01',
//    'data_stop' => '2021-01-31'
//));

//$b = ParcAuto::getRaportLivrariMasini(30, array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//));
//$b = Stocuri::getFisaGenerataById(360);
//$b = Stocuri::getIncarcaturaMasinaSosireByFisaId(1644);
$b = Fise::getTotalCantitatiByFisaId(1648);
//$b = Stocuri::getCantitatiVanduteLaSosireByFisaIdAndClientId(1648,1566);
//$b = Stocuri::getIncarcaturaMasinaSosireByFisaIdCompleteazaFisa(1644);
echo json_encode($b);
