<?php /* Smarty version Smarty-3.1.15, created on 2021-01-27 15:39:00
         compiled from "/home/dinobaby/public_html/crm/www/templates/observatii_apel_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14845688055fdbd6ea93b797-16534580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2d41c9b968e9cf03b9c1c0c2d50a50f71d1117' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/observatii_apel_client.tpl',
      1 => 1611754735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14845688055fdbd6ea93b797-16534580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fdbd6ea9925c8_05214944',
  'variables' => 
  array (
    'title' => 0,
    'observatie_by_client_id' => 0,
    'observatie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdbd6ea9925c8_05214944')) {function content_5fdbd6ea9925c8_05214944($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Istoric observatii apeluri: </h1>
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
                                        <th>Observatie</th>
                                        <th>Urgent</th>
                                        <th>Produs</th>
                                        <th>Cantitate goale</th>
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
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_observatie']!='' ? $_smarty_tpl->tpl_vars['observatie']->value['nume_observatie'] : '-';?>
</td>
                                            <td style="text-align: center">
                                                <?php if ($_smarty_tpl->tpl_vars['observatie']->value['urgent']=='DA') {?>
                                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['urgent'];?>
</span>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['observatie']->value['urgent'];?>

                                                <?php }?>
                                            </td>
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_produs']!='' ? $_smarty_tpl->tpl_vars['observatie']->value['nume_produs'] : '-';?>
</td>
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['goale']!='' ? $_smarty_tpl->tpl_vars['observatie']->value['goale'] : '-';?>
</td>
                                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['data_start']!='' ? $_smarty_tpl->tpl_vars['observatie']->value['data_start'] : '-';?>
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
