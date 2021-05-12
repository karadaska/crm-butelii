<?php
//define('ROOT_DIR', '/var/www/html/fofoweb/');
//define('SMARTY_DIR', ROOT_DIR . 'Smarty-3.1.15/libs/');
//define('WWW_DIR', ROOT_DIR . 'www/');
//define("SITE_TITLE", "crm.butelie.ro");
//define("SITE_URL", "http://fofoweb.antibiotice.ro");
//define('AVATARE_UPLOAD_ROOT', WWW_DIR . "images/avatars/");
//
//
//require SMARTY_DIR . '/Smarty.class.php';
//
//$smarty = new Smarty;
//$smarty->setTemplateDir(WWW_DIR . 'templates/');
//$smarty->setCompileDir(ROOT_DIR . 'templates_c/');
//$smarty->setConfigDir(ROOT_DIR . 'configs/');
//$smarty->setCacheDir(ROOT_DIR . 'cache/');
//
//$smarty->debugging = false;
//$smarty->caching = false;
//$smarty->cache_lifetime = 60;
//
//
//$allowed_filetypes = array('.gif', '.jpg', '.png', '.xls', '.pdf', '.doc', '.csv');
//$smarty->assign('title', 'CRM');
//
//define('MYSQL_HOST', 'localhost');
//define('MYSQL_USER', 'dinobaby_crm');
//define('MYSQL_PASSWORD', 'Crmvlad20!');
//define('MYSQL_DB', 'dinobaby_crm');
//
//require_once WWW_DIR . '/include/functions.php';
//
//$db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASSWORD);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);
//
//require_once WWW_DIR . '/include/class.session.php';
//require_once WWW_DIR . '/include/class.utilizatori.php';
//require_once WWW_DIR . '/include/class.clienti.php';
//require_once WWW_DIR . '/include/class.parcauto.php';
//require_once WWW_DIR . '/include/class.stocuri.php';
//require_once WWW_DIR . '/include/class.target.php';
//require_once WWW_DIR . '/include/class.trasee.php';
//require_once WWW_DIR . '/include/class.fise.php';
//require_once WWW_DIR . '/include/class.asignari.php';
//require_once WWW_DIR . '/include/class.depozite.php';
//require_once WWW_DIR . '/include/class.zone.php';
//require_once WWW_DIR . '/include/class.calendar.php';
//require_once WWW_DIR . '/include/class.produse.php';
//require_once WWW_DIR . '/include/class.test.php';
//require_once WWW_DIR . '/include/class.functii.php';

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
//$b = Fise::getTotalCantitatiByFisaId(1648);
//$b = Stocuri::getCantitatiVanduteLaSosireByFisaIdAndClientId(1648,1566);
//$b = Stocuri::getIncarcaturaMasinaSosireByFisaIdCompleteazaFisa(1644);
//$b = Stocuri::getRealizatClientByFisaId(1654, 1332);
//$b = Stocuri::getFisaGenerataById(1654);
//$b = Stocuri::getFisaGenerataByIdPrintFisaTraseu(1654);
//$b = Printare::PrintFisaSosire(1656);
//$b = Fise::getProduseVanduteByFisaId(1655);
//$b =Fise::getCantitatiBgByFisaIdAndClientIdAndTipProdusId(1655, 2563,1);
//$b = Fise::GetProdusExtraByClientIdProdusIdAndFisaAnd(2584, 1655);
//$b = Trasee::getAsignareClientiTraseuByClientid(10, array(
//    'perioada_inceput' => '2020-11-01',
//    'perioada_sfarsit' =>'2020-11-31'
//
//));
//$b = Clienti::getRandamentByClientIdDinRandamentClienti(1332, array(
//    'an' => 2020,
//    'perioada_id' => 1
//));

//$b = Clienti::getCantitatiExtraByClientIdAndTraseuId(1332, 1, array(
//    'an' => 2021,
//    'perioada_id' => 5
//));


//$b = Clienti::getCantitatiExtraByClientId(1332, array(
//    'an' => 2021,
//    'perioada_id' => 5
//));
//$b = Fise::getRandamentLunarDinFiseByClientIdAndPerioada(1332, array(
//    'an' => 2021,
//    'perioada_id' => 05
//));

echo json_encode($b);
