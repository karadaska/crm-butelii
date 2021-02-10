<?php /* Smarty version Smarty-3.1.15, created on 2021-02-05 14:05:22
         compiled from "/home/dinobaby/public_html/crm/www/templates/print_raport_livrari_soferi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19004530896017fa8466cd12-42668117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf3ae1c3f7186a2bf408cb0220698abd519eb05' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/print_raport_livrari_soferi.tpl',
      1 => 1612526728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19004530896017fa8466cd12-42668117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6017fa8483fe89_85829362',
  'variables' => 
  array (
    'id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'nume_sofer' => 0,
    'livrari_soferi' => 0,
    'nr' => 0,
    'sofer' => 0,
    'total_bg_11' => 0,
    'total_ar_8' => 0,
    'total_ar_9' => 0,
    'total_valoare_incasata_bg_11' => 0,
    'total_valoare_incasata_ar_8' => 0,
    'total_valoare_incasata_ar_9' => 0,
    'total_valoare_comision_bg_11' => 0,
    'total_valoare_comision_ar_8' => 0,
    'total_valoare_comision_ar_9' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6017fa8483fe89_85829362')) {function content_6017fa8483fe89_85829362($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/raport_livrari_soferi.php?sofer_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h3>
                    Raport livrare sofer: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_sofer']->value['nume']);?>
 <br/>
                    Perioada: <?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>

                </h3>
            </td>
        </tr>
    </table>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                    <div class="widget-content">
                        <table border="1">
                            <thead>
                            <tr>
                                <th style="text-align: center;" rowspan="2">#</th>
                                <th style="text-align: left;" rowspan="2">NUME SI PRENUME</th>
                                <th style="text-align: center;" rowspan="2">INDICATOR AUTO</th>
                                <th style="text-align: center;" rowspan="2">Traseu</th>
                                <th colspan="3">TOTAL BUTELII VANDUTE</th>
                                <th colspan="3">TOTAL VALOARE INCASATA</th>
                                <th colspan="3">TOTAL COMISION</th>
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
                            </tr>
                            </thead>
                            <tbody>
                            <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11'] = new Smarty_variable(0, null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8'] = new Smarty_variable(0, null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9'] = new Smarty_variable(0, null, 0);?>

                            <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                <tr>
                                    <td style="text-align: center" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                    <td style="text-align: left"
                                        class="span3"><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume_sofer'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['sofer']->value['numar'];?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume_traseu'];?>
</td>
                                    <td style="text-align: center;border-left:double">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11']!='' ? $_tmp1 : '-';?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8']!='' ? $_tmp2 : '-';?>

                                    </td>
                                    <td style="text-align: center">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_tmp3 : '-';?>

                                    </td>
                                    <td style="text-align: center;border-left:double">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret']!='' ? $_tmp4 : '-';?>

                                    </td>
                                    <td style="text-align: center">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret']!='' ? $_tmp5 : '-';?>

                                    </td>
                                    <td style="text-align: center;border-right:double">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret']!='' ? $_tmp6 : '-';?>

                                    </td>
                                    <td style="text-align: center">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision']!='' ? $_tmp7 : '-';?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision']!='' ? $_tmp8 : '-';?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision']!='' ? $_tmp9 : '-';?>

                                </tr>
                                <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9'], null, 0);?>

                                <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret'], null, 0);?>

                                <?php $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision'], null, 0);?>


                            <?php } ?>
                            <tr>
                                <th colspan="4" style="text-align: right;">TOTAL:</th>
                                <th style="text-align: center;"><abbr title="Total bucati vandute BG 11"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></th>
                                <th style="text-align: center;"><abbr title="Total bucati AR 8"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</abbr></th>
                                <th style="text-align: center;"><abbr
                                            title="Total bucati AR 9"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr></th>
                                <th>
                                    <abbr title="Total valoare incasare BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11']->value;?>
</abbr>
                                </th>
                                <th>
                                    <abbr title="Total valoare incasare AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8']->value;?>
</abbr>
                                </th>
                                <th>
                                    <abbr title="Total valoare incasare AR 9"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9']->value;?>
</abbr>
                                </th>
                                <th><abbr title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11']->value;?>
</abbr></th>
                                <th><abbr title="Total comision AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8']->value;?>
</abbr></th>
                                <th><abbr
                                            title="Total comision AR 9"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9']->value;?>
</abbr></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php }} ?>
