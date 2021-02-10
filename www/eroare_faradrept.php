<?php
require_once "etc/config.php";
$smarty->assign('name', 'Nu ai acces');
$template_page = "eroare_faradrept.tpl";

$smarty->display($template_page);