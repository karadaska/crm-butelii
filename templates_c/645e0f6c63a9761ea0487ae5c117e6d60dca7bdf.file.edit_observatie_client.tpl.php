<?php /* Smarty version Smarty-3.1.15, created on 2020-11-19 12:06:07
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_observatie_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12686201615fb64080cab614-13272555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645e0f6c63a9761ea0487ae5c117e6d60dca7bdf' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_observatie_client.tpl',
      1 => 1605780133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12686201615fb64080cab614-13272555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb64080cb7306_62124900',
  'variables' => 
  array (
    'title' => 0,
    'observatie_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb64080cb7306_62124900')) {function content_5fb64080cb7306_62124900($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit observatie: <?php echo $_smarty_tpl->tpl_vars['observatie_id']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value['client_id'];?>
'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-warning">
                        Inapoi
                    </button>
                </div>
                <form class="form-horizontal" action="/edit_observatie_client.php"
                      method="post">
                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value['id'];?>
"/>
                    <table class="table table-bordered" style="width: 600px;">
                        <tr>
                            <th style="text-align: center;vertical-align: middle">Nume:</th>
                            <th style="text-align: left;">
                                <input autocomplete="off" class="span3" type="text"
                                       name="observatie"
                                       value="<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value['nume'];?>
">
                                <button style="margin-bottom: 10px;" type="submit" name="modifica" value="modifica" class="btn btn-mini btn-info">
                                    Modifica
                                </button>
                            </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/observatii.js"></script>
<?php }} ?>
