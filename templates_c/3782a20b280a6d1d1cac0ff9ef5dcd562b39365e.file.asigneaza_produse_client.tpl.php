<?php /* Smarty version Smarty-3.1.15, created on 2021-01-13 15:41:09
         compiled from "/home/dinobaby/public_html/crm/www/templates/asigneaza_produse_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21147721115fb64908084f45-68784427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3782a20b280a6d1d1cac0ff9ef5dcd562b39365e' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/asigneaza_produse_client.tpl',
      1 => 1610545269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21147721115fb64908084f45-68784427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb649080ec1d6_03355569',
  'variables' => 
  array (
    'title' => 0,
    'nume_client' => 0,
    'id' => 0,
    'adaugat' => 0,
    'traseu_id' => 0,
    'lista_produse' => 0,
    'produs' => 0,
    'target_by_client_id' => 0,
    'target' => 0,
    'gasit' => 0,
    'valoare_comision' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb649080ec1d6_03355569')) {function content_5fb649080ec1d6_03355569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asigneaza produse la client: <?php echo $_smarty_tpl->tpl_vars['nume_client']->value['nume'];?>
 </h1>
                </div>
                <div class="row-fluid span12">
                    <form action="/asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post"
                          id="form_edit_traseu"
                          name="form_clienti" style="margin-bottom: 0">
                        <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat">
                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
"/>
                        <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                               id="form_asignari_clienti_trasee"/>
                        <div style="float: left;margin-right: 10px;">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-bordered table-hover" style="width: 680px;">
                                <tr>
                                    <th style="text-align: left;">
                                        <select name="tip_produs_id" style="width: 150px;">
                                            <option value="0">-Selecteaza produs-</option>
                                            <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['produs']->value['id']!=5&&$_smarty_tpl->tpl_vars['produs']->value['id']!=6) {?>
                                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['target_by_client_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['produs']->value['id']==$_smarty_tpl->tpl_vars['target']->value['tip_produs_id']) {?>
                                                            <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                                        <?php }?>
                                                    <?php } ?>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['gasit']->value==0;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['produs']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</option>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </select>
                                    </th>
                                    <th><input style="width: 160px;" name="target_produs" type="text" placeholder="stoc produs"
                                               autocomplete="off">
                                    </th>
                                    <th><input style="width: 160px;" name="pret_produs" type="text" placeholder="pret"
                                               autocomplete="off">
                                    </th>
                                    <th><input style="width: 160px;" name="comision_produs" type="text" placeholder="comision"
                                               autocomplete="off">
                                    </th>
                                    <th>
                                        <button style="margin-top: 5px;" type="submit" name="adauga" value="adauga"
                                                class="btn btn-small btn-primary">
                                            Adauga
                                        </button>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['target_by_client_id']->value)>0) {?>
                <form action="/asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post"
                      id="form_edit_traseu"
                      name="form_clienti" style="margin-bottom: 0">
                    <table cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-hover" style="width: 792px;margin-left: 30px;">
                        <thead>
                        <tr>
                            <td>Produs</td>
                            <td>Stoc</td>
                            <td>Pret + comision</td>
                            <td>Comision</td>
                            <td>&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['target_by_client_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
                            <tr>
                                <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['target']->value['nume_produs'];?>
</td>
                                <td><input type="text" name="target_<?php echo $_smarty_tpl->tpl_vars['target']->value['tip_produs_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['target']->value['target'];?>
"
                                           autocomplete="off"/></td>
                                <td style="text-align: left;"><input name="pret_<?php echo $_smarty_tpl->tpl_vars['target']->value['tip_produs_id'];?>
" type="text"
                                                                     value="<?php echo $_smarty_tpl->tpl_vars['target']->value['pret'];?>
" autocomplete="off"/>
                                </td>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['target']->value['comision'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!='') {?>
                                    <?php $_smarty_tpl->tpl_vars['valoare_comision'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value['comision'], null, 0);?>
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['valoare_comision'] = new Smarty_variable(0, null, 0);?>
                                <?php }?>
                                <td style="text-align: left;">
                                    <input name="comision_<?php echo $_smarty_tpl->tpl_vars['target']->value['tip_produs_id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['valoare_comision']->value;?>
"
                                           autocomplete="off"/>
                                </td>
                                <td class="span1" style="text-align: center;">
                                    <img title="Sterge target produs" src="../images/delete.png"
                                         style="cursor: pointer"
                                         onclick="clickOnStergeTargetClient(<?php echo $_smarty_tpl->tpl_vars['target']->value['client_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['target']->value['tip_produs_id'];?>
)">
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tr>
                            <th colspan="5">
                                <input style="float: right;" class="btn btn-mini btn-info" type="submit" name="update"
                                       value="update"/>
                            </th>
                        </tr>
                    </table>
                </form>
                <?php }?>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/edit_client.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
