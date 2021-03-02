<?php
$menu_curent = 6;
require_once('etc/config.php');

if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Print apeluri traseu');
$template_page = "print_apeluri_clienti.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id',$id);

$data_start = date("Y-m-d");

$nume_traseu = Trasee::getTraseuById($id);
$smarty->assign('nume_traseu',$nume_traseu);

$nr = 1;
$smarty->assign('nr',$nr);

$data_traseu = date('Y-m-d');
$smarty->assign('data_traseu',$data_traseu);

$stare_id = getRequestParameter('stare_id', 0);
$smarty->assign('stare_id', $stare_id);

$apel_traseu = Clienti::getApelTraseuNew(array(
    'traseu_id' => $id,
    'stare_id' => $stare_id
));
$lista_clienti = $apel_traseu['list'];
$smarty->assign('lista_clienti', $lista_clienti);

$total_obs = Trasee::getNumarObservatiiApelClientiByTraseuId(array(
    'traseu_id' => $id,
    'data_start' => $data_start
));

$smarty->assign('total_obs', $total_obs);

$total_urgente = Trasee::getNumarUrgenteApelClientiByTraseuId(array(
    'traseu_id' => $id,
    'data_start' => $data_start
));

$smarty->assign('total_urgente', $total_urgente);

$clienti_cu_observatii = Clienti::getClientiCuNumarGresitSauNumarLipsaApelClientiByTraseuId($id, $opts =array(
    'data_start'=>$data_start
));
$smarty->assign('clienti_cu_observatii', $clienti_cu_observatii);


$clienti_cu_urgente = Clienti::getClientiCuUrgenteApelClientiByTraseuId($id, $opts = array(
    'data_start' => $data_start
));
$smarty->assign('clienti_cu_urgente',$clienti_cu_urgente);


$smarty->display($template_page);
?>



