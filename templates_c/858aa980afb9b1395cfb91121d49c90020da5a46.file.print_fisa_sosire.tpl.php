<?php /* Smarty version Smarty-3.1.15, created on 2021-01-05 00:24:44
         compiled from "/home/dinobaby/public_html/crm/www/templates/print_fisa_sosire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9341490585fed0ee4d55386-50483420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858aa980afb9b1395cfb91121d49c90020da5a46' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/print_fisa_sosire.tpl',
      1 => 1609799220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9341490585fed0ee4d55386-50483420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fed0ee4d90456_00508460',
  'variables' => 
  array (
    'id' => 0,
    'print_fisa' => 0,
    'nr' => 0,
    'client' => 0,
    'realizat' => 0,
    'client_observatie' => 0,
    'cantitati_produse_clienti_by_fisa_id' => 0,
    'cantitate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fed0ee4d90456_00508460')) {function content_5fed0ee4d90456_00508460($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
            <td>Client</td>
            <td style="text-align: center;">Produs</td>
            <td style="text-align: center;">Observatii</td>
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
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</td>
                <td>
                    <table border="1" class="print" style="width: 100%">
                        <tr>
                            <td style="text-align: center;">Produs</td>
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
    <?php if (count($_smarty_tpl->tpl_vars['cantitati_produse_clienti_by_fisa_id']->value)>0) {?>
        <table border="1" style="width: 600px;margin-top: 10px;">
            <tr class="info">
                <td style="text-align: center;font-weight: 900;">Produs</td>
                <td style="text-align: center;font-weight: 900;">Pline</td>
                <td style="text-align: center;font-weight: 900;">Defecte</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["cantitate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cantitate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitati_produse_clienti_by_fisa_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cantitate"]->key => $_smarty_tpl->tpl_vars["cantitate"]->value) {
$_smarty_tpl->tpl_vars["cantitate"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['cantitate']->value['pline']>0||$_smarty_tpl->tpl_vars['cantitate']->value['defecte']>0) {?>
                    <tr>
                        <td>
                            <span style="color: red;font-weight: 900"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_produs'];?>
</span>
                        </td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['pline'];?>
</td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['defecte'];?>
</td>
                    </tr>
                <?php }?>
            <?php } ?>
            <tr>
                <th style="text-align: right;color: red;">Total:</th>
                <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['cantitati_produse_clienti_by_fisa_id']->value['total_vandute'];?>
</th>
                <th style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['cantitati_produse_clienti_by_fisa_id']->value['total_defecte'];?>
</th>
            </tr>
        </table>
    <?php }?>
</section>
</body>
</html>
<?php }} ?>
