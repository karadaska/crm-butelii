<?php /* Smarty version Smarty-3.1.15, created on 2021-03-02 09:31:14
         compiled from "/var/www/html/fofoweb/www/templates/edit_observatie_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111216639603de9c2d13ad4-86548253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec88c9f564c9be91d8a775044191aebea97d5065' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_observatie_client.tpl',
      1 => 1605780132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111216639603de9c2d13ad4-86548253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'observatie_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_603de9c2d5df05_71160722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603de9c2d5df05_71160722')) {function content_603de9c2d5df05_71160722($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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