<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Neconcordanta preturi la clienti');
$template_page = "neconcordanta_preturi.tpl";

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_clienti = Trasee::getNeconcordantaPreturiClientiByTraseuId($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);


//pre($lista_clienti);
$smarty->display($template_page);

