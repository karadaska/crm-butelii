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

$observatie_input = getRequestParameter('observatie_input', '');
//$smarty->assign('observatie_input', $observatie_input);

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

$data_start_interval= getRequestParameter('data_start_interval', '');
$smarty->assign('data_start_interval', $data_start_interval);

$data_stop_interval= getRequestParameter('data_stop_interval', '');
$smarty->assign('data_stop_interval', $data_stop_interval);

$lista_clienti = Clienti::getObservatiiClientiDinFiseGenerate(array(
    'traseu_id' => $traseu_id,
    'observatie_id' => $observatie_id,
    'observatie_input' => $observatie_input,
    'data_start' => $data_start,
    'data_stop' => $data_stop
));

$smarty->assign('lista_clienti', $lista_clienti);

$lista_observatii_filtrate = Clienti::getListaObservatiiPentruFiltrare();
$smarty->assign('lista_observatii_filtrate', $lista_observatii_filtrate);

//pre($observatie_input);

$smarty->display($template_page);
