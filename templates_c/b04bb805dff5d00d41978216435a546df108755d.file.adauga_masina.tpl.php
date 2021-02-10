<?php /* Smarty version Smarty-3.1.15, created on 2020-06-25 13:10:01
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_masina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6536234315ef477a4262f19-74745221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04bb805dff5d00d41978216435a546df108755d' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_masina.tpl',
      1 => 1593079800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6536234315ef477a4262f19-74745221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ef477a4334bf5_10526003',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef477a4334bf5_10526003')) {function content_5ef477a4334bf5_10526003($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga ma&#351;in&#259; nou&#259;</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_masina" action="/adauga_masina.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="numar">Num&#259;r ma&#351;in&#259;:</label>
                                        <div class="controls controls-row">
                                            <input class="span3" id="numar" type="text" name="numar" autocomplete="off" value="">
                                            <label class="error" style="display: inline-block" for="numar"></label>
                                        </div>
                                        <label class="control-label" for="nume">Model:</label>
                                        <div class="controls controls-row">
                                            <input class="span3" id="model" type="text" name="model" autocomplete="off" value="">
                                            <label class="error" style="display: inline-block" for="model"></label>
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
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
