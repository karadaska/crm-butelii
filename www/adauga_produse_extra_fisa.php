<?php
$menu_curent = 10;
require_once 'etc/config.php';

$smarty->assign('name', 'Adauga produse extra la fisa');
$template_page = "adauga_produse_extra_fisa.tpl";

$adauga = getRequestParameter('adauga', '');
$id = getRequestParameter('id', 0);
$client_id = getRequestParameter('client_id', 0);

$nume_client = Clienti::getNumeClientById($id);
$smarty->assign('nume_client', $nume_client);

$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$cantitate = getRequestParameter('cantitate', 0);

$stare_produs = getRequestParameter('stare_produs', 1);
$smarty->assign('stare_produs', $stare_produs);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);

$lista_tip_stoc = Produse::getTipProdus();
$smarty->assign('lista_tip_stoc', $lista_tip_stoc);

//if ($adauga) {
//
//}
$smarty->display($template_page);