<?php /* Smarty version Smarty-3.1.15, created on 2021-03-04 14:23:36
         compiled from "/var/www/html/fofoweb/www/templates/apeluri_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062191012602cdf9787e0c0-40420550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96bdd82e0bfbf087d55dbdbb7d77e30717ec3db3' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/apeluri_clienti.tpl',
      1 => 1614860615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062191012602cdf9787e0c0-40420550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602cdf97a36a43_74273043',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'stare_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'nr' => 0,
    'target_client' => 0,
    'cantitati_goale' => 0,
    'valoare_goale_input' => 0,
    'total_bg_11' => 0,
    'total_bg_9' => 0,
    'total_ar_8' => 0,
    'total_ar_9' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'observatie_client' => 0,
    'urgenta_client' => 0,
    'clienti_cu_observatii' => 0,
    'clienti_cu_urgente' => 0,
    'raspuns' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602cdf97a36a43_74273043')) {function content_602cdf97a36a43_74273043($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Actualizare produse goale la client

                        <a href="/print_apeluri_clienti.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>

            </div>
            <div class="row-fluid span12">
                <form action="/apeluri_clienti.php" method="post" id="form_actualizeaza_stoc"
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
                        </select>
                        <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;">
                            <option value="-1">-Toti-</option>
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
                    </div>
                    <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
">

                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                            <div style="float: right;margin-right: 20px;margin-top: 10px;">
                                <form action="export.php" method="post">
                                    <input type="submit" name="export" class="btn btn-mini btn-success" value="Export">
                                </form>
                            </div>
                        </div>
                        <form action="/apeluri_clienti.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;">Stoc client</th>
                                        <th style="text-align: left;">Cantitati</th>
                                        <th style="text-align: center;" colspan="2">Observatii</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_ar_8'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_ar_9'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                                            <th style="text-align: center;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                            <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                <a target="_blank"
                                                   href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</a>
                                            </th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['telefon'])>1) {?>
                                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                                                <?php }?>
                                                <br/>
                                                <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['telefon_2'])>1) {?>
                                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                                                <?php }?>
                                            </th>
                                            <th style="vertical-align: middle;text-align: left;">
                                                <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
: <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                                    <br/>
                                                <?php } ?>
                                            </th>
                                            <?php if ($_smarty_tpl->tpl_vars['target_client']->value['target']>0) {?>
                                                <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                                <td style="vertical-align: middle;text-align: right;color: red;background-color: gainsboro;"
                                                    class="span4">
                                                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['cantitati_goale'] = new Smarty_variable(Clienti::getGoaleApelClientiByClientId($_smarty_tpl->tpl_vars['client']->value['id'],$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'],$_smarty_tpl->tpl_vars['traseu_id']->value), null, 0);?>
                                                        <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>

                                                        <?php if ($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale']>0) {?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_goale_input'] = new Smarty_variable($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale'], null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_goale_input'] = new Smarty_variable(0, null, 0);?>
                                                        <?php }?>
                                                        <input style="text-align: right"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['valoare_goale_input']->value;?>
"
                                                               type="text" autocomplete="off"
                                                               name="goale_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        <br/>
                                                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==1) {?>
                                                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale']), null, 0);?>
                                                        <?php }?>
                                                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==2) {?>
                                                            <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_9']->value+($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale']), null, 0);?>
                                                        <?php }?>
                                                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==3) {?>
                                                            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale']), null, 0);?>
                                                        <?php }?>
                                                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==4) {?>
                                                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+($_smarty_tpl->tpl_vars['cantitati_goale']->value['goale']), null, 0);?>
                                                        <?php }?>
                                                    <?php } ?>
                                                </td>
                                            <?php } else { ?>
                                                <td style="vertical-align: middle;text-align: center;">
                                                    <span style="color: red;">Nu are produse asignate!!</span>
                                                    <a href="/asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                                       class="btn btn-mini btn-inverse">Asigneaza</a>
                                                </td>
                                            <?php }?>
                                            <th style="vertical-align: middle;width: 300px;padding-bottom: 10px;padding-top: 10px;">
                                                <?php $_smarty_tpl->tpl_vars['observatie_client'] = new Smarty_variable(Clienti::getObservatieApelClientiByClientId($_smarty_tpl->tpl_vars['client']->value['id'],$_smarty_tpl->tpl_vars['traseu_id']->value), null, 0);?>
                                                <select style="text-align: left;width: 250px;"
                                                        name="obs_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                    <option value="0">Obs</option>
                                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==1) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                                    <?php if ($_smarty_tpl->tpl_vars['observatie_client']->value['observatie_id']==$_smarty_tpl->tpl_vars['observatie']->value['id']) {?>selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                                            </option>
                                                        <?php }?>
                                                    <?php } ?>
                                                </select>
                                                <div style="margin-top: 5px;"></div>
                                                <?php $_smarty_tpl->tpl_vars['urgenta_client'] = new Smarty_variable(Clienti::getUrgentaApelClientiByClientId($_smarty_tpl->tpl_vars['client']->value['id'],$_smarty_tpl->tpl_vars['traseu_id']->value), null, 0);?>
                                                <select name="urgent_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
"
                                                        style="width: 250px;">
                                                    <option value="0"
                                                            <?php if ($_smarty_tpl->tpl_vars['urgenta_client']->value['urgent']==0) {?>selected="selected"<?php }?>>
                                                        NU
                                                    </option>
                                                    <option value="1"
                                                            <?php if ($_smarty_tpl->tpl_vars['urgenta_client']->value['urgent']==1) {?>selected="selected"<?php }?>>
                                                        DA
                                                    </option>
                                                </select>
                                            </th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza produse"
                                       class="btn btn-info" name="update"/>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered" style="width:68%;margin-left: 15px;">
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['total_bg_11']->value>0) {?>
                                <th style="text-align: left;color: red;">
                                    <span style="font-weight: bolder;margin-left: 20px;">BG 11: <?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>

                                        buc</span><br/>
                                </th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['total_ar_8']->value>0) {?>
                                <th style="text-align: left;color: red">
                                    <span style="font-weight: bolder;margin-left: 20px;">AR 8: <?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
 buc</span>
                                </th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['total_ar_9']->value>0) {?>
                                <th style="text-align: left;color: red">
                                    <span style="font-weight: bolder;margin-left: 20px;">AR 9: <?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
 buc</span>
                                </th>
                            <?php }?>
                        </tr>
                    </table>
                    <div style="display: inline-flex">
                        <?php if (count($_smarty_tpl->tpl_vars['clienti_cu_observatii']->value)>0) {?>
                            <div style="margin-left: 10px;">
                                <table class="table table-bordered table-hover"
                                       style="width: 560px;margin-left: 5px;">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;" class="span1">#</th>
                                        <th>Localitate</th>
                                        <th>Client</th>
                                        <th>Observatii</th>
                                    </tr>
                                    </thead>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clienti_cu_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_localitate'];?>
</td>
                                            <td>
                                                <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_client'];?>
</a>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_observatie'];?>
</td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['clienti_cu_urgente']->value)>0) {?>
                            <div style="margin-left: 15px;">
                                <table class="table table-bordered table-hover" style="width: 570px;">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center" class="span1">#</th>
                                        <th>Localitate</th>
                                        <th>Client</th>
                                        <th>Urgent</th>
                                        <th>Cantitati</th>
                                    </tr>
                                    </thead>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clienti_cu_urgente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                            <td>
                                                <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</a>
                                            </td>
                                            <td style="text-align: center;" class="span1">
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['urgent'];?>

                                            </td>
                                            <td style="text-align: left;" class="span2">
                                                <?php  $_smarty_tpl->tpl_vars['raspuns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['raspuns']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['raspuns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['raspuns']->key => $_smarty_tpl->tpl_vars['raspuns']->value) {
$_smarty_tpl->tpl_vars['raspuns']->_loop = true;
?>
                                                    <span style="color: red;"> <?php echo $_smarty_tpl->tpl_vars['raspuns']->value['nume_produs'];?>
</span>
                                                    :
                                                    <span style="font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['raspuns']->value['goale'];?>
</span>
                                                    <br/>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        <?php }?>
                    </div>

                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/apeluri_clienti.js"></script>
<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span>
<?php }} ?>
