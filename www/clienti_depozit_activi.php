<?php
$menu_curent = 3;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina clienti');
$template_page = "clienti_depozit_activi.tpl";

if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$form_submit = getRequestParameter('form_submit', 0);

$depozit_id = getRequestParameter('depozit_id', '');
$smarty->assign('depozit_id', $depozit_id);

$lista_clienti = Clienti::getListaClientiDepozitActivi(array(
    'depozit_id' => $depozit_id
));

$smarty->assign('lista_clienti', $lista_clienti);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite',$lista_depozite);

$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime',$mtime);
$smarty->assign('totaltime',$totaltime);

$smarty->display($template_page);
