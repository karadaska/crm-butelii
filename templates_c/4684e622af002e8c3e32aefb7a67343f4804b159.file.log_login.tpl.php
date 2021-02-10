<?php /* Smarty version Smarty-3.1.15, created on 2020-05-11 10:05:14
         compiled from "/home/dinobaby/public_html/crm/www/templates/log_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2755450755eb8f679f0ccb2-50241095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4684e622af002e8c3e32aefb7a67343f4804b159' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/log_login.tpl',
      1 => 1589180709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2755450755eb8f679f0ccb2-50241095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5eb8f67a030f43_75479985',
  'variables' => 
  array (
    'title' => 0,
    'toti_agentii' => 0,
    'lista_utilizatori' => 0,
    'utilizator' => 0,
    'utilizator_id' => 0,
    'l' => 0,
    'luna' => 0,
    'a' => 0,
    'an' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb8f67a030f43_75479985')) {function content_5eb8f67a030f43_75479985($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">

        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Logins Utilizatori</h1>
                </div>

                <div class="row-fluid">
                    <div class="span12">

                        <form action="/log_login.php" method="get" id="form_raport" name="form_raport" style="margin-bottom: 0">
                            <?php if ($_smarty_tpl->tpl_vars['toti_agentii']->value) {?>
                                <select name="utilizator_id" id="utilizator_id" style="width: 180px;" data-schimba="1">
                                    <option value='0'>- agent -</option>
                                    <?php  $_smarty_tpl->tpl_vars['utilizator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['utilizator']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_utilizatori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['utilizator']->key => $_smarty_tpl->tpl_vars['utilizator']->value) {
$_smarty_tpl->tpl_vars['utilizator']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['utilizator']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['utilizator']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['utilizator_id']->value==$_smarty_tpl->tpl_vars['utilizator']->value['id']) {?> selected="selected" <?php }?>><?php echo strtoupper($_smarty_tpl->tpl_vars['utilizator']->value['nume']);?>
</option>
                                    <?php } ?>
                                </select>
                            <?php }?>
                            <select name="luna" id="luna" style="width: 70px;" data-schimba="3">
                                <option value='0'>- luna -</option>
                                <?php $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['l']->step = 1;$_smarty_tpl->tpl_vars['l']->total = (int) ceil(($_smarty_tpl->tpl_vars['l']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['l']->step));
if ($_smarty_tpl->tpl_vars['l']->total > 0) {
for ($_smarty_tpl->tpl_vars['l']->value = 1, $_smarty_tpl->tpl_vars['l']->iteration = 1;$_smarty_tpl->tpl_vars['l']->iteration <= $_smarty_tpl->tpl_vars['l']->total;$_smarty_tpl->tpl_vars['l']->value += $_smarty_tpl->tpl_vars['l']->step, $_smarty_tpl->tpl_vars['l']->iteration++) {
$_smarty_tpl->tpl_vars['l']->first = $_smarty_tpl->tpl_vars['l']->iteration == 1;$_smarty_tpl->tpl_vars['l']->last = $_smarty_tpl->tpl_vars['l']->iteration == $_smarty_tpl->tpl_vars['l']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value==$_smarty_tpl->tpl_vars['luna']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                <?php }} ?>
                            </select>
                            <select name="an" id="an" style="width: 70px;" data-schimba="4">
                                <option value='0'>- an -</option>
                                <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? date("Y")+1 - (2014) : 2014-(date("Y"))+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 2014, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration == 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration == $_smarty_tpl->tpl_vars['a']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value==$_smarty_tpl->tpl_vars['an']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</option>
                                <?php }} ?>
                            </select>
                        </form>

                        <div class="widget">

                            <div class="widget-content">
                                <div class="chart" style="width: 100%; height:250px;margin-top:10px;"></div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
