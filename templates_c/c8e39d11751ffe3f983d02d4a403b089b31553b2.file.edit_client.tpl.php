<?php /* Smarty version Smarty-3.1.15, created on 2021-07-12 14:57:59
         compiled from "/var/www/html/fofoweb/www/templates/edit_client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154063290360dc3d52ee1ce3-97733385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e39d11751ffe3f983d02d4a403b089b31553b2' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_client.tpl',
      1 => 1625825727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154063290360dc3d52ee1ce3-97733385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60dc3d53087de7_19336057',
  'variables' => 
  array (
    'title' => 0,
    'client' => 0,
    'target_by_client_id' => 0,
    'target' => 0,
    'adaugat' => 0,
    'lista_judete' => 0,
    'judet' => 0,
    'lista_localitati' => 0,
    'localitate' => 0,
    'lista_stari' => 0,
    'stare' => 0,
    'lista_tip_rastel' => 0,
    'tip_rastel' => 0,
    'rastel_by_client_id' => 0,
    'culori_butelii' => 0,
    'culoare' => 0,
    'lista_tip_afis' => 0,
    'afis' => 0,
    'observatii_by_client_id' => 0,
    'observatie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dc3d53087de7_19336057')) {function content_60dc3d53087de7_19336057($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i> Edit client</h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista clienti
                    </button>
                    <button type="button" onclick="location.href='/observatii_apel_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
'"
                            name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Observatii apel client
                    </button>
                    <button type="button" onclick="location.href='/randament_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
'"
                            value="Randament" class="btn btn-small btn-info">
                        Randament
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <table class="table table-bordered" style="width: 400px;">
                                    <tr>
                                        <th colspan="4" style="color: red;"> Stoc client</th>
                                    </tr>
                                    <?php if (count($_smarty_tpl->tpl_vars['target_by_client_id']->value)>0) {?>
                                        <tr>
                                            <?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['target_by_client_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
                                                <th>
                                                    <a href="asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['target']->value['nume_produs'];?>

                                                        : <?php echo $_smarty_tpl->tpl_vars['target']->value['target'];?>
</a><br/></th>
                                            <?php } ?>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <th><a href="/asigneaza_produse_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">Asigneaza
                                                    produse la client</a></th>
                                        </tr>
                                    <?php }?>
                                </table>
                            </div>
                            <div>
                                <div style="float: left">
                                    <form class="form-horizontal" id="form_edit_client" action="/edit_client.php"
                                          method="post">
                                        <input type="hidden" name="adaugat" value="<?php echo $_smarty_tpl->tpl_vars['adaugat']->value;?>
" id="adaugat"/>
                                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"/>
                                        <table class="table table-bordered" style="width: 400px;">
                                            <tr style="text-align: left;">
                                                <th style="width: 150px;vertical-align: middle;text-align: left">Nume client</th>
                                                <th><input style="width: 100%" autocomplete="off" id="nume" type="text"
                                                           name="nume"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['nume'];?>
"></th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Zona</th>
                                                <th style="text-align: left;">
                                                    <select name="judet_id" id="judet_id" style="width: 100%">
                                                        <option value="0">Alege...</option>
                                                        <?php  $_smarty_tpl->tpl_vars['judet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['judet']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_judete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['judet']->key => $_smarty_tpl->tpl_vars['judet']->value) {
$_smarty_tpl->tpl_vars['judet']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['judet']->key;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['judet']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['judet']->value['id']==$_smarty_tpl->tpl_vars['client']->value['judet_id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['judet']->value['nume'];?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Localitate</th>
                                                <th style="text-align: left;">
                                                    <select name="localitate_id" id="localitate_id" style="width: 100%">
                                                        <option value="0">Alege...</option>
                                                        <?php  $_smarty_tpl->tpl_vars['localitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['localitate']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_localitati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['localitate']->key => $_smarty_tpl->tpl_vars['localitate']->value) {
$_smarty_tpl->tpl_vars['localitate']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['localitate']->key;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['localitate']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['localitate']->value['id']==$_smarty_tpl->tpl_vars['client']->value['localitate_id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['localitate']->value['nume'];?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Stare client</th>
                                                <th style="text-align: left;">
                                                    <select name="stare_id" id="stare_id" style="width: 100%">
                                                        <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_stari']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['stare']->key;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['client']->value['stare_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Adresa</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="adresa"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['adresa'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Telefon</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="telefon"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Telefon 2</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="telefon_2"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Cnp</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text" name="cnp"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['cnp'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">C.I</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text" name="ci"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['ci'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="contract"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['contract'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Titular</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="titular"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['titular'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Rastel</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="rastel"
                                                           type="text"
                                                           name="rastel_id"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['rastel'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Tip Rastel</th>
                                                <th style="text-align: left;">
                                                    <select name="tip_rastel">
                                                        <?php $_smarty_tpl->tpl_vars['rastel_by_client_id'] = new Smarty_variable(Clienti::getTipRastelByClientId($_smarty_tpl->tpl_vars['client']->value['id']), null, 0);?>
                                                        <option value="0">Alege...</option>
                                                        <?php  $_smarty_tpl->tpl_vars['tip_rastel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tip_rastel']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lista_tip_rastel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tip_rastel']->key => $_smarty_tpl->tpl_vars['tip_rastel']->value) {
$_smarty_tpl->tpl_vars['tip_rastel']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['tip_rastel']->key;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['tip_rastel']->value['id'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['tip_rastel']->value['id']==$_smarty_tpl->tpl_vars['rastel_by_client_id']->value['tip_rastel_id']) {?> selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['tip_rastel']->value['tip'];?>

                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Culoare</th>
                                                <th style="text-align: left;">
                                                    <select name="culoare_id">
                                                        <option value="0">Selecteaza culoare</option>
                                                        <?php  $_smarty_tpl->tpl_vars['culoare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['culoare']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['culori_butelii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['culoare']->key => $_smarty_tpl->tpl_vars['culoare']->value) {
$_smarty_tpl->tpl_vars['culoare']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['culoare']->key;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['culoare']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['culoare']->value['id']==$_smarty_tpl->tpl_vars['client']->value['culoare_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['culoare']->value['nume'];?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Tip Afis</th>
                                                <th style="text-align: left;">
                                                    <select name="tip_afis">
                                                        <option value="0">Alege...</option>
                                                        <?php  $_smarty_tpl->tpl_vars['afis'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afis']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_tip_afis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afis']->key => $_smarty_tpl->tpl_vars['afis']->value) {
$_smarty_tpl->tpl_vars['afis']->_loop = true;
?>
                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['afis']->value['id'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['afis']->value['id']==$_smarty_tpl->tpl_vars['client']->value['tip_afis']) {?> selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['afis']->value['tip'];?>

                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Incheiere contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" type="date" name="data_start"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['data_start'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Desfiintare contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" type="date" name="data_stop"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['data_stop'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Latitudine</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="latitudine"
                                                           type="text"
                                                           name="latitudine"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['latitudine'];?>
">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Longitudine</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="longitudine"
                                                           type="text"
                                                           name="longitudine"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['client']->value['longitudine'];?>
">
                                                </th>
                                            </tr>
                                            
                                                
                                                
                                                
                                                                                    
                                                        
                                                    
                                            

                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Ignore</th>
                                                <th style="text-align: left;">
                                                   <input type="checkbox" name="exclus" value="1" <?php if ($_smarty_tpl->tpl_vars['client']->value['exclus']==1) {?> checked="checked" <?php }?>>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" style="text-align: right;">
                                                    <button type="submit" name="modifica" value="modifica"
                                                            class="btn btn-info">
                                                        Modifica
                                                    </button>

                                                    <button type="button" class="btn btn-danger"
                                                            onclick="clickOnStergeClient(<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
)">Sterge client
                                                    </button>
                                                </th>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div style="float: right">
                                    <table class="table table-bordered table-hover"
                                           id="dataTable" style="width: 800px">
                                        <thead>
                                        <tr>
                                            <th>Observatie</th>
                                            <th>User</th>
                                            <th>Data adaugarii</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['observatii_by_client_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                            <tr>
                                                <td>
                                                    <a href="edit_observatie_client.php?id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"
                                                       target="_blank"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>
</a>
                                                </td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume_user'];?>
</td>
                                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['observatie']->value['data_intrare'];?>
</td>
                                                <td style="text-align: center;">
                                                    <img title="Sterge target produs" src="../images/delete.png"
                                                         style="cursor: pointer"
                                                         onclick="clickOnStergeObservatieLaClient(<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
)">
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
        </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
<?php }} ?>
