<?php /* Smarty version Smarty-3.1.15, created on 2021-01-30 14:56:48
         compiled from "/home/dinobaby/public_html/crm/www/templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5646969635eb9303b475b43-06574875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f5f9b5806e812912a963ac9c4301d345108167' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/dashboard.tpl',
      1 => 1611996183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5646969635eb9303b475b43-06574875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5eb9303b571ab0_77611008',
  'variables' => 
  array (
    'title' => 0,
    'stoc_produse' => 0,
    'depozit' => 0,
    'depozit_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb9303b571ab0_77611008')) {function content_5eb9303b571ab0_77611008($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Stoc depozit:</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stoc_produse']->value['depozite']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="6"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</th>
                                                </tr>
                                                <tr>
                                                    <th>Nume produs</th>
                                                    <th>Pline</th>
                                                    <th>Goale</th>
                                                    <th>Defecte</th>
                                                    <th>Neconforme</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['depozit_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit_content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depozit']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit_content']->key => $_smarty_tpl->tpl_vars['depozit_content']->value) {
$_smarty_tpl->tpl_vars['depozit_content']->_loop = true;
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['depozit_content']->value['nume'];?>
</td>
                                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['depozit_content']->value['pline'];?>
</td>
                                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['depozit_content']->value['goale'];?>
</td>
                                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['depozit_content']->value['defecte'];?>
</td>
                                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['depozit_content']->value['neconforme'];?>
</td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                                <tr class="success">
                                                    <td style="text-align: right;font-weight: bolder">Total depozit:
                                                    </td>
                                                    <td style="text-align: right;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['totaluri']['pline'];?>
</td>
                                                    <td style="text-align: right;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['totaluri']['goale'];?>
</td>
                                                    <td style="text-align: right;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['totaluri']['defecte'];?>
</td>
                                                    <td style="text-align: right;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['totaluri']['neconforme'];?>
</td>
                                                </tr>
                                            </table>
                                        </td>
                                    <?php } ?>
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php }} ?>
