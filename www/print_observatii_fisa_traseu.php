<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);

$smarty->assign('name', 'Print raport complet suna traseu');
$template_page = "print_observatii_fisa_traseu.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id',$id);

$nume_traseu = Trasee::getTraseuById($id);
$smarty->assign('nume_traseu',$nume_traseu);

$data_traseu = date('Y-m-d');
$smarty->assign('data_traseu',$data_traseu);

$observatie_id = getRequestParameter('observatie_id', 0);
$smarty->assign('observatie_id', $observatie_id);

$urgent = getRequestParameter('urgent', -1);
$smarty->assign('urgent', $urgent);

$data_start = getRequestParameter('data_start','');
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', '');
$smarty->assign('data_stop', $data_stop);

$traseu_id = getRequestParameter('traseu_id', 0);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$stare_id = getRequestParameter('stare_id', -1);
$smarty->assign('stare_id', $stare_id);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$lista_clienti = Clienti::getObservatiiClientiDinFiseGenerate(array(
    'traseu_id' => $id,
    'observatie_id' => $observatie_id,
    'data_start' => $data_start,
    'data_stop' => $data_stop
));

$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
?>



