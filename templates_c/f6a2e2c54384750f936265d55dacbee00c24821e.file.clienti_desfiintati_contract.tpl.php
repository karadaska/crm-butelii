<?php /* Smarty version Smarty-3.1.15, created on 2021-05-14 21:46:57
         compiled from "/var/www/html/fofoweb/www/templates/clienti_desfiintati_contract.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554778833609ec4c0948f05-69942715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a2e2c54384750f936265d55dacbee00c24821e' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/clienti_desfiintati_contract.tpl',
      1 => 1621018016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554778833609ec4c0948f05-69942715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_609ec4c09adc53_16150080',
  'variables' => 
  array (
    'title' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609ec4c09adc53_16150080')) {function content_609ec4c09adc53_16150080($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clienti Activi <a href="infiintari_clienti.php"
                                                                          class="btn btn-mini btn-warning">Inapoi</a></h1>
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
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: left;">CLIENTI</th>
                                    <th style="text-align: center;">LOCALITATE</th>
                                    <th style="text-align: center;">JUDET</th>
                                    <th style="text-align: center;">TELEFON</th>
                                    <th style="text-align: center;">DATA INFIINTARE</th>
                                    <th style="text-align: center;">DATA DESFIINTARE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                        <td><a target="_blank"
                                               href="../edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</a>
                                        </td>
                                        <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                        <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_judet']);?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
 <br/><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['data_contract'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['data_finish_contract'];?>
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
<script src="js/pagini/edit_sofer.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>