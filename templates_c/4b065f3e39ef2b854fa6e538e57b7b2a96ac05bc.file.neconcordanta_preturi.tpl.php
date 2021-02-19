<?php /* Smarty version Smarty-3.1.15, created on 2021-02-19 14:12:28
         compiled from "/var/www/html/fofoweb/www/templates/neconcordanta_preturi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15636048576022834fda05e0-72628903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b065f3e39ef2b854fa6e538e57b7b2a96ac05bc' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/neconcordanta_preturi.tpl',
      1 => 1613736745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15636048576022834fda05e0-72628903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6022834fe0ae67_70395146',
  'variables' => 
  array (
    'title' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'clienti' => 0,
    'produs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6022834fe0ae67_70395146')) {function content_6022834fe0ae67_70395146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Neconcordanta preturi la clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/neconcordanta_preturi.php" method="post" id="form_neconcordanta_preturi"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                            <input type="hidden" name="traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                        </select>
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/neconcordanta_preturi.php" method="post"

                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: center;">Diferente</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['neconcordanta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <th style="text-align: center;vertical-align: middle;"> <?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                            <th style="text-align: center;vertical-align: middle;"> <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</th>
                                            <th style="text-align: left;vertical-align: middle;"> <?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
</th>
                                            <th style="text-align: center;vertical-align: middle;"> <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
</th>
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>
                                                            <?php  $_smarty_tpl->tpl_vars['clienti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clienti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['produse_client']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clienti']->key => $_smarty_tpl->tpl_vars['clienti']->value) {
$_smarty_tpl->tpl_vars['clienti']->_loop = true;
?>
                                                                <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clienti']->value['produse_pret']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                                    <table class="table-bordered table">
                                                                        <tr>
                                                                            <th style="vertical-align: middle;width: 80px;"><?php echo $_smarty_tpl->tpl_vars['clienti']->value['nume_produs'];?>

                                                                                <br/>
                                                                            </th>
                                                                            <th>
                                                                                <table class="table-bordered table">
                                                                                    <tr>
                                                                                        <th style="text-align: left;width: 200px;"><?php echo $_smarty_tpl->tpl_vars['produs']->value['nume_sofer'];?>

                                                                                            <br/><?php echo $_smarty_tpl->tpl_vars['produs']->value['numar'];?>
</th>
                                                                                        <th><?php echo $_smarty_tpl->tpl_vars['produs']->value['pret'];?>
</th>
                                                                                        <th><?php echo $_smarty_tpl->tpl_vars['produs']->value['pret_contract'];?>
</th>
                                                                                        <th><?php echo $_smarty_tpl->tpl_vars['produs']->value['cantitate'];?>
</th>
                                                                                        <th><a href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['produs']->value['fisa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['produs']->value['fisa_id'];?>
</a></th>
                                                                                    </tr>
                                                                                </table>
                                                                            </th>
                                                                        </tr>
                                                                    </table>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                    <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/neconcordanta_preturi.js"></script>
<?php }} ?>
