<?php /* Smarty version Smarty-3.1.15, created on 2021-04-09 14:06:07
         compiled from "/var/www/html/fofoweb/www/templates/print_raport_livrari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45388571960350756c8e0e0-18599086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54218efd327dd6a2b646f028e9d16e12220b2820' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_raport_livrari_clienti.tpl',
      1 => 1617966354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45388571960350756c8e0e0-18599086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60350756ef3ee5_14557296',
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
    'total_ar_8' => 0,
    'total_valoare_incasare_ar_8' => 0,
    'total_comision_ar_8' => 0,
    'total_afisare' => 0,
    'preturi_by_bg_11' => 0,
    'pret' => 0,
    'preturi_by_ar_8' => 0,
    'preturi_by_ar_9' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60350756ef3ee5_14557296')) {function content_60350756ef3ee5_14557296($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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

    <table style="width: 1800px;">

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
    <?php if ($_smarty_tpl->tpl_vars['depozit_by_traseu']->value['depozit_id']==1) {?>
        <table border="1">
            <thead>
            <tr>
                <th style="text-align: center;" rowspan="2">#</th>
                <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                <th style="text-align: center;" rowspan="2">CLIENT</th>
                <th style="text-align: center;" rowspan="2">TELEFON</th>
                <th colspan="2" style="text-align: center;">BG/AR</th>
                <th colspan="2" style="text-align: center;">PRET UNITAR</th>
                <th colspan="2" style="text-align: center;">COMISION</th>
                <th colspan="3" style="text-align: center;">TOTAL BUCATI</th>
                <th colspan="2" style="text-align: center;">TOTAL VAL. INCASATA</th>
                <th colspan="2" style="text-align: center;">TOTAL COMISION</th>
                <th colspan="2" style="text-align: center;">VALOARE BUCATI BG/AR</th>
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
                <td style="text-align: center">BG + AR</td>
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
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                        <?php } else { ?>
                            <abbr title="Client sters de pe acest traseu"
                                  style="color: red;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</abbr>
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
                    <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'] : '-';?>
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
                            <table border="1">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                        <td style="text-align: center;">
                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_bg_11']['numar_produs_by_pret'];?>

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
                            <table border="1">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                        <td style="text-align: center;">
                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_9']['numar_produs_by_pret'];?>

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
                <td colspan="10" style="text-align: right;">TOTAL:</td>
                <td style="text-align: center"><abbr title="Total bucati BG 11"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></td>
                <td style="text-align: center"><abbr title="Total bucati AR 9"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr></td>
                <td style="text-align: center;"><abbr title="Total bucati BG + AR "><?php echo $_smarty_tpl->tpl_vars['total_bg_ar']->value;?>
</abbr>
                </td>
                <td style="text-align: center">
                    <abbr title="Total valoare incasare BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</abbr>
                </td>
                <td style="text-align: center">
                    <abbr title="Total valoare incasare AR 9"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</abbr>
                </td>
                <td style="text-align: center"><abbr title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</abbr></td>
                <td style="text-align: center"><abbr title="Total comision AR 9"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</abbr></td>
                <td colspan="20"></td>
            </tr>
            </tbody>
        </table>
        <div style="display: inline-flex">
            <?php if (($_smarty_tpl->tpl_vars['total_bg_11']->value!=0)) {?>
                <div>
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">BG
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['total_ar_8']->value!=0)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">AR
                                8
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_8']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['total_ar_9']->value)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">AR
                                9
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['total_afisare'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value, null, 0);?>
            <?php if (($_smarty_tpl->tpl_vars['total_afisare']->value!=0)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">
                                TOTALURI
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value+$_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value+$_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value+$_smarty_tpl->tpl_vars['total_comision_ar_8']->value+$_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
        </div>
        <div style="display: inline-flex;margin-left: 20px;">
            <div><?php if (count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value)>0) {?>
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
        <table border="1">
            <thead>
            <tr>
                <th style="text-align: center;" rowspan="2">#</th>
                <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                <th style="text-align: center;" rowspan="2">CLIENT</th>
                <th style="text-align: center;" rowspan="2">TELEFON</th>
                <th colspan="3" style="text-align: center;">BG/AR</th>
                <th colspan="3" style="text-align: center;">PRET UNITAR</th>
                <th colspan="3" style="text-align: center;">COMISION</th>
                <th colspan="4" style="text-align: center;">TOTAL BUCATI</th>
                <th colspan="3" style="text-align: center;">TOTAL VAL. INCASATA</th>
                <th colspan="3" style="text-align: center;">TOTAL COMISION</th>
                <th colspan="3" style="text-align: center;">VALOARE BUCATI BG/AR</th>
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
                <td style="text-align: center;">BG +AR</td>
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
            <?php $_smarty_tpl->tpl_vars['total_bg_ar'] = new Smarty_variable(0, null, 0);?>
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
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                        <?php } else { ?>
                            <abbr title="Client sters de pe acest traseu"
                                  style="color: red;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</abbr>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9'] : '-';?>
</td>
                    <td style="text-align: center;border-right:double"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']!=''||$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']!=''||$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']!='' ? ($_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_9']['total_ar_9']+$_smarty_tpl->tpl_vars['client']->value['total_produse']['ar_8']['total_ar_8']+$_smarty_tpl->tpl_vars['client']->value['total_produse']['bg_11']['total_bg_11']) : '-';?>
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
                            <table border="1">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_bg_11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                        <td style="text-align: center;">
                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_bg_11']['numar_produs_by_pret'];?>

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
                            <table border="1">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                        <td style="text-align: center;">
                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_8']['numar_produs_by_pret'];?>

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
                            <table border="1">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['lista_preturi_ar_9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                        <td style="text-align: center;">
                                            Pret: <?php echo $_smarty_tpl->tpl_vars['lista']->value['pret'];?>
 <br/>
                                            Cant: <?php echo $_smarty_tpl->tpl_vars['lista']->value['total_cantitati_ar_9']['numar_produs_by_pret'];?>

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
                <?php $_smarty_tpl->tpl_vars['total_bg_ar'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value, null, 0);?>
            <?php } ?>
            <tr>
                <td colspan="13" style="text-align: right;border-right:double">TOTAL:</td>
                <td style="text-align: center;"><abbr title="Total bucati BG 11"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></td>
                <td style="text-align: center;"><abbr title="Total bucati AR 8"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</abbr></td>
                <td style="text-align: center;"><abbr
                            title="Total bucati AR 9"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr></td>
                <td style="text-align: center;border-right:double;"><abbr

                            title="Total bucati BG + AR"
                            ><?php echo $_smarty_tpl->tpl_vars['total_bg_ar']->value;?>
</abbr>
                </td>
                <td style="text-align: center">
                    <abbr title="Total valoare incasare BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</abbr>
                </td>
                <td style="text-align: center">
                    <abbr title="Total valoare incasare AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value;?>
</abbr>
                </td>
                <td style="text-align: center;border-right:double">
                    <abbr title="Total valoare incasare AR 9"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</abbr>
                </td>
                <td style="text-align: center"><abbr title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</abbr></td>
                <td style="text-align: center"><abbr title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_8']->value;?>
</abbr></td>
                <td style="text-align: center;border-right:double"><abbr
                            title="Total comision AR 9"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</abbr></td>
                <td colspan="20"></td>
            </tr>
            </tbody>
        </table>
        <div style="display: inline-flex">
            <?php if (($_smarty_tpl->tpl_vars['total_bg_11']->value!=0)) {?>
                <div>
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">BG
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['total_ar_8']->value!=0)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">AR
                                8
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_8']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['total_ar_9']->value)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">AR
                                9
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Total Comision</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['total_afisare'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value, null, 0);?>
            <?php if (($_smarty_tpl->tpl_vars['total_afisare']->value!=0)) {?>
                <div style="margin-left: 10px;">
                    <table border="1" style="width: 180px;">
                        <tr>
                            <td style="text-align: center;font-weight: 900;" colspan="2">
                                TOTALURI
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasare_bg_11']->value+$_smarty_tpl->tpl_vars['total_valoare_incasare_ar_8']->value+$_smarty_tpl->tpl_vars['total_valoare_incasare_ar_9']->value;?>
</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                            <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_comision_bg_11']->value+$_smarty_tpl->tpl_vars['total_comision_ar_8']->value+$_smarty_tpl->tpl_vars['total_comision_ar_9']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            <?php }?>
        </div>
        <div style="display: inline-flex;margin-left: 20px;">
            <div><?php if (count($_smarty_tpl->tpl_vars['preturi_by_bg_11']->value)>0) {?>
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
                    <table border="1" style="margin-top: 20px;">
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
                                    <table border="1">
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
</section>
</body>
</html>
<?php }} ?>
