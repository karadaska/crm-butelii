<?php
$menu_curent = 3;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina clienti');
$template_page = "clienti_afis.tpl";

if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$form_submit = getRequestParameter('form_submit', 0);

$targetByClientId = Target::getTargetClient($id);
$smarty->assign('targetByClientId',$targetByClientId);

$depozit_id = getRequestParameter('depozit_id', '');
$smarty->assign('depozit_id', $depozit_id);

$afis_id = getRequestParameter('afis_id', '');
$smarty->assign('afis_id', $afis_id);

$traseu_id = getRequestParameter('traseu_id', '');
$smarty->assign('traseu_id', $traseu_id);

$stare_id = getRequestParameter('stare_id', '');
$smarty->assign('stare_id', $stare_id);

$zona_id = getRequestParameter('zona_id', '');
$smarty->assign('zona_id', $zona_id);

$lista_clienti = Clienti::getListaClientiTipAfis(array(
    'depozit_id' => $depozit_id,
    'traseu_id' => $traseu_id,
    'stare_id' => $stare_id,
    'tip_afis' => $afis_id
));

$smarty->assign('lista_clienti', $lista_clienti);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_afis = Produse::getTipAfis();
$smarty->assign('lista_afis', $lista_afis);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite',$lista_depozite);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari',$lista_stari);

$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime',$mtime);
$smarty->assign('totaltime',$totaltime);

$smarty->display($template_page);
