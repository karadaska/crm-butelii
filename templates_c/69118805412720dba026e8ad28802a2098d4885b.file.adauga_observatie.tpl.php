<?php /* Smarty version Smarty-3.1.15, created on 2020-11-13 15:03:56
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_observatie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4591246715fae806ac73d72-07844814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69118805412720dba026e8ad28802a2098d4885b' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_observatie.tpl',
      1 => 1605272636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4591246715fae806ac73d72-07844814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fae806ac7fb04_92704310',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fae806ac7fb04_92704310')) {function content_5fae806ac7fb04_92704310($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga observatie</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <form class="form-horizontal" action="/adauga_culoare.php"
                                  method="post">
                                <table class="table table-bordered" style="width: 200px;">
                                    <tr>
                                        <th style="vertical-align: middle;">Observatie</th>
                                        <th style="text-align: left;">
                                            <select name="tip_observatie">
                                                <option value="0">Alege...</option>
                                            </select>
                                        </th>
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                            Adauga
                                        </button>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
