<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Autentificare utilizator');

if ($session->is_logged_in()) {
    web_redirect('/dashboard.php');
}

$template_page = "index.tpl";

$smarty->display($template_page);


