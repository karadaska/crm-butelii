<?php /* Smarty version Smarty-3.1.15, created on 2020-11-24 14:17:37
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_depozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17378885175ed63d43287188-52851368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df587e14cb7d743d0e2c880cbab57de2bc40408d' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_depozit.tpl',
      1 => 1604781692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17378885175ed63d43287188-52851368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed63d432cde83_12204528',
  'variables' => 
  array (
    'title' => 0,
    'depozit_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed63d432cde83_12204528')) {function content_5ed63d432cde83_12204528($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Edit depozit: <?php echo $_smarty_tpl->tpl_vars['depozit_id']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/depozite.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista depozite
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii depozit</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_depozit" action="/edit_depozit.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['depozit_id']->value['id'];?>
"/>
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Nume depozit:</label>
                                        <div class="controls controls-row">
                                            <input class="span2" id="nume" type="text" name="nume"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['depozit_id']->value['nume'];?>
">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                            <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                                Modifica
                                            </button>
                                            <button type="button" onclick="location.href='/depozite.php'" name="inapoi"
                                                    value="inapoi" class="btn btn-warning">
                                                Inapoi
                                            </button>
                                        </div>
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
<script src="js/pagini/edit_depozit.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
