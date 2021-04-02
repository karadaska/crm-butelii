<?php /* Smarty version Smarty-3.1.15, created on 2021-04-02 11:03:57
         compiled from "/var/www/html/fofoweb/www/templates/clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2258838906024d92f57e424-09898508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf125a056747d97b14571d9c3951de0a101d95f' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/clienti.tpl',
      1 => 1617350633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2258838906024d92f57e424-09898508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6024d92f6064f3_61411080',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_id' => 0,
    'lista_zone' => 0,
    'zona' => 0,
    'zona_id' => 0,
    'lista_localitati' => 0,
    'localitate' => 0,
    'localitate_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'stare_id' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'asignare_traseu' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6024d92f6064f3_61411080')) {function content_6024d92f6064f3_61411080($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clien&#355i</h1>
                    <a href="adauga_client.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            client
                        </button>
                    </a>
                    <a href="adauga_depozit.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            depozit
                        </button>
                    </a>
                    <a href="import_clienti.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Import clienti
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
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
                    <div style="float: left;margin-right: 10px;">
                        <select name="zona_id" style="width: 150px;" data-schimba="2">
                            <option value="0">Alege zona...</option>
                            <?php  $_smarty_tpl->tpl_vars['zona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_zone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zona']->key => $_smarty_tpl->tpl_vars['zona']->value) {
$_smarty_tpl->tpl_vars['zona']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['zona']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['zona']->value['id']==$_smarty_tpl->tpl_vars['zona_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['zona']->value['nume']);?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;" id="lista_localitati">
                        <select name="localitate_id" id="localitate_id" style="width: 150px;" data-schimba="2">
                            <option value="0">Alege localitate...</option>
                            <?php  $_smarty_tpl->tpl_vars['localitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['localitate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_localitati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['localitate']->key => $_smarty_tpl->tpl_vars['localitate']->value) {
$_smarty_tpl->tpl_vars['localitate']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['localitate']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['localitate']->value['id']==$_smarty_tpl->tpl_vars['localitate_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['localitate']->value['nume']);?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 150px;" data-schimba="3">
                            <option value="0">Alege traseu...</option>
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;" data-schimba="4">
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
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">ZONS</th>
                                    <th style="text-align: left;">LOCALITATE</th>
                                    <th style="text-align: left;">NUME</th>
                                    <th style="text-align: center;">TRASEU</th>
                                    <th style="text-align: center;">STARE</th>
                                    <th style="text-align: center;">TELEFON</th>
                                    <th style="text-align: left;" class="span1">OBSERVATII</th>
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
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="istoric_client_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                               title="Istoric client produse adaugate la fisa traseu">
                                                <i class="i-truck"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                               title="Asigneaza produse la client">
                                                <i class="i-bubble-forward-2"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="adauga_observatie_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                               title="Adauga observatie la client">
                                                <i class="i-bubble-dots-4"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="observatii_apel_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                               title="Lista observatii apeluri">
                                                <i class="i-bell"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="randament_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"
                                               title="Randament client">
                                                <i class="i-balance"></i>
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
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_stare'];?>
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
                                        
                                        
                                            
                                                
                                                
                                            
                                        
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['client']->value['nume_observatie'];?>

                                            
                                                
                                            
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
