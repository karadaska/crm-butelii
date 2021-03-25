<?php /* Smarty version Smarty-3.1.15, created on 2021-03-25 15:20:44
         compiled from "/var/www/html/fofoweb/www/templates/adauga_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1983592630605c8e2cd91778-52820300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423a7f84fc9d041ace6186aa7247af9515e35627' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/adauga_traseu.tpl',
      1 => 1601975892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1983592630605c8e2cd91778-52820300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_605c8e2ce0c955_33089469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c8e2ce0c955_33089469')) {function content_605c8e2ce0c955_33089469($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga traseu</h1>
                    <button type="button" class="btn btn-warning" onclick="location.href='/trasee.php';">
                        Inapoi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii adaugare traseu</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_traseu" action="/adauga_traseu.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <table class="table table-bordered" style="width: 350px;">
                                            <thead>
                                            <tr>
                                                <th style="vertical-align: middle;">Nume:</th>
                                                <td>
                                                    <input style="width: 100%" type="text" name="nume"
                                                           autocomplete="off"
                                                           value="">
                                                </td>
                                                <td style="text-align: right;">
                                                    <button type="submit" name="adauga" value="adauga"
                                                            class="btn btn-small btn-primary">
                                                        Adauga
                                                    </button>
                                                </td>
                                            </tr>
                                            </thead>
                                        </table>
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
<script src="js/pagini/adauga_traseu.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
