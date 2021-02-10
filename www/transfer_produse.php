<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Clienti');
$template_page = "transfer_produse.tpl";

$transfera_din_depozit_id = getRequestParameter('transfera_din_depozit_id', '');
$transfera_din_tip_produs_id = getRequestParameter('transfera_din_tip_produs_id', '');
$transfera_din_stare_id = getRequestParameter('transfera_din_stare_id', '');
$cantitate_transferata = getRequestParameter('cantitate_transferata', '');
$transferat_in_depozit_id = getRequestParameter('transferat_in_depozit_id', '');
$transferat_in_produs_id = getRequestParameter('transferat_in_produs_id', '');
$transferat_in_stare_id = getRequestParameter('transferat_in_stare_id', '');
$transfer_produse = getRequestParameter('transfer_produse', '');

$data_intrare = date('Y-m-d');


$conditie = $transfera_din_depozit_id > 0 and $transfera_din_tip_produs_id > 0 and $transfera_din_stare_id > 0 and $cantitate_transferata > 0
and $transferat_in_depozit_id > 0 and $transferat_in_produs_id > 0 and $transferat_in_stare_id > 0;

if (isset($_POST['transfer_produse']) and $conditie) {
    $data_intrare = date('Y-m-d');
//Selectam cantitatea de unde scadem din stoc
    $select_cantitate_produs_pentru_transfer = "SELECT cantitate from stoc 
                            where depozit_id = '" . $transfera_din_depozit_id . "'
                            and tip_produs_id = '" . $transfera_din_tip_produs_id . "'
                            and stare_produs = '" . $transfera_din_stare_id . "'                           
                            LIMIT 1";
    $cantitate = myQuery($select_cantitate_produs_pentru_transfer);
    $ret = $cantitate->fetch(PDO::FETCH_ASSOC);
    $valoare_cantitate_stoc = $ret['cantitate'];

    if ($cantitate->rowCount() != 0) {
//        Scadem din stoc ce am selectat
        $update_cantitate_transfer = "UPDATE stoc 
                                      set cantitate = '" . ($valoare_cantitate_stoc - $cantitate_transferata). "'
                                      where depozit_id = '" . $transfera_din_depozit_id . "'
                                      and tip_produs_id = '" . $transfera_din_tip_produs_id . "'
                                      and stare_produs = '" . $transfera_din_stare_id . "'
        ";
        myExec($update_cantitate_transfer);

//        Selectam unde sa adaugam cantitatea

        $select_unde_facem_transfer = "SELECT cantitate from stoc
                            where depozit_id = '" . $transferat_in_depozit_id . "'
                            and tip_produs_id = '" . $transferat_in_produs_id . "'
                            and stare_produs = '" . $transferat_in_stare_id . "'
                            LIMIT 1";
        $rezultat_select = myQuery($select_unde_facem_transfer);
        $ret = $rezultat_select->fetch(PDO::FETCH_ASSOC);
        $valoare_cantitate_pentru_adaugat = $ret['cantitate'];

////        Adaugam cantitatea
        $adaug_cantitate_transferata = "UPDATE stoc
                                      set cantitate = '" . ($valoare_cantitate_pentru_adaugat + $cantitate_transferata). "'
                                      where depozit_id = '" . $transferat_in_depozit_id . "'
                                      and tip_produs_id = '" . $transferat_in_produs_id . "'
                                      and stare_produs = '" . $transferat_in_stare_id . "'
        ";
        myExec($adaug_cantitate_transferata);
        header('Location: /transfer_produse.php');
    } else {
        debug('Nu putem face transfer la produse');
    }
}
$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);

$smarty->display($template_page);