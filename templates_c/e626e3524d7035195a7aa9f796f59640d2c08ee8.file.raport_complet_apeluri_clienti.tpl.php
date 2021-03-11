<?php /* Smarty version Smarty-3.1.15, created on 2021-03-11 15:13:27
         compiled from "/var/www/html/fofoweb/www/templates/raport_complet_apeluri_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997336165602cdfc1ee1979-05360952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e626e3524d7035195a7aa9f796f59640d2c08ee8' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/raport_complet_apeluri_clienti.tpl',
      1 => 1615468406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997336165602cdfc1ee1979-05360952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602cdfc20a09e0_10234969',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'stare_id' => 0,
    'observatie_id' => 0,
    'urgent' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'x' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'client_raspuns' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602cdfc20a09e0_10234969')) {function content_602cdfc20a09e0_10234969($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport complet apeluri clienti
                        <a target="_blank" href="/print_raport_complet_apeluri_clienti.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
&urgent=<?php echo $_smarty_tpl->tpl_vars['urgent']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                
                <form action="/raport_complet_apeluri_clienti.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left">
                                <select name="traseu_id">
                                    <option value="0">Toate</option>
                                    <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"
                                                <?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                        </option>
                                    <?php } ?>
                                </select>
                                <select name="stare_id" style="width: 120px;">
                                    <option value="-1">-Alege stare-</option>
                                    <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_stari']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare']->key;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>
</option>
                                    <?php } ?>
                                </select>
                                <select name="observatie_id" style="width: 120px;">
                                    <option value="0">-Alege obs-</option>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['observatie']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==1) {?>
                                            <option value=<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['observatie_id']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                            </option>
                                        <?php }?>
                                    <?php } ?>
                                </select>
                                <select style="width: 80px;" name="urgent">
                                    <option value="-1">Alege..</option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['urgent']->value==0) {?> selected="selected" <?php }?>>NU</option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['urgent']->value==1) {?> selected="selected" <?php }?>>DA</option>
                                </select>
                                Interval <input placeholder="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" autocomplete="off" type="date" name="data_start"
                                                value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
">
                                <input autocomplete="off" type="date" name="data_stop"
                                       value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/raport_complet_apeluri_clienti.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0" id="dataTable"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">NR.</th>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: left;">TELEFON</th>
                                        <th style="text-align: center;">DATA</th>
                                        <th style="text-align: center;">OBS</th>
                                        <th style="text-align: center;">URGENT</th>
                                        <th style="text-align: center;">PRODUSE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/>
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>

                                            </td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['data'];?>
</td>
                                            <td style="text-align: center;">
                                                <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['nume_observatie'])>0) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_observatie'];?>

                                                <?php } else { ?>
                                                    -
                                                <?php }?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['urgent'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0) {?>
                                                    NU
                                                <?php } else { ?>
                                                    <span style="color: red;">DA</span>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <?php if (count($_smarty_tpl->tpl_vars['client']->value['raspuns'])>0) {?>
                                                    <table class="table table-bordered table-bordered">
                                                        <?php  $_smarty_tpl->tpl_vars['client_raspuns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client_raspuns']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['raspuns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client_raspuns']->key => $_smarty_tpl->tpl_vars['client_raspuns']->value) {
$_smarty_tpl->tpl_vars['client_raspuns']->_loop = true;
?>
                                                            <tr>
                                                                <th class="span2"><?php echo $_smarty_tpl->tpl_vars['client_raspuns']->value['nume_produs'];?>
</th>
                                                                <th><?php echo $_smarty_tpl->tpl_vars['client_raspuns']->value['goale'];?>
</th>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/data_table.js"></script>

<?php }} ?>
