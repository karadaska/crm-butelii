<?php
$menu_curent = 4;
require_once 'etc/config.php';

$smarty->assign('name', 'Soferi');
$template_page = "adauga_sofer.tpl";

$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

if ($adauga) {
    $nume = getRequestParameter('nume', '');

    $query = "INSERT INTO soferi (nume) VALUES ('" . $nume . "')";
    myExec($query);
    header('Location: /soferi.php');
}
$smarty->display($template_page);