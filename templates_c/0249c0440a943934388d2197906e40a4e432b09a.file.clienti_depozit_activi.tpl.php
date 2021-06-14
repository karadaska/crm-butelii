<?php /* Smarty version Smarty-3.1.15, created on 2021-06-14 09:47:42
         compiled from "/var/www/html/fofoweb/www/templates/clienti_depozit_activi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183254387160c6f370b4bf74-11159478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0249c0440a943934388d2197906e40a4e432b09a' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/clienti_depozit_activi.tpl',
      1 => 1623653260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183254387160c6f370b4bf74-11159478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c6f370bc8f03_15447348',
  'variables' => 
  array (
    'title' => 0,
    'depozit_id' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'asignare_traseu' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c6f370bc8f03_15447348')) {function content_60c6f370bc8f03_15447348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clien&#355i</h1>

                        <a target="_blank" href="/print_clienti_activi_depozit.php?id=<?php echo $_smarty_tpl->tpl_vars['depozit_id']->value;?>
"
                           class="i-print"></a>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti_depozit_activi.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id" style="width: 150px;" data-schimba="1">
                            <option value="0">Alege depozit...</option>
                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['depozit']->value['id']==$_smarty_tpl->tpl_vars['depozit_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</option>
                            <?php } ?>
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
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">ZONA</th>
                                    <th style="text-align: left;">LOCALITATE</th>
                                    <th style="text-align: left;">NUME</th>
                                    <th style="text-align: center;">TRASEU</th>
                                    <th style="text-align: center;">TELEFON</th>
                                    <th style="text-align: center;">CNP</th>
                                    <th style="text-align: center;">SERIA</th>
                                    <th style="text-align: center;">STARE CLIENT</th>
                                    <th style="text-align: center;" class="span1">DATA START</th>
                                    <th style="text-align: center;" class="span1">DATA STOP</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_judet']);?>
</td>
                                        <td><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>
</td>
                                        <td>
                                            <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
</a>
                                        </td>
                                        <td>
                                            <?php  $_smarty_tpl->tpl_vars['asignare_traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare_traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['asignare_client_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare_traseu']->key => $_smarty_tpl->tpl_vars['asignare_traseu']->value) {
$_smarty_tpl->tpl_vars['asignare_traseu']->_loop = true;
?>
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['asignare_traseu']->value['nume'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['asignare_traseu']->value['nume'];?>

                                                    <br/>
                                                <?php } else { ?>
                                                    &ndash;
                                                <?php }?>
                                            <?php } ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<?php $_tmp2=ob_get_clean();?><?php if (strlen($_tmp2>2)) {?>
                                                Tel 1: <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/>
                                            <?php }?>
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>
<?php $_tmp3=ob_get_clean();?><?php if (strlen($_tmp3>2)) {?>
                                                Tel 2: <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>

                                            <?php }?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['cnp'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['ci'];?>
</td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['stare_client'];?>
</td>
                                        <td style="text-align: center;">
                                            <?php echo $_smarty_tpl->tpl_vars['client']->value['data_start'];?>

                                        </td>
                                        <td style="text-align: center;">
                                            <?php echo $_smarty_tpl->tpl_vars['client']->value['data_stop'];?>

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
<script src="js/pagini/edit_client.js"></script>
<script src="/js/pagini/clienti.js"></script>
<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span><?php }} ?>
