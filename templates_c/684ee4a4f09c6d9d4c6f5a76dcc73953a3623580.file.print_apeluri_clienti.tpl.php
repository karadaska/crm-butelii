<?php /* Smarty version Smarty-3.1.15, created on 2021-03-06 15:22:07
         compiled from "/var/www/html/fofoweb/www/templates/print_apeluri_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929950229603df39e482f18-35501088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684ee4a4f09c6d9d4c6f5a76dcc73953a3623580' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_apeluri_clienti.tpl',
      1 => 1615036926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929950229603df39e482f18-35501088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_603df39e599e77_70442939',
  'variables' => 
  array (
    'id' => 0,
    'stare_id' => 0,
    'nume_traseu' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'culoare' => 0,
    'target_client' => 0,
    'total_bg_11' => 0,
    'total_bg_9' => 0,
    'total_ar_8' => 0,
    'total_ar_9' => 0,
    'client_observatie' => 0,
    'client_urgenta' => 0,
    'total_urgente' => 0,
    'numar_urgente' => 0,
    'clienti_cu_observatii' => 0,
    'clienti_cu_urgente' => 0,
    'observatie' => 0,
    'raspuns' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603df39e599e77_70442939')) {function content_603df39e599e77_70442939($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
            /*font-weight: bold;*/
            /*color: #000;*/
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
               value="Print"/>
        <a href="/apeluri_clienti.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h3>
                    TRASEU: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_traseu']->value['nume']);?>
 <br/>
                    DATA: <?php echo date('Y-m-d');?>

                </h3>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 100%;height: 100%">
        <thead>
        <tr>
            <th style="text-align: center;">#</th>
            <th style="text-align: left;">LOCALITATE</th>
            <th style="text-align: left;">CLIENT</th>
            <th style="text-align: center;">TELEFON</th>
            <th style="text-align: center;">PRODUS</th>
            <th style="text-align: center;">GOALE</th>
            <th style="text-align: center;">OBS</th>
            <th style="text-align: center;">URGENT</th>
        </tr>
        </thead>
        <tbody>
        <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
            <?php if (($_smarty_tpl->tpl_vars['nr']->value%2==0)) {?>
                <?php $_smarty_tpl->tpl_vars['culoare'] = new Smarty_variable('style="background-color: #f2f2f2;"', null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['culoare'] = new Smarty_variable('style="background-color: white"', null, 0);?>
            <?php }?>
            <input type="hidden" name="valoare_client_id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
            <tr <?php echo $_smarty_tpl->tpl_vars['culoare']->value;?>
>
                <th><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</th>
                <th style="text-align: left;vertical-align: middle;">
                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                </th>
                <th style="text-align: center;vertical-align: middle;">
                    <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['telefon'])>1) {?>
                        <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                    <?php }?>
                    <br/>
                    <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['telefon_2'])>1) {?>
                        <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                    <?php }?>
                </th>
                <th style="text-align: left;">
                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
