<?php /* Smarty version Smarty-3.1.15, created on 2021-03-19 14:18:49
         compiled from "/var/www/html/fofoweb/www/templates/print_raport_livrari_soferi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8904266056037a5fd98eb05-27757984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '371ca91f15b9939e19b50c78dfb3437995808c52' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_raport_livrari_soferi.tpl',
      1 => 1616156322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8904266056037a5fd98eb05-27757984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6037a5fdaf21f3_93961937',
  'variables' => 
  array (
    'id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'nume_sofer' => 0,
    'newdata_start' => 0,
    'newdata_stop' => 0,
    'livrari_soferi' => 0,
    'produse' => 0,
    'nr' => 0,
    'livrare' => 0,
    'grand_total_km' => 0,
    'grand_cantitati' => 0,
    'grand_valoare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6037a5fdaf21f3_93961937')) {function content_6037a5fdaf21f3_93961937($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
               value="PRINT"/>
        <a href="/raport_livrari_soferi.php?sofer_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <?php $_smarty_tpl->tpl_vars['newdata_start'] = new Smarty_variable(date("d-m-Y",strtotime($_smarty_tpl->tpl_vars['data_start']->value)), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['newdata_stop'] = new Smarty_variable(date("d-m-Y",strtotime($_smarty_tpl->tpl_vars['data_stop']->value)), null, 0);?>
                <h3 style="font-weight: 600;">
                    RAPORT LIVRARE SOFER: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_sofer']->value['nume']);?>
 <br/>
                    PERIOADA: <?php echo $_smarty_tpl->tpl_vars['newdata_start']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['newdata_stop']->value;?>

                </h3>
            </td>
        </tr>
    </table>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <form action="/raport_livrari_soferi.php"
                      method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div class="widget-content">
                        <table cellpadding="0" cellspacing="0" border="1">
                            <thead>
                            <tr>
                                <td style="text-align: center;" rowspan="2">#</td>
                                <td style="text-align: left;" rowspan="2">NUME SI PRENUME</td>
                                <td style="text-align: center;" rowspan="2">NR. AUTO</td>
                                <td style="text-align: center;" rowspan="2">TRASEU</td>
                                <td style="text-align: center;" rowspan="2">KM PARCURSI</td>
                                <th style="text-align: center;" colspan="2">TOTAL PRODUSE</th>
                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value['produse_sofer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                    <td colspan="2" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['nume_produs'];?>
</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <th>CANTITATI</th>
                                <th>VALOARE</th>
                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value['produse_sofer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                    <td>CANTITATE</td>
                                    <td>VALOARE</td>
                                    
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['grand_total_km'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['grand_cantitati'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['livrare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['livrare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value['trasee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['livrare']->key => $_smarty_tpl->tpl_vars['livrare']->value) {
$_smarty_tpl->tpl_vars['livrare']->_loop = true;
?>
                                <tr>
                                    <td style="text-align: center;" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['livrare']->value['nume_sofer'];?>
</td>
                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['livrare']->value['numar'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['livrare']->value['nume_traseu'];?>
</td>
                                    <td style="text-align: right;">
                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['km']['km_traseu'];?>

                                    </td>
                                    <td style="text-align: center">
                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['cantitate'];?>

                                    </td>
                                    <td style="text-align: center">
                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['valoare'];?>

                                    </td>
                                    <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value['produse_sofer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                        <td style="text-align: right;">
                                            <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate']!='' ? $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'] : '-';?>

                                        </td>
                                        <td style="text-align: right;">
                                            <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare']!='' ? $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'] : '-';?>

                                        </td>
                                        
                                            
                                        
                                    <?php } ?>
                                </tr>
                                <?php $_smarty_tpl->tpl_vars['grand_total_km'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_total_km']->value+$_smarty_tpl->tpl_vars['livrare']->value['km']['km_traseu'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['grand_cantitati'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_cantitati']->value+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['cantitate'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_cantitati']->value+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['valoare'], null, 0);?>
                            <?php } ?>
                            <tr>
                                <th colspan="3" style="text-align: right;"></th>
                                <th style="text-align: right;font-weight: 900;">TOTAL:</th>
                                <th style="text-align: right;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['grand_total_km']->value;?>
</th>
                                <th style="text-align: right;color: red;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['grand_cantitati']->value;?>
</th>
                                <th style="text-align: right;color: red;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['grand_valoare']->value;?>
</th>
                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value['produse_sofer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                    <th style="text-align: right;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['livrari_soferi']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'];?>
</th>
                                    <th style="text-align: right;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['livrari_soferi']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'];?>
</th>
                                    
                                <?php } ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>


    
        
            
                
                    
                    
                        
                        
                        
                        
                        
                        
                        
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                    
                    
                    
                    
                    
                    

                    
                    
                    

                    
                    
                    

                    
                        
                            
                            
                                
                            
                            
                                
                            
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            
                                
                        
                        
                        
                        

                        
                        
                        

                        
                        
                        


                    
                    
                        
                        
                                    
                        
                        
                                    
                        
                            
                        
                        
                            
                        
                        
                            
                        
                        
                        
                        
                                    
                    
                    
                
            
        
    

<?php }} ?>
