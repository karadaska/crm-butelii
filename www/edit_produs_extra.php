<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit produs');
$template = 'edit_produs_extra.tpl';

$modifica = getRequestParameter('modifica', '');

$client_id = getRequestParameter('id_client', 0);
$smarty->assign('client_id', $client_id);

$fisa_id = getRequestParameter('fisa_id', 0);
$smarty->assign('fisa_id', $fisa_id);

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$stare_produs = getRequestParameter('stare_produs', 0);
$pret_produs = getRequestParameter('pret_produs', 0);


$produs_extra = Fise::GetProdusExtraByClientIdAndFisa($id, $client_id, $fisa_id);
$smarty->assign('produs_extra', $produs_extra);

if ($modifica) {

    header('Location: /edit_produs_extra.php?id=' . $id);
}

$smarty->display($template);

