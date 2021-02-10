<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Autentificare utilizator');

if ($session->is_logged_in()) {
    web_redirect('/dashboard.php');
}
$template_page = "footer.tpl";



$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime',$mtime);
$smarty->assign('totaltime',$totaltime);

$smarty->display($template_page);


