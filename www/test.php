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
//$b = Clienti::getListaClientiByPret(12,1,1);
//$b = Clienti::getTipRastelByClientId(1802);
//$b = Clienti::getAsignariClientiByFisaGenerataId(138);
//$b = Asignari::getAsignariClientiByTraseuId(36);
//$b = Clienti::getObservatieApelClientiByClientId(2538);
//$b = Clienti::getClientiCuUrgenteApelClientiByTraseuId(28, array(
//    'data_start' => $zi_curenta
//));

//$b = Clienti::getRaportLivrariClienti(29, $opts = array(
//    'data_start' => '2021-02-01',
//    'data_stop' => '2021-02-03'
//));
//$b =Clienti::getPreturiLivrariClienti($traseu_id, $opts = array(
//        'data_start' => $data_start,
//    'data_stop' => $data_stop
//));
//$b = Clienti::getPreturiByProdusId(1,28, $opts = array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//));
//$b = Clienti::getTotalCantitatiByPret(1, 28, 64);

//$b = Clienti::getCantitatiProduseFisaSosireByClientId(2433,298);
//$b = Clienti::getFiseByClientId(2433);
//$b = Stocuri::getCantitatiVanduteLaSosireByFisaIdAndClientId(298,2433);

//
//$b = ParcAuto::getRaportLivrariSoferi(23,
//    array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));

//$b = Stocuri::getCantitatiProduseClientiByFisaId(188);
//
//$b = ParcAuto::getRaportLivrariMasini(2,
//    array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));

//$b = ParcAuto::getRaportLivrariTrasee(1,
//    array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));

//$b = Produse::getProduseVanduteBySoferId(23, array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//   ));

//$b = ParcAuto::getTotalCantitatiBGBySoferIdAndTraseuId(23, 29, array(
//$b = ParcAuto::getTotalCantitatiBGBySoferIdAndTraseuId(23, 29, array(
//    'data_start' =>$data_start,
//    'data_stop' =>$data_stop,
//));

//$b = Asignari::getAsignariClientiByTraseuId(36, array(
//    'stari' => array(3)
//));

//$b = Stocuri::getFisaGenerataById(594);
//$b = Clienti::getFiseByClientId(1802);

//$b = Clienti::getRaportLivrariClienti(2, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop,
//));
//
//$b = Clienti::getTotalCantitatiBGDinFise(2376,28, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop,
//));
//$b = Clienti::getNumarClientiByPret(55, 2 ,3);
//$b = Clienti::getCountClientiByPret();
//$b = Clienti::getDiferentePreturiByClientIdAndTraseuId(2433, 36, 1);
//$b = Clienti::getFiseByClientId(1397);
//$b = Clienti::getPretByClientIdAndProdusId(1397, 2);
//$b = Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId(1396, 213);
//$b = Clienti::getPreturiBG11CuComisionByClientId(2433,36);
////$b= Clienti::getPreturiBG11CuComisionByClientId(2433 , 36, array(
////    'data_start' => $data_start,
////    'data_stop' => $data_stop
////));

//$b = Stocuri::getCantitatiVanduteLaSosireByFisaIdAndClientId(153,2155);

//$b = Clienti::getTotalCantitatiBGDinFise(2433 ,36);
//$b = Clienti::getAsignariClientiByFisaGenerataId(172);

//$b = Clienti::getObservatiiClientiDinFiseGenerate(array(
//    'traseu_id' => $traseu_id,
//    'observatie_id' => $observatie_id,
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//));
//$b = Clienti::getAsignariClientiByFisaGenerataId(172);
//$b = Clienti::getClientiByTraseuId(36);
//$b = Clienti::getApelTraseuNew(array(
//    'traseu_id' => $traseu_id,
//    'stare_id' => $stare_id,
//));
//$b = Clienti::getRaportLivrariClienti(28, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//));
//$b = Clienti::getPreturiAR8CuComisionByClientId(2376, 28, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//));

//$b = Clienti::getCantitatiAr8ByPretClient(2376, 28,33, array(
////    'data_start' => $data_start,
////    'data_stop' => $data_stop
//));

//$b = Clienti::getPreturiCuComisionByClientId(2456);
//$b = Clienti::getCantitatiByPretClient(2544, 55);
//Stocuri -----------------------------------------------------------
//Stocuri -----------------------------------------------------------
//$b = Stocuri::getFise();
//$b = Stocuri::getCantitatiProduseClientiByFisaId(183);


//$cantitati_produse_fisa_intoarcere = Clienti::getCantitatiProduseFisaSosireByClientId(array(
//    'client_id' => 2544
//));

//$b = Stocuri::getCantitatiIntoarcereByFisaId(172);

//TRASEE----------------------------------------------------------

//$b = Trasee::getNeconcordantaPreturiClientiByTraseuId(28);
//$b = Trasee::getTraseeAsignateLaClientByClientId(1899);
//$b = Trasee::getTrasee();
//$b = Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId(1593,146);


//TEST
//$b = Test::getApelTraseu2($opts=array(
//'traseu_id' =>36
//));


//$b = Test::getFise(array(
//    'depozit_id' => $depozit_id,
//    'traseu_id' => $traseu_id,
//    'sofer_id' => $sofer_id,
//    'masina_id' => $masina_id,
//    'luna_id' => $luna_id
//));

//$b = Stocuri::getMiscariByFisaId(148);
//$b = Stocuri::getIncarcaturaMasinaPlecareByFisaId(148);
//$b = Stocuri::getIncarcaturaMasinaSosireByFisaId(157);

//$b = Stocuri::getCountClientiByPret();
//$b = Stocuri::getStoc();


//$b = Stocuri::getFisaGenerataById(188);

//$b = Clienti::getApelTraseuNew(array(
//    'traseu_id' => 1,
//    'stare_id' => 1
//));

//$b = Clienti::getTipObservatiiDinApeluri(1, array(
//    'data_start' => '2021-03-08'
//));

//$b = Clienti::getTotalObsApeluriClientiByObsAndTraseuIdAndData(7, 1,  array(
//    'data_start' => '2021-03-08'
//));

//$b = Trasee::getNumarObservatiiApelClientiByTraseuId(array(
//        'traseu_id' => 1,
//        'data_start' => '2021-03-09'
//));

//$b = Stocuri::getFisaGenerataById(362);
//$b = Clienti::getGoaleApelClientiByClientId(2267, 1, 1);
//$b = ParcAuto::getRaportLivrariTrasee($traseu_id,
//    array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));

//$b = ParcAuto::getTotalKmByTraseuId(array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop,
//    'traseu_id' => 1,
//    'sofer_id' => 23,
//    'masina_id' => 2
//));
//$b = Stocuri::getIntoarcereMarfaByFisaIdAndprodusId(591,1);
//$b = Fise::getPlecareMarfaByFisaIdMiscariFise(591);
//$b = Stocuri::getPlecareMarfaByFisaIdAndprodusId(595,3);
//$b = Clienti::getRandamentByClientIdAndAnAndPerioadaId(2608, 30, 2, 3);
$b = Clienti::getRandamentByClientIdDinFise2(1332);
//$b = Fise::getAniRandamentDinFiseByClientId(1332);
echo json_encode($b);