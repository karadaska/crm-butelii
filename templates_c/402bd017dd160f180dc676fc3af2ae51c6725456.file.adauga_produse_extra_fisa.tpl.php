<?php /* Smarty version Smarty-3.1.15, created on 2021-04-13 14:48:26
         compiled from "/var/www/html/fofoweb/www/templates/adauga_produse_extra_fisa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1336478029607562d7bd9359-11954795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402bd017dd160f180dc676fc3af2ae51c6725456' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/adauga_produse_extra_fisa.tpl',
      1 => 1618314505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336478029607562d7bd9359-11954795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_607562d7c521f4_59701983',
  'variables' => 
  array (
    'title' => 0,
    'nume_client' => 0,
    'id' => 0,
    'client_id' => 0,
    'lista_tip_stoc' => 0,
    'tip' => 0,
    'lista_stari_produse' => 0,
    'stare' => 0,
    'stare_produs' => 0,
    'produse_extra' => 0,
    'produs' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607562d7c521f4_59701983')) {function content_607562d7c521f4_59701983($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga Produse extra la clientul: <?php echo $_smarty_tpl->tpl_vars['nume_client']->value['nume'];?>

                    </h1>
                    <a href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <button class="btn btn-mini btn-warning">Inapoi</button>
                    </a>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Produse Extra</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal"
                                      action="/adauga_produse_extra_fisa.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&client_id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
"
                                      method="post">
                                    <table class="table table-bordered" style="width: 350px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">Tip
                                                produs:
                                            </th>
                                            <td style="text-align: left;vertical-align: middle;">
                                                <select name="tip_produs_id" data-schimba="2">
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
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">Stare
                                                Produs:
                                            </th>
                                            <td>
                                                <select name="stare_produs">
                                                    <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
?>
                                                        <?php if (($_smarty_tpl->tpl_vars['stare']->value['id']!=4)) {?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_produs']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>

                                                            </option>
                                                        <?php }?>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">
                                                Cantitate:
                                            </th>
                                            <td><input style="width: 100%" type="text" name="cantitate"
                                                       placeholder="cantitate"
                                                       autocomplete="off"
                                                       value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: right;">
                                                <button type="submit" name="adauga_extra" value="adauga"
                                                        class="btn btn-primary">
                                                    Adauga
                                                </button>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                                <?php if (count($_smarty_tpl->tpl_vars['produse_extra']->value)>0) {?>
                                    <table class="table table-bordered" style="width: 350px;margin-top: 10px;">
                                        <tr>
                                            <th>Produs</th>
                                            <th>Stare</th>
                                            <th>Cantitate</th>
                                        </tr>
                                        <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produse_extra']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produs']->value['stare_produs'];?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produs']->value['cantitate'];?>
</td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                <?php }?>
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
