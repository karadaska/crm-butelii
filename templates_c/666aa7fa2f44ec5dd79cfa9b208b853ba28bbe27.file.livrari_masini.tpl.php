<?php /* Smarty version Smarty-3.1.15, created on 2021-03-04 12:33:49
         compiled from "/var/www/html/fofoweb/www/templates/livrari_masini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11988036646040940f14d4e2-58340311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666aa7fa2f44ec5dd79cfa9b208b853ba28bbe27' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/livrari_masini.tpl',
      1 => 1614854027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11988036646040940f14d4e2-58340311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6040940f2005d7_49563103',
  'variables' => 
  array (
    'title' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'masina_id' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'livrari_masini' => 0,
    'produse' => 0,
    'nr' => 0,
    'livrare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6040940f2005d7_49563103')) {function content_6040940f2005d7_49563103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1>
                        <i class="icon20 i-menu-6"></i> Raport livrari masini (de verificat cantitatile + print TO DO)
                        
                            
                        
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
                                            <th style="text-align: center;" rowspan="2">Nr. auto</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th style="text-align: center;" rowspan="2">Km parcursi</th>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <th colspan="3" style="border: double;"><?php echo $_smarty_tpl->tpl_vars['produse']->value['nume_produs'];?>
</th>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <th>Cantitate</th>
                                                <th>Valoare</th>
                                                <th>Comision</th>
                                            <?php } ?>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['livrare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['livrare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['trasee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                                <td></td>
                                                <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                    <td style="text-align: right;">
                                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate']!='' ? $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'] : '-';?>

                                                    </td>
                                                    <td style="text-align: right;">
                                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare']!='' ? $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'] : '-';?>

                                                    </td>
                                                    <td style="text-align: right;">
                                                        <?php echo $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['comision']!='' ? $_smarty_tpl->tpl_vars['livrare']->value['total_produse'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['comision'] : '-';?>

                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <th colspan="5" style="text-align: right;"></th>
                                            <?php  $_smarty_tpl->tpl_vars['produse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['livrari_masini']->value['produse_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produse']->key => $_smarty_tpl->tpl_vars['produse']->value) {
$_smarty_tpl->tpl_vars['produse']->_loop = true;
?>
                                                <th style="text-align: right;color: red;"><?php echo $_smarty_tpl->tpl_vars['livrari_masini']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['cantitate'];?>
</th>
                                                <th style="text-align: right;color: red;"><?php echo $_smarty_tpl->tpl_vars['livrari_masini']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['valoare'];?>
</th>
                                                <th style="text-align: right;color: red;"><?php echo $_smarty_tpl->tpl_vars['livrari_masini']->value['grand'][$_smarty_tpl->tpl_vars['produse']->value['tip_produs_id']]['comision'];?>
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

<script src="/js/pagini/raport_livrari_soferi.js"></script>

<?php }} ?>