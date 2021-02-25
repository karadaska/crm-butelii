<?php /* Smarty version Smarty-3.1.15, created on 2021-02-25 15:30:37
         compiled from "/var/www/html/fofoweb/www/templates/raport_livrari_soferi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181507985860227fc6e3c330-67745625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b86ffce0eb1085a87d6fdf07c6087890100747' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/raport_livrari_soferi.tpl',
      1 => 1614259823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181507985860227fc6e3c330-67745625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60227fc700f067_94239260',
  'variables' => 
  array (
    'title' => 0,
    'sofer_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'livrari_soferi' => 0,
    'traseu_id' => 0,
    'observatie_id' => 0,
    'nr' => 0,
    'total_bg_11' => 0,
    'total_ar_8' => 0,
    'total_ar_9' => 0,
    'total_valoare_incasata_bg_11' => 0,
    'total_valoare_incasata_ar_8' => 0,
    'total_valoare_incasata_ar_9' => 0,
    'total_valoare_comision_bg_11' => 0,
    'total_valoare_comision_ar_8' => 0,
    'total_valoare_comision_ar_9' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60227fc700f067_94239260')) {function content_60227fc700f067_94239260($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari sofer
                        <a href="/print_raport_livrari_soferi.php?id=<?php echo $_smarty_tpl->tpl_vars['sofer_id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_livrari_soferi.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Sofer
                                <select name="sofer_id">
                                    <option value="0">Alege sofer</option>
                                    <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['sofer']->value['id']==$_smarty_tpl->tpl_vars['sofer_id']->value) {?> selected="selected"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>

                                        </option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['sofer_id']->value;?>
">
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input autocomplete="off" type="date" name="data_start" id="data_start"
                                                value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
">
                                <input autocomplete="off" type="date" name="data_stop" id="data_stop"
                                       value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            </th>
                            <th style="text-align: left;">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                                <button class="btn btn-success" type="button" data-export_livrari="<?php echo $_smarty_tpl->tpl_vars['sofer_id']->value;?>
" id="export_livrari_soferi">Export</button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['livrari_soferi']->value)>0) {?>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <form action="/raport_livrari_soferi.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
"
                              method="post" id="form_actualizeaza_stoc"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: left;" rowspan="2">NUME SI PRENUME</th>
                                            <th style="text-align: center;" rowspan="2">INDICATOR AUTO</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th colspan="3">TOTAL BUTELII VANDUTE</th>
                                            <th colspan="3">TOTAL VALOARE INCASATA</th>
                                            <th colspan="3">TOTAL COMISION</th>
                                        </tr>
                                        <tr>

                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center;">BG 11</td>
                                            <td style="text-align: center;">AR 8</td>
                                            <td style="text-align: center;">AR 9</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11'] = new Smarty_variable(0, null, 0);?>

                                        <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8'] = new Smarty_variable(0, null, 0);?>

                                        <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9'] = new Smarty_variable(0, null, 0);?>

                                        <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                            <tr>
                                                <td style="text-align: center" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                <td style="text-align: left"
                                                    class="span3"><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume_sofer'];?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['sofer']->value['numar'];?>

                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume_traseu'];?>
</td>
                                                <td style="text-align: center;border-left:double">
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11']!='' ? $_tmp1 : '-';?>

                                                </td>
                                                <td style="text-align: center;">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8']!='' ? $_tmp2 : '-';?>

                                                </td>
                                                <td style="text-align: center">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9']!='' ? $_tmp3 : '-';?>

                                                </td>
                                                <td style="text-align: center;border-left:double">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret']!='' ? $_tmp4 : '-';?>

                                                </td>
                                                <td style="text-align: center">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret'];?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret']!='' ? $_tmp5 : '-';?>

                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret'];?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret']!='' ? $_tmp6 : '-';?>

                                                </td>
                                                <td style="text-align: center">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision'];?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision']!='' ? $_tmp7 : '-';?>

                                                </td>
                                                <td style="text-align: center;">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision'];?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision']!='' ? $_tmp8 : '-';?>

                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision']!='' ? $_tmp9 : '-';?>

                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9'], null, 0);?>

                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['total_bg_11_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['total_ar_8_cu_pret'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['total_ar_9_cu_pret'], null, 0);?>

                                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_bg_11']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['bg_11']['comision'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_ar_8']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_8']['comision'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_valoare_comision_ar_9']->value+$_smarty_tpl->tpl_vars['sofer']->value['total_produse']['ar_9']['comision'], null, 0);?>


                                        <?php } ?>
                                        <tr>
                                            <th colspan="4" style="text-align: right;">TOTAL:</th>
                                            <th style="color: red;text-align: center;"><abbr title="Total bucati vandute BG 11"><?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</abbr></th>
                                            <th style="color: red;text-align: center;"><abbr title="Total bucati AR 8"><?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</abbr></th>
                                            <th style="text-align: center;">
                                                <abbr title="Total bucati AR 9" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_bg_11']->value;?>
</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_8']->value;?>
</abbr>
                                            </th>
                                            <th style="text-align: center;">
                                                <abbr title="Total valoare incasare AR 9" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_incasata_ar_9']->value;?>
</abbr>
                                            </th>
                                            <th style="color: red;"><abbr title="Total comision BG 11"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_bg_11']->value;?>
</abbr></th>
                                            <th style="color: red;"><abbr title="Total comision AR 8"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_ar_8']->value;?>
</abbr></th>
                                            <th style="text-align: center;"><abbr
                                                        title="Total comision AR 9" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['total_valoare_comision_ar_9']->value;?>
</abbr></th>
                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_soferi.js"></script>

<?php }} ?>
