<?php /* Smarty version Smarty-3.1.15, created on 2021-06-16 14:34:28
         compiled from "/var/www/html/fofoweb/www/templates/edit_observatie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81763258660c9e1c4e84c10-81936882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678dc03cacf8e2eeaac8a597b2061a2c36075a5d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_observatie.tpl',
      1 => 1605302392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81763258660c9e1c4e84c10-81936882',
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
  'unifunc' => 'content_60c9e1c4ec7da1_64215702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c9e1c4ec7da1_64215702')) {function content_60c9e1c4ec7da1_64215702($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit observatie: <?php echo $_smarty_tpl->tpl_vars['observatie_id']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/observatii.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista observatii
                    </button>
                </div>
                <form class="form-horizontal" action="/edit_observatie.php"
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
