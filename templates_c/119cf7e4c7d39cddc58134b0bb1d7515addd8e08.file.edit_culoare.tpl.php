<?php /* Smarty version Smarty-3.1.15, created on 2020-11-07 22:45:27
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_culoare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13316718655f085d728e9736-11844877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119cf7e4c7d39cddc58134b0bb1d7515addd8e08' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_culoare.tpl',
      1 => 1604782013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13316718655f085d728e9736-11844877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f085d72946982_92408019',
  'variables' => 
  array (
    'title' => 0,
    'culoare_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f085d72946982_92408019')) {function content_5f085d72946982_92408019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit culoare: <?php echo $_smarty_tpl->tpl_vars['culoare_id']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/culori_butelii.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista culori
                    </button>
                </div>
                <form class="form-horizontal" action="/edit_culoare.php"
                      method="post">
                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['culoare_id']->value['id'];?>
"/>
                    <table class="table table-bordered" style="width: 600px;">
                        <tr>
                            <th style="text-align: left;vertical-align: middle">Culoare:</th>
                            <th style="text-align: left;"><input autocomplete="off" class="span3" type="text"
                                                                 name="nume"
                                                                 value="<?php echo $_smarty_tpl->tpl_vars['culoare_id']->value['nume'];?>
">
                            </th>
                            <th>
                                <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                    Modifica
                                </button>
                            </th>
                            <th>
                                <button type="button" class="btn btn-danger"
                                        onclick="clickOnStergeCuloare(<?php echo $_smarty_tpl->tpl_vars['culoare_id']->value['id'];?>
)">Sterge
                                </button>
                            </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
