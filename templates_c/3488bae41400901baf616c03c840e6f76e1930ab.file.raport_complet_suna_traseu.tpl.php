<?php /* Smarty version Smarty-3.1.15, created on 2020-12-07 16:24:21
         compiled from "/home/dinobaby/public_html/crm/www/templates/raport_complet_suna_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1143459735fb2e895a91957-94050304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3488bae41400901baf616c03c840e6f76e1930ab' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/raport_complet_suna_traseu.tpl',
      1 => 1607348280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143459735fb2e895a91957-94050304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fb2e895b09f45_80013376',
  'variables' => 
  array (
    'title' => 0,
    'traseu_id' => 0,
    'stare_id' => 0,
    'observatie_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'urgent' => 0,
    'data_start' => 0,
    'data_stop' => 0,
    'lista_clienti' => 0,
    'client' => 0,
    'curent_produs' => 0,
    'target_client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb2e895b09f45_80013376')) {function content_5fb2e895b09f45_80013376($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport complet suna traseu
                        <a href="/print_raport_complet_suna_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                
                <form action="/raport_complet_suna_traseu.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left">
                                <select name="traseu_id">
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
                                <select name="stare_id" style="width: 120px;">
                                    <option value="-1">-Alege stare-</option>
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
                                <select name="observatie_id" style="width: 120px;">
                                    <option value="0">-Alege obs-</option>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['observatie']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==1) {?>
                                            <option value=<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['observatie_id']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                            </option>
                                        <?php }?>
                                    <?php } ?>
                                </select>
                                <select style="width: 80px;" name="urgent">
                                    <option value="-1">Alege..</option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['urgent']->value==0) {?> selected="selected" <?php }?>>NU</option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['urgent']->value==1) {?> selected="selected" <?php }?>>DA</option>
                                </select>
                                Interval <input autocomplete="off" type="date" name="data_start"
                                                value="<?php echo $_smarty_tpl->tpl_vars['data_start']->value;?>
">
                                <input autocomplete="off" type="date" name="data_stop"
                                       value="<?php echo $_smarty_tpl->tpl_vars['data_stop']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/raport_complet_suna_traseu.php?traseu_id=<?php echo $_smarty_tpl->tpl_vars['traseu_id']->value;?>
&stare_id=<?php echo $_smarty_tpl->tpl_vars['stare_id']->value;?>
&observatie_id=<?php echo $_smarty_tpl->tpl_vars['observatie_id']->value;?>
"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_clienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <?php if (($_smarty_tpl->tpl_vars['client']->value['istoric_suna_traseu'])) {?>
                                            <input type="hidden" name="valoare_client_id" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                                            <tr>
                                            <th style="text-align: left;vertical-align: middle;"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_localitate']);?>

                                            </th>
                                            <th style="text-align: left;vertical-align: middle;"><a target="_blank"
                                                                                                    href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['nume_client']);?>
</a>
                                            </th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon']>0) {?>
                                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon']);?>

                                                    <br/>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['client']->value['telefon_2']>0) {?>
                                                    <?php echo strtoupper($_smarty_tpl->tpl_vars['client']->value['telefon_2']);?>

                                                <?php }?>
                                            </th>
                                            <td>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr class="">
                                                    <th class="span3"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Produs
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Goale la client
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Data adaugare
                                                    </th>
                                                    <th style="text-align: center;font-weight: bolder;"
                                                        class="span1">
                                                        Obs
                                                    </th>
                                                    <th style="text-align: center;font-weight: bolder;"
                                                        class="span1">
                                                        Urgent
                                                    </th>
                                                </tr>
                                                </thead>
                                                <?php $_smarty_tpl->tpl_vars['total_goale'] = new Smarty_variable(0, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['curent_produs'] = new Smarty_variable(0, null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['istoric_suna_traseu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                    <?php if (($_smarty_tpl->tpl_vars['curent_produs']->value!=$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'])) {?>
                                                        <?php $_smarty_tpl->tpl_vars['curent_produs'] = new Smarty_variable($_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'], null, 0);?>
                                                        <tr class="success">
                                                            <td style="text-align: left;font-weight: 900;color: red;"
                                                                colspan="5"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
</td>
                                                        </tr>
                                                    <?php }?>
                                                    <tr>
                                                        <td>
                                                            Stoc curent:
                                                            <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>
 buc
                                                            <input type="hidden" name="tip_produs_id"
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php echo $_smarty_tpl->tpl_vars['target_client']->value['goale'];?>

                                                        </td>
                                                        <td style="text-align: center">
                                                            <?php echo $_smarty_tpl->tpl_vars['target_client']->value['data_start'];?>

                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_observatie'];?>

                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['urgent']==1)) {?>
                                                                DA
                                                            <?php } else { ?>
                                                                NU
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        <?php }?>
                                        </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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
