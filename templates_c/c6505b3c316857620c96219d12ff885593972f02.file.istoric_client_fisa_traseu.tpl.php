<?php /* Smarty version Smarty-3.1.15, created on 2021-02-08 12:10:05
         compiled from "/home/dinobaby/public_html/crm/www/templates/istoric_client_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7096737005fb61fd5ee0177-00509799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6505b3c316857620c96219d12ff885593972f02' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/istoric_client_fisa_traseu.tpl',
      1 => 1612779004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7096737005fb61fd5ee0177-00509799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb61fd5f3e770_08329911',
  'variables' => 
  array (
    'title' => 0,
    'client' => 0,
    'cantitati_produse_fisa_intoarcere' => 0,
    'cantitate' => 0,
    'x' => 0,
    'pret_unitar_contract' => 0,
    'comision_contract' => 0,
    'valoare_sofer_incasata' => 0,
    'valoare_comision_sofer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb61fd5f3e770_08329911')) {function content_5fb61fd5f3e770_08329911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Istoric client produse fisa traseu: <?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista clienti
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div>
                                <table class="table table-bordered table-hover"
                                       id="dataTable">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">FISA ID</th>
                                        <th rowspan="2">TRASEU</th>
                                        <th rowspan="2">MASINA</th>
                                        <th rowspan="2">SOFER</th>
                                        <th rowspan="2">PRODUS</th>
                                        <th colspan="2" style="border: 1px;border-left: double;">PRET FISA TRASEU</th>
                                        <th colspan="2" style="border: 1px;border-right: double;border-left: double;">
                                            VALOARE INCASATA SOFER
                                        </th>
                                        <th rowspan="2">Observatii</th>
                                        <th rowspan="2">Data adaugarii</th>
                                    </tr>
                                    <tr>
                                        <th style="border-left: double;">PRET UNITAR</th>
                                        <th>COM</th>
                                        <th style="border-left: double;">PRET UNITAR</th>
                                        <th style="border-right: double;">COM</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['cantitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantitate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitati_produse_fisa_intoarcere']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantitate']->key => $_smarty_tpl->tpl_vars['cantitate']->value) {
$_smarty_tpl->tpl_vars['cantitate']->_loop = true;
?>
                                        <tr>
                                            <td style="text-align: center"><a target="_blank"
                                                                              href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['cantitate']->value['fisa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['fisa_id'];?>
</a>
                                            </td>
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_traseu'];?>
</td>
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['numar'];?>
</td>
                                            <td style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_sofer'];?>
</td>
                                            <td>
                                                <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['x']->value['nume_produs'];?>
 => [Vandute: <?php echo $_smarty_tpl->tpl_vars['x']->value['vandute'];?>
, Defecte: <?php echo $_smarty_tpl->tpl_vars['x']->value['defecte'];?>
]
                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="border-left: double;text-align: center">
                                                <?php  $_smarty_tpl->tpl_vars['pret_unitar_contract'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret_unitar_contract']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret_unitar_contract']->key => $_smarty_tpl->tpl_vars['pret_unitar_contract']->value) {
$_smarty_tpl->tpl_vars['pret_unitar_contract']->_loop = true;
?>
                                                        <?php echo $_smarty_tpl->tpl_vars['pret_unitar_contract']->value['pret_contract']['pret'];?>

                                                        <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php  $_smarty_tpl->tpl_vars['comision_contract'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comision_contract']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comision_contract']->key => $_smarty_tpl->tpl_vars['comision_contract']->value) {
$_smarty_tpl->tpl_vars['comision_contract']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['comision_contract']->value['valoare_sofer_comision_fisa'];?>

                                                        <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="border-left: double;text-align: center;">
                                                <?php  $_smarty_tpl->tpl_vars['valoare_sofer_incasata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valoare_sofer_incasata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valoare_sofer_incasata']->key => $_smarty_tpl->tpl_vars['valoare_sofer_incasata']->value) {
$_smarty_tpl->tpl_vars['valoare_sofer_incasata']->_loop = true;
?>
                                                        <?php echo $_smarty_tpl->tpl_vars['valoare_sofer_incasata']->value['valoare_sofer_pret_fisa']-$_smarty_tpl->tpl_vars['valoare_sofer_incasata']->value['valoare_sofer_comision_fisa'];?>

                                                        <br/>
                                                <?php } ?>
                                            <td style="border-right: double;text-align: center;">
                                                <?php echo $_smarty_tpl->tpl_vars['cantitate']->value['comision'];?>

                                                <?php  $_smarty_tpl->tpl_vars['valoare_comision_sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valoare_comision_sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valoare_comision_sofer']->key => $_smarty_tpl->tpl_vars['valoare_comision_sofer']->value) {
$_smarty_tpl->tpl_vars['valoare_comision_sofer']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['valoare_comision_sofer']->value['valoare_sofer_comision_fisa'];?>

                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <?php echo $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['nume_observatie']!='' ? $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['nume_observatie'] : '-';?>

                                            </td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['data_intrare'];?>
</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
<?php }} ?>
