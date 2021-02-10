<?php /* Smarty version Smarty-3.1.15, created on 2020-11-15 22:59:05
         compiled from "/home/dinobaby/public_html/crm/www/templates/raport_observatii.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19924935785fb196483c5123-14785331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a975aefce769a9b69451f02e9e647be5f4e8593f' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/raport_observatii.tpl',
      1 => 1605474005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19924935785fb196483c5123-14785331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb196483c5d31_77934420',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'stare_id' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'target_client' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb196483c5d31_77934420')) {function content_5fb196483c5d31_77934420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Actualizare produse goale la client
                        <a href="/print_suna_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/suna_traseu.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <option value="0">Alege traseu...</option>
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"
                                        <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
">
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;">
                            <option value="-1">-Toti-</option>
                            <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_stari']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare']->key;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>
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
                        <form action="/suna_traseu.php" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">

                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;" colspan="3">Telefon 2</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                                            </th>
                                            <th style="text-align: left;vertical-align: middle;"><a target="_blank"
                                                                                                    href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
</a>
                                            </th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                                            </th>
                                            <th style="text-align: left;vertical-align: middle;" class="span2">
                                                <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                                            </th>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr class="info">
                                                        <td class="span3"
                                                            style="text-align: center;font-weight: bolder;">
                                                            Produs
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: right;font-weight: bolder;width: 100px;">
                                                            Goale la client
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: right;font-weight: bolder;width: 100px;">
                                                            Observatii
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: right;font-weight: bolder;width: 100px;">
                                                            Urgent
                                                        </td>
                                                    </tr>
                                                    <?php $_smarty_tpl->tpl_vars['total_goale'] = new Smarty_variable(1, null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>

                                                                => <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                                                <input type="hidden" name="tip_produs_id"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['goale_la_client'];?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="goale_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                            <td style="text-align: left;">
                                                                <select name="obs_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                                    <option value="0">Alege obs.</option>
                                                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==1) {?>
                                                                            
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                                                            </option>
                                                                        <?php }?>
                                                                    <?php } ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                
                                                                <select name="urgent_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                                    <option value="0">NU</option>
                                                                    <option value="1">DA</option>
                                                                </select>
                                                            </td>
                                                            
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    
                                    
                                    
                                    </tfoot>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza produse"
                                       class="btn btn-info" name="update">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/actualizeaza_stoc_clienti.js"></script>

<?php }} ?>
