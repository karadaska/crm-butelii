<?php /* Smarty version Smarty-3.1.15, created on 2020-06-04 15:37:55
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_traseu_la_depozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18961482695ed8dee5b548f2-56190652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd74ed3e02907bd7e17f3d5c2eafdba1d5aa61bcf' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_traseu_la_depozit.tpl',
      1 => 1591274057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18961482695ed8dee5b548f2-56190652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed8dee5bd8976_07704792',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'lista_depozite' => 0,
    'lista' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed8dee5bd8976_07704792')) {function content_5ed8dee5bd8976_07704792($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Asignare traseu la depozit</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii asignare</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_traseu_la_depozit" action="/adauga_traseu_la_depozit.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="depozit_id">Depozit:</label>
                                        <div class="controls controls-row">
                                            <select name="depozit_id" id="depozit_id">
                                                <option value="0">-Selecteaza depozit-</option>
                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['lista']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block" for="depozit_id"></label>
                                        </div>
                                        <label class="control-label" for="traseu_id">Traseu:</label>
                                        <div class="controls controls-row">
                                            <select name="traseu_id" id="traseu_id">
                                                <option value="0">-Selecteaza traseu-</option>
                                                <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['traseu']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block" for="judet_id"></label>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                            Adauga
                                        </button>
                                        <button type="button" class="btn btn-warning" onclick="location.href='/asignari_trasee_depozite.php';">
                                            Anuleaza
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
<script src="js/pagini/adauga_traseu_la_depozit.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
