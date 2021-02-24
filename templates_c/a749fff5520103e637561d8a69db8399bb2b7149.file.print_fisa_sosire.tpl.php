<?php /* Smarty version Smarty-3.1.15, created on 2021-02-24 13:31:06
         compiled from "/var/www/html/fofoweb/www/templates/print_fisa_sosire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798341706602914428f6da4-92444764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a749fff5520103e637561d8a69db8399bb2b7149' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_fisa_sosire.tpl',
      1 => 1614166252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798341706602914428f6da4-92444764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602914429861b9_99621137',
  'variables' => 
  array (
    'id' => 0,
    'print_fisa' => 0,
    'nr' => 0,
    'client' => 0,
    'realizat' => 0,
    'client_observatie' => 0,
    'total_afisare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602914429861b9_99621137')) {function content_602914429861b9_99621137($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
                    Traseu: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['nume_traseu'];?>
<br/>
                    Sofer: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['nume_sofer'];?>
<br/>
                    Masina: <?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['numar'];?>
<br/>
                    Data:<?php echo $_smarty_tpl->tpl_vars['print_fisa']->value['data_intrare'];?>

                </h3>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 1800px;">
        <tr>
            <td>#</td>
            <td>CLIENT</td>
            <td style="text-align: center;">PRODUS</td>
            <td style="text-align: center;">OBSERVATII</td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars["client"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["client"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['print_fisa']->value['clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["client"]->key => $_smarty_tpl->tpl_vars["client"]->value) {
$_smarty_tpl->tpl_vars["client"]->_loop = true;
?>
            <tr>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</td>
                <td>
                    <table border="1" class="print" style="width: 100%">
                        <tr>
                            <td style="text-align: center;width: 150px;">Produs</td>
                            <td style="text-align: center;">Pline</td>
                            <td style="text-align: center;">Defecte</td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['realizat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['realizat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['realizat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['realizat']->key => $_smarty_tpl->tpl_vars['realizat']->value) {
$_smarty_tpl->tpl_vars['realizat']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['realizat']->value['nume_produs'];?>
:</td>
                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['realizat']->value['cantitate'];?>
</td>
                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['realizat']->value['defecte'];?>
</td>
                            </tr>
                        <?php } ?>

                    </table>
                </td>
                <td>
                    <?php $_smarty_tpl->tpl_vars['client_observatie'] = new Smarty_variable(Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($_smarty_tpl->tpl_vars['client']->value['client_id'],$_smarty_tpl->tpl_vars['client']->value['fisa_generata_id']), null, 0);?>
                   <?php echo $_smarty_tpl->tpl_vars['client_observatie']->value['nume_observatie'];?>

                </td>
            </tr>
        <?php } ?>
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
    <div style="margin-top: 100px;"></div>
</section>
</body>
</html>
<?php }} ?>
