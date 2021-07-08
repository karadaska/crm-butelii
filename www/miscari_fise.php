<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport miscari fise');
$template_page = "miscari_fise.tpl";
$form_submit = getRequestParameter('form_submit', 0);


$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_soferi= ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$lista_masini= ParcAuto::getListaMasini();
$smarty->assign('lista_masini', $lista_masini);

$lista_perioada= Calendar::getPerioada();
$smarty->assign('lista_perioada', $lista_perioada);

$lista_ani= Calendar::getAni();
$smarty->assign('lista_ani', $lista_ani);

$miscari_fise = Fise::getMiscariFise();
$smarty->assign('miscari_fise', $miscari_fise);


$smarty->display($template_page);

