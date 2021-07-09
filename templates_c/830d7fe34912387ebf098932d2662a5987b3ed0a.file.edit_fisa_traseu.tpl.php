<?php /* Smarty version Smarty-3.1.15, created on 2021-07-09 13:44:36
         compiled from "/var/www/html/fofoweb/www/templates/edit_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115635962060e8289413bf00-66883475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830d7fe34912387ebf098932d2662a5987b3ed0a' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_fisa_traseu.tpl',
      1 => 1624089575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115635962060e8289413bf00-66883475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'fisa_id' => 0,
    'id' => 0,
    'adaugat' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'asignare' => 0,
    'lista_produse' => 0,
    'plecare_marfa_by_traseu_id' => 0,
    'produs' => 0,
    'marfa_plecare_client' => 0,
    'gasit' => 0,
    'lista_stari_produse' => 0,
    'stare' => 0,
    'stare_produs' => 0,
    'marfa' => 0,
    'total_marfa' => 0,
    'lista_clienti' => 0,
    'lista_clienti_asignati_la_fisa' => 0,
    'client' => 0,
    'nr' => 0,
    'lista' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60e828942a42d3_10094326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e828942a42d3_10094326')) {function content_60e828942a42d3_10094326($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title" style="display: block ruby;">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Editare Fisa Traseu: <?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['nume_traseu'];?>
</h4>
                                <a target="_blank" href="/print_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <button class="i-print"></button>
                                </a>
                                <a href="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-mini btn-primary">Completeaza
                                    fisa</a>
                                <form class="form-horizontal" id="form_edit_fisa"
                                      action="/edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                                      method="post">
                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
                                        <button type="submit" class="btn btn-mini btn-success" name="consuma_stoc">
                                            Consuma stoc
                                        </button>
                                    <?php }?>
                                </form>
                            </div>
                            <div class="widget-content">
                                <form style="margin-top: 20px;" class="form-horizontal" id="form_edit_fisa"
                                      action="/edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                                    <table class="table table-bordered" style="width: 900px;margin-top: -20px;">
                                        <tr>
                                            <th style="text-align: left;">
                                                <select name="traseu_id"
                                                        style="width: 160px;">
                                                    <option value="0">Alege traseu:</option>
                                                    <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['fisa_id']->value['traseu_id']==$_smarty_tpl->tpl_vars['traseu']->value['id']) {?>selected="selected"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                            <th style="text-align: left;">
                                                <select name="sofer_id"
                                                        style="width: 200px;">
                                                    <option value="0">-Alege sofer-</option>
                                                    <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['fisa_id']->value['sofer_id']==$_smarty_tpl->tpl_vars['sofer']->value['id']) {?>selected="selected"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>

                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                            <th style="text-align: left;">
                                                <select name="masina_id"
                                                        style="width: 100px;">
                                                    <option value="0">-Alege..-</option>
                                                    <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['fisa_id']->value['masina_id']==$_smarty_tpl->tpl_vars['masina']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['asignare']->value['masina_id'];?>
<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>

                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                            <th>
                                                <input style="width: 120px;" type="date" name="data_start"
                                                value="<?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['data_intrare'];?>
">
                                            </th>
                                            <th>
                                                <button type="submit" name="modifica"
                                                        class="btn btn-small btn-info">
                                                    Modifica
                                                </button>
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
                                                    <button style="margin-top: 1px" type="submit" name="sterge_fisa"
                                                            value=""
                                                            class="btn btn-small btn-danger">
                                                        Sterge
                                                    </button>
                                                <?php }?>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3) {?>
                                    <form style="margin-top: 5px;" class="form-horizontal"
                                          action="/edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                                          method="post">
                                        <input type="hidden" name="data_fisa" value="<?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['data_intrare'];?>
">
                                        <table class="table table-bordered" style="width: 900px;margin-top: 50px;">
                                            <tr>
                                                <th>Produs</th>
                                                <th>Stare produs</th>
                                                <th>Cantitate</th>
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4) {?>
                                                    <th>&nbsp;</th>
                                                <?php }?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="tip_produs_id">
                                                        <option>Selecteaza produs</option>
                                                        <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                            <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                                            <?php  $_smarty_tpl->tpl_vars['marfa_plecare_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa_plecare_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plecare_marfa_by_traseu_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa_plecare_client']->key => $_smarty_tpl->tpl_vars['marfa_plecare_client']->value) {
$_smarty_tpl->tpl_vars['marfa_plecare_client']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['produs']->value['id']==$_smarty_tpl->tpl_vars['marfa_plecare_client']->value['tip_produs_id']) {?>
                                                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                                                <?php }?>
                                                            <?php } ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['produs']->value['id'];?>
> <?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</option>
                                                            <?php }?>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="stare_produs">
                                                        <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==1) {?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_produs']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
<?php }?>>
                                                                    <?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>

                                                                </option>
                                                            <?php }?>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td><input autocomplete="off" type="text" style="width: 175px;"
                                                           name="cantitate">
                                                </td>
                                                <td style="vertical-align: middle;text-align: center;">
                                                    <button style="margin-bottom: 5px;" type="submit"
                                                            name="adauga_cantitate_masina"
                                                            value=""
                                                            class="btn btn-mini btn-primary">
                                                        Adauga
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['plecare_marfa_by_traseu_id']->value)>0) {?>
                                    <table class="table table-bordered" style="width: 900px;">
                                        <tr>
                                            <th>Produs</th>
                                            <th>Cantitate</th>
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5) {?>
                                                <th>#</th>
                                            <?php }?>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['total_marfa'] = new Smarty_variable(0, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['marfa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plecare_marfa_by_traseu_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa']->key => $_smarty_tpl->tpl_vars['marfa']->value) {
$_smarty_tpl->tpl_vars['marfa']->_loop = true;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['marfa']->value['nume_produs'];?>
</td>
                                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['marfa']->value['cantitate'];?>
</td>
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6) {?>
                                                    <td class="span1" style="text-align: center;"><img
                                                                title="Sterge cantitate produs"
                                                                src="../images/delete.png"
                                                                style="cursor: pointer"
                                                                onclick="clickOnStergeCantitateMasinaTraseu(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['marfa']->value['tip_produs_id'];?>
)">
                                                    </td>
                                                <?php }?>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['total_marfa'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_marfa']->value+$_smarty_tpl->tpl_vars['marfa']->value['cantitate'], null, 0);?>
                                        <?php } ?>
                                        <tr>
                                            <th style="text-align: left;">Total:</th>
                                            <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['total_marfa']->value;?>
</th>
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['consum_plecare']==0;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7) {?>
                                                <th></th>
                                            <?php }?>
                                        </tr>
                                    </table>
                                <?php }?>
                                <form action="/edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post"
                                      id="form_edit_traseu"
                                      name="form_clienti" style="margin-bottom: 0">

                                    <input type="hidden" name="data_fisa" value="<?php echo $_smarty_tpl->tpl_vars['fisa_id']->value['data_intrare'];?>
">

                                    <table class="table table-bordered" style="width: 900px;margin-top: 50px;">
                                        <tr>
                                            <th style="text-align: left" colspan="4">
                                                <span style="font-weight: bold">Asigneaza client:</span>
                                                <select name="client_id[]" multiple="multiple" style="width: 400px;"
                                                        data-schimba="2">
                                                    <option value="0">-Toti-</option>
                                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti_asignati_la_fisa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['asignare']->value['client_id']==$_smarty_tpl->tpl_vars['client']->value['id']) {?>
                                                                <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                                            <?php }?>
                                                        <?php } ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
>
                                                                <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
 <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['nume_localitate'])>0) {?>[<?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
]<?php }?>
                                                            </option>
                                                        <?php }?>
                                                    <?php } ?>
                                                </select>
                                                <button style="margin-bottom: 5px;margin-left: 10px;" type="submit"
                                                        name="adauga" value="adauga"
                                                        class="btn btn-small btn-primary">
                                                    Adauga client
                                                </button>
                                                <button style="margin-bottom: 5px;margin-left: 10px;" type="submit"
                                                        name="import_clienti_fisa_generata"
                                                        class="btn btn-small btn-inverse">
                                                    Import clienti la fisa traseu
                                                </button>
                                            </th>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti_asignati_la_fisa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                            <tr>
                                                <td class="span1" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista']->value['nume_localitate']);?>
</td>
                                                <td>
                                                    <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['client_id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['lista']->value['nume_client']);?>
</a>
                                                </td>
                                                <td class="span1" style="text-align: center;"><img
                                                            title="Sterge asignare"
                                                            src="../images/delete.png"
                                                            style="cursor: pointer"
                                                            onclick="clickOnStergeClientFisaGenerata(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['lista']->value['client_id'];?>
)">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="js/pagini/data_table.js"></script>
<script src="js/pagini/edit_fisa_traseu.js"></script>
<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span><?php }} ?>
