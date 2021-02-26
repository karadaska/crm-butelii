<?php /* Smarty version Smarty-3.1.15, created on 2021-02-26 11:51:23
         compiled from "/var/www/html/fofoweb/www/templates/print_observatii_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20024864356038c49be1a197-91431918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d5733ae593289f9af517caec8c182e32e4b5e1' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_observatii_fisa_traseu.tpl',
      1 => 1609800344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20024864356038c49be1a197-91431918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'observatie_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'nume_traseu' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'nr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6038c49be87da1_67947328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6038c49be87da1_67947328')) {function content_6038c49be87da1_67947328($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/raport_observatii_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
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
                <h5>
                    Traseu: <?php echo strtoupper($_smarty_tpl->tpl_vars['nume_traseu']->value['nume']);?>
 <br/>
                    Data: <?php echo date('Y-m-d');?>

                </h5>
            </td>
        </tr>
    </table>
    <?php if (count($_smarty_tpl->tpl_vars['lista_clienti']->value)>0) {?>
        <table border="1" class="print" style="width: 100%;height: 100%">
            <thead>
            <tr>
                <th style="text-align: center;">#</th>
                <th style="text-align: left;">Localitate</th>
                <th style="text-align: left;">Client</th>
                <th style="text-align: center;">Telefon</th>
                <th style="text-align: center;">Data</th>
                <th style="text-align: center;">Obs</th>
            </tr>
            </thead>
            <tbody>
            <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                <input type="hidden" name="valoare_client_id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
                <tr>
                    <th style="text-align: center;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>

                    <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                    </th>
                    <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>

                    </th>
                    <th style="text-align: center;vertical-align: middle;">
                        <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon']>0) {?>
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                            <br/>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon_2']>0) {?>
                            <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                        <?php }?>
                    </th>
                    <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['data']);?>
</td>
                    <td style="text-align: center;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_observatie']);?>
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
