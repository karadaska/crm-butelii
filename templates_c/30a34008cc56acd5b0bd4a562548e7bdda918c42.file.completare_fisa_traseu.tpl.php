<?php /* Smarty version Smarty-3.1.15, created on 2021-02-17 14:06:57
         compiled from "/var/www/html/fofoweb/www/templates/completare_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19409619136022e1a89e4906-33897539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a34008cc56acd5b0bd4a562548e7bdda918c42' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/completare_fisa_traseu.tpl',
      1 => 1613563616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19409619136022e1a89e4906-33897539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6022e1a8be9f99_05262437',
  'variables' => 
  array (
    'title' => 0,
    'fisa' => 0,
    'get_tip_alimentare' => 0,
    'alimentare_tip' => 0,
    'incarcatura' => 0,
    'total_vandute' => 0,
    'nr' => 0,
    'client' => 0,
    'traseu_client' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'client_observatie' => 0,
    'target_client' => 0,
    'realizat_produs' => 0,
    'title_pret' => 0,
    'valoare_cantitate' => 0,
    'valoare_defecte' => 0,
    'valoare_goale' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6022e1a8be9f99_05262437')) {function content_6022e1a8be9f99_05262437($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post">
                        <div class="span12">
                            <div style="float: left;">
                                <table class="table tab-content table-bordered" style="width: 800px;margin-bottom: 1px;">
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left;">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_depozit'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. casa</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               name="casa_marcat"
                                                               type="text" class="form-control" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['casa_marcat'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th  class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Nr. BG:</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_bg" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_bg'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                            
                                        </th>
                                    </tr>
                                    <tr>
                                        <th  class="table_miscari">
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_traseu'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th  class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;"> Nr. raport Z</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="raport_z" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['raport_z'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th  class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        BG:
                                                    </th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_bg"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_bg'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['numar'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        Z:
                                                    </th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_z" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_z'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. AR 8</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_ar_8" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_ar_8'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_sofer'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Total Km:</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="km" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['km'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare AR 8</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_ar_8" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_ar_8'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['data_intrare'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Tip plata</th>
                                                    <th style="text-align: left;">
                                                        <select name="tip_alimentare" style="width: 100%;">
                                                            <option value="0">Tip alimentare</option>
                                                            <?php  $_smarty_tpl->tpl_vars['alimentare_tip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimentare_tip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['get_tip_alimentare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimentare_tip']->key => $_smarty_tpl->tpl_vars['alimentare_tip']->value) {
$_smarty_tpl->tpl_vars['alimentare_tip']->_loop = true;
?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['alimentare_tip']->value['id'];?>

                                                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['tip_alimentare_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['alimentare_tip']->value['id']==$_tmp1) {?>selected="selected"<?php }?>>
                                                                    <?php echo $_smarty_tpl->tpl_vars['alimentare_tip']->value['tip'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. AR 9</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_ar_9" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_ar_9'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <label for="inputEmail4"
                                                           style="margin-bottom: 0;color: red">Produse</label>
                                                    <h5> <?php  $_smarty_tpl->tpl_vars['incarcatura'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incarcatura']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['incarcatura_masina_plecare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incarcatura']->key => $_smarty_tpl->tpl_vars['incarcatura']->value) {
$_smarty_tpl->tpl_vars['incarcatura']->_loop = true;
?>
                                                            <span style="color: red;"> <?php echo $_smarty_tpl->tpl_vars['incarcatura']->value['nume_produs'];?>

                                                                : <?php echo $_smarty_tpl->tpl_vars['incarcatura']->value['cantitate'];?>
 bucati</span>
                                                            <br/>
                                                        <?php } ?></h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        plata
                                                    </th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" autocomplete="off"
                                                               name="valoare_alimentare"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_alimentare'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare AR 9</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_ar_9" autocomplete="off"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_ar_9'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <textarea style="width: 100%" type="text" rows="2" name="nota_explicativa"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nota_explicativa'];?>
</textarea>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align: right;">
                                            <button style="margin-bottom: 11px;" type="submit"
                                                    name="adauga_miscari_fisa"
                                                    class="btn btn-mini btn-primary">
                                                Adauga detalii
                                            </button>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </form>
                    <?php if ((count($_smarty_tpl->tpl_vars['fisa']->value['clienti'])>0)) {?>
                        <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post"
                              style="margin-bottom: 0">
                            <input type="hidden" name="id_fisa_adauga_produse" value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: left;" class="span4">Clienti</th>
                                    <th style="text-align: left;" colspan="4">Localitate</th>
                                </tr>
                                </thead>
                                <?php $_smarty_tpl->tpl_vars['total_vandute'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['total_defecte'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['total_vandute'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_vandute']->value+$_smarty_tpl->tpl_vars['fisa']->value['cantitate'], null, 0);?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</td>
                                        <td>
                                            <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</a><br/>
                                            <?php  $_smarty_tpl->tpl_vars['traseu_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['traseu_client']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu_client']->key => $_smarty_tpl->tpl_vars['traseu_client']->value) {
$_smarty_tpl->tpl_vars['traseu_client']->_loop = true;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['traseu_client']->value['nume_traseu'];?>

                                                <br/>
                                            <?php } ?>
                                        </td>
                                        <td class="span3"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                        <td>
                                            <table class="table table-bordered">
                                                <tr class="info">
                                                    <td colspan="8"
                                                        style="text-align: center;font-weight: 900;color: red">
                                                        Observatie client:
                                                        <select name="obs_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
">
                                                            <option value="0">Alege obs.</option>
                                                            <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                                <?php $_smarty_tpl->tpl_vars['client_observatie'] = new Smarty_variable(Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($_smarty_tpl->tpl_vars['client']->value['client_id'],$_smarty_tpl->tpl_vars['fisa']->value['id']), null, 0);?>
                                                                <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==2) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                                            <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['client_observatie']->value['observatie_id']) {?>selected="selected"<?php }?>>
                                                                        <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                                                    </option>
                                                                <?php }?>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="span2"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Produs
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Stoc
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Pret + Comision
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Vandute
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Defecte
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Goale
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Comision
                                                    </th>
                                                    <th hidden>Pret contract</th>
                                                </tr>
                                                <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                    
                                                    <?php $_smarty_tpl->tpl_vars['realizat_produs'] = new Smarty_variable($_smarty_tpl->tpl_vars['client']->value['realizat'][$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id']], null, 0);?>
                                                    <tr>
                                                        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
</td>
                                                        <td style="text-align: center;vertical-align: middle;">
                                                            <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>

                                                        </td>
                                                        <?php if ($_smarty_tpl->tpl_vars['realizat_produs']->value['pret']==0) {?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_cantitate'] = new Smarty_variable($_smarty_tpl->tpl_vars['target_client']->value['pret'], null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_cantitate'] = new Smarty_variable($_smarty_tpl->tpl_vars['realizat_produs']->value['pret'], null, 0);?>
                                                        <?php }?>
                                                        <?php if (($_smarty_tpl->tpl_vars['target_client']->value['pret']!=$_smarty_tpl->tpl_vars['realizat_produs']->value['pret'])&&$_smarty_tpl->tpl_vars['realizat_produs']->value['pret']!='') {?>
                                                            <?php if (($_smarty_tpl->tpl_vars['target_client']->value['pret']<$_smarty_tpl->tpl_vars['realizat_produs']->value['pret'])) {?>
                                                                <?php $_smarty_tpl->tpl_vars['title_pret'] = new Smarty_variable('PRET MAI MARE DECAT CEL DIN CONTRACT', null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['title_pret'] = new Smarty_variable('PRET MAI MIC DECAT CEL DIN CONTRACT', null, 0);?>
                                                            <?php }?>
                                                            <td title="<?php echo $_smarty_tpl->tpl_vars['title_pret']->value;?>
">
                                                                <input style="text-align: right;width: 100px;border-color: red"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['valoare_cantitate']->value;?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="pret_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                        <?php } else { ?>
                                                            <td>
                                                                <input style="text-align: right;width: 100px;"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['valoare_cantitate']->value;?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="pret_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate']!='') {?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_cantitate'] = new Smarty_variable($_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate'], null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_cantitate'] = new Smarty_variable(0, null, 0);?>
                                                        <?php }?>
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;"
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['valoare_cantitate']->value;?>
"
                                                                   type="text" autocomplete="off"
                                                                   name="cantitate_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                        <?php if ($_smarty_tpl->tpl_vars['realizat_produs']->value['defecte']!='') {?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_defecte'] = new Smarty_variable($_smarty_tpl->tpl_vars['realizat_produs']->value['defecte'], null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['valoare_defecte'] = new Smarty_variable(0, null, 0);?>
                                                        <?php }?>
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;"
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['valoare_defecte']->value;?>
"
                                                                   type="text" autocomplete="off"
                                                                   name="defecte_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <?php if ($_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate']!='') {?>
                                                                <?php $_smarty_tpl->tpl_vars['valoare_goale'] = new Smarty_variable($_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate'], null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['valoare_goale'] = new Smarty_variable(0, null, 0);?>
                                                            <?php }?>
                                                            <input style="text-align: right;width: 100px;" readonly
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['valoare_goale']->value;?>
"
                                                                   type="text"
                                                                   autocomplete="off"
                                                                   name="goale_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;" readonly
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['comision'];?>
"
                                                                   type="text"
                                                                   autocomplete="off"
                                                                   name="comision_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                        <td hidden>
                                                            <input
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['target_client']->value['pret'];?>
"
                                                                    type="text" autocomplete="off"
                                                                    name="pretcontract_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                <tr>
                                                    <th style="text-align: right;" colspan="3">
                                                        Total:
                                                    </th>
                                                    <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_vandute'];?>
</th>
                                                    <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_defecte'];?>
</th>
                                                    <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_vandute'];?>
</th>
                                                    <th style="text-align: right;"></th>
                                                </tr>
                                                
                                                
                                                
                                                
                                            </table>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <button type="submit" name="adauga" value="adauga"
                                    class="btn btn-primary" style="float: right">
                                Adauga cantitate client
                            </button>
                        </form>
                    <?php }?>
                    <div style="display: inline-flex">
                        <div>
                            <table class="table table-bordered table-striped" style="width: 180px;">
                                <tr class="info">
                                    <td style="text-align: center;font-weight: 900;color: red;" colspan="2">BG
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_bg'];?>
</td>
                                </tr>
                                <tr class="info">
                                    <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                    <td style="text-align: left;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_bg'];?>
</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_comision_bg'];?>
</td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin-left: 10px;">
                            <table class="table table-bordered table-striped" style="width: 180px;">
                                <tr class="info">
                                    <td style="text-align: center;font-weight: 900;color: red;" colspan="2">AR
                                        8
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_ar_8'];?>
</td>
                                </tr>
                                <tr class="info">
                                    <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_ar_8'];?>
</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_comision_ar_8'];?>
</td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin-left: 10px;">
                            <table class="table table-bordered table-striped" style="width: 180px;">
                                <tr class="info">
                                    <td style="text-align: center;font-weight: 900;;color: red;" colspan="2">AR
                                        9
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_ar_9'];?>
</td>
                                </tr>
                                <tr class="info">
                                    <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_ar_9'];?>
</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_comision_ar_9'];?>
</td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin-left: 10px;">
                            <table class="table table-bordered table-striped" style="width: 180px;">
                                <tr class="info">
                                    <td style="text-align: center;font-weight: 900;color: red;" colspan="2">
                                        TOTALURI
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">BG + AR</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_bg']+$_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_ar_8']+$_smarty_tpl->tpl_vars['fisa']->value['grand_total_vandute_ar_9'];?>
</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_bg']+$_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_ar_8']+$_smarty_tpl->tpl_vars['fisa']->value['grand_valoare_ar_9'];?>
</td>
                                </tr>
                                <tr class="info">
                                    <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                                    <td style="text-align: center;font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_comision_bg']+$_smarty_tpl->tpl_vars['fisa']->value['grand_comision_ar_8']+$_smarty_tpl->tpl_vars['fisa']->value['grand_comision_ar_9'];?>
</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="margin-top: 100px;"></div>

                </div>
            </div>
        </div>
    </section>
</div>
<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span>
<script src="js/pagini/completare_fisa_traseu.js"></script>
<script src="../css/custom.css"></script>










































































































































































































































































































































<?php }} ?>
