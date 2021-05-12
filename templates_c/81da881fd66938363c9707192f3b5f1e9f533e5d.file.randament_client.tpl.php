<?php /* Smarty version Smarty-3.1.15, created on 2021-05-12 10:14:47
         compiled from "/var/www/html/fofoweb/www/templates/randament_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20520424996062d8c3b89b35-52836680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81da881fd66938363c9707192f3b5f1e9f533e5d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/randament_client.tpl',
      1 => 1620803683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20520424996062d8c3b89b35-52836680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6062d8c3c1c6d7_05276692',
  'variables' => 
  array (
    'title' => 0,
    'nume_client' => 0,
    'id' => 0,
    'a' => 0,
    'an' => 0,
    'ani' => 0,
    'lista_perioade' => 0,
    'perioada' => 0,
    'perioada_id' => 0,
    'randament_client' => 0,
    'randament' => 0,
    'randamentextra' => 0,
    'randament_total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6062d8c3c1c6d7_05276692')) {function content_6062d8c3c1c6d7_05276692($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Randament client: <?php echo $_smarty_tpl->tpl_vars['nume_client']->value['nume'];?>
</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/randament_client.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="an" style="width: 180px;" data-schimba="4">
                            <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? date("Y")+1 - (2020) : 2020-(date("Y"))+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 2020, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration == 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration == $_smarty_tpl->tpl_vars['a']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value==$_smarty_tpl->tpl_vars['an']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</option>
                            <?php }} ?>
                            <input type="hidden" name="numar_an" value="<?php echo $_smarty_tpl->tpl_vars['an']->value;?>
">
                        </select>
                        <input type="hidden" name="id_an" value="<?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
">
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['perioada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perioada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_perioade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perioada']->key => $_smarty_tpl->tpl_vars['perioada']->value) {
$_smarty_tpl->tpl_vars['perioada']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['perioada']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['perioada']->value['id']==$_smarty_tpl->tpl_vars['perioada_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['perioada']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="perioada_select" value="<?php echo $_smarty_tpl->tpl_vars['perioada_id']->value;?>
">
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">RANDAMENT</th>
                                    <th style="text-align: left;">PROCENT</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['randament'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['randament']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['randament_client']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['randament']->key => $_smarty_tpl->tpl_vars['randament']->value) {
$_smarty_tpl->tpl_vars['randament']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['randament_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['randament']->value['randament_lunar']+$_smarty_tpl->tpl_vars['randamentextra']->value['cantitati_extra'], null, 0);?>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['randament_total']->value;?>
</th>
                                        <td><?php echo number_format(($_smarty_tpl->tpl_vars['randament_total']->value*100)/5,2);?>
 %</td>
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
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/randament_clienti.js"></script>


<?php }} ?>
