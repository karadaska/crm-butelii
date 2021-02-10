<?php
require_once ('etc/config.php');
$menu_curent = 8;

if(!Utilizatori::hasRights(1,3)){
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Log Login CRM');



$template = 'log_login.tpl';
$smarty->display($template);