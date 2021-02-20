<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Numar Clienti By Pret');
$template_page = "numar_clienti.tpl";

$pret_input= getRequestParameter('pret_input', $pret_input);
$smarty->assign('pret_input', $pret_input);

$depozit_id= getRequestParameter('depozit_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_clienti= Clienti::getCountClientiByPret();
$smarty->assign('lista_clienti', $lista_clienti);



$smarty->display($template_page);

