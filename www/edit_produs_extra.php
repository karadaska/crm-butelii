<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit produs');
$template = 'edit_produs_extra.tpl';

$modifica = getRequestParameter('modifica', '');

$id = getRequestParameter('id', 0);
$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$stare_produs = getRequestParameter('stare_produs', 0);
$pret_produs = getRequestParameter('pret_produs', 0);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

$produs_extra = Fise::GetProdusExtraByClientIdAndFisa($tip_produs_id, $stare_produs, $client_id, $fisa_id);
$smarty->assign('produs_extra', $produs_extra);


if ($modifica) {

        header('Location: /edit_produs_extra.php?id=' . $id);
}

$smarty->display($template);

