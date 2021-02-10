<?php /* Smarty version Smarty-3.1.15, created on 2020-11-08 01:14:03
         compiled from "/home/dinobaby/public_html/crm/www/templates/fisa_suna_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10282295595fa7291f296ba3-55677180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4d8376cbedfd1244e11ac5b72a96e17e8502f4' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/fisa_suna_traseu.tpl',
      1 => 1604790928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10282295595fa7291f296ba3-55677180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fa7291f306ee6_17545056',
  'variables' => 
  array (
    'print_fisa' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'target_client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa7291f306ee6_17545056')) {function content_5fa7291f306ee6_17545056($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/suna_traseu.php" class="ascuns">
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
                    Data:
                </h5>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 1800px;">
        <thead>
        <tr>
            <th style="text-align: left;">Localitate</th>
            <th style="text-align: left;">Client</th>
            <th style="text-align: left;">Telefon</th>
            <th style="text-align: left;" colspan="3">Telefon 2</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
            <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
            <tr>
                <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                </th>
                <th style="text-align: left;vertical-align: middle;"><a target="_blank"
                                                                        href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
</a>
                </th>
                <th style="text-align: left;vertical-align: middle;">
                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                </th>
                <th style="text-align: left;vertical-align: middle;" class="span2">
                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                </th>
                <td>
                    <table class="table table-bordered">
                        <tr class="info">
                            <td class="span3"
                                style="text-align: center;font-weight: bolder;">
                                Produs
                            </td>
                            <td class="span1"
                                style="text-align: right;font-weight: bolder;width: 100px;">
                                Goale la client
                            </td>

                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
 => <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                    <input type="hidden" name="tip_produs_id"
                                           value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                </td>
                                <td style="text-align: right;">
                                    <input style="text-align: right"
                                           value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['goale_la_client'];?>
"
                                           type="text" autocomplete="off"
                                           name="goale_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</section>

</body>
</html>
<?php }} ?>
