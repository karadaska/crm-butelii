<?php /* Smarty version Smarty-3.1.15, created on 2021-04-02 10:11:58
         compiled from "/var/www/html/fofoweb/www/templates/istoric_client_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18422813406022e19d8704d1-73136330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c25064bacb044d7447e0c2f05d2f159acd410ec7' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/istoric_client_fisa_traseu.tpl',
      1 => 1617347517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18422813406022e19d8704d1-73136330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6022e19d8ef926_07753458',
  'variables' => 
  array (
    'title' => 0,
    'client' => 0,
    'cantitati_produse_fisa_intoarcere' => 0,
    'cantitate' => 0,
    'x' => 0,
    'pret_unitar_client' => 0,
    'comision_contract' => 0,
    'pret_sofer' => 0,
    'valoare_comision_sofer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6022e19d8ef926_07753458')) {function content_6022e19d8ef926_07753458($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                                        <th rowspan="2" class="span1">FISA</th>
                                        <th rowspan="2">TRASEU</th>
                                        <th rowspan="2">MASINA</th>
                                        <th rowspan="2">SOFER</th>
                                        <th rowspan="2">PRODUS</th>
                                        <th colspan="2" style="border: 1px;border-left: double;">PRET FISA TRASEU</th>
                                        <th colspan="2" style="border: 1px;border-right: double;border-left: double;">
                                            VALOARE INCASATA SOFER
                                        </th>
                                        <th rowspan="2">OBSERVATIE I</th>
                                        <th rowspan="2">OBSERVATIE EXTRA</th>
                                        <th rowspan="2">DATA</th>
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
                                            <td style="text-align: center;vertical-align: middle;"><a target="_blank"
                                                                              href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['cantitate']->value['fisa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['fisa_id'];?>
</a>
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_traseu'];?>
</td>
                                            <td style="text-align: center;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['numar'];?>
</td>
                                            <td style="text-align: left;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_sofer'];?>
</td>
                                            <td class="span4">
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
                                            <td style="border-left: double;text-align: center;">
                                                <?php  $_smarty_tpl->tpl_vars['pret_unitar_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret_unitar_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret_unitar_client']->key => $_smarty_tpl->tpl_vars['pret_unitar_client']->value) {
$_smarty_tpl->tpl_vars['pret_unitar_client']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['pret_unitar_client']->value['pret_contract']-$_smarty_tpl->tpl_vars['pret_unitar_client']->value['comision'];?>

                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php  $_smarty_tpl->tpl_vars['comision_contract'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comision_contract']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comision_contract']->key => $_smarty_tpl->tpl_vars['comision_contract']->value) {
$_smarty_tpl->tpl_vars['comision_contract']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['comision_contract']->value['comision'];?>

                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="border-left: double;text-align: center">
                                                <?php  $_smarty_tpl->tpl_vars['pret_sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pret_sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pret_sofer']->key => $_smarty_tpl->tpl_vars['pret_sofer']->value) {
$_smarty_tpl->tpl_vars['pret_sofer']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['pret_sofer']->value['pret_fisa_sofer'];?>

                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="border-right: double;text-align: center;">
                                                <?php echo $_smarty_tpl->tpl_vars['cantitate']->value['comision'];?>

                                                <?php  $_smarty_tpl->tpl_vars['valoare_comision_sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valoare_comision_sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantitate']->value['produse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valoare_comision_sofer']->key => $_smarty_tpl->tpl_vars['valoare_comision_sofer']->value) {
$_smarty_tpl->tpl_vars['valoare_comision_sofer']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['valoare_comision_sofer']->value['comision'];?>

                                                    <br/>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <?php echo $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['nume_observatie']!='' ? $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['nume_observatie'] : '-';?>

                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <?php echo $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['observatie_extra']!='' ? $_smarty_tpl->tpl_vars['cantitate']->value['observatie']['observatie_extra'] : '-';?>

                                            </td>
                                            <td style="text-align: center;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['data_intrare'];?>
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


<?php }} ?>
