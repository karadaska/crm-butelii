<?php /* Smarty version Smarty-3.1.15, created on 2020-09-29 13:49:14
         compiled from "/home/dinobaby/public_html/crm/www/templates/edit_localitate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12158713105f6cf26ea47456-05424334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ecb932a86b83e81b92f591d2c37624bcae68a8' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/edit_localitate.tpl',
      1 => 1601376553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12158713105f6cf26ea47456-05424334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5f6cf26ea62401_48924680',
  'variables' => 
  array (
    'title' => 0,
    'adaugat' => 0,
    'localitate_id' => 0,
    'zone' => 0,
    'zona' => 0,
    'get_zona_by_localitate_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6cf26ea62401_48924680')) {function content_5f6cf26ea62401_48924680($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit localitate</h1>
                    <button type="button" onclick="location.href='/localitati.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista localitati
                    </button>
                    <button type="button" onclick="location.href='/localitati.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-warning">
                        Inapoi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_masina" action="/edit_localitate.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['localitate_id']->value['id'];?>
"/>
                                    <table class="table table-bordered" style="width: 200px;">
                                        <tr>
                                            <th style="text-align: left;">
                                                <select name="zona_id">
                                                    <option>Alege zona</option>
                                                    <?php  $_smarty_tpl->tpl_vars['zona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zona']->key => $_smarty_tpl->tpl_vars['zona']->value) {
$_smarty_tpl->tpl_vars['zona']->_loop = true;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['zona']->value['id'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['get_zona_by_localitate_id']->value['judet_id']==$_smarty_tpl->tpl_vars['zona']->value['id']) {?> SELECTED="SELECTED"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['zona']->value['nume'];?>

                                                            </option>
                                                    <?php } ?>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">
                                                <input autocomplete="off" type="text" name="nume"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['localitate_id']->value['nume'];?>
">
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeLocalitate(<?php echo $_smarty_tpl->tpl_vars['localitate_id']->value['id'];?>
)">Sterge localitate
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/edit_localitate.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
