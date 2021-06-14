<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Randament depozit');
$template_page = "randament_depozit.tpl";

$depozit_id = getRequestParameter('depozit_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_depozite = Depozite::getDepoziteInfiintariClienti();
$smarty->assign('lista_depozite', $lista_depozite);

foreach ($lista_depozite as $depozit) {
    $lista_ani = Calendar::getAniNewInfiintariClienti(array(
        'depozit_id' => $depozit['depozit_id']
    ));
    $smarty->assign('lista_ani_' . $depozit['depozit_id'], $lista_ani);
}

$smarty->display($template_page);

