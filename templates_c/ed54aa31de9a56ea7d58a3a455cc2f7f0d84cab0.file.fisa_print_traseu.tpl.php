<?php /* Smarty version Smarty-3.1.15, created on 2020-10-07 13:54:33
         compiled from "/home/dinobaby/public_html/crm/www/templates/print_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17044758075efc78acf2c285-06571271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed54aa31de9a56ea7d58a3a455cc2f7f0d84cab0' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/print_fisa_traseu.tpl',
      1 => 1602068071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17044758075efc78acf2c285-06571271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5efc78ad03dfb9_42722793',
  'variables' => 
  array (
    'print_fisa' => 0,
    'lista_asignari_clienti_trasee' => 0,
    'data_traseu' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5efc78ad03dfb9_42722793')) {function content_5efc78ad03dfb9_42722793($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
                    Nr. clienti: <?php echo count($_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value);?>
<br/>
                    Data: <?php echo $_smarty_tpl->tpl_vars['data_traseu']->value;?>
<br/>
                </h5>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 1800px;">
        <thead>
        <tr>
            <th rowspan="2">LOCALITATE</th>
            <th rowspan="2">COMISIONAR</th>
            <th colspan="2" style="border-right: double;">RASTEL</th>
            <th colspan="3" style="border-right: double;">BG/AR</th>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==1) {?>
                <th colspan="3" style="border-right: double;">Incarcaturi BG/9 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>
            <?php } else { ?>
                <th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/8 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>
            <?php }?>
            <th style="width: 150px;">Obs:</th>
        </tr>
        <tr>
            <td style="text-align: center;">BUC</td>
            <td style="text-align: center;border-right: double;">CUL</td>
            <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==1) {?>
                <td style="text-align: center;">Bg9</td>
                <td style="text-align: center;">Bg11</td>
                <td style="text-align: center;border-right: double;">Ar9</td>
                <td style="text-align: center;">Buc<br/> Bg9</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">Val 1</td>
                <td style="text-align: center;">Buc<br/> Bg</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 2</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 3</td>
            <?php } else { ?>
                <td style="text-align: center;">Bg11</td>
                <td style="text-align: center;">Ar8</td>
                <td style="text-align: center;border-right: double;">Ar9</td>
                <td style="text-align: center;">Buc<br/> Bg11</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">Val 1</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 2</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 3</td>
            <?php }?>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['print_fisa']->value['clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
<br/>
                        <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>

                    </td>
                    <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['rastel'];?>
</td>
                    <td style="border-right: double;text-align: center"><?php echo $_smarty_tpl->tpl_vars['client']->value['culoare'];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['print_fisa']->value['depozit_id']==1) {?>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['2']['target'];?>
</td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['target'];?>
</td>
                        <td style="text-align: right;border-right: double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['target'];?>
</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['2']['pret'];?>
</td>
                        <td style="text-align: right;border-right: double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['2']['comision'];?>
</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['pret'];?>
</td>
                        <td style="border-right: double;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['comision'];?>
</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['pret'];?>
</td>
                        <td style="border-right: double;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['comision'];?>
</td
                    <?php } else { ?>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['target'];?>
</td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['target'];?>
</td>
                        <td style="text-align: right;border-right: double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['target'];?>
</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['pret'];?>
</td>
                        <td style="text-align: right;border-right: double;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['1']['comision'];?>
</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['3']['pret'];?>
</td>
                        <td style="border-right: double;text-align: right;"></td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['pret'];?>
</td>
                        <td style="border-right: double;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['target']['4']['comision'];?>
</td
                    <?php }?>
                    <td></td>
                    <td></td>
                </tr>
        <?php } ?>
        </thead>
    </table>
</section>

</body>
</html>





























































































<?php }} ?>
