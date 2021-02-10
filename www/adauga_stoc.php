<?php
$menu_curent = 10;
require_once 'etc/config.php';

$smarty->assign('name', 'Stoc');
$template_page = "adauga_stoc.tpl";

$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

$depozit_id = getRequestParameter('depozit_id', 0);
$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$cantitate = getRequestParameter('cantitate', 0);
$data_intrare = getRequestParameter('data_intrare', '');

$stare_produs = getRequestParameter('stare_produs', 1);
$smarty->assign('stare_produs', $stare_produs);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);


$lista_tip_stoc = Produse::getTipProdus();
$smarty->assign('lista_tip_stoc', $lista_tip_stoc);

if ($adauga) {
    if ($depozit_id > 0 and $tip_produs_id > 0 and Utilizatori::hasRights(1)) {
        $query = "insert into stoc (depozit_id, tip_produs_id, stare_produs,cantitate, data_intrare)
        values ('" . $depozit_id . "', '" . $tip_produs_id . "', '" . $stare_produs . "' , '" . $cantitate . "', '" . $data_intrare . "');";
        myExec($query);
    }

}
$smarty->display($template_page);