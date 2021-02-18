<?php /* Smarty version Smarty-3.1.15, created on 2021-02-18 15:56:50
         compiled from "/var/www/html/fofoweb/www/templates/numar_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:495425026602d10d6174c08-69449296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b56bf07a71a9e83d973dcba67dda2f7a95082c' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/numar_clienti.tpl',
      1 => 1613656610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '495425026602d10d6174c08-69449296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602d10d61e21e0_25755140',
  'variables' => 
  array (
    'title' => 0,
    'lista_clienti' => 0,
    'depozit' => 0,
    'produs' => 0,
    'pret' => 0,
    'clienti' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602d10d61e21e0_25755140')) {function content_602d10d61e21e0_25755140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Numar clienti by pret:</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['depozite']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;" colspan="3">Nume produs</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depozit']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['produs']->value['nume_produs'];?>
<br/>
                                                            <?php  $_smarty_tpl->tpl_vars['clienti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clienti']->_loop = false;
 $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['produs']->value['pret']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clienti']->key => $_smarty_tpl->tpl_vars['clienti']->value) {
$_smarty_tpl->tpl_vars['clienti']->_loop = true;
 $_smarty_tpl->tpl_vars['pret']->value = $_smarty_tpl->tpl_vars['clienti']->key;
?>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;width: 50%">Pret: <?php echo $_smarty_tpl->tpl_vars['pret']->value;?>
 </th>
                                                                        <th style="text-align: center;width: 50%"><?php echo $_smarty_tpl->tpl_vars['clienti']->value;?>
</th>
                                                                    </tr>
                                                                </table>
                                                                <br/>
                                                            <?php } ?>
                                                        </th>
                                                    <?php } ?>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    <?php } ?>
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php }} ?>
