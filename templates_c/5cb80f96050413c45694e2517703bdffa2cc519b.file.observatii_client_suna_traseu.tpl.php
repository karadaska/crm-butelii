<?php /* Smarty version Smarty-3.1.15, created on 2020-12-03 14:10:48
         compiled from "/home/dinobaby/public_html/crm/www/templates/observatii_apel_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8271777975fc8c7b8650019-08859715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb80f96050413c45694e2517703bdffa2cc519b' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/observatii_apel_client.tpl',
      1 => 1606997447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8271777975fc8c7b8650019-08859715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fc8c7b866b259_23285515',
  'variables' => 
  array (
    'title' => 0,
    'observatie_by_client_id' => 0,
    'observatie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc8c7b866b259_23285515')) {function content_5fc8c7b866b259_23285515($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Istoric observatii suna traseu pentru: </h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista clienti
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div>
                                <table class="table table-bordered table-hover"
                                       id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Traseu</th>
                                        <th>Observatie</th>
                                        <th>Data adaugarii</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['observatie_by_client_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_client'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_traseu'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_observatie'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['observatie']->value['data_start'];?>
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
        </div>
    </section>
</div>

<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
<?php }} ?>
