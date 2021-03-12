<?php /* Smarty version Smarty-3.1.15, created on 2021-03-12 12:56:10
         compiled from "/var/www/html/fofoweb/www/templates/edit_depozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816241839604b48ca9850a0-38881584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '963c913af37c5ac8ebf3ff1dfeb4e21c1638591f' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_depozit.tpl',
      1 => 1604781692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816241839604b48ca9850a0-38881584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'depozit_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_604b48caa39c30_55332942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604b48caa39c30_55332942')) {function content_604b48caa39c30_55332942($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
