<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport miscari fise');
$template_page = "miscari_fise.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$id_an = getRequestParameter('id_an', '');

$an = getRequestParameter('an', date('Y'));
$smarty->assign('an', $an);

$perioada_id = getRequestParameter('perioada_id', date('n'));
$smarty->assign('perioada_id', $perioada_id);

$depozit_id = getRequestParameter('depozit_id', '');
$smarty->assign('depozit_id', $depozit_id);

$traseu_id = getRequestParameter('traseu_id', '');
$smarty->assign('traseu_id', $traseu_id);

$masina_id = getRequestParameter('masina_id', '');
$smarty->assign('masina_id', $masina_id);

$sofer_id = getRequestParameter('sofer_id', '');
$smarty->assign('sofer_id', $sofer_id);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_soferi= ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$lista_masini= ParcAuto::getListaMasini();
$smarty->assign('lista_masini', $lista_masini);

$lista_ani = Calendar::getAni();
$smarty->assign('lista_ani', $lista_ani);

$lista_perioade = Calendar::getPerioada();
$smarty->assign('lista_perioade', $lista_perioade);

$miscari_fise = Fise::getMiscariFise(array(
    'an' => $an,
    'perioada_id' => $perioada_id,
    'depozit_id' => $depozit_id,
    'traseu_id' => $traseu_id,
    'sofer_id' => $sofer_id,
    'masina_id' => $masina_id
));
$smarty->assign('miscari_fise', $miscari_fise);


$smarty->display($template_page);

