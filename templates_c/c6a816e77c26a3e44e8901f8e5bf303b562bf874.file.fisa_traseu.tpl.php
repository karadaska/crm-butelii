<?php /* Smarty version Smarty-3.1.15, created on 2021-06-09 22:59:17
         compiled from "/var/www/html/fofoweb/www/templates/fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204446479560c11d9545def7-13448810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a816e77c26a3e44e8901f8e5bf303b562bf874' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/fisa_traseu.tpl',
      1 => 1619178189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204446479560c11d9545def7-13448810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'lista_depozite' => 0,
    'depozit' => 0,
    'depozit_id' => 0,
    'lista_trasee' => 0,
    'traseu' => 0,
    'traseu_id' => 0,
    'lista_soferi' => 0,
    'sofer' => 0,
    'sofer_id' => 0,
    'lista_masini' => 0,
    'masina' => 0,
    'masina_id' => 0,
    'a' => 0,
    'an' => 0,
    'lunile_anului' => 0,
    'luna' => 0,
    'luna_id' => 0,
    'lista_fise' => 0,
    'fisa' => 0,
    'marfa_plecare' => 0,
    'cantitate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c11d95585627_82783879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c11d95585627_82783879')) {function content_60c11d95585627_82783879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>
                                    <form action="/fisa_traseu.php" method="post" id="form_fisa_traseu"
                                          name="form_fisa_traseu" style="margin-bottom: 0">
                                        <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                                        <select name="depozit_id" id="depozit_id" style="width: 150px;"
                                                data-schimba="1">
                                            <option value="0">-Alege depozit-</option>
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
                                        <select name="traseu_id" style="width: 180px;"
                                                data-schimba="2">
                                            <option value="0">-Alege traseu-</option>
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
                                        <select name="sofer_id" style="width: 150px;"
                                                data-schimba="3">
                                            <option value="0">-Alege sofer-</option>
                                            <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['sofer']->value['id']==$_smarty_tpl->tpl_vars['sofer_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <select name="masina_id" style="width: 150px;"
                                                data-schimba="4">
                                            <option value="0">-Alege masina-</option>
                                            <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['masina']->value['id']==$_smarty_tpl->tpl_vars['masina_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <select name="an" style="width: 180px;" data-schimba="4">
                                            <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? date("Y")+1 - (2020) : 2020-(date("Y"))+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 2020, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration == 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration == $_smarty_tpl->tpl_vars['a']->total;?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value==$_smarty_tpl->tpl_vars['an']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</option>
                                            <?php }} ?>
                                            <input type="hidden" name="numar_an" value="<?php echo $_smarty_tpl->tpl_vars['an']->value;?>
">
                                        </select>
                                        <select name="luna_id" style="width: 150px;" data-schimba="2">
                                            <option value="0">Toate</option>
                                            <?php  $_smarty_tpl->tpl_vars['luna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['luna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lunile_anului']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['luna']->key => $_smarty_tpl->tpl_vars['luna']->value) {
$_smarty_tpl->tpl_vars['luna']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['luna']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['luna']->value['id']==$_smarty_tpl->tpl_vars['luna_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['luna']->value['nume'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </form>
                                </h4>
                                <button type="submit" class="btn btn-primary"
                                        onclick="location.href='/adauga_fisa_traseu.php'">Adauga fisa
                                </button>
                                <?php if (count($_smarty_tpl->tpl_vars['lista_fise']->value)>0) {?>
                                    <form action="/completare_fisa_traseu.php" method="post"
                                          name="form_fisa_traseu" id="form_fisa_traseu" style="margin-bottom: 0">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="widget">
                                                    <div class="widget-content">
                                                        <table cellpadding="0" cellspacing="0" border="0"
                                                               class="table table-bordered table-hover" id="dataTable">
                                                            <thead>
                                                            <tr>
                                                                <th class="span1">ID</th>
                                                                <th>DEPOZIT</th>
                                                                <th>TRASEU</th>
                                                                <th>SOFER</th>
                                                                <th>MASINA</th>
                                                                <th>INCARCATURA PLECARE</th>
                                                                <th>TOTAL VANDUTE</th>
                                                                <th>KM</th>
                                                                <th>Data</th>
                                                                <th>Cant.</th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                            </thead>
                                                            <?php  $_smarty_tpl->tpl_vars['fisa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fisa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_fise']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fisa']->key => $_smarty_tpl->tpl_vars['fisa']->value) {
$_smarty_tpl->tpl_vars['fisa']->_loop = true;
?>
                                                                <input type="hidden" name="fisa_id"
                                                                       value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
">
                                                                <tr>
                                                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_depozit'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_traseu'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_sofer'];?>
</td>
                                                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['numar_masina'];?>
</td>
                                                                    <td style="text-align: left;">
                                                                        <?php if ((count($_smarty_tpl->tpl_vars['fisa']->value['incarcatura_masina_plecare'])>0)) {?>
                                                                            <table class="table table-bordered">
                                                                                <tr>
                                                                                    <th>Produs</th>
                                                                                    <th>Cantitate</th>
                                                                                </tr>
                                                                                <?php  $_smarty_tpl->tpl_vars['marfa_plecare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marfa_plecare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['incarcatura_masina_plecare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marfa_plecare']->key => $_smarty_tpl->tpl_vars['marfa_plecare']->value) {
$_smarty_tpl->tpl_vars['marfa_plecare']->_loop = true;
?>
                                                                                    <tr>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['marfa_plecare']->value['nume_produs'];?>
</td>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['marfa_plecare']->value['cantitate'];?>
</td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </table>
                                                                        <?php } else { ?>
                                                                            <div style="text-align: center;">-</div>
                                                                        <?php }?>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <?php if ((count($_smarty_tpl->tpl_vars['fisa']->value['total_cantitati'])>0)) {?>
                                                                            <table class="table table-bordered">
                                                                                <tr>
                                                                                    <th>Produs</th>
                                                                                    <th>Vandute</th>
                                                                                </tr>
                                                                                <?php  $_smarty_tpl->tpl_vars['cantitate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantitate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['total_cantitati']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantitate']->key => $_smarty_tpl->tpl_vars['cantitate']->value) {
$_smarty_tpl->tpl_vars['cantitate']->_loop = true;
?>
                                                                                    <tr>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['nume_produs'];?>
</td>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cantitate']->value['pline'];?>
</td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </table>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <?php echo $_smarty_tpl->tpl_vars['fisa']->value['km_fisa']['km_parcursi']!='' ? $_smarty_tpl->tpl_vars['fisa']->value['km_fisa']['km_parcursi'] : '0';?>

                                                                        km
                                                                    </td>
                                                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['data_intrare'];?>
</td>
                                                                    <td style="text-align: center;vertical-align: top;"
                                                                        class="span3">
                                                                        <a href="edit_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
"
                                                                           class="btn btn-mini btn-success">Edit
                                                                            fisa
                                                                        </a>
                                                                        <a href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
"
                                                                           class="btn btn-mini btn-inverse">Completeaza
                                                                            fisa
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/fisa_traseu.js"></script>


<?php }} ?>
