<?php /* Smarty version Smarty-3.1.15, created on 2021-04-08 09:33:43
         compiled from "/var/www/html/fofoweb/www/templates/raport_livrari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9666285766033b090f0d619-34436269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa05bc7ed355745d3e202eb13754c302c3f9f430' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/raport_livrari_clienti.tpl',
      1 => 1617863622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9666285766033b090f0d619-34436269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6033b091220b12_58053187',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'depozit_by_traseu' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'lista' => 0,
    'total_bg_11' => 0,
    'total_ar_9' => 0,
    'total_valoare_incasare_bg_11' => 0,
    'total_valoare_incasare_ar_9' => 0,
    'total_comision_bg_11' => 0,
    'total_comision_ar_9' => 0,
    'total_bg_ar' => 0,
    'preturi_by_bg_11' => 0,
    'pret' => 0,
    'preturi_by_ar_9' => 0,
    'total_ar_8' => 0,
    'total_valoare_incasare_ar_8' => 0,
    'total_comision_ar_8' => 0,
    'preturi_by_ar_8' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6033b091220b12_58053187')) {function content_6033b091220b12_58053187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari clienti
                        <a target="_blank"
                           href="/print_raport_livrari_clienti.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_livrari_clienti.php" method="post"
                      style="margin-bottom: 0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left;">Traseu
                                <select name="traseu_id">
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
                                <div id="data_start_datepicker" class="input-append date" data-date="<?php echo date("Y-m-d");?>
"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_start" name="data_start"
                                           value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
                                <div id="data_stop_datepicker" class="input-append date" data-date="<?php echo date("Y-m-d");?>
"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_stop" name="data_stop"
                                           value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
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
                        <form action="/raport_livrari_clienti.php"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <?php if ($_smarty_tpl->tpl_vars['depozit_by_traseu']->value['depozit_id']==1) {?>
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                                            <th style="text-align: center;" rowspan="2">CLIENT</th>
                                            <th style="text-align: center;" rowspan="2">TELEFON</th>
                                            <th colspan="2">BG/AR</th>
                                            <th colspan="2">PRET UNITAR</th>
                                            <th colspan="2">COMISION</th>
                                            <th colspan="3">TOTAL BUCATI</th>
                                            <th colspan="2">TOTAL VAL. INCASATA</th>
                                            <th colspan="2">TOTAL COMISION</th>
                                            <th colspan="2">VALOARE BUCATI BG/AR</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center;">BG 11</td>
                                            <td style="text-align: center;">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td>BG + AR</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_bg_ar'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_comision_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_comision_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                            <tr>
                                                <td style="text-align: center" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                <td style="text-align: left"
                                                    class="span3"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                                <td>
                                                    <?php if (($_smarty_tpl->tpl_vars['client']->value['sters']==0)) {?>
                                                        <a target="_blank" href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
                                                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                                                        </a>
                                                    <?php } else { ?>
                                                        <a target="_blank" href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
                                                            <abbr title="Client sters de pe acest traseu"
                                                                  style="color: red;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</abbr>
                                                        </a>
                                                    <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon2'];?>
</td>
                                                <td style="text-align: center;border-left:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['target']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['1']['target'] : '-';?>
</td>
                                                <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['target']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['4']['target'] : '-';?>
</td>
                                                <td style="text-align: center;border-left:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['pret_contract_client']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['pret_contract_client']-$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['pret_contract_client']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['pret_contract_client']-$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']!=''||$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!='' ? ($_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']) : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-';?>
 </td>
                                                <td style="text-align: center;border-right:double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-';?>
</td>
                                                <td style="text-align: center;">
                                                    <?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>

                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>

                                                </td>
                                                <td>
                                                    <?php if (count($_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11'])>0) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                                                    <td style="text-align: center;">
                                                                        <a target="_blank"
                                                                           href="istoric_client_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
">
                                                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_bg_11']['numar_produs_by_pret'];?>

                                                                        </a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    <?php } else { ?>
                                                        <span style="text-align: center;">-</span>
                                                    <?php }?>
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php if (count($_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9'])>0) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                                                    <td style="text-align: center;">
                                                                        <a target="_blank"
                                                                           href="istoric_client_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
">
                                                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
<br/>
                                                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_9']['numar_produs_by_pret'];?>

                                                                        </a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    <?php } else { ?>
                                                        <span style="text-align: center;">-</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_comision_bg_11'] = new Smarty_variable(($_smarty_tpl->tpl_vars['total_comision_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_comision_ar_9'] = new Smarty_variable(($_smarty_tpl->tpl_vars['total_comision_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_bg_ar'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value, null, 0);?>
                                        <?php } ?>
                                        <tr>
                                            <th colspan="10" style="text-align: right;border-right:double;">TOTAL:</th>
                                            <th><abbr title="Total bucati BG 11"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></th>
                                            <th><abbr title="Total bucati AR 9"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th style="border-right:double;"><abbr title="Total bucati BG + AR "
                                                                                   style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_bg_ar']->value;?>
</abbr>
                                            </th>
                                            <th>
                                                <abbr title="Total valoare incasare BG 11"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</abbr>
                                            </th>
                                            <th style="border-right:double;">
                                                <abbr title="Total valoare incasare AR 9"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th><abbr title="Total comision BG 11"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</abbr></th>
                                            <th style="border-right:double;"><abbr title="Total comision AR 9"
                                                                                   style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th colspan="20"></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: inline-flex">
                                        <div>
                                            <?php if (count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value)>0) {?>
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="<?php echo count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value);?>
">PRETURI BG 11</th>
                                                    </tr>
                                                    <tr>
                                                        <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi_by_bg_11']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_bg_11']['pret'];?>

                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_bg_11']['cantitate']['0']['total_cantitate'];?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            <?php }?>
                                        </div>
                                        <div style="margin-left: 10px;w">
                                            <?php if (count($_smarty_tpl->tpl_vars['preturi_by_ar_9']->value)>0) {?>
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="<?php echo count($_smarty_tpl->tpl_vars['preturi_by_ar_9']->value);?>
">PRETURI AR 9</th>
                                                    </tr>
                                                    <tr>
                                                        <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi_by_ar_9']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_9']['pret'];?>

                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_9']['cantitate']['0']['total_cantitate'];?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            <?php }?>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                                            <th style="text-align: center;" rowspan="2">CLIENT</th>
                                            <th style="text-align: center;" rowspan="2">TELEFON</th>
                                            <th colspan="3">BG/AR</th>
                                            <th colspan="3">PRET UNITAR</th>
                                            <th colspan="3">COMISION</th>
                                            <th colspan="3">TOTAL BUCATI</th>
                                            <th colspan="3">TOTAL VAL. INCASATA</th>
                                            <th colspan="3">TOTAL COMISION</th>
                                            <th colspan="3">VALOARE BUCATI BG/AR</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center;">BG 11</td>
                                            <td style="text-align: center;">AR 8</td>
                                            <td style="text-align: center;">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_comision_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_comision_ar_8'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_comision_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                            <tr>
                                                <td style="text-align: center" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                <td style="text-align: left"
                                                    class="span3"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                                <td>
                                                    <?php if (($_smarty_tpl->tpl_vars['client']->value['sters']==0)) {?>
                                                        <a target="_blank" href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
                                                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                                                        </a>
                                                    <?php } else { ?>
                                                        <a target="_blank" href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">

                                                            <abbr title="Client sters de pe acest traseu"
                                                                  style="color: red;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</abbr>
                                                        </a>
                                                    <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon2'];?>
</td>
                                                <td style="text-align: center;border-left:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['target']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['1']['target'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['target']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['3']['target'] : '-';?>
</td>
                                                <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['target']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['4']['target'] : '-';?>
</td>
                                                <td style="text-align: center;border-left:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['pret_contract_client']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['pret_contract_client']-$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['pret_contract_client']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['pret_contract_client']-$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['pret_contract_client']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['pret_contract_client']-$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>
</td>
                                                <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8_cu_pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8_cu_pret'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision'] : '-';?>
</td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php if (count($_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11'])>0) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                                                    <td style="text-align: center;">
                                                                        <a target="_blank"
                                                                           href="istoric_client_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
">
                                                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_bg_11']['numar_produs_by_pret'];?>

                                                                        </a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    <?php } else { ?>
                                                        <span style="text-align: center;">-</span>
                                                    <?php }?>
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php if (count($_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_8'])>0) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                                                    <td style="text-align: center;">
                                                                        <a target="_blank"
                                                                           href="istoric_client_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
">
                                                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_8']['numar_produs_by_pret'];?>

                                                                        </a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    <?php } else { ?>
                                                        <span style="text-align: center;">-</span>
                                                    <?php }?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php if (count($_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9'])>0) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                                                    <td style="text-align: center;">
                                                                        <a target="_blank"
                                                                           href="istoric_client_fisa_traseu.php?id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                                                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_9']['numar_produs_by_pret'];?>

                                                                        </a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    <?php } else { ?>
                                                        <span style="text-align: center;">-</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_comision_bg_11'] = new Smarty_variable(($_smarty_tpl->tpl_vars['total_comision_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['comision']), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_comision_ar_8'] = new Smarty_variable(($_smarty_tpl->tpl_vars['total_comision_ar_8']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['comision']), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_comision_ar_9'] = new Smarty_variable(($_smarty_tpl->tpl_vars['total_comision_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']*$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['comision']), null, 0);?>
                                        <?php } ?>
                                        <tr>
                                            <th colspan="13" style="text-align: right;border-right:double">TOTAL:</th>
                                            <th style="color: red;"><abbr
                                                        title="Total bucati BG 11"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></th>
                                            <th style="color: red;"><abbr title="Total bucati AR 8"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</abbr>
                                            </th>
                                            <th style="text-align: center;border-right:double;"><abbr
                                                        title="Total bucati AR 9"
                                                        style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr></th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value;?>
</abbr>
                                            </th>
                                            <th style="text-align: center;border-right:double;">
                                                <abbr title="Total valoare incasare AR 9"
                                                      style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th style="color: red;"><abbr
                                                        title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</abbr></th>
                                            <th style="color: red;"><abbr
                                                        title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_8']->value;?>
</abbr></th>
                                            <th style="text-align: center;border-right:double;"><abbr
                                                        title="Total comision AR 9"
                                                        style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</abbr></th>
                                            <th colspan="20"></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: inline-flex">
                                        <div><?php if (count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value)>0) {?>
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="<?php echo count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value);?>
">PRETURI BG 11</th>
                                                    </tr>
                                                    <tr>
                                                        <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi_by_bg_11']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_bg_11']['pret'];?>

                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_bg_11']['cantitate']['0']['total_cantitate'];?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            <?php }?>
                                        </div>
                                        <div style="margin-left: 10px;">
                                            <?php if (count($_smarty_tpl->tpl_vars['preturi_by_ar_8']->value)>0) {?>
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="<?php echo count($_smarty_tpl->tpl_vars['preturi_by_ar_8']->value);?>
">PRETURI AR 8</th>
                                                    </tr>
                                                    <tr>
                                                        <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi_by_ar_8']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_8']['pret'];?>

                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_8']['cantitate']['0']['total_cantitate'];?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            <?php }?>
                                        </div>
                                        <div style="margin-left: 10px;w">
                                            <?php if (count($_smarty_tpl->tpl_vars['preturi_by_ar_9']->value)>0) {?>
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="<?php echo count($_smarty_tpl->tpl_vars['preturi_by_ar_9']->value);?>
">PRETURI AR 9</th>
                                                    </tr>
                                                    <tr>
                                                        <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi_by_ar_9']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_9']['pret'];?>

                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pret']->value['pret_ar_9']['cantitate']['0']['total_cantitate'];?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            <?php }?>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



<?php }} ?>
