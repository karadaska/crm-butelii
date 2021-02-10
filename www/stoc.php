<?php
$menu_curent = 10;
require_once 'etc/config.php';

$smarty->assign('name', 'Stoc');
$template_page = "stoc.tpl";

if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$form_submit = getRequestParameter('form_submit', 0);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$luna_id = getRequestParameter('luna_id', 0);
$smarty->assign('luna_id', $luna_id);

$depozit_id = getRequestParameter('depozit_id', 0);
$smarty->assign('depozit_id', $depozit_id);

$lunile_anului = Stocuri::getLunileAnului();
$smarty->assign('lunile_anului', $lunile_anului);

$stocuri = Stocuri::getStoc(array(
    'depozit_id' => $depozit_id,
    'luna_id' => $luna_id
));

$smarty->assign('stocuri', $stocuri);

$smarty->display($template_page);