<?php /* Smarty version Smarty-3.1.15, created on 2020-06-23 11:46:52
         compiled from "/home/dinobaby/public_html/crm/www/templates/asignari_clienti_trasee.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20886856175ee71c73c85555-59022977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adcc216d1638f56303370e52c826827b6950ca29' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/asignari_clienti_trasee.tpl',
      1 => 1592902008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20886856175ee71c73c85555-59022977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ee71c73ca1645_35767193',
  'variables' => 
  array (
    'title' => 0,
    'traseu' => 0,
    'adaugat' => 0,
    'lista_clienti' => 0,
    'lista_asignari_clienti_trasee' => 0,
    'asignare' => 0,
    'client' => 0,
    'gasit' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee71c73ca1645_35767193')) {function content_5ee71c73ca1645_35767193($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asignari clienti la: <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/asignari_clienti_trasee.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
" method="post"
                      id="form_asignari_clienti_trasee"
                      name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat">
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
"/>

                    <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                           id="form_asignari_clienti_trasee"/>
                    <div style="float: left;margin-right: 10px;">
                        Selecteaza client:
                        <select name="client_id" id="client_id" style="width: 150px;" data-schimba="2">
                            <option value="0">-Toti-</option>
                            <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['asignare']->value['client_id']==$_smarty_tpl->tpl_vars['client']->value['id']) {?>
                                        <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                    <?php }?>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
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
                                    <td style="text-align: left;">Clienti</td>
                                    <td style="text-align: left;" class="span1">&nbsp;</td>
                                </tr>
                                </thead>
                                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_clienti_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['nume_client'];?>
</td>
                                        <td><img title="Sterge asignare" src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareClientTraseu(<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
)"></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="js/pagini/asignari_clienti_trasee.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
