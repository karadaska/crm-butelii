<?php /* Smarty version Smarty-3.1.15, created on 2021-07-12 14:46:23
         compiled from "/var/www/html/fofoweb/www/templates/clienti_afis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42167216960ec2a909fd319-94677730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc87a31e9ac52f333deca94099b97e5e063f4a36' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/clienti_afis.tpl',
      1 => 1626090381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42167216960ec2a909fd319-94677730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60ec2a90aaf9d6_29149055',
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'stare_id' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ec2a90aaf9d6_29149055')) {function content_60ec2a90aaf9d6_29149055($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti_afis.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
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
                                    <th style="text-align: left;">NUME</th>
                                    <th style="text-align: center;">STARE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <tr>
                                        <td>
                                            <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume']);?>
</a>
                                        </td>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_stare'];?>
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
