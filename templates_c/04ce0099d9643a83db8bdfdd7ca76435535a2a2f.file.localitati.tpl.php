<?php /* Smarty version Smarty-3.1.15, created on 2021-03-19 10:46:50
         compiled from "/var/www/html/fofoweb/www/templates/localitati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831343419605464fae4b671-79149891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ce0099d9643a83db8bdfdd7ca76435535a2a2f' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/localitati.tpl',
      1 => 1608674568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831343419605464fae4b671-79149891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'lista_localitati' => 0,
    'localitate' => 0,
    'clienti_asignati_localitati' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_605464faebfd51_26961202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605464faebfd51_26961202')) {function content_605464faebfd51_26961202($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Localitati</h1>
                    <a href="adauga_localitate.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            localitate
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; localitati</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th class="center span1">Zona</th>
                                    <th style="text-align: left;">Nume</th>
                                    <th style="text-align: left;">Clienti asignati</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['localitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['localitate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_localitati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['localitate']->key => $_smarty_tpl->tpl_vars['localitate']->value) {
$_smarty_tpl->tpl_vars['localitate']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['clienti_asignati_localitati'] = new Smarty_variable(Clienti::getClientiByLocalitateId($_smarty_tpl->tpl_vars['localitate']->value['id']), null, 0);?>
                                    <tr>
                                        <td class="center"><a href="../edit_localitate.php?id=<?php echo $_smarty_tpl->tpl_vars['localitate']->value['id'];?>
"><img
                                                        title="edit" src="../images/edit.png"></a></td>
                                        <td style="width: 150px;"><?php echo strtoupper($_smarty_tpl->tpl_vars['localitate']->value['zona']);?>
</td>
                                        <td><?php echo strtoupper($_smarty_tpl->tpl_vars['localitate']->value['nume']);?>
</td>
                                        <td>
                                            <a href="asignari_clienti_localitati.php?id=<?php echo $_smarty_tpl->tpl_vars['localitate']->value['id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['clienti_asignati_localitati']->value);?>
</a>
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
<script src="js/pagini/edit_localitate.js"></script>
<script src="js/pagini/data_table.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
