<?php /* Smarty version Smarty-3.1.15, created on 2020-11-09 12:58:59
         compiled from "/home/dinobaby/public_html/crm/www/templates/soferi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12377866805ef99cf8940f66-84445477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53214263fa7edc5edfd7133a39dea0ae6e932e7' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/soferi.tpl',
      1 => 1604918971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12377866805ef99cf8940f66-84445477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ef99cf8a519a3_36649435',
  'variables' => 
  array (
    'title' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'asignare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef99cf8a519a3_36649435')) {function content_5ef99cf8a519a3_36649435($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Soferi</h1>
                    <a href="adauga_sofer.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            &#351;ofer
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; &#351;oferi</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Nume</th>
                                    <th style="text-align: left;">Asignari masini</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                    <tr>
                                        <td><a href="../edit_sofer.php?id=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>
</a></td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['sofer']->value['asignari_trasee']) {?>
                                            <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sofer']->value['asignari_trasee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['asignare']->value['nume_masina'];?>
 => [<?php echo $_smarty_tpl->tpl_vars['asignare']->value['nume_traseu'];?>
]<?php echo '<br/>';?>

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
<script src="js/pagini/edit_sofer.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
