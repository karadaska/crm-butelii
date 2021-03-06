<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport lunar soferi');
$template_page = "raport_livrari_soferi.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$sofer_id = getRequestParameter('sofer_id', 0);
$smarty->assign('sofer_id', $sofer_id);

$data_start = getRequestParameter('data_start', date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$lista_soferi = ParcAuto::getListaSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$livrari_soferi = ParcAuto::getRaportLivrariSoferi($sofer_id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_soferi', $livrari_soferi);

//foreach ($livrari_soferi['trasee'] as $item) {
// foreach ($item['km'] as $unu){
//     pre($unu);
// }
//}
$smarty->display($template_page);

