<?php /* Smarty version Smarty-3.1.15, created on 2021-04-26 11:53:59
         compiled from "/var/www/html/fofoweb/www/templates/adauga_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4555111236035517f2e80b0-62001607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e10ad82a4745cc0c93863631956e19ca9870ef2' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/adauga_fisa_traseu.tpl',
      1 => 1619427233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4555111236035517f2e80b0-62001607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6035517f344a00_87179706',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_by_traseu_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'sofer_by_traseu_id' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'masina_by_traseu_id' => 0,
    'asignare' => 0,
    'data_intrare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6035517f344a00_87179706')) {function content_6035517f344a00_87179706($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                                <h4>Adauga fisa: <?php echo date('Y-m-d');?>
</h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;margin-left: -16px;" class="form-horizontal"
                                              id="form_adauga_fisa"
                                              action="/adauga_fisa_traseu.php" method="post">
                                            <table class="table table-bordered" style="width: 370px;">
                                                <tr>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left;">Depozit:</th>
                                                    <td>
                                                        <select name="depozit_id" id="depozit_id" data-schimba="2">
                                                            <option value="0">-Alege depozit-</option>
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
                                                <th style="text-align: left;vertical-align: middle;">Traseu:</th>
                                                <td style="text-align: left;">
                                                    <div id="lista_trasee">
                                                        <select name="traseu_id" id="traseu_id">
                                                            <option value="0">- Trasee -</option>
                                                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['traseu']->key;
?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">Sofer</th>
                                                    <td>
                                                        <select name="sofer_id" id="sofer_id" data-schimba="2">
                                                            <option value="0">-Alege sofer-</option>
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
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">Masina:</th>
                                                    <td>
                                                        <select name="masina_id" id="masina_id" data-schimba="2">
                                                            <option value="0">-Alege masina-</option>
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
                                                    <th style="vertical-align: middle;text-align: left;">Data:</th>
                                                    <td>
                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['data_intrare']->value;?>
" type="date" name="data_intrare" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">
                                                        Import clienti
                                                    </th>
                                                    <td><input title="IMPORT CLIENTI ASIGNATI DE PE TRASEUL SELECTAT!!!" type="checkbox" checked="checked" name="import_clienti_trasee">
                                                        <form action="/adauga_fisa_traseu.php" method="post">
                                                            <button style="float: right;" title="Trebuie generata fisa obligatoriu"
                                                                    type="submit"
                                                                    name="genereaza_fisa_traseu"
                                                                    class="btn btn-inverse">
                                                                Genereaza fisa traseu
                                                            </button>
                                                        </form>
                                                    </td>
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
    </section>
</div>
<script src="js/pagini/adauga_fisa_traseu.js"></script>

<?php }} ?>
