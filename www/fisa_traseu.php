<?php
$menu_curent = 3;

require_once 'etc/config.php';
$smarty->assign('name', 'Fisa traseu');
$template_page = "fisa_traseu.tpl";
$fisa_id = getRequestParameter('fisa_id', 0);
$smarty->assign('fisa_id', $fisa_id);

$form_submit = getRequestParameter('form_submit', 0);

$depozit_id = getRequestParameter('depozit_id', 0 );
$smarty->assign('depozit_id', $depozit_id);

$traseu_id = getRequestParameter('traseu_id', 0 );
$smarty->assign('traseu_id', $traseu_id);

$sofer_id = getRequestParameter('sofer_id', 0 );
$smarty->assign('sofer_id', $sofer_id);

$masina_id = getRequestParameter('masina_id', 0 );
$smarty->assign('masina_id', $masina_id);

$luna_id = getRequestParameter('luna_id', date('m'));
$smarty->assign('luna_id', $luna_id);

$lista_fise = Stocuri::getFise(array(
    'depozit_id' => $depozit_id,
    'traseu_id' => $traseu_id,
    'sofer_id' => $sofer_id,
    'masina_id' => $masina_id,
    'luna_id' => $luna_id
));

$smarty->assign('lista_fise',$lista_fise);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite',$lista_depozite);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_masini = ParcAuto::getMasini();
$smarty->assign('lista_masini', $lista_masini);

$lista_soferi = ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$lunile_anului = Stocuri::getLunileAnului();
$smarty->assign('lunile_anului', $lunile_anului);

$fisa_generata = Stocuri::getFisaGenerataById($fisa_id);
$smarty->assign('fisa_generata', $fisa_generata);

$smarty->display($template_page);

