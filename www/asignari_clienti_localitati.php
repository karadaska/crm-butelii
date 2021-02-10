<?php
$menu_curent = 6;

require_once 'etc/config.php';

$smarty->assign('name', 'Asignari clienti localitate');
$template_page = "asignari_clienti_localitati.tpl";

$id = getRequestParameter('id', 0);

$nume_localitate = Zone::getLocalitateById($id);
$smarty->assign('nume_localitate',$nume_localitate);

$clienti_asignati_localitate = Clienti::getClientiByLocalitateId($id);
$smarty->assign('clienti_asignati_localitate',$clienti_asignati_localitate);

$smarty->display($template_page);


