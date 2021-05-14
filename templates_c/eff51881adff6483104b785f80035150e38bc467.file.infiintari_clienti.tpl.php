<?php /* Smarty version Smarty-3.1.15, created on 2021-05-14 22:34:40
         compiled from "/var/www/html/fofoweb/www/templates/infiintari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115175099609e311f9dccb8-88234380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff51881adff6483104b785f80035150e38bc467' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/infiintari_clienti.tpl',
      1 => 1621020878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115175099609e311f9dccb8-88234380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_609e311fa322b8_56545192',
  'variables' => 
  array (
    'title' => 0,
    'lista_clienti' => 0,
    'depozit' => 0,
    'a' => 0,
    'clienti_depozit_start' => 0,
    'clienti_depozit_stop' => 0,
    'clienti_depozit_fara_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609e311fa322b8_56545192')) {function content_609e311fa322b8_56545192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Numar clienti by An</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value['depozite']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>

                                                        <table class="table-bordered table">
                                                            <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? date("Y")+1 - (2016) : 2016-(date("Y"))+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 2016, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration == 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration == $_smarty_tpl->tpl_vars['a']->total;?>
                                                                <?php $_smarty_tpl->tpl_vars['clienti_depozit_start'] = new Smarty_variable(Depozite::getClientiByDepozitIdAndDataStart($_smarty_tpl->tpl_vars['depozit']->value['depozit_id'],$_smarty_tpl->tpl_vars['a']->value), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['clienti_depozit_stop'] = new Smarty_variable(Depozite::getClientiByDepozitIdAndDataStop($_smarty_tpl->tpl_vars['depozit']->value['depozit_id'],$_smarty_tpl->tpl_vars['a']->value), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['clienti_depozit_fara_data'] = new Smarty_variable(Depozite::getClientiByDepozitIdFaraDataContract($_smarty_tpl->tpl_vars['depozit']->value['depozit_id']), null, 0);?>
                                                                <tr>
                                                                    <th><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</th>
                                                                    <th><a target="_blank" href="clienti_activi_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
&an=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
">Infiintare : <?php echo count($_smarty_tpl->tpl_vars['clienti_depozit_start']->value);?>
</a></th>
                                                                    <th><a target="_blank" href="clienti_desfiintati_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
&an=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
">Incetare: <?php echo count($_smarty_tpl->tpl_vars['clienti_depozit_stop']->value);?>
</a></th>
                                                                </tr>
                                                            <?php }} ?>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fara data contract: <a href="clienti_activi_fara_data_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['clienti_depozit_fara_data']->value);?>
</a></th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    <?php } ?>
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php }} ?>
