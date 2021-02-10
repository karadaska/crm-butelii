<?php /* Smarty version Smarty-3.1.15, created on 2020-07-10 14:55:44
         compiled from "/home/dinobaby/public_html/crm/www/templates/culori_butelii.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11887059165f05ac112ca012-16624671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059a352f2462403e448745e5a442e4a2c6e928d9' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/culori_butelii.tpl',
      1 => 1594382106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11887059165f05ac112ca012-16624671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f05ac11339855_69990006',
  'variables' => 
  array (
    'title' => 0,
    'culori_butelii' => 0,
    'culoare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f05ac11339855_69990006')) {function content_5f05ac11339855_69990006($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Culori butelii</h1>
                    <a href="adauga_culoare.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            culoare
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; culori</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th style="text-align: left;" class="span11">Culoare</th>
                                    <th style="text-align: left;" class="span11">Clienti asignati</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['culoare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['culoare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['culori_butelii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['culoare']->key => $_smarty_tpl->tpl_vars['culoare']->value) {
$_smarty_tpl->tpl_vars['culoare']->_loop = true;
?>
                                    <tr>
                                        <td class="center"><a href="../edit_culoare.php?id=<?php echo $_smarty_tpl->tpl_vars['culoare']->value['id'];?>
"><img
                                                        title="edit" src="../images/edit.png"></a>
                                        </td>
                                        <td class="span3"><?php echo $_smarty_tpl->tpl_vars['culoare']->value['nume'];?>
</td>
                                        <td>
                                            <?php echo count($_smarty_tpl->tpl_vars['culoare']->value['asignari_culori']);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
