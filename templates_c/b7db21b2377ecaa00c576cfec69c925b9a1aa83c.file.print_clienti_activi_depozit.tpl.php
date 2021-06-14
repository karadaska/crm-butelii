<?php /* Smarty version Smarty-3.1.15, created on 2021-06-14 09:48:15
         compiled from "/var/www/html/fofoweb/www/templates/print_clienti_activi_depozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120537803360c6f7d00c0db7-31312710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7db21b2377ecaa00c576cfec69c925b9a1aa83c' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/print_clienti_activi_depozit.tpl',
      1 => 1623653120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120537803360c6f7d00c0db7-31312710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c6f7d0104044_37548837',
  'variables' => 
  array (
    'id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'org_date_start' => 0,
    'date_start' => 0,
    'org_date_stop' => 0,
    'date_stop' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'asignare_traseu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c6f7d0104044_37548837')) {function content_60c6f7d0104044_37548837($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <a href="/raport_livrari_clienti.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <?php $_smarty_tpl->tpl_vars['org_date_start'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_start']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['date_start'] = new Smarty_variable(str_replace('-"','.',$_smarty_tpl->tpl_vars['org_date_start']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['newDateStart'] = new Smarty_variable(date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['date_start']->value)), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['org_date_stop'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_stop']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['date_stop'] = new Smarty_variable(str_replace('-"','.',$_smarty_tpl->tpl_vars['org_date_stop']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['newDateSop'] = new Smarty_variable(date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['date_stop']->value)), null, 0);?>

    <table cellpadding="0" cellspacing="0" border="1"
           class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr>
            <th style="text-align: left;">ZONA</th>
            <th style="text-align: left;">LOCALITATE</th>
            <th style="text-align: left;">NUME</th>
            <th style="text-align: center;">TRASEU</th>
            <th style="text-align: center;">TELEFON</th>
            <th style="text-align: center;">CNP</th>
            <th style="text-align: center;">SERIA</th>
            <th style="text-align: center;">STARE</th>
            <th style="text-align: center;" class="span1">DATA START</th>
            <th style="text-align: center;" class="span1">DATA STOP</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
            <tr>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_judet']);?>
</td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                <td>
                   <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>

                </td>
                <td>
                    <?php  $_smarty_tpl->tpl_vars['asignare_traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare_traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['asignare_client_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare_traseu']->key => $_smarty_tpl->tpl_vars['asignare_traseu']->value) {
$_smarty_tpl->tpl_vars['asignare_traseu']->_loop = true;
?>
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['asignare_traseu']->value['nume'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['asignare_traseu']->value['nume'];?>

                            <br/>
                        <?php } else { ?>
                            &ndash;
                        <?php }?>
                    <?php } ?>
                </td>
                <td style="text-align: center;">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<?php $_tmp2=ob_get_clean();?><?php if (strlen($_tmp2>2)) {?>
                        Tel 1: <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/>
                    <?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>
<?php $_tmp3=ob_get_clean();?><?php if (strlen($_tmp3>2)) {?>
                        Tel 2: <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>

                    <?php }?>
                </td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['cnp'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['ci'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['stare_client'];?>
</td>
                <td style="text-align: center;">
                    <?php echo $_smarty_tpl->tpl_vars['client']->value['data_start'];?>

                </td>
                <td style="text-align: center;">
                    <?php echo $_smarty_tpl->tpl_vars['client']->value['data_stop'];?>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
</body>
</html>
<?php }} ?>
