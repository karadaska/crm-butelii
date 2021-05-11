<?php
$menu_curent = 6;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina fisa traseu');

if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Edit traseu');
$template = 'edit_traseu.tpl';

$nr = 1;
$smarty->assign('nr',$nr);

$nume = getRequestParameter('nume', 0);
$stare_id = getRequestParameter('stare_id', 1);
$stare_masina = getRequestParameter('stare_masina', 0);
$stare_client = getRequestParameter('stare_client', 1);
$masina_id = getRequestParameter('masina_id', '');
$id = getRequestParameter('id', 0);

$print_fisa = Stocuri::getFisaGenerataByIdPrintFisaTraseu($id);
$smarty->assign('print_fisa',$print_fisa);

$data_traseu = date('Y-m-d');
$smarty->assign('data_traseu',$data_traseu);

$smarty->assign('nume', 'Fisa traseu');
$template_page = "print_fisa_traseu.tpl";
//$txts = 0;

$smarty->display($template_page);
?>



