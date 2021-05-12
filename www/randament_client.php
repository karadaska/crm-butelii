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

$perioada_id = getRequestParameter('perioada_id', date('n'));
$smarty->assign('perioada_id', $perioada_id);

$data_start = date('Y-m-d');

$nume_client = Clienti::getNumeClientById($id);
$smarty->assign('nume_client', $nume_client);

$lista_perioade = Calendar::getPerioada();
$smarty->assign('lista_perioade', $lista_perioade);

$an = getRequestParameter('an', date('Y'));
$smarty->assign('an', $an);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$target_client = Target::getSumaTargetClient($id);
$smarty->assign('target_client', $target_client);

if (($an >= 2021 || ($an == 2020 && $perioada_id >= 11))) {
    $randament_client = Fise::getRandamentAnualDinFiseByClientId($id, array(
        'an' => $an
    ));

    $smarty->assign('randament_client', $randament_client);

    $randamentextra = Clienti::getCantitatiExtraByClientId($id, array(
        'an' => $an,
        'perioada_id' => $perioada_id
    ));
    $smarty->assign('randamentextra', $randamentextra);

} else {
    $randament_client = Clienti::getRandamentByClientIdDinRandamentClienti($id, array(
        'an' => $an,
        'perioada_id' => $perioada_id
    ));
    $smarty->assign('randament_client', $randament_client);
}

$smarty->display($template_page);

