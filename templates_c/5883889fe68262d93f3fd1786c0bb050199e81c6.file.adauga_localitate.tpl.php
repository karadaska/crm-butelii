<?php /* Smarty version Smarty-3.1.15, created on 2020-09-29 09:55:15
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_localitate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18292558415f6cf5a6dc1017-21723108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5883889fe68262d93f3fd1786c0bb050199e81c6' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_localitate.tpl',
      1 => 1601362515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18292558415f6cf5a6dc1017-21723108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f6cf5a6e152d3_62125449',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'lista_judete' => 0,
    'judet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6cf5a6e152d3_62125449')) {function content_5f6cf5a6e152d3_62125449($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga localitate</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_localitate.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <table class="table table-bordered" style="width: 300px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Zona</th>
                                            <th style="text-align: left;">
                                                <select name="zona_id">
                                                    <option value="0">Alege...</option>
                                                    <?php  $_smarty_tpl->tpl_vars['judet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['judet']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_judete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['judet']->key => $_smarty_tpl->tpl_vars['judet']->value) {
$_smarty_tpl->tpl_vars['judet']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['judet']->key;
?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['judet']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['judet']->value['nume'];?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Nume</th>
                                            <th><input type="text" name="nume" autocomplete="off"
                                                       value=""></th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: right;">
                                                <button type="submit" name="adauga" value="adauga"
                                                        class="btn btn-mini btn-primary">
                                                    Adauga
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
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
