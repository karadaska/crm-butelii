<?php /* Smarty version Smarty-3.1.15, created on 2020-06-17 15:16:24
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_depozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9117772515ed62053cc6c54-21200403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab32ed634504275ca1460f4f514fd394de2b92ca' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_depozit.tpl',
      1 => 1591777463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9117772515ed62053cc6c54-21200403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed62053cd9e75_14038075',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed62053cd9e75_14038075')) {function content_5ed62053cd9e75_14038075($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adaugare depozit nou</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_depozit" action="/adauga_depozit.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Nume depozit:</label>
                                        <div class="controls controls-row">
                                            <input class="span3" id="nume" type="text" name="nume" autocomplete="off" value="">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                        </div>
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
<script src="js/pagini/adauga_depozit.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
