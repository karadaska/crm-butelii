<?php /* Smarty version Smarty-3.1.15, created on 2021-02-21 00:46:32
         compiled from "/var/www/html/fofoweb/www/templates/clienti_by_pret.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23217971860300ea02696c9-08986798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e9550ce227dcb50673abd7c8bfcc3770ec71ad' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/clienti_by_pret.tpl',
      1 => 1613861189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23217971860300ea02696c9-08986798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60300ea02bfca8_97372715',
  'variables' => 
  array (
    'title' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60300ea02bfca8_97372715')) {function content_60300ea02bfca8_97372715($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Lista clienti by pret</h1>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" class="span1">Nr.</th>
                                    <th style="text-align: center;" class="span3">Nume Client</th>
                                    <th style="text-align: center;">Localitate</th>
                                    <th style="text-align: center;">Pret</th>
                                    <th style="text-align: center;">Comision</th>

                                </tr>
                                </thead>
                                <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                        <td style="text-align: center;"><a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                        <td style="text-align: center;"><a href="asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['pret'];?>
</a></td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['comision'] : '-';?>
</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="js/pagini/edit_traseu.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
