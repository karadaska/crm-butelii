<?php /* Smarty version Smarty-3.1.15, created on 2021-07-05 19:55:51
         compiled from "/var/www/html/fofoweb/www/templates/edit_culoare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73445814960e338f65b3861-88449200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c7847a93a8f58562bf2532f39e3995287b87726' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_culoare.tpl',
      1 => 1625504150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73445814960e338f65b3861-88449200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60e338f6678015_25320283',
  'variables' => 
  array (
    'title' => 0,
    'culoare_id' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e338f6678015_25320283')) {function content_60e338f6678015_25320283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                            
                                
                                        
                                
                            
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
