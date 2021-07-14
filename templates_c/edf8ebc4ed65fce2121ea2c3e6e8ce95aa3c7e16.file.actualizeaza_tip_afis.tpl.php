<?php /* Smarty version Smarty-3.1.15, created on 2021-07-14 12:49:49
         compiled from "/var/www/html/fofoweb/www/templates/actualizeaza_tip_afis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80659895860eea3e6ecd780-30909130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf8ebc4ed65fce2121ea2c3e6e8ce95aa3c7e16' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/actualizeaza_tip_afis.tpl',
      1 => 1626256060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80659895860eea3e6ecd780-30909130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60eea3e6f20d50_74055183',
  'variables' => 
  array (
    'title' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'lista_tip_afis' => 0,
    'afis' => 0,
    'client_afis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60eea3e6f20d50_74055183')) {function content_60eea3e6f20d50_74055183($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Tip afis clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/actualizeaza_tip_afis.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                            <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                        </select>
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/actualizeaza_tip_afis.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;">Tip afis</th>
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
                                            <th> <?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                            <th> <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</th>
                                            <th> <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</th>
                                            <th> <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
</th>
                                            <th>
                                                <select name="afis_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['traseu_id'];?>
">
                                                    <option value="0">Alege obs.</option>
                                                    <?php  $_smarty_tpl->tpl_vars['afis'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afis']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_tip_afis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afis']->key => $_smarty_tpl->tpl_vars['afis']->value) {
$_smarty_tpl->tpl_vars['afis']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['client_afis'] = new Smarty_variable(Clienti::getTipAfisByClientId($_smarty_tpl->tpl_vars['client']->value['client_id']), null, 0);?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['afis']->value['id'];?>
"
                                                                    <?php if ($_smarty_tpl->tpl_vars['afis']->value['id']==$_smarty_tpl->tpl_vars['client_afis']->value['tip_afis']) {?> selected="selected" <?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['afis']->value['tip'];?>

                                                            </option>
                                                    <?php } ?>
                                                </select>
                                                
                                                       
                                                       
                                                       
                                            </th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza clienti"
                                       class="btn btn-info" name="update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/ordine_clienti.js"></script>
<?php }} ?>
