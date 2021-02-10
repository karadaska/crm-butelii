<?php
$menu_curent = 1;
require_once 'etc/config.php';
$smarty->assign('name', 'Pagina principala');
$stoc_produse = Stocuri::getStoc();
$smarty->assign('stoc_produse', $stoc_produse);


$template_page = "dashboard.tpl";
$smarty->display($template_page);

$fisa_generata = Stocuri::getFisaGenerataById(3);
$smarty->assign('fisa_generata', $fisa_generata);


$stoc = Stocuri::getStoc();

//pre($fisa_generata);
//pre($stoc);

?>