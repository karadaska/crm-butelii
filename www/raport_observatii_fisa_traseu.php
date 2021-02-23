<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Raport observatii fisa traseu');
$template_page = "raport_observatii_fisa_traseu.tpl";
$form_submit = getRequestParameter('form_submit', 0);
$valoare_client_id = getRequestParameter('valoare_client_id', 0);
//$observatie_checkbox = getRequestParameter('observatie_checkbox', '');

$aplica = getRequestParameter('aplica', 0);
$data_start = getRequestParameter('data_start', date('Y-m-d'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-d'));
$smarty->assign('data_stop', $data_stop);

$traseu_id = getRequestParameter('traseu_id', 0);
$smarty->assign('traseu_id', $traseu_id);

$observatie_id = getRequestParameter('observatie_id', 0);
$smarty->assign('observatie_id', $observatie_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$data_start_interval = getRequestParameter('data_start_interval', '');
$smarty->assign('data_start_interval', $data_start_interval);

$data_stop_interval = getRequestParameter('data_stop_interval', '');
$smarty->assign('data_stop_interval', $data_stop_interval);
//
//$to_add = array();
//if (isset($_POST['aplica'])) {
//    foreach ($_POST as $key => $value) {
//        if (preg_match('/^obs/', $key)) {
//            $splits = explode("_", $key);
//            $observatie_id = $splits[1];
//
//            if (!isset($to_add[$observatie_id])) {
//                $to_add[$observatie_id] = array();
//            }
//
//            $to_add[$observatie_id][$splits[0]] = $value;
//        }
//    }
//}

$lista_clienti = Clienti::getObservatiiClientiDinFiseGenerate(array(
    'traseu_id' => $traseu_id,
    'observatie_id' => $observatie_id,

    'data_start' => $data_start,
    'data_stop' => $data_stop
));

$smarty->assign('lista_clienti', $lista_clienti);

$lista_observatii_filtrate = Clienti::getListaObservatiiPentruFiltrare();
$smarty->assign('lista_observatii_filtrate', $lista_observatii_filtrate);

$smarty->display($template_page);
