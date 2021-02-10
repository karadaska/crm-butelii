<?php /* Smarty version Smarty-3.1.15, created on 2020-09-23 15:15:36
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_fisa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9720677015f6b3abe052be4-02758438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9096bb38e866484ea1a07476156b07095652c8a' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_fisa.tpl',
      1 => 1600863330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9720677015f6b3abe052be4-02758438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f6b3abe102a18_48618617',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'fisa' => 0,
    'adaugat' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_by_traseu_id' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'sofer_by_traseu_id' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'masina_by_traseu_id' => 0,
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
    'lista_asignari_clienti_trasee' => 0,
    'client' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6b3abe102a18_48618617')) {function content_5f6b3abe102a18_48618617($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Editare fisa:
                                    <div style="display: inline-flex;">
                                        <a href="/fisa_print_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
">
                                            <button class="i-print"></button>
                                        </a>
                                        <form action="/edit_fisa.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post">
                                            
                                                    
                                                
                                            
                                        </form>
                                    </div>
                                </h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;" class="form-horizontal" id="form_edit_fisa"
                                              action="/edit_fisa.php"
                                              method="post">
                                            <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                            <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
"/>
                                            <table class="table table-bordered" style="width: 400px;">
                                                <tr>
                                                    <th><label class="control-label" for="depozit_id">Depozit:</label></th>
                                                    <td>
                                                        <select name="depozit_id" id="depozit_id" data-schimba="2">
                                                        <option value="0">Selecteaza depozit:</option>
                                                        <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['depozit_by_traseu_id']->value['depozit_id']==$_smarty_tpl->tpl_vars['depozit']->value['id']) {?>selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>

                                                            </option>
                                                        <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><label class="control-label" for="nume">Traseu:</label>
                                                    </th>
                                                    <td><input type="text" name="nume"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['nume'];?>
">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="control-label" for="sofer_id">Sofer:</label>
                                                    </th>
                                                    <td>
                                                        <select name="sofer_id" id="sofer_id" data-schimba="2">
                                                            <option value="0">-Toti-</option>
                                                            <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['sofer_by_traseu_id']->value['sofer_id']==$_smarty_tpl->tpl_vars['sofer']->value['id']) {?>selected="selected"<?php }?>>
                                                                    <?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>

                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="control-label" for="masina_id">Masina:</label>
                                                    </th>
                                                    <td>
                                                        <select name="masina_id" id="masina_id" data-schimba="2">
                                                            <option value="0">-Toate-</option>
                                                            <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['masina_by_traseu_id']->value['masina_id']==$_smarty_tpl->tpl_vars['masina']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['asignare']->value['masina_id'];?>
<?php }?>>
                                                                    <?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>

                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: right;">
                                                        <button type="submit" name="modifica" value="modifica"
                                                                class="btn btn-small btn-info">
                                                            Modifica
                                                        </button>

                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                <div style="float: right;margin-right: 100px;margin-top: 5px;">
                                    <form style="margin-top: 20px;" class="form-horizontal"
                                          action="/edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
"
                                          method="post">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Produs</th>
                                                <th>Stare produs</th>
                                                <th>Cantitate</th>
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
                                                <td><input autocomplete="off" type="text" name="cantitate"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">
                                                    <button style="margin-bottom: 5px;" type="submit"
                                                            name="adauga_cantitate_masina"
                                                            value=""
                                                            class="btn btn-small btn-primary">
                                                        Adauga cantitate
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <?php if (count($_smarty_tpl->tpl_vars['plecare_marfa_by_traseu_id']->value)>0) {?>
                                        <tr>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Produs</th>
                                                    <th>Cantitate</th>
                                                    <th>#</th>
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
                                                        <td class="span1" style="text-align: center;"><img
                                                                    title="Sterge cantitate produs"
                                                                    src="../images/delete.png"
                                                                    style="cursor: pointer"
                                                                    onclick="clickOnStergeCantitateMasinaTraseu(<?php echo $_smarty_tpl->tpl_vars['marfa']->value['tip_produs_id'];?>
)">
                                                        </td>
                                                    </tr>
                                                    <?php $_smarty_tpl->tpl_vars['total_marfa'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_marfa']->value+$_smarty_tpl->tpl_vars['marfa']->value['cantitate'], null, 0);?>
                                                <?php } ?>
                                                <tr>
                                                    <th style="text-align: left;">Total:</th>
                                                    <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['total_marfa']->value;?>
</th>
                                                    <th></th>
                                                </tr>
                                            </table>
                                        </tr>
                                    <?php }?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid span12">
            <form action="/edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat">
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
"/>

                <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                       id="form_asignari_clienti_trasee"/>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza client:</span>
                            <select name="client_id" id="client_id" style="width: 200px;" data-schimba="2">
                                <option value="0">-Toti-</option>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['asignare']->value['client_id']==$_smarty_tpl->tpl_vars['client']->value['id']) {?>
                                            <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                        <?php }?>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                            <button style="margin-bottom: 5px;" type="submit" name="adauga" value="adauga"
                                    class="btn btn-small btn-primary">
                                Adauga
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-content">
                        <table cellpadding="0" cellspacing="0" border="0"
                               class="table table-bordered table-hover" id="dataTable">
                            <thead>
                            <tr>
                                <th style="text-align: left;">
                                    Clienti asignati [<?php echo count($_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value);?>
]
                                </th>
                                <th>&nbsp</th>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                <tr>
                                    <td><a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_client'];?>
</a></td>
                                    <td class="span1"><img title="Sterge asignare" src="../images/delete.png"
                                                           style="cursor: pointer"
                                                           onclick="clickOnStergeAsignareClientTraseu(<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
)">
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script src="js/pagini/edit_traseu.js"></script>
<script src="js/pagini/data_table.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
