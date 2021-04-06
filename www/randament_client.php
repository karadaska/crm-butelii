<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Randament client');
$template_page = "randament_client.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$data_start = date('Y-m-d');

$an = getRequestParameter('an', date('Y'));
$smarty->assign('an', $an);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$target_client = Target::getSumaTargetClient($id);
$smarty->assign('target_client', $target_client);

$randament_client = Fise::getRandamentAnualDinFiseByClientId($id, array(
    'an' => $an
));
$smarty->assign('randament_client', $randament_client);

$smarty->display($template_page);

