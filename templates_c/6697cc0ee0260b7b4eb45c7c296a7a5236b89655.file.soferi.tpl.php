<?php /* Smarty version Smarty-3.1.15, created on 2021-02-27 20:50:38
         compiled from "/var/www/html/fofoweb/www/templates/soferi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249902463603a947e560a38-15291305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6697cc0ee0260b7b4eb45c7c296a7a5236b89655' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/soferi.tpl',
      1 => 1604918970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249902463603a947e560a38-15291305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'asignare' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_603a947e5d1736_27390500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603a947e5d1736_27390500')) {function content_603a947e5d1736_27390500($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
