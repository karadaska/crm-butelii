<?php /* Smarty version Smarty-3.1.15, created on 2021-03-25 13:33:54
         compiled from "/var/www/html/fofoweb/www/templates/print_raport_complet_apeluri_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132582317603961b0f18269-53085489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5571bd7eaca1c0aa227ebb38610c7fe1e559cb0b' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_raport_complet_apeluri_clienti.tpl',
      1 => 1616403399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132582317603961b0f18269-53085489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_603961b10b2435_34111104',
  'variables' => 
  array (
    'id' => 0,
    'stare_id' => 0,
    'observatie_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'nume_traseu' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'culoare' => 0,
    'client_raspuns' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603961b10b2435_34111104')) {function content_603961b10b2435_34111104($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/raport_complet_apeluri_clienti.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
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
                <h3>
                    TRASEU: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_traseu']->value['nume']);?>
 <br/>
                    DATA: <?php echo date('Y-m-d');?>

                </h3>
            </td>
        </tr>
    </table>
    <?php if (count($_smarty_tpl->tpl_vars['lista_clienti']->value)>0) {?>
        <table border="1" class="print" style="width: 100%;height: 100%">
            <thead>
            <tr>
                <th style="text-align: center;">#</th>
                <th style="text-align: left;">LOCALITATE</th>
                <th style="text-align: left;">CLIENT</th>
                <th style="text-align: left;">TELEFON</th>
                <th style="text-align: center;">DATA</th>
                <th style="text-align: center;">OBS</th>
                <th style="text-align: center;">URGENT</th>
                <th style="text-align: center;">PRODUSE</th>
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
                <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                <tr <?php echo $_smarty_tpl->tpl_vars['culoare']->value;?>
>
                    <td><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                    <td style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                    </td>
                    <td style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                    </td>
                    <td style="text-align: left;vertical-align: middle;">
                        <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon']>0) {?>
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                            <br/>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon_2']>0) {?>
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                        <?php }?>
                    </td>
                    <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['data']);?>
</td>
                    <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_observatie']);?>
</td>
                    <td style="text-align: center;"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['urgent'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==0) {?>
                            NU
                        <?php } else { ?>
                           DA
                        <?php }?>
                    </td>
                    <td style="text-align: center;width: 150px;">
                        <table border="1" style="width: 100%;height: 100%">
                            <?php  $_smarty_tpl->tpl_vars['client_raspuns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client_raspuns']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['raspuns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client_raspuns']->key => $_smarty_tpl->tpl_vars['client_raspuns']->value) {
$_smarty_tpl->tpl_vars['client_raspuns']->_loop = true;
?>
                                <tr>
                                    <td style="width: 80px;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['client_raspuns']->value['nume_produs'];?>
</td>
                                    <td style="text-align: center;width: 80px;"><?php echo $_smarty_tpl->tpl_vars['client_raspuns']->value['goale'];?>
</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
        NU AI NIMIC DE PRINTAT
    <?php }?>
</section>
</body>
</html>
<?php }} ?>
