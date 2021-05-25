<?php /* Smarty version Smarty-3.1.15, created on 2021-05-25 15:32:13
         compiled from "/var/www/html/fofoweb/www/templates/infiintari_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115175099609e311f9dccb8-88234380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff51881adff6483104b785f80035150e38bc467' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/infiintari_clienti.tpl',
      1 => 1621945930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115175099609e311f9dccb8-88234380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_609e311fa322b8_56545192',
  'variables' => 
  array (
    'title' => 0,
    'clienti_neasignati' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'ani' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609e311fa322b8_56545192')) {function content_609e311fa322b8_56545192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <?php $_smarty_tpl->tpl_vars['clienti_neasignati'] = new Smarty_variable(Clienti::getClientiNeasignati(), null, 0);?>

                            <h4>Clienti Neasignati: <a target="_blank"
                                                       href="clienti_neasignati.php">
                                    <?php echo count($_smarty_tpl->tpl_vars['clienti_neasignati']->value);?>
</a>
                            </h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="5"><?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>
</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['ani'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ani']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_ani'.(('_').($_smarty_tpl->tpl_vars['depozit']->value['depozit_id']))]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ani']->key => $_smarty_tpl->tpl_vars['ani']->value) {
$_smarty_tpl->tpl_vars['ani']->_loop = true;
?>
                                                    <tr>
                                                        <td style="vertical-align: middle;width: 80px;text-align: center;font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
</td>
                                                        <td style="text-align: center;">Inca Activi: <a href="clienti_activi_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
&an=<?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
"><?php echo count($_smarty_tpl->tpl_vars['ani']->value['activi']);?>
</td>
                                                        <td style="text-align: center;">Infiintati: <a href="clienti_infiintati.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
&an=<?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
"><?php echo count($_smarty_tpl->tpl_vars['ani']->value['infiintati']);?>
</td>
                                                        <td style="text-align: center;">Desfiintati: <a href="clienti_desfiintati_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
&an=<?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
"><?php echo count($_smarty_tpl->tpl_vars['ani']->value['desfiintati']);?>
</td>
                                                        <td style="text-align: center;">Total: <?php echo $_smarty_tpl->tpl_vars['ani']->value['total_clienti_an'];?>
</td>
                                                    </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td style="text-align: center;" colspan="4">Fara data contract: <a href="clienti_activi_fara_data_contract.php?depozit_id=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['depozit_id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['ani']->value['fara_data_contract']);?>
</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    <?php } ?>
                                </tr>
                            </table>


                            
                                
                                    
                                        
                                            
                                                
                                                
                                                    
                                                
                                                
                                                
                                                
                                                    
                                                        
                                                        
                                                        
                                                        
                                                    

                                                
                                                
                                                    
                                                
                                                
                                            
                                        
                                    
                                
                            

                            <div>
                                *Clienti Activi: clienti care nu sunt stersi si au stare client: activ sau
                                necunoscut. <br/>
                                *Clienti Infiintati: clienti care nu sunt stersi si au stare client: activ, desfiintat,
                                necunoscut. <br/>
                                *Clienti Desfiintati: clienti care nu sunt stersi si au stare client: desfiintat.
                                <br/>
                                *Clienti Neasignati: clienti care nu sunt stersi si au stare client: activ,
                                desfiintat, decunoscut. <br/>
                                *Clienti Fara Data Contract: clienti care nu sunt stersi si au stare client: activ,
                                desfiintat,
                                necunoscut, iar data incheierii contractului este "0000-00-00" si data desfiintarii
                                contractului este "0000-00-00"<br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php }} ?>
