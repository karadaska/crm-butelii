<?php /* Smarty version Smarty-3.1.15, created on 2021-03-24 13:46:27
         compiled from "/var/www/html/fofoweb/www/templates/edit_masina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274961614605b2693a180a3-82762306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a39787a96768f9b27799b0299194902ded5a86' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_masina.tpl',
      1 => 1604177284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274961614605b2693a180a3-82762306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'id' => 0,
    'adaugat' => 0,
    'masina_id' => 0,
    'stari_masini' => 0,
    'stare_masina' => 0,
    'stare_by_masina_id' => 0,
    'masina' => 0,
    'lista_trasee' => 0,
    'lista_asignari_masini_trasee' => 0,
    'asignare' => 0,
    'traseu' => 0,
    'gasit' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_605b2693ae6531_12433300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b2693ae6531_12433300')) {function content_605b2693ae6531_12433300($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit masin&#259;</h1>
                    <button type="button" onclick="location.href='/masini.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista ma&#351;ini
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_masina" action="/edit_masina.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                                    <table class="table table-bordered" style="width: 370px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Numar</th>
                                            <th style="text-align: left;"><input autocomplete="off" type="text"
                                                                                 name="numar"
                                                                                 value="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value['numar'];?>
">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Model</th>
                                            <th style="text-align: left;"><input autocomplete="off" type="text"
                                                                                 name="model"
                                                                                 value="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value['model'];?>
">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Stare masina</th>
                                            <th style="text-align: left;">
                                                <select name="stare_id">
                                                    <?php  $_smarty_tpl->tpl_vars['stare_masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare_masina']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stari_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare_masina']->key => $_smarty_tpl->tpl_vars['stare_masina']->value) {
$_smarty_tpl->tpl_vars['stare_masina']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare_masina']->key;
?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['stare_masina']->value['id'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['stare_by_masina_id']->value['stare_id']==$_smarty_tpl->tpl_vars['stare_masina']->value['id']) {?>selected="SELECTED"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['stare_masina']->value['nume'];?>

                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: right;">
                                                <button type="submit" name="modifica" value="modifica"
                                                        class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeMasina(<?php echo $_smarty_tpl->tpl_vars['masina_id']->value['id'];?>
)">Sterge masina
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
        <div class="row-fluid span12">
            <form action="/edit_masina.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat">
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
"/>

                <input type="hidden" value="1"/>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza traseu:</span>
                            <select name="traseu_id" style="width: 200px;" data-schimba="2">
                                <option value="0">Alege...</option>
                                <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_masini_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['asignare']->value['traseu_id']==$_smarty_tpl->tpl_vars['traseu']->value['id']) {?>
                                            <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                        <?php }?>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
><?php echo strtoupper($_smarty_tpl->tpl_vars['traseu']->value['nume']);?>
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
                                <th style="text-align: left;width: 220px;">
                                    Numar
                                </th>
                                <th style="text-align: left;width: 220px;">
                                    Model
                                </th>
                                <td>Traseu</td>
                                <td>&nbsp</td>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_masini_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                <tr>
                                    <td style="text-align: left;width: 150px;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['numar'];?>
</td>
                                    <td style="text-align: left;width: 150px;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['model'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_traseu'];?>
</td>
                                    <td style="text-align: center;" class="span1">
                                        <img title="Sterge asignare"
                                        src="../images/delete.png"
                                        style="cursor: pointer"
                                        onclick="clickOnStergeAsignareMasinaTraseu(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lista']->value['traseu_id'];?>
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
<script src="js/pagini/edit_masina.js"></script>
<?php }} ?>
