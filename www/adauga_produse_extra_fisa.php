<?php
$menu_curent = 10;
require_once 'etc/config.php';

$smarty->assign('name', 'Adauga produse extra la fisa');
$template_page = "adauga_produse_extra_fisa.tpl";

$adauga = getRequestParameter('adauga_extra', '');
$sterge = getRequestParameter('sterge', '');
$update = getRequestParameter('update', '');


$fisa_id = getRequestParameter('fisa_id', 0);
$smarty->assign('fisa_id', $fisa_id);

$client_id = getRequestParameter('id_client', 0);
$smarty->assign('client_id', $client_id);

$nume_client = Clienti::getNumeClientById($client_id);
$smarty->assign('nume_client', $nume_client);

$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$cantitate = getRequestParameter('cantitate', 0);

$pret = getRequestParameter('pret', 0);

$stare_produs = getRequestParameter('stare_produs', 1);
$smarty->assign('stare_produs', $stare_produs);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);

$lista_tip_stoc = Produse::getTipProdus();
$smarty->assign('lista_tip_stoc', $lista_tip_stoc);

if ($adauga) {
    Fise::AdaugaProduseExtraFisa($fisa_id, $client_id);
}

$produse_extra = Fise::getProduseExtraByFisaIdAndClientId($fisa_id, $client_id);
$smarty->assign('produse_extra', $produse_extra);

//pre($produse_extra);
$smarty->display($template_page);