: <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>

                        <br/>
                    <?php } ?>
                </th>
                <th>
                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['target_client']->value['goale_la_client'];?>

                        <br/>
                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==1) {?>
                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==2) {?>
                            <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_9']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==3) {?>
                            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==4) {?>
                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                        <?php }?>
                    <?php } ?>
                </th>
                <th style="width: 300px;">
                    <?php $_smarty_tpl->tpl_vars['client_observatie'] = new Smarty_variable(Clienti::getObservatieApelClientiByClientId($_smarty_tpl->tpl_vars['target_client']->value['client_id'],$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
                    <?php echo $_smarty_tpl->tpl_vars['client_observatie']->value['nume_observatie'];?>

                </th>
                <th>
                    <?php $_smarty_tpl->tpl_vars['client_urgenta'] = new Smarty_variable(Clienti::getNumeUrgentaApelClientiByClientId($_smarty_tpl->tpl_vars['target_client']->value['client_id'],$_smarty_tpl->tpl_vars['id']->value), null, 0);?>
                    <?php echo $_smarty_tpl->tpl_vars['client_urgenta']->value['urgent'];?>

                </th>
            </tr>
        <?php } ?>
        <tr>
            <th colspan="5" style="text-align: right;">TOTAL:</th>
            <th style="text-align: center;">
                <?php if ($_smarty_tpl->tpl_vars['total_bg_11']->value>0) {?>
                    <span style="font-weight: bolder;">BG 11: <?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</span>
                    <br/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['total_ar_8']->value>0) {?>
                    <span style="font-weight: bolder;text-align: left;">AR 8: <?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['total_ar_9']->value>0) {?>
                    <span style="font-weight: bolder;text-align: left;">AR 9: <?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</span>
                <?php }?>
            </th>
            <th></th>
            <th>
                <?php  $_smarty_tpl->tpl_vars['numar_urgente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numar_urgente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total_urgente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numar_urgente']->key => $_smarty_tpl->tpl_vars['numar_urgente']->value) {
$_smarty_tpl->tpl_vars['numar_urgente']->_loop = true;
?>
                    <span style="font-weight: bolder;">TOTAL URGENTE : <?php echo $_smarty_tpl->tpl_vars['numar_urgente']->value;?>
</span>
                <?php } ?>
            </th>
        </tr>
        </tbody>
    </table>

    <?php if ((count($_smarty_tpl->tpl_vars['clienti_cu_observatii']->value)>0||count($_smarty_tpl->tpl_vars['clienti_cu_urgente']->value)>0)) {?>
        <div style="margin-top: 30px;margin-bottom: 100px;display: inline-flex">
            <div style="margin-left: 2px;">
                <?php if (count($_smarty_tpl->tpl_vars['clienti_cu_observatii']->value)>0) {?>
                    <table border="1" style="margin-top: 10px;width: 100%;">
                        <tr>
                            <th>LOCALITATE</th>
                            <th>CLIENT</th>
                            <th>OBSERVATII</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clienti_cu_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                            <tr>
                                <th style="text-align: left;"><?php echo strtoupper($_smarty_tpl->tpl_vars['observatie']->value['nume_localitate']);?>
</th>
                                <th style="text-align: left;"><?php echo strtoupper($_smarty_tpl->tpl_vars['observatie']->value['nume_client']);?>
</th>
                                <th style="text-align: left;"><?php echo strtoupper($_smarty_tpl->tpl_vars['observatie']->value['nume_observatie']);?>
</th>
                            </tr>
                        <?php } ?>
                    </table>
                <?php }?>
            </div>
            <div>
                <?php if (count($_smarty_tpl->tpl_vars['clienti_cu_urgente']->value)>0) {?>
                    <table border="1" style="margin-top: 10px;width: 100%;margin-left: 30px;">
                        <tr>
                            <th>LOCALITATE</th>
                            <th>CLIENT</th>
                            <th>URGENT</th>
                            <th>CANTITATI</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clienti_cu_urgente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                            <tr>
                                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                <th><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</th>
                                <th>
                                    <?php echo $_smarty_tpl->tpl_vars['client']->value['urgent'];?>

                                </th>
                                <th style="text-align: left;width: 100px;">
                                    <?php  $_smarty_tpl->tpl_vars['raspuns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['raspuns']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['raspuns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['raspuns']->key => $_smarty_tpl->tpl_vars['raspuns']->value) {
$_smarty_tpl->tpl_vars['raspuns']->_loop = true;
?>
                                        <span> <?php echo $_smarty_tpl->tpl_vars['raspuns']->value['nume_produs'];?>
</span>
                                        <?php echo $_smarty_tpl->tpl_vars['raspuns']->value['goale']>0 ? ':' : '-';?>

                                        <span style="font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['raspuns']->value['goale'];?>
</span>
                                        <br/>
                                    <?php } ?>
                                </th>
                            </tr>
                        <?php } ?>
                    </table>
                <?php }?>
            </div>
        </div>
    <?php }?>
</section>
</body>
</html>
<?php }} ?>
