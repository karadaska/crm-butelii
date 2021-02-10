<?php /* Smarty version Smarty-3.1.15, created on 2020-09-22 23:59:21
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4404143765f6a62c41d0ed0-39224730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb9de5e2c536d5253fbd74f8f814bf13ad40457' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_fisa_traseu.tpl',
      1 => 1600808399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4404143765f6a62c41d0ed0-39224730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f6a62c41eb2f4_11055402',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a62c41eb2f4_11055402')) {function content_5f6a62c41eb2f4_11055402($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga fisa traseu</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii fisa</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_fisa.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="judet">Traseu:</label>
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
                                        <label class="control-label" for="judet">Sofer:</label>
                                        <div class="controls controls-row">
                                            <select name="traseu_id" id="traseu_id">
                                                <option value="0">-Selecteaza sofer-</option>
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
                                        <button type="submit" name="adauga" class="btn btn-primary">
                                            Genereaza fisa traseu
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
<script src="js/pagini/adauga_client.js"></script>
<script src="js/pagini/menu_graph.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
