<?php /* Smarty version Smarty-3.1.15, created on 2021-02-21 02:47:38
         compiled from "/var/www/html/fofoweb/www/templates/masini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17765795456031adaaf06a46-89142076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cedfcaee8e25b2aff5f29ecd83540b80d652972' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/masini.tpl',
      1 => 1604176690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17765795456031adaaf06a46-89142076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'asignare' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6031adab02dd11_38994758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6031adab02dd11_38994758')) {function content_6031adab02dd11_38994758($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Masini</h1>
                    <a href="adauga_masina.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            ma&#351;in&#259;
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; ma&#351;ini</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Numar</th>
                                    <th style="text-align: left;">Model</th>
                                    <th style="text-align: left;">Stare</th>
                                    <th style="text-align: left;">Soferi asignati</th>
                                    <th style="text-align: left;">Trasee asignate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                    <tr>
                                        <td class="span3"><a
                                                    href="edit_masina.php?id=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>
</a>
                                        </td>
                                        <td class="span3">
                                            <?php echo $_smarty_tpl->tpl_vars['masina']->value['model'];?>

                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['masina']->value['stare_masina'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['masina']->value['asignari_masina']) {?>
                                                <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['masina']->value['asignari_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['asignare']->value['nume_sofer'];?>
<?php echo '<br/>';?>

                                                <?php } ?>
                                            <?php } else { ?>
                                                -
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['masina']->value['traseu_by_masina']) {?>
                                                <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['masina']->value['traseu_by_masina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['asignare']->value['nume_traseu'];?>
<?php echo '<br/>';?>

                                                <?php } ?>
                                            <?php } else { ?>
                                                -
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
