<?php /* Smarty version Smarty-3.1.15, created on 2021-01-19 12:10:22
         compiled from "/home/dinobaby/public_html/crm/www/templates/adauga_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16280444945ec5177dbfb409-09922568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f1d62450bd1a877d01d4f8d376fc4b76e8d868' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/adauga_client.tpl',
      1 => 1611047875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16280444945ec5177dbfb409-09922568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ec5177dc04b43_06598732',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_judete' => 0,
    'judet' => 0,
    'lista_localitati' => 0,
    'localitate' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'culori_butelii' => 0,
    'culoare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ec5177dc04b43_06598732')) {function content_5ec5177dc04b43_06598732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adaugare client nou</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii client</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_client" action="/adauga_client.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Nume client:</label>
                                        <div class="controls controls-row">
                                            <input style="width:230px;" id="nume" type="text" autocomplete="off" name="nume"
                                                   value="">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                        </div>
                                        <label class="control-label" for="traseu_id">Traseu:</label>
                                        <div class="controls controls-row">
                                            <select name="traseu_id" id="traseu_id">
                                                <option value="0">-Selecteaza traseu-</option>
                                                <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['traseu']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block" for="judet_id"></label>
                                        </div>
                                        <label class="control-label" for="judet">Zona:</label>
                                        <div class="controls controls-row">
                                            <select name="judet_id" id="judet_id">
                                                <option value="0">-Selecteaza zona-</option>
                                                <?php  $_smarty_tpl->tpl_vars['judet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['judet']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_judete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['judet']->key => $_smarty_tpl->tpl_vars['judet']->value) {
$_smarty_tpl->tpl_vars['judet']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['judet']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['judet']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['judet']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block" for="judet_id"></label>
                                        </div>
                                        <label class="control-label" for="select">Localitate:</label>

                                        <div class="controls controls-row" id="lista_localitati">
                                            <select name="localitate_id" id="localitate_id">
                                                <option value="0">-Selecteaza localitate-</option>
                                                <?php  $_smarty_tpl->tpl_vars['localitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['localitate']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_localitati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['localitate']->key => $_smarty_tpl->tpl_vars['localitate']->value) {
$_smarty_tpl->tpl_vars['localitate']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['localitate']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['localitate']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['localitate']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block"
                                                   for="localitate_id"></label>
                                        </div>
                                        <label class="control-label" for="select">Adresa:</label>
                                        <div class="controls controls-row">
                                            <input style="width:230px;" placeholder="adresa" autocomplete="off" type="text"
                                                   name="adresa"
                                                   value="">
                                        </div>
                                        <label class="control-label" for="stare client">Stare Client:</label>
                                        <div class="controls controls-row" id="stare_id">
                                            <select name="stare_id" id="stare_id">
                                                <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_stari']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label class="error" style="display: inline-block"
                                                   for="localitate_id"></label>
                                        </div>
                                        <label class="control-label" for="culoare_id">Culoare:</label>
                                        <div class="controls controls-row">
                                            <select name="culoare_id">
                                                <option value="0">Selecteaza culoare</option>
                                                <?php  $_smarty_tpl->tpl_vars['culoare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['culoare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['culori_butelii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['culoare']->key => $_smarty_tpl->tpl_vars['culoare']->value) {
$_smarty_tpl->tpl_vars['culoare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['culoare']->key;
?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['culoare']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['culoare']->value['nume'];?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="controls controls-row" style="float: left;margin-left: 70px">
                                            <input placeholder="Telefon" autocomplete="off" type="text"
                                                   name="telefon" value="">
                                            <input placeholder="Telefon 2" autocomplete="off" type="text"
                                                   name="telefon_2" value="">
                                            <input placeholder="cnp" autocomplete="off" type="text"
                                                   name="cnp" value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input placeholder="contract" autocomplete="off" type="text"
                                                   name="contract" value="">
                                            <input  placeholder="titular" autocomplete="off" type="text"
                                                   name="titular" value="">
                                            <input placeholder="rastel" autocomplete="off" type="text"
                                                   name="rastel" value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input type="date" id="data_start" name="data_start"
                                                   value="<?php echo date('Y-m-d');?>
">
                                            <input placeholder="latitudine" autocomplete="off" type="text"
                                                   name="latitudine"
                                                   value="">
                                            <input placeholder="longitudine" autocomplete="off"
                                                   type="text" name="longitudine"
                                                   value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input placeholder="CI" autocomplete="off" type="text"
                                                   name="ci" value="">
                                            <button style="margin-bottom: 13px;margin-left: 250px;" type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                                Adauga
                                            </button>
                                            <button style="margin-bottom: 13px;" type="button" class="btn btn-warning" onclick="location.href='/clienti.php';">
                                                Anuleaza
                                            </button>
                                        </div>
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
<script src="js/pagini/adauga_client.js"></script>
<script src="js/pagini/menu_graph.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
