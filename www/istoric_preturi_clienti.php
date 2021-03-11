<?php
$menu_curent = 4;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina depozite');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Preturi clienti');
$template_page = "istoric_preturi_clienti.tpl";

$lista_preturi = Clienti::getPreturi();
$smarty->assign('lista_preturi', $lista_preturi);


$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('totaltime',$totaltime);

$smarty->display($template_page);
