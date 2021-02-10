<?php /* Smarty version Smarty-3.1.15, created on 2021-01-21 08:28:14
         compiled from "/home/dinobaby/public_html/crm/www/templates/trasee.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9820351385edde2cd8295b5-72811372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f60fac868f4f3ec7bb2ab48eb2ee39f4117e19' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/trasee.tpl',
      1 => 1611210494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9820351385edde2cd8295b5-72811372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5edde2cd87b919_86457700',
  'variables' => 
  array (
    'title' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edde2cd87b919_86457700')) {function content_5edde2cd87b919_86457700($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Trasee</h1>
                    <a href="adauga_traseu.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            traseu
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; trasee</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" class="span1">Id traseu</th>
                                    <th style="text-align: left;" class="span3">Traseu</th>
                                    <th style="text-align: left;">Clienti asignati</th>

                                </tr>
                                </thead>
                                <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
</td>
                                        <td><a href="edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
"
                                               title="Adauga client la traseu"
                                               style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</a></td>
                                        <td>
                                                <a  title="Adauga asignare" href="../edit_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['traseu']->value['asignari_clienti']);?>
</a>
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
<script src="js/pagini/edit_traseu.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
;
<?php }} ?>
