<?php /* Smarty version Smarty-3.1.15, created on 2020-10-27 17:34:37
         compiled from "/home/dinobaby/public_html/crm/www/templates/eroare_faradrept.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11863570775f983e0d59b934-44497485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9db0fa9354ebbd0db7954dda4c352f566b6d270' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/eroare_faradrept.tpl',
      1 => 1589269550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11863570775f983e0d59b934-44497485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f983e0d68dbf6_71356911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f983e0d68dbf6_71356911')) {function content_5f983e0d68dbf6_71356911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Warning!</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">

                        <div class="widget">
                            <div class="widget-content">
                                Nu ai dreptul sa accesezi aceasta pagina!
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
