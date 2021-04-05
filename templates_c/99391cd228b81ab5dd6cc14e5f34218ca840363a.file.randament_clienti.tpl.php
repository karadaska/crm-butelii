<?php /* Smarty version Smarty-3.1.15, created on 2021-04-05 23:22:39
         compiled from "/var/www/html/fofoweb/www/templates/randament_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551758277605d8a60b93d06-29052548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99391cd228b81ab5dd6cc14e5f34218ca840363a' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/randament_clienti.tpl',
      1 => 1617654111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551758277605d8a60b93d06-29052548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_605d8a60ce0d49_80043526',
  'variables' => 
  array (
    'title' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'a' => 0,
    'an' => 0,
    'lista_perioade' => 0,
    'perioada' => 0,
    'perioada_id' => 0,
    'lista_clienti' => 0,
    'nr' => 0,
    'client' => 0,
    'conditie_update' => 0,
    'valoare_randament' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605d8a60ce0d49_80043526')) {function content_605d8a60ce0d49_80043526($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                        <select name="traseu_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                    </div>
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
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/randament_clienti.php"
                              method="post"
                              style="margin-bottom: 0">
                            <input type="hidden" name="id_perioada" value="<?php echo $_smarty_tpl->tpl_vars['perioada_id']->value;?>
">
                            <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                            <input type="hidden" name="id_an" value="<?php echo $_smarty_tpl->tpl_vars['an']->value;?>
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
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <tr>
                                            <th> <?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                            <th style="text-align: left;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</th>
                                            <th style="text-align: left;"> <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</th>
                                            <th style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
</th>
                                            <th>
                                                <?php if (($_smarty_tpl->tpl_vars['randament'.(('_').($_smarty_tpl->tpl_vars['client']->value['client_id']))]->value['randament_client']!='')) {?>
                                                    <?php $_smarty_tpl->tpl_vars['valoare_randament'] = new Smarty_variable($_smarty_tpl->tpl_vars['randament'.(('_').($_smarty_tpl->tpl_vars['client']->value['client_id']))]->value['randament_client'], null, 0);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->tpl_vars['valoare_randament'] = new Smarty_variable($_smarty_tpl->tpl_vars['randamentclientdinfisa'.(('_').($_smarty_tpl->tpl_vars['client']->value['client_id']))]->value['randament_client'], null, 0);?>
                                                <?php }?>
                                                <input style="text-align: right" <?php echo $_smarty_tpl->tpl_vars['conditie_update']->value;?>

                                                       value="<?php echo $_smarty_tpl->tpl_vars['valoare_randament']->value;?>
"
                                                       type="text" autocomplete="off"
                                                       name="randament_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['traseu_id'];?>
">
                                            </th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit"
                                        value="Actualizeaza clienti"
                                       class="btn btn-info" name="update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/randament_clienti.js"></script>
<?php }} ?>
