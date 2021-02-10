<?php /* Smarty version Smarty-3.1.15, created on 2020-09-10 14:51:21
         compiled from "/home/dinobaby/public_html/crm/www/templates/stoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140451375f0c1747ec5320-16694688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd24f4b09581989cd2e3eb1b66c536c04b85644' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/stoc.tpl',
      1 => 1599738674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140451375f0c1747ec5320-16694688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f0c1747edbe16_73761205',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_id' => 0,
    'lunile_anului' => 0,
    'luna' => 0,
    'luna_id' => 0,
    'stocuri' => 0,
    'stoc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f0c1747edbe16_73761205')) {function content_5f0c1747edbe16_73761205($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Istoric adaugari stoc</h1>
                    <a href="adauga_stoc.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            stoc
                        </button>
                    </a>
                </div>
                <div class="row-fluid span12">
                    <form action="/stoc.php" method="post" id="form_clienti" name="form_clienti"
                          style="margin-bottom: 0">
                        <div style="float: left;margin-right: 10px;">
                            <select name="depozit_id" style="width: 150px;" data-schimba="1">
                                <option value="0">-Depozite-</option>
                                <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['depozit']->value['id']==$_smarty_tpl->tpl_vars['depozit_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div style="float: left;margin-right: 10px;">
                            <select name="luna_id" style="width: 150px;" data-schimba="2">
                                <option value="0">Toate</option>
                                <?php  $_smarty_tpl->tpl_vars['luna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['luna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lunile_anului']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['luna']->key => $_smarty_tpl->tpl_vars['luna']->value) {
$_smarty_tpl->tpl_vars['luna']->_loop = true;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['luna']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['luna']->value['id']==$_smarty_tpl->tpl_vars['luna_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['luna']->value['nume'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['stocuri']->value)>0) {?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-table"></i></div>
                                <h4>List&#259; stoc</h4>
                            </div>
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th class="center span1">Depozit</th>
                                        <th class="center span1">Produs</th>
                                        <th class="center span1">Stare</th>
                                        <th class="center span1">Cantitate</th>
                                        <th class="center span1">Data</th>
                                        <th class="center span1">&nbsp;</th>
                                    </tr>
                                    </thead>
                                        <?php  $_smarty_tpl->tpl_vars['stoc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stoc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocuri']->value['depozite']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stoc']->key => $_smarty_tpl->tpl_vars['stoc']->value) {
$_smarty_tpl->tpl_vars['stoc']->_loop = true;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stoc']->value['nume'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stoc']->value['nume_produs'];?>
</td>
                                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['stoc']->value['stare_produs'];?>
</td>
                                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['stoc']->value['cantitate'];?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['stoc']->value['data_intrare'];?>
</td>
                                                <td style="text-align: center;">
                                                    <a href="">
                                                        <button><i class="i-folder-download-2"></i>Aviz intrare</button>
                                                    </a>
                                                    <a href="">
                                                        <button><i class=" i-folder-upload-2"></i>Aviz iesire</button>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h4 style="color: red;margin-left: 60px;">Nu avem nicio inregistrare in stoc</h4>
            <?php }?>
    </section>
</div>
<script src="js/pagini/data_table.js"></script>
<script src="/js/pagini/stoc.js"></script><?php }} ?>
