<?php /* Smarty version Smarty-3.1.15, created on 2020-12-28 22:43:42
         compiled from "/home/dinobaby/public_html/crm/www/templates/asignari_trasee_depozite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14066749535ed8d38b975fa2-27745458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e31962ac825d828c740f90878aa7191eb86b910' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/asignari_trasee_depozite.tpl',
      1 => 1609188353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14066749535ed8d38b975fa2-27745458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ed8d38b9a90c8_78630732',
  'variables' => 
  array (
    'title' => 0,
    'depozit' => 0,
    'lista_trasee' => 0,
    'lista_asignari_trasee_la_depozite' => 0,
    'asignare' => 0,
    'traseu' => 0,
    'gasit' => 0,
    'nr' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed8d38b9a90c8_78630732')) {function content_5ed8d38b9a90c8_78630732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asignari trasee la: <?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/asignari_trasee_depozite.php?id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
" method="post"
                      id="form_asignari_trasee_depozite"
                      name="form_clienti" style="margin-bottom: 0">
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
"/>

                    <input type="hidden" name="form_asignari_trasee_depozite" value="1"
                           id="form_asignari_trasee_depozite"/>
                    <div style="float: left;margin-right: 10px;">
                        Selecteaza traseu:
                        <select name="traseu_id" id="traseu_id" style="width: 150px;" data-schimba="2">
                            <option value="0">-Toate-</option>
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_trasee_la_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['asignare']->value['traseu_id']==$_smarty_tpl->tpl_vars['traseu']->value['id']) {?>
                                        <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                    <?php }?>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                                <?php }?>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                        Adauga
                    </button>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; asign&#259;ri</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="text-align: center;">#</td>
                                    <td style="text-align: left;">Traseu</td>
                                    <td style="text-align: left;" class="span1">&nbsp;</td>
                                </tr>
                                </thead>
                                <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_trasee_la_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                    <tr>
                                        <td style="text-align: center;" class="span1"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_traseu'];?>
</td>
                                        <td><img title="Sterge asignare" src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareTraseuLaDepozit(<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
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
<script src="js/pagini/asignari_trasee_depozite.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
