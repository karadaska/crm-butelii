<?php /* Smarty version Smarty-3.1.15, created on 2020-12-28 22:44:06
         compiled from "/home/dinobaby/public_html/crm/www/templates/depozite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5446934755ed6358f4f3dd8-45441049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093bc71c378fe1ec49a1aa540a65128fad106413' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/depozite.tpl',
      1 => 1609188304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5446934755ed6358f4f3dd8-45441049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed6358f519475_02999172',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'asignare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed6358f519475_02999172')) {function content_5ed6358f519475_02999172($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Depozite</h1>
                    <a href="adauga_depozit.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            depozit
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; depozite</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th style="text-align: left;" class="span3">Depozit</th>
                                    <th style="text-align: left;">Trasee asignate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                    <tr>
                                        <td class="center"><a href="../edit_depozit.php?id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
"><img
                                                        title="edit" src="../images/edit.png"></a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</td>
                                        <td>
                                            <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depozit']->value['asignari']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                                <a href="../asignari_trasee_depozite.php?id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
"><?php echo '[';?>
<?php echo $_smarty_tpl->tpl_vars['asignare']->value['nume_traseu'];?>
<?php echo ']';?>
</a>
                                            <?php } ?>
                                            <a href="../asignari_trasee_depozite.php?id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
"><img
                                                        title="Adauga asignare" src="../images/adauga18x18.png"></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="js/pagini/edit_depozit.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
