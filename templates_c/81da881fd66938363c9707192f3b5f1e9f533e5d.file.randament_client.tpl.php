<?php /* Smarty version Smarty-3.1.15, created on 2021-03-30 10:59:35
         compiled from "/var/www/html/fofoweb/www/templates/randament_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20520424996062d8c3b89b35-52836680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81da881fd66938363c9707192f3b5f1e9f533e5d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/randament_client.tpl',
      1 => 1617091173,
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
    'lista_ani' => 0,
    'ani' => 0,
    'an' => 0,
    'lista_perioade' => 0,
    'perioada' => 0,
    'perioada_id' => 0,
    'traseu_id' => 0,
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
                    <h1><i class="icon20 i-menu-6"></i> Randament clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/randament_clienti.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="an" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['ani'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ani']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_ani']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ani']->key => $_smarty_tpl->tpl_vars['ani']->value) {
$_smarty_tpl->tpl_vars['ani']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['ani']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['ani']->value['id']==$_smarty_tpl->tpl_vars['an']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            <option value="0">Toate</option>
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
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                            <input type="hidden" name="id_perioada" value="<?php echo $_smarty_tpl->tpl_vars['perioada_id']->value;?>
">
                            <input type="hidden" name="id_an" value="<?php echo $_smarty_tpl->tpl_vars['an']->value;?>
">
                            <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">

                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: left;">TELEFON</th>
                                        <th style="text-align: left;">RANDAMENT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>

                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza clienti"
                                       class="btn btn-info" name="update">
                            </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/randament_clienti.js"></script>
<?php }} ?>
