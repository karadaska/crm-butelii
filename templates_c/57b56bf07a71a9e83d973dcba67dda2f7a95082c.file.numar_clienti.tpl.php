<?php /* Smarty version Smarty-3.1.15, created on 2021-02-17 14:50:27
         compiled from "/var/www/html/fofoweb/www/templates/numar_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:495425026602d10d6174c08-69449296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b56bf07a71a9e83d973dcba67dda2f7a95082c' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/numar_clienti.tpl',
      1 => 1613566225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '495425026602d10d6174c08-69449296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_602d10d61e21e0_25755140',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'traseu_id' => 0,
    'depozit_id' => 0,
    'nr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602d10d61e21e0_25755140')) {function content_602d10d61e21e0_25755140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Numar clienti by pret</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/ordine_clienti.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['depozit']->value['id']==$_smarty_tpl->tpl_vars['depozit']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>

                                </option>
                            <?php } ?>
                            <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                        </select>
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
                        <form action="/numar_clienti.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit_id']->value;?>
" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                    <tr>
                                        <th> <?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/ordine_clienti.js"></script>
<?php }} ?>
