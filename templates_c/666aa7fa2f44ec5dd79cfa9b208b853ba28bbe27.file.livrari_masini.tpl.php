<?php /* Smarty version Smarty-3.1.15, created on 2021-06-09 23:57:56
         compiled from "/var/www/html/fofoweb/www/templates/livrari_masini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21679685960c12b5410c800-27827755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666aa7fa2f44ec5dd79cfa9b208b853ba28bbe27' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/livrari_masini.tpl',
      1 => 1623241360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21679685960c12b5410c800-27827755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'masina_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'livrari_masini' => 0,
    'produse' => 0,
    'nr' => 0,
    'livrare' => 0,
    'cantitate' => 0,
    'total_livrare' => 0,
    'livrare_produse' => 0,
    'total_produse' => 0,
    'total_valoare' => 0,
    'grand_total_km' => 0,
    'grand_cantitati' => 0,
    'grand_valoare' => 0,
    'grand_total_cantitati' => 0,
    'grand_total_valoare' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c12b54205053_52394064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c12b54205053_52394064')) {function content_60c12b54205053_52394064($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1>
                        <i class="icon20 i-menu-6"></i> Raport livrari masini
                        <a target="_blank"
                           href="/print_livrari_masini.php?id=<?php echo $_smarty_tpl->tpl_vars['masina_id']->value;?>
&data_start=<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
&data_stop=<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/livrari_masini.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Masina
                                <select name="masina_id">
                                    <option value="0">Alege masina</option>
                                    <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['masina']->value['id']==$_smarty_tpl->tpl_vars['masina_id']->value) {?> selected="selected"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>

                                        </option>
                                    <?php } ?>

                                </select>
                                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value;?>
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
                                <button class="btn btn-success" type="button" data-export_livrari="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value;?>
"
                                        id="export_livrari_soferi">Export TO DO:
                                </button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['masina_id']->value>0)) {?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <form action="/livrari_masini.php"
                                  method="post" id="form_actualizeaza_stoc"
                                  style="margin-bottom: 0">
                                <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: left;" rowspan="2">NUME SI PRENUME</th>
                                            <th style="text-align: center;" rowspan="2">NR. AUTO</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th style="text-align: center;" rowspan="2">KM PARCURSI</th>
                                            <th style="text-align: center;" rowspan="2">DATA</th>
                                            <th style="text-align: center;" colspan="2">TOTAL PRODUSE</th>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <th colspan="2" style="border: double;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['nume_produs'];?>
</th>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <th>CANTITATI</th>
                                            <th>VALOARE</th>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <th>CANTITATE</th>
                                                <th>VALOARE</th>
                                            <?php } ?>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['grand_total_km'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['grand_cantitati'] = new Smarty_variable(0, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable(0, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['livrare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['livrare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['masini']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['livrare']->key => $_smarty_tpl->tpl_vars['livrare']->value) {
$_smarty_tpl->tpl_vars['livrare']->_loop = true;
?>
                                            <tr>
                                                <td style="text-align: center;" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['livrare']->value['nume_sofer'];?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['livrare']->value['numar'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['livrare']->value['nume_traseu'];?>
</td>
                                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['livrare']->value['km']['km_traseu']>0 ? $_smarty_tpl->tpl_vars['livrare']->value['km']['km_traseu'] : '-';?>
</td>
                                                <td class="span2">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td></td>
                                                            
                                                                
                                                                       
                                                                
                                                            
                                                            <th>Fisa</th>
                                                            <th style="text-align: center;">Data</th>
                                                            <th>Cant</th>
                                                        </tr>
                                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['cantitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantitate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrare']->value['fise_by_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantitate']->key => $_smarty_tpl->tpl_vars['cantitate']->value) {
$_smarty_tpl->tpl_vars['cantitate']->_loop = true;
?>
                                                            <tr>
                                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                                <td style="text-align: center;"><a target="_blank" href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['cantitate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['id'];?>
</a>
                                                                </td>
                                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['data'];?>
</td>
                                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['suma_cantitati'];?>
</td>
                                                            </tr>
                                                            
                                                                
                                                                
                                                                
                                                                
                                                                
                                                            
                                                        <?php } ?>
                                                    </table>
                                                </td>
                                                <td style="text-align: right">
                                                    <?php $_smarty_tpl->tpl_vars['total_livrare'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['cantitate'], null, 0);?>
                                                    <?php echo $_smarty_tpl->tpl_vars['total_livrare']->value>0 ? $_smarty_tpl->tpl_vars['total_livrare']->value : '-';?>

                                                </td>
                                                <td style="text-align: right">
                                                    <?php $_smarty_tpl->tpl_vars['livrare_produse'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['valoare'], null, 0);?>
                                                    <?php echo $_smarty_tpl->tpl_vars['livrare_produse']->value>0 ? $_smarty_tpl->tpl_vars['livrare_produse']->value : '-';?>

                                                </td>
                                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                    <?php $_smarty_tpl->tpl_vars['total_produse'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'], null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['total_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'], null, 0);?>
                                                    <td style="text-align: right;">
                                                        <?php echo $_smarty_tpl->tpl_vars['total_produse']->value>0 ? $_smarty_tpl->tpl_vars['total_produse']->value : '-';?>

                                                    </td>
                                                    <td style="text-align: right;">
                                                        <?php echo $_smarty_tpl->tpl_vars['total_valoare']->value>0 ? $_smarty_tpl->tpl_vars['total_valoare']->value : '-';?>

                                                    </td>
                                                <?php } ?>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['grand_total_km'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_total_km']->value+$_smarty_tpl->tpl_vars['livrare']->value['km']['km_traseu'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_cantitati'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_cantitati']->value+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['cantitate']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['cantitate'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['grand_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['grand_valoare']->value+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['1']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['3']['valoare']+$_smarty_tpl->tpl_vars['livrare']->value['total_produse']['4']['valoare'], null, 0);?>
                                        <?php } ?>
                                        <tr>
                                            <th colspan="3" style="text-align: right;"></th>
                                            <th style="text-align: right;">TOTAL:</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['grand_total_km']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_km']->value : '-';?>
</th>
                                            <th></th>
                                            <th style="text-align: right;color: red;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['grand_cantitati']->value>0 ? $_smarty_tpl->tpl_vars['grand_cantitati']->value : '-';?>
</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['grand_valoare']->value>0 ? $_smarty_tpl->tpl_vars['grand_valoare']->value : '-';?>
</th>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_cantitati'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrari_masini']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'], null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['grand_total_valoare'] = new Smarty_variable($_smarty_tpl->tpl_vars['livrari_masini']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'], null, 0);?>
                                                <th style="text-align: right;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_cantitati']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_cantitati']->value : '-';?>
</th>
                                                <th style="text-align: right;color: red;"><?php echo $_smarty_tpl->tpl_vars['grand_total_valoare']->value>0 ? $_smarty_tpl->tpl_vars['grand_total_valoare']->value : '-';?>
</th>
                                            <?php } ?>
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

<script src="/js/pagini/raport_livrari_masini.js"></script>


<?php }} ?>
