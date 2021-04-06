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

//$nume_perioada = Calendar::getNumePerioadaById(1);

//$randament_client = Clienti::getRandamentByClientIdDinFise($id, array(
//    'an' => $id_an,
//    'perioada_id' => $id_perioada
//));
//$smarty->assign('randament_client', $randament_client);
//$id_an = getRequestParameter('id_an', '');

$randament_client = Fise::getRandamentAnualDinFiseByClientId($id, array(
    'an' => $an
));
$smarty->assign('randament_client', $randament_client);

$smarty->display($template_page);

