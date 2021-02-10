<?php /* Smarty version Smarty-3.1.15, created on 2020-12-17 10:06:04
         compiled from "/home/dinobaby/public_html/crm/www/templates/z_completare_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13314200595fdb054e640ed7-15802562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7024cd77d2506e881535cb05c51a15870ce96b' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/z_completare_fisa_traseu.tpl',
      1 => 1608192083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13314200595fdb054e640ed7-15802562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5fdb054e7a0f24_36713986',
  'variables' => 
  array (
    'title' => 0,
    'fisa' => 0,
    'total_masina_plecare' => 0,
    'incarcatura' => 0,
    'get_tip_alimentare' => 0,
    'alimentare_tip' => 0,
    'lista_produse' => 0,
    'plecare_marfa_by_fisa_id' => 0,
    'produs' => 0,
    'marfa' => 0,
    'gasit' => 0,
    'lista_stari_produse' => 0,
    'stare' => 0,
    'stare_produs' => 0,
    'intoarcere_marfa' => 0,
    'marfa_intoarcere' => 0,
    'goale' => 0,
    'total_goale_by_produs' => 0,
    'total_pline_intoarcere' => 0,
    'total_defecte_intoarcere' => 0,
    'total_goale_intoarcere' => 0,
    'total_fisa_plecare' => 0,
    'total_fisa_intoarcere' => 0,
    'span' => 0,
    'total_vandute' => 0,
    'client' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'realizat_produs' => 0,
    'target_client' => 0,
    'culoare_total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdb054e7a0f24_36713986')) {function content_5fdb054e7a0f24_36713986($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div style="float: left;">
                            <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post">
                                <table class="table tab-content table-bordered" style="width: 800px;">
                                    <tr>
                                        <th style="text-align: center;">Info fisa <?php echo $_smarty_tpl->tpl_vars['fisa']->value['data_intrare'];?>
</th>
                                        <th>Detalii incarcatura</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <ul>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Depozit: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_depozit'];?>
</span>
                                                </li>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Traseu: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_traseu'];?>
</span>
                                                </li>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Masina: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['numar'];?>
</span>
                                                </li>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Sofer: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_sofer'];?>
</span>
                                                </li>
                                                <li>
                                                    <?php $_smarty_tpl->tpl_vars['total_masina_plecare'] = new Smarty_variable(0, null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['incarcatura'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incarcatura']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['incarcatura_masina_plecare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incarcatura']->key => $_smarty_tpl->tpl_vars['incarcatura']->value) {
$_smarty_tpl->tpl_vars['incarcatura']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['total_masina_plecare'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_masina_plecare']->value+$_smarty_tpl->tpl_vars['incarcatura']->value['cantitate'], null, 0);?>
                                                    <?php } ?>
                                                    <span style="font-weight: 500;color: red;">Total incarcatura: <?php echo $_smarty_tpl->tpl_vars['total_masina_plecare']->value;?>

                                                        buc</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td style="text-align: left;">
                                            <ul>
                                                <li>
                                                      <span style="font-weight: 500;color: red;">Nr. casa marcat: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['casa_marcat'];?>

                                                          </span>
                                                </li>
                                                <li>
                                                      <span style="font-weight: 500;color: red;">Nr. raport Z: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['raport_z'];?>

                                                          </span>
                                                </li>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Valoare Z: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['valoare_z'];?>

                                                          </span>
                                                </li>
                                                <li>
                                                    <span style="font-weight: 500;color: red;">Tip alimentare: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['tip_alimentare'];?>

                                                        [<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['valoare_alimentare'];?>
]
                                                          </span>
                                                </li>
                                                <li>
                                                      <span style="font-weight: 500;color: red;">Total km: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['km'];?>

                                                          </span>
                                                </li>
                                            </ul>
                                        </td>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;vertical-align: middle;">Nr. casa
                                                        marcat:
                                                    </th>
                                                    <th><input type="text" autocomplete="off"
                                                               style="width: 80px; line-height: 16px;min-height: 16px !important;"
                                                               name="casa_marcat"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['casa_marcat'];?>
">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;vertical-align: middle;">Nr. raport Z:
                                                    </th>
                                                    <th><input type="text" autocomplete="off"
                                                               style="width: 80px; line-height: 16px;min-height: 16px !important;"
                                                               name="raport_z"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['raport_z'];?>
">
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th style="text-align: left;vertical-align: middle;">Valoare Z:</th>
                                                    <th><input autocomplete="off" class="index_input_sosire" type="text"
                                                               style="width: 80px; line-height: 16px;min-height: 16px !important;"
                                                               name="valoare_z"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['valoare_z'];?>
">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;">
                                                        <select name="tip_alimentare" style="width: 120px;">
                                                            <option value="0">Tip alimentare</option>
                                                            <?php  $_smarty_tpl->tpl_vars['alimentare_tip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimentare_tip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['get_tip_alimentare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimentare_tip']->key => $_smarty_tpl->tpl_vars['alimentare_tip']->value) {
$_smarty_tpl->tpl_vars['alimentare_tip']->_loop = true;
?>
                                                                <option value=<?php echo $_smarty_tpl->tpl_vars['alimentare_tip']->value['id'];?>

                                                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['tip_alimentare'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['alimentare_tip']->value['id']==$_tmp1) {?>selected="selected"<?php }?>>
                                                                    <?php echo $_smarty_tpl->tpl_vars['alimentare_tip']->value['tip'];?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                    </th>
                                                    <th style="vertical-align: middle;">
                                                        <input type="text" autocomplete="off"
                                                               style="width: 80px; line-height: 16px;min-height: 16px !important;"
                                                               name="valoare_alimentare"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['valoare_alimentare'];?>
">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;vertical-align: middle;">Total Km:</th>
                                                    <th><input type="text" autocomplete="off"
                                                               style="width: 80px; line-height: 16px;min-height: 16px !important;"
                                                               name="km"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa'][0]['km'];?>
">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="text-align: right">
                                                        <button style="margin-bottom: 11px;" type="submit"
                                                                name="adauga_miscari_fisa"
                                                                class="btn btn-mini btn-primary">
                                                            Adauga detalii
                                                        </button>
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                            </form>
                            <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post"
                                  style="margin-bottom: 0;">
                            </form>
                            <?php if (($_smarty_tpl->tpl_vars['fisa']->value['consum_sosire']==0)) {?>
                                <table class="table table-bordered"
                                       style="width: 800px;margin-top: 10px;">
                                    <tr>
                                        <td>
                                            <select name="tip_produs_id" style="width: 200px;">
                                                <option>Alege produs</option>
                                                <?php  $_smarty_tpl->tpl_vars['produs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produs']->key => $_smarty_tpl->tpl_vars['produs']->value) {
$_smarty_tpl->tpl_vars['produs']->_loop = true;
?>
                                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['marfa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plecare_marfa_by_fisa_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa']->key => $_smarty_tpl->tpl_vars['marfa']->value) {
$_smarty_tpl->tpl_vars['marfa']->_loop = true;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['produs']->value['id']==$_smarty_tpl->tpl_vars['marfa']->value['tip_produs_id']) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['produs']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['produs']->value['tip'];?>
</option>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                            <select name="stare_produs" style="width: 200px;">
                                                <option>Alege stare</option>
                                                <?php  $_smarty_tpl->tpl_vars['stare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_stari_produse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stare']->key => $_smarty_tpl->tpl_vars['stare']->value) {
$_smarty_tpl->tpl_vars['stare']->_loop = true;
?>
                                                    <?php if (($_smarty_tpl->tpl_vars['stare']->value['id']!=2&&$_smarty_tpl->tpl_vars['stare']->value['id']!=4)) {?>
                                                        <option value=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['stare']->value['id']==$_smarty_tpl->tpl_vars['stare_produs']->value['id']) {?> selected=<?php echo $_smarty_tpl->tpl_vars['stare']->value['id'];?>
<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['stare']->value['nume'];?>

                                                        </option>
                                                    <?php }?>
                                                <?php } ?>
                                            </select>
                                            <input autocomplete="off" placeholder="adauga cantitate"
                                                   style="margin-top: 10px;" type="text" name="cantitate">
                                            <button title="Adaugarea se poate face doar in ziua cureanta!!!"
                                                    style="margin-top: 2px;" type="submit"
                                                    name="adauga_cantitate_intoarcere_traseu"
                                                    class="btn btn-primary">
                                                Adauga cantitate
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            <?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['intoarcere_marfa']->value)>0) {?>
                                <table class="table table-bordered"
                                       style="width: 800px;margin-right: 100px;margin-top: 10px;">
                                    <tr>
                                        <th class="span2">Produs</th>
                                        <th>Pline</th>
                                        <th>Def.</th>
                                        <th>Goale</th>
                                    </tr>
                                    <?php $_smarty_tpl->tpl_vars['total_pline_intoarcere'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_defecte_intoarcere'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_goale_intoarcere'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['diferenta_goale'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_fisa_intoarcere'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['marfa_intoarcere'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa_intoarcere']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['intoarcere_marfa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa_intoarcere']->key => $_smarty_tpl->tpl_vars['marfa_intoarcere']->value) {
$_smarty_tpl->tpl_vars['marfa_intoarcere']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['nume_produs'];?>
</td>
                                            <td style="text-align: right;">
                                                <?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_intoarcere'];?>

                                            </td>
                                            <td style="text-align: right;">
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2<0) {?>
                                                    <?php $_smarty_tpl->tpl_vars['diferenta_negativa'] = new Smarty_variable("red", null, 0);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere']>0) {?>
                                                    <?php $_smarty_tpl->tpl_vars['goale'] = new Smarty_variable($_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere'], null, 0);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->tpl_vars['goale'] = new Smarty_variable(0, null, 0);?>
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['goale']->value;?>

                                            </td>
                                            <td style="text-align: right;">
                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_plecare']-($_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_intoarcere']+$_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere']);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_goale_by_produs'] = new Smarty_variable($_tmp3, null, 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['total_goale_by_produs']->value<0) {?>
                                                    <?php $_smarty_tpl->tpl_vars['cant'] = new Smarty_variable("red", null, 0);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->tpl_vars['cant'] = new Smarty_variable('', null, 0);?>
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_plecare']-($_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_intoarcere']+$_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere']);?>

                                            </td>
                                        </tr>
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_intoarcere'];?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_pline_intoarcere'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_pline_intoarcere']->value+$_tmp4, null, 0);?>
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere'];?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_defecte_intoarcere'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_defecte_intoarcere']->value+$_tmp5, null, 0);?>
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['total_goale_intoarcere']->value;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_plecare']-($_smarty_tpl->tpl_vars['marfa_intoarcere']->value['pline_intoarcere']+$_smarty_tpl->tpl_vars['marfa_intoarcere']->value['defecte_intoarcere']);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_goale_intoarcere'] = new Smarty_variable($_tmp6+$_tmp7, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['total_fisa_intoarcere'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_pline_intoarcere']->value+$_smarty_tpl->tpl_vars['total_defecte_intoarcere']->value+$_smarty_tpl->tpl_vars['total_goale_intoarcere']->value, null, 0);?>
                                    <?php } ?>
                                    <tfoot>
                                    <tr>
                                        <td style="text-align: left;">
                                            <?php $_smarty_tpl->tpl_vars['total_fisa_plecare'] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['marfa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plecare_marfa_by_fisa_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa']->key => $_smarty_tpl->tpl_vars['marfa']->value) {
$_smarty_tpl->tpl_vars['marfa']->_loop = true;
?>
                                                <?php $_smarty_tpl->tpl_vars['total_fisa_plecare'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_fisa_plecare']->value+$_smarty_tpl->tpl_vars['marfa']->value['cantitate'], null, 0);?>
                                            <?php } ?>
                                            <?php if ($_smarty_tpl->tpl_vars['total_fisa_intoarcere']->value==$_smarty_tpl->tpl_vars['total_fisa_plecare']->value) {?>
                                                <?php $_smarty_tpl->tpl_vars['span'] = new Smarty_variable("green", null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['span'] = new Smarty_variable("red", null, 0);?>
                                            <?php }?>
                                            <span style="color: <?php echo $_smarty_tpl->tpl_vars['span']->value;?>
">Total: <?php echo $_smarty_tpl->tpl_vars['total_fisa_intoarcere']->value;?>
</span>
                                        </td>
                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['total_pline_intoarcere']->value;?>
</td>
                                        <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['total_defecte_intoarcere']->value;?>
</td>
                                        <td style="text-align: right;">
                                            <?php if ($_smarty_tpl->tpl_vars['total_goale_intoarcere']->value<0) {?>
                                                <?php $_smarty_tpl->tpl_vars['span'] = new Smarty_variable("red", null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['span'] = new Smarty_variable('', null, 0);?>
                                            <?php }?>
                                            <span style="color: <?php echo $_smarty_tpl->tpl_vars['span']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['total_goale_intoarcere']->value;?>
</span>
                                        </td>
                                    </tr>
                                    <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post"
                                          style="margin-bottom: 0;">
                                        <?php if (($_smarty_tpl->tpl_vars['fisa']->value['consum_sosire']==0)) {?>
                                            <tr>
                                                <td colspan="4">
                                                    <button type="submit" class="btn btn-success" name="consuma_stoc"
                                                            style="float: right;">Consuma
                                                        stoc
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </form>
                                    </tfoot>
                                </table>
                            <?php }?>
                        </div>
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
                                        <th style="text-align: left;" class="span4">Clienti</th>
                                        <th style="text-align: left;" colspan="3">Localitate</th>
                                    </tr>
                                    </thead>
                                    <?php $_smarty_tpl->tpl_vars['total_vandute'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['total_defecte'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['clienti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <?php $_smarty_tpl->tpl_vars['total_vandute'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_vandute']->value+$_smarty_tpl->tpl_vars['fisa']->value['cantitate'], null, 0);?>
                                        <tr>
                                            <td>
                                                <a href="edit_client.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</a>
                                            </td>
                                            <td class="span3"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr class="info">
                                                        <td colspan="7" style="text-align: center;font-weight: 900;color: red">Observatie client:  <select name="observatie_id">
                                                                <option value="0">Alege obs.</option>
                                                                <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==2) {?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                                                <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['realizat_produs']->value['observatie_id']) {?> selected="selected"<?php }?>>
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
                                                        <th class="span2"
                                                            style="text-align: center;font-weight: bolder;">
                                                            Pret
                                                        </th>
                                                        <th class="span1"
                                                            style="text-align: center;font-weight: bolder;">
                                                            Comision
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
                                                    </tr>
                                                    <?php  $_smarty_tpl->tpl_vars['target_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client']->value['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_client']->key => $_smarty_tpl->tpl_vars['target_client']->value) {
$_smarty_tpl->tpl_vars['target_client']->_loop = true;
?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['realizat_produs'] = new Smarty_variable($_smarty_tpl->tpl_vars['client']->value['realizat'][$_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id']], null, 0);?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['target_client']->value['nume_produs'];?>
</td>
                                                            <td style="text-align: center;">
                                                                <?php echo $_smarty_tpl->tpl_vars['target_client']->value['target'];?>

                                                            </td>
                                                            <td style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['target_client']->value['pret'];?>

                                                                RON
                                                            </td>
                                                            <td style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['target_client']->value['comision'];?>

                                                                RON
                                                            </td>
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right;width: 100px;"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate'];?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="cantitate_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
}">
                                                            </td>
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right;width: 100px;"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['realizat_produs']->value['defecte'];?>
"
                                                                       type="text" autocomplete="off"
                                                                       name="defecte_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['client']->value['client_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
}">
                                                            </td>
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right;width: 100px;" readonly
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['realizat_produs']->value['cantitate'];?>
"
                                                                       type="text"
                                                                       autocomplete="off"
                                                                       name="goale_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['depozit_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id_client'];?>
_<?php echo $_smarty_tpl->tpl_vars['target_client']->value['tip_produs_id'];?>
">
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <th style="text-align: right;" colspan="4">Total:</th>
                                                        <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_vandute'];?>
</th>
                                                        <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_defecte'];?>
</th>
                                                        <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['client']->value['total_vandute'];?>
</th>
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
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8==$_smarty_tpl->tpl_vars['total_masina_plecare']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['culoare_total'] = new Smarty_variable("green", null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['culoare_total'] = new Smarty_variable("red", null, 0);?>

                            <?php }?>
                            <span style="font-weight: bolder;">Total traseu [<?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_traseu'];?>
]:</span>
                            <span style="color: <?php echo $_smarty_tpl->tpl_vars['culoare_total']->value;?>
;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['grand_total'];?>
 buc</span>
                            <br/>
                            <span style="font-weight: bold">Total vantute: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['total_vandute'];?>
</span>
                            <br/>
                            <span style="font-weight: bold">Total defecte: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['total_defecte'];?>
</span>
                            <br/>
                            <span style="font-weight: bold">Total goale: <?php echo $_smarty_tpl->tpl_vars['fisa']->value['total_vandute'];?>
</span>
                            <div style="margin-top: 100px;"></div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/data_table.js"></script>
<script src="js/pagini/completare_fisa_traseu.js"></script>
<script src="../css/custom.css"></script>

<?php }} ?>
