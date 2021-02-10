<?php /* Smarty version Smarty-3.1.15, created on 2020-12-04 15:52:23
         compiled from "/home/dinobaby/public_html/crm/www/templates/print_raport_complet_apeluri_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15650116655fca18a271d2b1-88640953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d0b5a1b65a879ce7e346b3192566546422ffc04' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/print_raport_complet_apeluri_clienti.tpl',
      1 => 1607089942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15650116655fca18a271d2b1-88640953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fca18a27824c6_82645105',
  'variables' => 
  array (
    'id' => 0,
    'stare_id' => 0,
    'observatie_id' => 0,
    'nume_traseu' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'curent_produs' => 0,
    'target_client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca18a27824c6_82645105')) {function content_5fca18a27824c6_82645105($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/raport_complet_suna_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
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
                    Traseu: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_traseu']->value['nume']);?>
 <br/>
                    Data: <?php echo date('Y-m-d');?>

                </h5>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 100%;height: 100%">
        <thead>
        <tr>
            <th style="text-align: center;">#</th>
            <th style="text-align: left;">Localitate</th>
            <th style="text-align: left;">Client</th>
            <th style="text-align: left;" colspan="3">Telefon</th>
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
            <?php if (($_smarty_tpl->tpl_vars['client']->value['istoric_suna_traseu'])) {?>
                <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                <tr>
                <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                </th>
                <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                </th>
                <th style="text-align: left;vertical-align: middle;">
                    <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon']>0) {?>
                        <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                        <br/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon_2']>0) {?>
                        <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                    <?php }?>
                </th>
                <td>
                <table border="1" width="100%">
                    <thead>
                    <tr class="">
                        <th class="span3"
                            style="text-align: center;font-weight: bolder;">
                            Produs
                        </th>
                        <th class="span1"
                            style="text-align: center;font-weight: bolder;width: 100px;">
                            Goale la client
                        </th>
                        <th class="span1"
                            style="text-align: center;font-weight: bolder;width: 100px;">
                            Data adaugare
                        </th>
                        <th style="text-align: center;font-weight: bolder;"
                            class="span1">
                            Obs
                        </th>
                        <th style="text-align: center;font-weight: bolder;"
                            class="span1">
                            Urgent
                        </th>
                    </tr>
                    </thead>
                    <?php $_smarty_tpl->tpl_vars['total_goale'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['curent_produs'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['istoric_suna_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                        <?php if (($_smarty_tpl->tpl_vars['curent_produs']->value!=$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])) {?>
                            <?php $_smarty_tpl->tpl_vars['curent_produs'] = new Smarty_variable($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'], null, 0);?>
                            <tr class="success">
                                <td style="text-align: left;font-weight: 900;"
                                    colspan="5"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
</td>
                            </tr>
                        <?php }?>
                        <tr>
                            <td>
                                Stoc curent:
                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                <input type="hidden" name="tip_produs_id"
                                       value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                            </td>
                            <td style="text-align: center;">
                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['goale'];?>

                            </td>
                            <td style="text-align: center">
                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['data_start'];?>

                            </td>
                            <td style="text-align: center;">
                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_observatie'];?>

                            </td>
                            <td style="text-align: center;">
                                <?php if (($_smarty_tpl->tpl_vars['target_client']->value['urgent']==1)) {?>
                                    DA
                                <?php } else { ?>
                                    NU
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php }?>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
</body>
</html>
<?php }} ?>
