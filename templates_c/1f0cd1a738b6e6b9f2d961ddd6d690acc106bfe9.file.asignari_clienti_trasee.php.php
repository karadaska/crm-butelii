<?php /* Smarty version Smarty-3.1.15, created on 2020-06-23 11:42:34
         compiled from "asignari_clienti_trasee.php" */ ?>
<?php /*%%SmartyHeaderCode:14394664905ef1c07a864ef9-85972563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0cd1a738b6e6b9f2d961ddd6d690acc106bfe9' => 
    array (
      0 => 'asignari_clienti_trasee.php',
      1 => 1592397417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14394664905ef1c07a864ef9-85972563',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ef1c07a865ef4_43648562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef1c07a865ef4_43648562')) {function content_5ef1c07a865ef4_43648562($_smarty_tpl) {?><<?php ?>?php
$menu_curent = 6;

require_once 'etc/config.php';


$smarty->assign('name', 'Asignari clienti la trasee');
$template_page = "asignari_clienti_trasee.tpl";

$id = getRequestParameter('id', 0);

$traseu = Clienti::getTraseuById($id);
$smarty->assign('traseu', $traseu);

$adauga = getRequestParameter('adauga', '');
$adaugat = getRequestParameter('adaugat', '');
$stare_id = getRequestParameter('stare_id', 1);
$smarty->assign('adaugat', 0);

$lista_clienti = Clienti::getClienti(array(
    'stare_id' => $stare_id
));

$smarty->assign('lista_clienti',$lista_clienti);

$lista_asignari_clienti_trasee = Asignari::getAsignariClientiByTraseuId($id);
$smarty->assign('lista_asignari_clienti_trasee',$lista_asignari_clienti_trasee);

if ($adauga) {
    $client_id = getRequestParameter('client_id', '');

    $data_start = date('Y-m-d');
    if ($client_id > 0) {
        $query = "INSERT INTO asignari_clienti_trasee(traseu_id, client_id, data_start) 
        values 
        ('" . $id . "','" . $client_id . "','" . $data_start . "')";

        myExec($query);
        header('Location: /asignari_clienti_trasee.php?id=' . $id);
        exit();
    }
}

$smarty->display($template_page);


<?php }} ?>
