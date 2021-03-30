<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Randament client');
$template_page = "randament_client.tpl";

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$perioada_id = getRequestParameter('perioada_id', 0);
$smarty->assign('perioada_id', $perioada_id);

$an = getRequestParameter('an', 2);
$smarty->assign('an', $an);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$lista_perioade = Calendar::getPerioada();
$smarty->assign('lista_perioade', $lista_perioade);

$lista_ani = Calendar::getAni();
$smarty->assign('lista_ani', $lista_ani);

$id_an = getRequestParameter('id_an', '');
$id_perioada = getRequestParameter('id_perioada', '');

$randament = Clienti::getRandamentByClientIdDinFise(1470, array(
    'an' => $id_an,
    'perioada_id' => $id_perioada
));

$smarty->display($template_page);

