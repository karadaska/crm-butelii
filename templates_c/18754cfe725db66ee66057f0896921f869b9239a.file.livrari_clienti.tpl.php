<?php /* Smarty version Smarty-3.1.15, created on 2021-06-10 15:42:22
         compiled from "/var/www/html/fofoweb/www/templates/livrari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71572774560c117c05f66c8-62267771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18754cfe725db66ee66057f0896921f869b9239a' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/livrari_clienti.tpl',
      1 => 1623328592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71572774560c117c05f66c8-62267771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c117c06f90a9_87600339',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_clienti' => 0,
    'produs' => 0,
    'client' => 0,
    'target_client' => 0,
    'produse' => 0,
    'grand_bucati' => 0,
    'grand_valoare' => 0,
    'grand_comision' => 0,
    'preturi' => 0,
    'pret' => 0,
    'colspan' => 0,
    'grand_total_ar_bg' => 0,
    'grand_total_cantitati' => 0,
    'grand_total_valoare' => 0,
    'grand_total_comision' => 0,
    'preturi_by_bg_11' => 0,
    'preturi_by_ar_9' => 0,
    'preturi_by_ar_8' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c117c06f90a9_87600339')) {function content_60c117c06f90a9_87600339($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari clienti
                        <a target="_blank"
                           href="/print_livrari_clienti.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/livrari_clienti.php" method="post"
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
            <?php if ((count($_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu'])>0)) {?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-table"></i></div>
                                <h4>List&#259; clien&#355i</h4>
                            </div>
                            <form action="/livrari_clienti.php"
                                  method="post"
                                  style="margin-bottom: 0">
                                <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th rowspan="3">LOCALITATE</th>
                                            <th rowspan="3">CLIENT</th>
                                            <th rowspan="3">TELEFON</th>
                                            <th colspan="<?php echo count($_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']);?>
">TARGET PRODUSE</th>
                                            <th colspan="<?php echo count($_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']);?>
">TOTAL PRODUSE</th>
                                            <th>GRAND PRODUSE</th>
                                            <th colspan="<?php echo count($_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']);?>
">PRET PRODUSE</th>
                                        </tr>
                                        <tr>
                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                <th>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['produs']->value['nume_produs'];?>
</th>
                                                        </tr>
                                                        <tr>
                                                            <th>STOC</th>
                                                            <th>PRET</th>
                                                            <th>COM</th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            <?php } ?>
                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                <th>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['produs']->value['nume_produs'];?>
</th>
                                                        </tr>
                                                        <tr>
                                                            <th>BUC.</th>
                                                            <th>PRET</th>
                                                            <th>COM</th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            <?php } ?>
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th colspan="3">&nbsp;</th>
                                                    </tr>
                                                    <tr>
                                                        <th>BG + AR</th>
                                                        <th>VAL.</th>
                                                        <th>COM.</th>
                                                    </tr>
                                                </table>
                                            </th>
                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                <th>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>&nbsp</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['produs']->value['nume_produs'];?>
</th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            <?php } ?>
                                        </tr>
                                        </thead>
                                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['livrare_clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                            <tr>
                                                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
 </br><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>
</td>
                                                <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target_produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['target']>0||$_smarty_tpl->tpl_vars['target_client']->value['target']!='' ? $_smarty_tpl->tpl_vars['target_client']->value['target'] : '-';?>
</td>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['pret_contract']>0||$_smarty_tpl->tpl_vars['target_client']->value['pret_contract']!='' ? $_smarty_tpl->tpl_vars['target_client']->value['pret_contract'] : '-';?>
</td>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['comision']>0||$_smarty_tpl->tpl_vars['target_client']->value['comision']!='' ? $_smarty_tpl->tpl_vars['target_client']->value['comision'] : '-';?>
</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                <?php } ?>
                                                <?php $_smarty_tpl->tpl_vars['grand_bucati'] = new Smarty_variable(0, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable(0, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_comision'] = new Smarty_variable(0, null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['total_produse_vandute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['cantitate']>0||$_smarty_tpl->tpl_vars['produse']->value['cantitate']!='' ? $_smarty_tpl->tpl_vars['produse']->value['cantitate'] : '-';?>
</td>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['pret']>0||$_smarty_tpl->tpl_vars['produse']->value['pret']!='' ? $_smarty_tpl->tpl_vars['produse']->value['pret'] : '-';?>
</td>
                                                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['comision']>0||$_smarty_tpl->tpl_vars['produse']->value['comision']!='' ? $_smarty_tpl->tpl_vars['produse']->value['comision'] : '-';?>
</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <?php $_smarty_tpl->tpl_vars['grand_bucati'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_bucati']->value+$_smarty_tpl->tpl_vars['produse']->value['cantitate'], null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_valoare']->value+($_smarty_tpl->tpl_vars['produse']->value['pret']*$_smarty_tpl->tpl_vars['produse']->value['cantitate']), null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['grand_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_comision']->value+$_smarty_tpl->tpl_vars['produse']->value['comision'], null, 0);?>
                                                <?php } ?>
                                                <td>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['grand_bucati']->value;?>
</td>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['grand_valoare']->value;?>
</td>
                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['grand_comision']->value;?>
</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <?php  $_smarty_tpl->tpl_vars['preturi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preturi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['preturi_produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preturi']->key => $_smarty_tpl->tpl_vars['preturi']->value) {
$_smarty_tpl->tpl_vars['preturi']->_loop = true;
?>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                                    <?php if (($_smarty_tpl->tpl_vars['pret']->value['total_cantitati_by_pret_produs']['numar_produs_by_pret']>0)) {?>
                                                                        <td style="text-align: center;">
                                                                            <?php echo $_smarty_tpl->tpl_vars['pret']->value['pret'];?>

                                                                            <br/>
                                                                            <?php echo $_smarty_tpl->tpl_vars['pret']->value['total_cantitati_by_pret_produs']['numar_produs_by_pret'];?>

                                                                        </td>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <?php if ((count($_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu'])==2)) {?>
                                                <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(4, null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(5, null, 0);?>
                                            <?php }?>

                                            <th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"></th>
                                            <th style="text-align: right;vertical-align: middle;color:red;">TOTAL</th>
                                            <?php $_smarty_tpl->tpl_vars['grand_total_cantitati'] = new Smarty_variable(0, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_total_valoare'] = new Smarty_variable(0, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_total_comision'] = new Smarty_variable(0, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_total_ar_bg'] = new Smarty_variable(0, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable(0, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_comision'] = new Smarty_variable(0, null, 0);?>

                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['produse_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_cantitati'] = new Smarty_variable($_smarty_tpl->tpl_vars['lista_clienti']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'], null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['lista_clienti']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'], null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['lista_clienti']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['comision'], null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_ar_bg'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_total_ar_bg']->value+$_smarty_tpl->tpl_vars['grand_total_cantitati']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_valoare']->value+$_smarty_tpl->tpl_vars['grand_total_valoare']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_comision']->value+$_smarty_tpl->tpl_vars['grand_total_comision']->value, null, 0);?>
                                                <td>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_cantitati']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_cantitati']->value : '-';?>
</th>
                                                            <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_valoare']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_valoare']->value : '-';?>
</th>
                                                            <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_comision']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_comision']->value : '-';?>
</th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_ar_bg']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_ar_bg']->value : '-';?>
</th>
                                                        <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_valoare']->value>0 ? $_smarty_tpl->tpl_vars['grand_valoare']->value : '-';?>
</th>
                                                        <th style="text-align: center;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_comision']->value>0 ? $_smarty_tpl->tpl_vars['grand_comision']->value : '-';?>
</th>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                                        <?php if (($_smarty_tpl->tpl_vars['pret']->value['pret_bg_11']['cantitate']['0']['total_cantitate']>0)) {?>
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
                                        <?php }?>
                                    <?php } ?>
                                </tr>
                            </table>
                        <?php }?>
                    </div>
                    <div style="margin-left: 10px;">
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
                                        <?php if (($_smarty_tpl->tpl_vars['pret']->value['pret_ar_9']['cantitate']['0']['total_cantitate']>0)) {?>
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
                                        <?php }?>
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
                                        <?php if (($_smarty_tpl->tpl_vars['pret']->value['pret_ar_8']['cantitate']['0']['total_cantitate']>0)) {?>
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
                                        <?php }?>
                                    <?php } ?>
                                </tr>
                            </table>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



<?php }} ?>
