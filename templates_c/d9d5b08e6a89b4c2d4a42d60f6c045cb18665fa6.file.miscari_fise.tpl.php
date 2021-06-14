<?php /* Smarty version Smarty-3.1.15, created on 2021-06-11 15:51:11
         compiled from "/var/www/html/fofoweb/www/templates/miscari_fise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72287392160c35a034ba0e8-74622492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d5b08e6a89b4c2d4a42d60f6c045cb18665fa6' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/miscari_fise.tpl',
      1 => 1623415869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72287392160c35a034ba0e8-74622492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c35a035154a7_76229582',
  'variables' => 
  array (
    'title' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'masina_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c35a035154a7_76229582')) {function content_60c35a035154a7_76229582($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Miscari masini</h1>
                    <a href="adauga_masina.php">
                        
                            
                        
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Detalii fise</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <tr>
                                    <th style="text-align: left" width="300px;">Depozit
                                        <select name="depozit_id">
                                            <option value="0">Alege depozit</option>
                                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value;?>
">
                                    </th>
                                    <th style="text-align: left" width="300px;">Traseu
                                        <select name="traseu_id">
                                            <option value="0">Alege traseu</option>
                                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['masina_id']->value;?>
">
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
