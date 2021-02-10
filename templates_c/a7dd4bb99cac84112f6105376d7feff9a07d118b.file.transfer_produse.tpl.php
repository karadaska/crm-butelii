<?php /* Smarty version Smarty-3.1.15, created on 2020-10-23 22:16:02
         compiled from "/home/dinobaby/public_html/crm/www/templates/transfer_produse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13984637955f929d0b4b1fb8-15747905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7dd4bb99cac84112f6105376d7feff9a07d118b' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/transfer_produse.tpl',
      1 => 1603480632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13984637955f929d0b4b1fb8-15747905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f929d0b4f04c3_86664244',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'lista_produse' => 0,
    'produs' => 0,
    'lista_stari_produse' => 0,
    'stare_produs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f929d0b4f04c3_86664244')) {function content_5f929d0b4f04c3_86664244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Transfer produse: <?php echo date('Y-m-d');?>
</h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;margin-left: -16px;" class="form-horizontal"
                                              id="form_adauga_fisa"
                                              action="/transfer_produse.php" method="post">
                                            <table class="table table-bordered" style="width: 670px;">
                                                <tr>
                                                    <th rowspan="3" style="text-align: left;">
                                                        <select name="transfera_din_depozit_id">
                                                            <option value="0">Depozit:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                                                <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transfera_din_tip_produs_id">
                                                            <option value="0">Produs:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                                <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['produs']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
"><?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transfera_din_stare_id">
                                                            <option value="0">Stare produs:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['stare_produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare_produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare_produs']->key => $_smarty_tpl->tpl_vars['stare_produs']->value) {
$_smarty_tpl->tpl_vars['stare_produs']->_loop = true;
?>
                                                                <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['stare_produs']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
"><?php echo $_smarty_tpl->tpl_vars['stare_produs']->value['nume'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                    </th>
                                                    <th style="vertical-align: middle;">
                                                        <span style="text-align: center;">Transfera: </span><br/>
                                                        <input style="width: 100px;text-align: center;"
                                                               placeholder="cantitate" type="text" name="cantitate_transferata" autocomplete="off">
                                                    </th>
                                                    <th rowspan="3" style="text-align: left;">
                                                        <select name="transferat_in_depozit_id">
                                                            <option value="0">Depozit:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                                                <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>
"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transferat_in_produs_id">
                                                            <option value="0">Produs:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                                <option value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['produs']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>
"><?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transferat_in_stare_id">
                                                            <option value="0">Stare produs:</option>
                                                            <?php  $_smarty_tpl->tpl_vars['stare_produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare_produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare_produs']->key => $_smarty_tpl->tpl_vars['stare_produs']->value) {
$_smarty_tpl->tpl_vars['stare_produs']->_loop = true;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['stare_produs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['stare_produs']->value['nume'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                    </th>
                                                    <th style="vertical-align: middle;">
                                                        <button type="submit" name="transfer_produse"
                                                                class="btn btn-inverse">
                                                            Transfera produse
                                                        </button>
                                                    </th>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
