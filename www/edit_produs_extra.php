<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit produs');
$template = 'edit_produs_extra.tpl';

$pret = getRequestParameter('pret', '');
$cantitate = getRequestParameter('cantitate', '');
$modifica = getRequestParameter('modifica', '');
$sterge = getRequestParameter('sterge', '');

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
    Fise::UpdateProdusExtra($id, $client_id, $fisa_id);
    header('Location: /edit_produs_extra.php?id=' . $id .'&id_client=' . $client_id .'&fisa_id=' . $fisa_id);
}

if ($sterge) {
    Fise::StergeProdusExtra($id, $client_id, $fisa_id);
    header('Location: /adauga_produse_extra_fisa.php?fisa_id=' . $fisa_id .'&id_client=' . $client_id);
}

$smarty->display($template);

