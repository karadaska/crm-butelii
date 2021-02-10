<?php /* Smarty version Smarty-3.1.15, created on 2020-11-30 23:00:33
         compiled from "/home/dinobaby/public_html/crm/www/templates/z_proba_suna_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18667555255fc4d41ceb12f6-84111802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff975b464c17d85e1d71676104d5eb0488bf58ab' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/z_proba_suna_traseu.tpl',
      1 => 1606770126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18667555255fc4d41ceb12f6-84111802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fc4d41cf30e78_79455871',
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
    'client_urgenta' => 0,
    'valoare_goale_input' => 0,
    'total_bg_11' => 0,
    'total_bg_9' => 0,
    'total_ar_8' => 0,
    'total_ar_9' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'client_observatie' => 0,
    'total_obs' => 0,
    'numar_obs' => 0,
    'total_urgente' => 0,
    'numar_urgente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc4d41cf30e78_79455871')) {function content_5fc4d41cf30e78_79455871($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

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
                    
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="id_traseu" value="<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
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
                        <form action="/suna_traseu.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">

                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;" colspan="2">Stoc client</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_ar_8'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_bg_ar_9'] = new Smarty_variable(0, null, 0);?>
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
                                            <th style="text-align: left;vertical-align: middle;">
                                                <a target="_blank"
                                                   href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</a>
                                            </th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                Tel 1: <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>
<br/>
                                                Tel 2: <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>
<br/>
                                            </th>
                                            <th style="vertical-align: middle;text-align: left;">
                                                <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
: <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                                    <br/>
                                                <?php } ?>
                                            </th>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr class="info">
                                                        <td class="span1"
                                                            style="text-align: right;font-weight: bolder;width: 100px;">
                                                            Goale la client
                                                        </td>
                                                    </tr>
                                                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                        <tr>
                                                            <td style="text-align: right;">
                                                                <?php $_smarty_tpl->tpl_vars['client_urgenta'] = new Smarty_variable(Clienti::getGoaleSunaTraseuByClientId($_smarty_tpl->tpl_vars['target_client']->value['client_id'],$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id']), null, 0);?>
                                                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['client_urgenta']->value['goale']!='') {?>
                                                                    <?php $_smarty_tpl->tpl_vars['valoare_goale_input'] = new Smarty_variable($_smarty_tpl->tpl_vars['client_urgenta']->value['goale'], null, 0);?>;
                                                                <?php } else { ?>
                                                                    <?php $_smarty_tpl->tpl_vars['valoare_goale_input'] = new Smarty_variable(0, null, 0);?>;
                                                                <?php }?>
                                                                <input style="text-align: right"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['valoare_goale_input']->value;?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="goale_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==1) {?>
                                                                <?php $_smarty_tpl->tpl_vars['total_bg_11'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_11']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                                                            <?php }?>
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==2) {?>
                                                                <?php $_smarty_tpl->tpl_vars['total_bg_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_bg_9']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                                                            <?php }?>
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==3) {?>
                                                                <?php $_smarty_tpl->tpl_vars['total_ar_8'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_8']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                                                            <?php }?>
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])==4) {?>
                                                                <?php $_smarty_tpl->tpl_vars['total_ar_9'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_ar_9']->value+($_smarty_tpl->tpl_vars['target_client']->value['goale_la_client']), null, 0);?>
                                                            <?php }?>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <th style="text-align: left;width: 100px;">
                                                            Obs:
                                                            <select style="float: left;width: 160px;"
                                                                    name="obs_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                                <option value="0">Alege obs.</option>
                                                                <?php $_smarty_tpl->tpl_vars['client_observatie'] = new Smarty_variable(Clienti::getObservatieSunaTraseuByClientId($_smarty_tpl->tpl_vars['target_client']->value['client_id']), null, 0);?>
                                                                <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==1) {?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                                                <?php if ($_smarty_tpl->tpl_vars['client_observatie']->value['observatie_id']==$_smarty_tpl->tpl_vars['observatie']->value['id']) {?>selected="selected"<?php }?>>
                                                                            <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                                                        </option>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </select>
                                                            <span style="color: red;">Urgent:</span>
                                                            <select style="width: 60px;"
                                                                    name="urgent_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">*}
                                                                <?php $_smarty_tpl->tpl_vars['client_urgenta'] = new Smarty_variable(Clienti::getUrgentaSunaTraseuByClientId($_smarty_tpl->tpl_vars['target_client']->value['client_id']), null, 0);?>
                                                                <option value="0"
                                                                        <?php if ($_smarty_tpl->tpl_vars['client_urgenta']->value['urgent']==0) {?>selected="selected"<?php }?>>
                                                                    NU
                                                                </option>
                                                                <option value="1"
                                                                        <?php if ($_smarty_tpl->tpl_vars['client_urgenta']->value['urgent']==1) {?>selected="selected"<?php }?>>
                                                                    DA
                                                                </option>
                                                            </select>
                                                        </th>
                                                    </tr>
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
                    <table class="table table-bordered" style="width: 1190px;">
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['total_bg_11']->value>0) {?>
                                <th style="text-align: left;color: red;">
                                    <span style="font-weight: bolder;margin-left: 20px;">TOTAL BG 11: <?php echo $_smarty_tpl->tpl_vars['total_bg_11']->value;?>
</span><br/>
                                </th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['total_bg_9']->value>0) {?>
                                <th style="text-align: left;color: red">
                                    <span style="font-weight: bolder;margin-left: 20px;">TOTAL BG 9: <?php echo $_smarty_tpl->tpl_vars['total_bg_9']->value;?>
</span>
                                </th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['total_ar_8']->value>0) {?>
                                <th style="text-align: left;color: red">
                                    <span style="font-weight: bolder;margin-left: 20px;">TOTAL AR 8: <?php echo $_smarty_tpl->tpl_vars['total_ar_8']->value;?>
</span>
                                </th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['total_ar_9']->value>0) {?>
                                <th style="text-align: left;color: red">
                                    <span style="font-weight: bolder;margin-left: 20px;">TOTAL AR 9: <?php echo $_smarty_tpl->tpl_vars['total_ar_9']->value;?>
</span>
                                </th>
                            <?php }?>
                            <th>
                                <?php  $_smarty_tpl->tpl_vars['numar_obs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numar_obs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total_obs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numar_obs']->key => $_smarty_tpl->tpl_vars['numar_obs']->value) {
$_smarty_tpl->tpl_vars['numar_obs']->_loop = true;
?>
                                    <span style="font-weight: bolder;margin-left: 20px;color: red">TOTAL Observatii : <?php echo $_smarty_tpl->tpl_vars['numar_obs']->value;?>
</span>
                                <?php } ?>
                            </th>
                            <th>
                                <?php  $_smarty_tpl->tpl_vars['numar_urgente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numar_urgente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total_urgente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numar_urgente']->key => $_smarty_tpl->tpl_vars['numar_urgente']->value) {
$_smarty_tpl->tpl_vars['numar_urgente']->_loop = true;
?>
                                    <span style="font-weight: bolder;margin-left: 20px;color: red">TOTAL Urgente : <?php echo $_smarty_tpl->tpl_vars['numar_urgente']->value;?>
</span>
                                <?php } ?>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/suna_traseu.js"></script>

<?php }} ?>
