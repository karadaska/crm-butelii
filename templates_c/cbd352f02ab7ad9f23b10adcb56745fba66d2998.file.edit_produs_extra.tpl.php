<?php /* Smarty version Smarty-3.1.15, created on 2021-04-19 13:50:08
         compiled from "/var/www/html/fofoweb/www/templates/edit_produs_extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1782988185607d37e85ebab4-68004022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd352f02ab7ad9f23b10adcb56745fba66d2998' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_produs_extra.tpl',
      1 => 1618821981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782988185607d37e85ebab4-68004022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_607d37e86d3b96_60790981',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607d37e86d3b96_60790981')) {function content_607d37e86d3b96_60790981($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i> Edit produs</h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Produse extra
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div>
                                <div style="float: left">
                                    <form class="form-horizontal" id="form_edit_client" action="/edit_client.php"
                                          method="post">
                                        <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"/>
                                        <table class="table table-bordered" style="width: 400px;">
                                            <tr style="text-align: left;">
                                                <th style="width: 150px;vertical-align: middle;text-align: left">TIP PRODUS</th>
                                                <th>ssss</th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">PLINE</th>
                                                <th style="text-align: left;"><input type="text" name="pline" value="">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">GOALE</th>
                                                <th style="text-align: left;"><input type="text" name="goale" value="">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">DEFECTE</th>
                                                <th style="text-align: left;"><input type="text" name="defecte" value="">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">CANTITATE</th>
                                                <th style="text-align: left;">
                                                   <input type="text" name="cantitate" value="">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">PRET</th>
                                                <th style="text-align: left;">
                                                    <input type="text" name="cantitate" value="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" style="text-align: right;">
                                                    <button type="submit" name="modifica" value="modifica"
                                                            class="btn btn-info">
                                                        Modifica
                                                    </button>
                                                    <button type="button" class="btn btn-danger"
                                                            onclick="clickOnStergeClient(<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
)">Sterge client
                                                    </button>
                                                </th>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
<?php }} ?>
