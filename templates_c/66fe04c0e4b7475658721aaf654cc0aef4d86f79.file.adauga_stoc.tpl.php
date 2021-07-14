<?php /* Smarty version Smarty-3.1.15, created on 2021-07-14 12:04:54
         compiled from "/var/www/html/fofoweb/www/templates/adauga_stoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202413179060eea8b6357594-64066184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66fe04c0e4b7475658721aaf654cc0aef4d86f79' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/adauga_stoc.tpl',
      1 => 1611053350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202413179060eea8b6357594-64066184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_by_traseu_id' => 0,
    'lista_tip_stoc' => 0,
    'tip' => 0,
    'lista_stari_produse' => 0,
    'stare' => 0,
    'stare_produs' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60eea8b6426508_39523221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60eea8b6426508_39523221')) {function content_60eea8b6426508_39523221($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga stoc</h1>
                    <a href="stoc.php">
                        <button class="btn btn-mini btn-warning">Inapoi</button>
                    </a>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_stoc.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <label class="control-label" for="depozit_id">Depozit:</label>
                                    <div class="controls controls-row">
                                        <select name="depozit_id" style="width: 200px;"
                                                data-schimba="2">
                                            <option value="0">--</option>
                                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>

                                                        <?php if ($_smarty_tpl->tpl_vars['depozit_by_traseu_id']->value['depozit_id']==$_smarty_tpl->tpl_vars['depozit']->value['id']) {?>selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label class="control-label" for="tip_produs_id">Tip Produs:</label>
                                    <div class="controls controls-row">
                                        <select name="tip_produs_id" style="width: 200px;"
                                                data-schimba="2">
                                            <option value="0">--</option>
                                            <?php  $_smarty_tpl->tpl_vars['tip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_tip_stoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tip']->key => $_smarty_tpl->tpl_vars['tip']->value) {
$_smarty_tpl->tpl_vars['tip']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['tip']->value['id'];?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tip']->value['produs_tip_id']==$_smarty_tpl->tpl_vars['tip']->value['id']) {?>selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['tip']->value['tip'];?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label class="control-label" for="tip_produs_id">Stare Produs:</label>
                                    <div class="controls controls-row">
                                        <select name="stare_produs">
                                            <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>

                                                            <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_produs']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
<?php }?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>

                                                    </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label class="control-label" for="cantitate">Adauga Stoc:</label>
                                    <div class="controls controls-row">
                                        <input class="span2" type="text" name="cantitate" placeholder="cantitate"
                                               autocomplete="off"
                                               value="">
                                        <label class="error" style="display: inline-block" for="cantitate"></label>
                                    </div>
                                    <label class="control-label" for="data_intrare">Data adaugarii:</label>
                                    <div class="controls controls-row">
                                        <input class="span2" type="date" name="data_intrare" autocomplete="off"
                                               value="<?php echo date('Y-m-d');?>
">
                                        <label class="error" style="display: inline-block" for="data_intrare"></label>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                            Adauga
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span><?php }} ?>
