<?php /* Smarty version Smarty-3.1.15, created on 2020-11-19 10:12:49
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_observatie_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7143373475fb622e4d854e7-13682441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '837c557eddf1476c94865b4a31d3c3ca0b5856b6' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_observatie_client.tpl',
      1 => 1605773566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7143373475fb622e4d854e7-13682441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb622e4d96f49_42615148',
  'variables' => 
  array (
    'title' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb622e4d96f49_42615148')) {function content_5fb622e4d96f49_42615148($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga observatie la clientul: <?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_observatie_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                      method="post">
                                    <table class="table table-bordered" style="width: 400px;">
                                        <thead>
                                        <tr>
                                            <td style="vertical-align: middle;">Observatie</td>
                                            <td><textarea name="nume"></textarea></td>
                                            <td style="vertical-align: middle;">
                                                <button type="submit" name="adauga" value="adauga"
                                                        class="btn btn-primary">
                                                    Adauga
                                                </button>
                                            </td>
                                        </tr>
                                        </thead>
                                    </table>
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
