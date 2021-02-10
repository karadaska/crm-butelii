<?php /* Smarty version Smarty-3.1.15, created on 2021-02-03 08:33:40
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3675687915edde90548ff66-03463829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd63a0f61a7a37dafb546100f5a32e29faabce98' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_traseu.tpl',
      1 => 1612175584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3675687915edde90548ff66-03463829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5edde905501c27_77190420',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_by_traseu_id' => 0,
    'adaugat' => 0,
    'lista_clienti' => 0,
    'lista_asignari_clienti_trasee' => 0,
    'asignare' => 0,
    'client' => 0,
    'gasit' => 0,
    'lista' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edde905501c27_77190420')) {function content_5edde905501c27_77190420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                                <h4>Editare Traseu: <?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['nume'];?>

                                    <div style="display: inline-flex;">
                                        <a href="">
                                            <button class="i-print"></button>
                                        </a>
                                        <button type="button" class="btn btn-danger"
                                                onclick="clickOnStergeTraseu(<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
)">Sterge traseu
                                        </button>
                                        <button style="margin-left: 10px;" type="button"
                                                onclick="location.href='/trasee.php'"
                                                name="inapoi"
                                                value="inapoi" class="btn btn-small btn-warning">
                                            Lista trasee
                                        </button>

                                    </div>
                                </h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;" class="form-horizontal" id="form_edit_traseu"
                                              action="/edit_traseu.php"
                                              method="post">
                                            
                                            <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
"/>
                                            <table class="table table-bordered" style="width: 400px;">
                                                <tr>
                                                    <th style="text-align: left;"><label class="control-label"
                                                                                         for="nume">Nume traseu:</label>
                                                    </th>
                                                    <td style="text-align: center"><input type="text" name="nume"
                                                                                          value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['nume'];?>
">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;"><label class="control-label"
                                                                                         for="depozit_id">Selecteaza
                                                            Depozit:</label></th>
                                                    <td>
                                                        <select name="depozit_id" id="depozitx_id"
                                                                data-schimba="2">
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
                                                    <th colspan="2" style="text-align: right;">
                                                        <button type="submit" name="modifica" value="modifica"
                                                                class="btn btn-small btn-info">
                                                            Modifica
                                                        </button>
                                                    </th>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
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
                <table class="table table-bordered table-striped" style="width: 427px;margin-left: 10px;">
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
><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
 <?php if (strlen($_smarty_tpl->tpl_vars['client']->value['nume_localitate'])>0) {?>[<?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
]<?php }?></option>
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
        <?php if (count($_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value)>0) {?>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;width: 40px;">
                                        Localitate
                                    </th>
                                    <td>Clienti</td>
                                    <td>Telefon</td>
                                    <td style="text-align: center;">Stoc client</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </thead>
                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                    <tr>
                                        <td style="text-align: left;width: 150px;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['localitate'];?>
</td>
                                        <td>
                                            <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['lista']->value['nume_client']);?>
</a>
                                        </td>
                                        <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['telefon'];?>
</td>
                                        <td>
                                            <?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['target']->value['nume_produs'];?>
 => [Stoc: <?php echo $_smarty_tpl->tpl_vars['target']->value['target'];?>
 buc / Pret: <?php echo $_smarty_tpl->tpl_vars['target']->value['pret'];?>
 RON /  Comision: <?php echo $_smarty_tpl->tpl_vars['target']->value['comision'];?>
 RON]
                                                <br/>
                                            <?php } ?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['ordine'];?>
</td>
                                        <td style="text-align: center;"><a
                                                    href="edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['traseu_id'];?>
&move_down=<?php echo $_smarty_tpl->tpl_vars['lista']->value['client_id'];?>
"><img
                                                        style="cursor: pointer;" src="../images/arrow_down.png"></a>
                                        </td>

                                        <td style="text-align: center;"><a
                                                    href="edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['traseu_id'];?>
&move_up=<?php echo $_smarty_tpl->tpl_vars['lista']->value['client_id'];?>
"><img
                                                        style="cursor: pointer;" src="../images/arrow_up.png"></a>
                                        </td>
                                        <td style="text-align: center;">
                                            <img title="Sterge asignare"
                                                 src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareClientTraseu(<?php echo $_smarty_tpl->tpl_vars['lista']->value['client_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['traseu_id']->value['id'];?>
)">
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </section>
</div>
<script src="js/pagini/edit_traseu.js"></script>

<?php }} ?>
