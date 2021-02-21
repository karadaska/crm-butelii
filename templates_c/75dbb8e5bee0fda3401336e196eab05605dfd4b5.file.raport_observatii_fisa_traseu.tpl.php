<?php /* Smarty version Smarty-3.1.15, created on 2021-02-21 09:42:25
         compiled from "/var/www/html/fofoweb/www/templates/raport_observatii_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1151649124602ce6d8aba836-28658495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75dbb8e5bee0fda3401336e196eab05605dfd4b5' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/raport_observatii_fisa_traseu.tpl',
      1 => 1613893344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1151649124602ce6d8aba836-28658495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602ce6d8bd0032_16652255',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'observatie_id' => 0,
    'lista_observatii_filtrate' => 0,
    'lista' => 0,
    'lista_clienti' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602ce6d8bd0032_16652255')) {function content_602ce6d8bd0032_16652255($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/fofoweb/Smarty-3.1.15/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport complet fisa traseu
                        <a href="/print_observatii_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&observatie_id=0&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                        <a href="/filtreaza_observatii.php"><button class="btn btn-mini btn-success">Filtreaza observatii</button></a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_observatii_fisa_traseu.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Traseu
                                <select name="traseu_id">
                                    <option value="0">Alege traseu..</option>
                                    <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                        </option>
                                    <?php } ?>
                                </select>
                            </th>
                            <th style="text-align: left" width="300px;">Obs
                                <select name="observatie_id">
                                    <option value="0">Toate</option>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==2) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['observatie_id']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                            </option>
                                        <?php }?>
                                    <?php } ?>
                                </select>
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input placeholder="<?php echo smarty_modifier_date_format(time());?>
" autocomplete="off" type="date" name="data_start"
                                                value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
" />
                                <input autocomplete="off" type="date" name="data_stop"
                                       value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
" />

                                <input type="hidden" placeholder="" name="data_start_interval" value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
"/>
                                <input type="hidden" name="data_stop_interval" value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
"/>
                            </th>
                            <th><input type="submit" class="btn btn-primary" value="Aplica" name="aplica"></th>
                        </tr>
                        <tr>
                            <th style="text-align: left;font-size: 10px;" colspan="5">
                            <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii_filtrate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                               <?php echo $_smarty_tpl->tpl_vars['lista']->value['nume'];?>
: <input type="checkbox" name="observatie_input" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['obs_id'];?>
">
                                <?php } ?>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/raport_observatii_fisa_traseu.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;">Observatie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <td style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                            <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</td>
                                            <td style="text-align: left;">
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/>
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>

                                            </td>
                                            <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_observatie']!='' ? $_smarty_tpl->tpl_vars['client']->value['nume_observatie'] : '-';?>
</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<div style="margin-top: 100px;"></div>

<script src="/js/pagini/raport_observatii_fisa_traseu.js"></script>
<?php }} ?>
