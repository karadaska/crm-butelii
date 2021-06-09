<?php /* Smarty version Smarty-3.1.15, created on 2021-06-09 14:15:37
         compiled from "/var/www/html/fofoweb/www/templates/print_livrari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44692461460c0a294a628e1-25430061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82208087dda068886a360b1fa14bfe49b76c0897' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_livrari_clienti.tpl',
      1 => 1623237334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44692461460c0a294a628e1-25430061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c0a294bba966_53953505',
  'variables' => 
  array (
    'id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'org_date_start' => 0,
    'date_start' => 0,
    'org_date_stop' => 0,
    'date_stop' => 0,
    'newDateStart' => 0,
    'newDateSop' => 0,
    'nume_traseu' => 0,
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
<?php if ($_valid && !is_callable('content_60c0a294bba966_53953505')) {function content_60c0a294bba966_53953505($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/conditionizr.min.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>
<script src="js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
<script src="js/plugins/core/jrespond/jRespond.min.js"></script>
<script src="js/jquery.genyxAdmin.js"></script>
<script src="js/plugins/forms/uniform/jquery.uniform.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/plugins/forms/autosize/jquery.autosize-min.js"></script>
<script src="js/plugins/forms/inputlimit/jquery.inputlimiter.1.3.min.js"></script>
<script src="js/plugins/forms/mask/jquery.mask.min.js"></script>
<script src="js/plugins/forms/switch/bootstrapSwitch.js"></script>
<script src="js/plugins/forms/globalize/globalize.js"></script>
<script src="js/plugins/forms/spectrum/spectrum.js"></script><!--  Color picker -->
<script src="js/plugins/forms/datepicker/bootstrap-datepicker.js"></script>
<script src="js/plugins/forms/multiselect/ui.multiselect.js"></script>
<script src="js/plugins/forms/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="js/plugins/forms/validation/jquery.validate.js"></script>
<script src="js/plugins/forms/select2/select2.js"></script>
<html>
<head>
    <style type='text/css' media="print">
        body {
            visibility: hidden;
            font-family: Verdana;
            font-size: 14px;
        }

        .print {
            visibility: visible;
        }

        .ascuns {
            visibility: hidden;
        }

        table {
            font-size: 16px;
        }

        th {
            font-weight: bold;
            color: #000;
        }

        td {
        }
        @page {
            size: auto;
            margin: 0;
        }
    </style>
    <script type="text/javascript">
        function setPrint() {
            jQuery("#print_button").attr({
                "class": "ascuns"
            });
        }
    </script>
</head>
<body>
<section id="content" class="print">
    <div class="wrapper">
        <input type="button" onclick="setPrint();window.print();return false;" id="print_button" name="print_button"
               value="PRINT"/>
        <a href="/raport_livrari_clienti.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <?php $_smarty_tpl->tpl_vars['org_date_start'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_start']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['date_start'] = new Smarty_variable(str_replace('-"','.',$_smarty_tpl->tpl_vars['org_date_start']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['newDateStart'] = new Smarty_variable(date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['date_start']->value)), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['org_date_stop'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_stop']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['date_stop'] = new Smarty_variable(str_replace('-"','.',$_smarty_tpl->tpl_vars['org_date_stop']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['newDateSop'] = new Smarty_variable(date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['date_stop']->value)), null, 0);?>

    <table style="width: 1500px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h2 style="text-align: center;">
                    RAPORT LUNAR <br/>
                    <?php echo $_smarty_tpl->tpl_vars['newDateStart']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['newDateSop']->value;?>

                </h2>
                <h2>
                    TRASEU: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_traseu']->value['nume']);?>
 <br/>
                </h2>
            </td>
        </tr>
    </table>
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
                            <table border="1">
                                <thead>
                                <tr>
                                    <th rowspan="3">LOCALITATE</th>
                                    <th rowspan="3">CLIENT</th>
                                    <th rowspan="3">TELEFON</th>
                                    <th colspan="3">TARGET PRODUSE</th>
                                    <th colspan="3">TOTAL PRODUSE</th>
                                    <th>GRAND PRODUSE</th>
                                    <th colspan="3">PRET PRODUSE</th>
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
                                                <?php  $_smarty_tpl->tpl_vars['pret'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preturi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret']->key => $_smarty_tpl->tpl_vars['pret']->value) {
$_smarty_tpl->tpl_vars['pret']->_loop = true;
?>
                                                    <?php if (($_smarty_tpl->tpl_vars['pret']->value['total_cantitati_by_pret_produs']['numar_produs_by_pret']>0)) {?>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <?php echo $_smarty_tpl->tpl_vars['pret']->value['pret'];?>

                                                                    <br/>
                                                                    <?php echo $_smarty_tpl->tpl_vars['pret']->value['total_cantitati_by_pret_produs']['numar_produs_by_pret'];?>

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <?php }?>
                                                <?php } ?>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <th colspan="5"></th>
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
                                            <table  class="table table-bordered">
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
                                        <table  class="table table-bordered">
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
</body>
</html>
<?php }} ?>
