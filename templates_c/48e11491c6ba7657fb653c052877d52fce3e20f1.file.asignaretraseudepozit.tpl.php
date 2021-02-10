<?php /* Smarty version Smarty-3.1.15, created on 2020-06-04 12:04:07
         compiled from "/home/dinobaby/public_html/crm/www/templates/asignaretraseudepozit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:616420085ed8b8a2abbd40-79324975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e11491c6ba7657fb653c052877d52fce3e20f1' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/asignaretraseudepozit.tpl',
      1 => 1591261448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616420085ed8b8a2abbd40-79324975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed8b8a2ae4306_25743647',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'stare_id' => 0,
    'lista_clienti' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed8b8a2ae4306_25743647')) {function content_5ed8b8a2ae4306_25743647($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asignari trasee</h1>
                    <a href="adaugatraseuladepozit.php">
                    <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259; traseu la depozit
                    </button>
                    </a>

                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti.php" method="get" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>

                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id" id="depozit_id" style="width: 150px;" data-schimba="1">
                            <option value="0">-Toate-</option>
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
                        <select name="traseu_id" id="traseu_id" style="width: 150px;" data-schimba="2">
                            <option value="0">-Toate-</option>
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" id="stare_id" style="width: 120px;" data-schimba="3">
                            <option value="-1">-Toate-</option>
                            <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_stari']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare']->key;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="center span1">
                                        #
                                    </th>
                                    <th style="text-align: left;">Traseu</th>
                                    <th style="text-align: left;">Nume client</th>
                                    <th style="text-align: left;">Judet</th>
                                    <th style="text-align: left;">Localitate</th>
                                    <th style="text-align: left;">Stare</th>
                                    <th style="text-align: left;">Telefon</th>
                                    <th style="text-align: left;">Rastel</th>
                                    <th style="text-align: left;">BG</th>
                                    <th style="text-align: left;">BG9</th>
                                    <th style="text-align: left;">AR</th>
                                    <th style="text-align: left;">Pret BG</th>
                                    <th style="text-align: left;">Pret AR9</th>
                                    <th style="text-align: left;">Pret AR8</th>
                                    <th style="text-align: left;">Comision BG</th>
                                    <th style="text-align: left;">Comision AR</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                    <tr>
                                        <td class="center"><a href="../edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
"><img title="edit" src="../images/edit.png"></a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_traseu'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_judet'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_localitate'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_stare'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['telefon'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['rastel'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['bg'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['bg_9'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['ar'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['pret_bg'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['pret_ar_9'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['pret_ar_8'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['comision_bg'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['comision_ar'];?>
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
<script src="js/pagini/edit_client.js"></script>
<script src="/js/pagini/clienti.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
