<?php /* Smarty version Smarty-3.1.15, created on 2021-02-24 14:02:50
         compiled from "/var/www/html/fofoweb/www/templates/print_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93953769760363ba43e8b40-06532767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28466ecbac126ded8271f40af77df08dc0861b8e' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_fisa_traseu.tpl',
      1 => 1614168160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93953769760363ba43e8b40-06532767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60363ba45da202_31317246',
  'variables' => 
  array (
    'print_fisa' => 0,
    'nr' => 0,
    'client' => 0,
    'client_observatie' => 0,
    'total_bg_11' => 0,
    'total_bg_11_comision' => 0,
    'total_bg_11_unitar' => 0,
    'total_ar_8' => 0,
    'total_ar_8_comision' => 0,
    'total_ar_8_unitar' => 0,
    'total_ar_9' => 0,
    'total_ar_9_comision' => 0,
    'total_ar_9_unitar' => 0,
    'total_afisare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60363ba45da202_31317246')) {function content_60363ba45da202_31317246($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
               value="Print"/>
        <a href="edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['id'];?>
" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h5>

                    Traseu: <?php echo strtoupper($_smarty_tpl->tpl_vars['print_fisa']->value['nume_traseu']);?>
 <br/>
                    Auto: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['numar'];?>
<br/>
                    Sofer: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['nume_sofer'];?>
<br/>
                    Km plecare:<br/>
                    Km sosire:<br/>
                    Nr. clienti: <?php echo count($_smarty_tpl->tpl_vars['print_fisa']->value['clienti']);?>
<br/>
                </h5>
            </td>

        </tr>
    </table>
    <span style="text-align: center;"><h1>RAPORT ZILNIC</h1></span>
    <table border="1" class="print" style="width: 1800px;">
        <thead>
        <tr>
            <td style="text-align: center;" rowspan="3">#</td>
            <th rowspan="3">LOCALITATE</th>
            <th rowspan="3">COMISIONAR</th>
            <th colspan="2" style="border-right: double;">RASTEL</th>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==1) {?>
            <th colspan="2" style="border-right: double;">BG/AR</th>
                <?php } else { ?>
                <th colspan="3" style="border-right: double;">BG/AR</th>
            <?php }?>
            <th colspan="4" style="border-right: double;">Incarcaturi BG/11 kg</th>
            <th colspan="4" style="border-right: double;">Incarcaturi AR/9 kg</th>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                <th colspan="4" style="border-right: double;">Incarcaturi AR/8 kg</th>
            <?php }?>
            <th>Obs</th>
        </tr>
        <tr>
            <td style="text-align: center;">BUC</td>
            <td style="text-align: center;border-right: double;">CUL</td>
            <td style="text-align: center;">Bg11</td>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                <td style="text-align: center;">Ar8</td>
            <?php }?>
            <td style="text-align: center;border-right: double;">Ar9</td>
            <td style="text-align: center;">Buc<br/> BG 11</td>
            <td style="text-align: center;">Pret</td>
            <td>Com</td>
            <td style="text-align: center;border-right: double;">Val 2</td>
            <td style="text-align: center;">Buc<br/> Ar 9</td>
            <td style="text-align: center;">Pret</td>
            <td>Com</td>
            <td style="text-align: center;border-right: double;">Val 3</td>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                <td style="text-align: center;">Buc<br/> Ar 8</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;">Com</td>
                <td style="text-align: center;border-right: double;">Val 4</td>
            <?php }?>
            <td>&nbsp;</td>
        </tr>
        </thead>
        <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_bg_11_comision'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_bg_11_unitar'] = new Smarty_variable(0, null, 0);?>

        <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_8_comision'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_8_unitar'] = new Smarty_variable(0, null, 0);?>

        <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_9_comision'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_9_unitar'] = new Smarty_variable(0, null, 0);?>

        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['print_fisa']->value['clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
            <tr>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                <td>
                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>

                </td>
                <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['rastel'];?>
</td>
                <td style="border-right: double;text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['culoare'];?>
</td>
                <td style="text-align: center;">
                    <?php ob_start();?><?php echo ('Pret: ').($_smarty_tpl->tpl_vars['client']->value['target']['1']['pret']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['pret']!='' ? $_tmp1 : '-';?>

                    <br/><?php ob_start();?><?php echo ('Stoc: ').($_smarty_tpl->tpl_vars['client']->value['target']['1']['target']);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['target']!='' ? $_tmp2 : '-';?>

                </td>
                <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                <td style="text-align: center;">
                    <?php ob_start();?><?php echo ('Pret: ').($_smarty_tpl->tpl_vars['client']->value['target']['3']['pret']);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['pret']!='' ? $_tmp3 : '-';?>

                    <br/><?php ob_start();?><?php echo ('Stoc: ').($_smarty_tpl->tpl_vars['client']->value['target']['3']['target']);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['target']!='' ? $_tmp4 : '-';?>

                    <?php }?>
                <td style="text-align: center;border-right: double;">
                    <?php ob_start();?><?php echo ('Pret: ').($_smarty_tpl->tpl_vars['client']->value['target']['4']['pret']);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['pret']!='' ? $_tmp5 : '-';?>

                    <br/><?php ob_start();?><?php echo ('Stoc: ').($_smarty_tpl->tpl_vars['client']->value['target']['4']['target']);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['target']!='' ? $_tmp6 : '-';?>

                </td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate'] : '-';?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['1']['pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['1']['pret'] : '-';?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['1']['comision'] : '-';?>
</td>
                <td style="text-align: center;border-right: double;">
                    
                    <?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate']!='' ? ($_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['1']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['1']['comision'])) : '-';?>

                </td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate'] : '-';?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['4']['pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['4']['pret'] : '-';?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['4']['comision'] : '-';?>
</td>
                <td style="text-align: center;border-right: double;">
                    <?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate']!='' ? ($_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['4']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['4']['comision'])) : '-';?>

                </td>
                <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate'] : '-';?>
</td>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['3']['pret']!='' ? $_smarty_tpl->tpl_vars['client']->value['realizat']['3']['pret'] : '-';?>
</td>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['comision']!='' ? $_smarty_tpl->tpl_vars['client']->value['target']['3']['comision'] : '-';?>
</td>
                    <td style="text-align: center;border-right: double;">
                        <?php echo $_smarty_tpl->tpl_vars['client']->value['realizat']['3']['pret']!='' ? ($_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['3']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['3']['comision'])) : '-';?>

                    </td>
                <?php }?>
                <td style="text-align: left;">
                    <?php $_smarty_tpl->tpl_vars['client_observatie'] = new Smarty_variable(Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($_smarty_tpl->tpl_vars['client']->value['client_id'],$_smarty_tpl->tpl_vars['client']->value['fisa_generata_id']), null, 0);?>
                    <?php echo $_smarty_tpl->tpl_vars['client_observatie']->value['nume_observatie'];?>

                </td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_bg_11_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11_comision']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate']*$_smarty_tpl->tpl_vars['client']->value['target']['1']['comision'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_bg_11_unitar'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11_unitar']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['1']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['1']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['1']['comision']), null, 0);?>

            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_ar_8_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8_comision']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate']*$_smarty_tpl->tpl_vars['client']->value['target']['3']['comision'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_ar_8_unitar'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8_unitar']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['3']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['3']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['3']['comision']), null, 0);?>

            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_ar_9_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9_comision']->value+($_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate']*$_smarty_tpl->tpl_vars['client']->value['target']['4']['comision']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['total_ar_9_unitar'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9_unitar']->value+$_smarty_tpl->tpl_vars['client']->value['realizat']['4']['cantitate']*($_smarty_tpl->tpl_vars['client']->value['realizat']['4']['pret']-$_smarty_tpl->tpl_vars['client']->value['target']['4']['comision']), null, 0);?>
        <?php } ?>
        <tr style="background-color: lemonchiffon;">
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==1) {?>
            <td colspan="7" style="text-align: right;">TOTAL</td>
                <?php } else { ?>
                <td colspan="8" style="text-align: right;">TOTAL</td>
            <?php }?>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</td>
            <td colspan="2" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11_comision']->value;?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_bg_11_unitar']->value;?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</td>
            <td colspan="2" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9_comision']->value;?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9_unitar']->value;?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==2) {?>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</td>
                <td colspan="2" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_8_comision']->value;?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['total_ar_8_unitar']->value;?>
</td>
            <?php }?>
            <td style="text-align: center;"></td>
        </tr>
    </table>

    <div style="display: inline-flex;margin-top: 20px;">
        <?php if (($_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_bg']!=0||$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_bg']!=0)) {?>
            <div>
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">BG
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_bg'];?>
</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_bg'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_bg'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_bg'];?>
</td>
                    </tr>
                </table>
            </div>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_8']!=0||$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_8']!=0)) {?>
            <div style="margin-left: 10px;">
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">AR
                            8
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_8'];?>
</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_ar_8'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_ar_8'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_8'];?>
</td>
                    </tr>
                </table>
            </div>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_9']!=0||$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_9']!=0)) {?>
            <div style="margin-left: 10px;">
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">AR
                            9
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_9'];?>
</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_ar_9'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_ar_9'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_9'];?>
</td>
                    </tr>
                </table>
            </div>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['total_afisare'] = new Smarty_variable($_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_9']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_9']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_8']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_9'], null, 0);?>
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
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_8']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_total_vandute_ar_9'];?>
</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_ar_8']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_valoare_ar_9'];?>
</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_ar_8']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_comision_ar_9'];?>
</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Def. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_bg']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_8']+$_smarty_tpl->tpl_vars['print_fisa']->value['grand_defecte_ar_9'];?>
</td>
                    </tr>
                </table>
            </div>
        <?php }?>
    </div>
    <br/>
    <div style="font-weight: 900;margin-top: 20px;">
        <span style="font-weight: 900;margin-top: 20px;"> Data: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['data_intrare'];?>
</span>
    </div>
</section>
</body>
</html>
<?php }} ?>
