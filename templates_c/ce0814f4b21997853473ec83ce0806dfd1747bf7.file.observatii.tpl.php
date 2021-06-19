<?php /* Smarty version Smarty-3.1.15, created on 2021-06-16 14:34:13
         compiled from "/var/www/html/fofoweb/www/templates/observatii.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204102592460c9e1b551df33-51990771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0814f4b21997853473ec83ce0806dfd1747bf7' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/observatii.tpl',
      1 => 1617085927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204102592460c9e1b551df33-51990771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'lista_tip_observatii' => 0,
    'observatie' => 0,
    'lista_observatii' => 0,
    'nr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c9e1b55d0b52_55548340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c9e1b55d0b52_55548340')) {function content_60c9e1b55d0b52_55548340($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Observatii</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Adauga observatii
                                    
                                        
                                    
                                </h4>

                            </div>
                            <form class="form-horizontal" action="/observatii.php"
                                  method="post">
                                <table class="table table-bordered" style="width: 700px;">
                                    <tr>
                                        <th style="text-align: left;">
                                            <select name="tip_observatie">
                                                <option value="0">Alege...</option>
                                                <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_tip_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['tip'];?>
</option>
                                                <?php } ?>
                                            </select>
                                        </th>
                                        <th><input style="width: 100%" type="text" name="observatie"/></th>
                                        <th>
                                            <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                                Adauga
                                            </button>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nume</th>
                                    <th>Tip Observatie</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                    <tr>
                                        <th class="span1" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                                        <td>
                                            <a href="edit_observatie.php?id=<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>
</a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['tip'];?>
</td>
                                        <td class="span1" style="text-align: center;"><img title="Sterge asignare"
                                                                                           src="../images/delete.png"
                                                                                           style="cursor: pointer"
                                                                                           onclick="clickOnStergeObservatieClient(<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
)">
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/observatii.js"></script>
<?php }} ?>
