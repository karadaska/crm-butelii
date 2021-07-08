<?php /* Smarty version Smarty-3.1.15, created on 2021-07-08 15:22:39
         compiled from "/var/www/html/fofoweb/www/templates/miscari_fise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72287392160c35a034ba0e8-74622492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d5b08e6a89b4c2d4a42d60f6c045cb18665fa6' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/miscari_fise.tpl',
      1 => 1625746953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72287392160c35a034ba0e8-74622492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c35a035154a7_76229582',
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
    'ani' => 0,
    'lista_perioade' => 0,
    'perioada' => 0,
    'perioada_id' => 0,
    'miscari_fise' => 0,
    'nr' => 0,
    'miscari' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c35a035154a7_76229582')) {function content_60c35a035154a7_76229582($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Miscari fise

                        
                            
                        
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/miscari_fise.php" method="post" id="form_miscari_fise"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id">
                            <option value="0">Alege depozit</option>
                            <?php  $_smarty_tpl->tpl_vars['depozit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depozit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_depozite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depozit']->key => $_smarty_tpl->tpl_vars['depozit']->value) {
$_smarty_tpl->tpl_vars['depozit']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['depozit']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['depozit']->value['id']==$_smarty_tpl->tpl_vars['depozit_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['depozit']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id">
                            <option value="0">Alege traseu</option>
                            <?php  $_smarty_tpl->tpl_vars['traseu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traseu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_trasee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traseu']->key => $_smarty_tpl->tpl_vars['traseu']->value) {
$_smarty_tpl->tpl_vars['traseu']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['traseu']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['traseu']->value['id']==$_smarty_tpl->tpl_vars['traseu_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['traseu']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="sofer_id">
                            <option value="0">Alege sofer</option>
                            <?php  $_smarty_tpl->tpl_vars['sofer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sofer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_soferi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sofer']->key => $_smarty_tpl->tpl_vars['sofer']->value) {
$_smarty_tpl->tpl_vars['sofer']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['sofer']->value['id']==$_smarty_tpl->tpl_vars['sofer_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="masina_id">
                            <option value="0">Alege masina</option>
                            <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['masina']->value['id']==$_smarty_tpl->tpl_vars['masina_id']->value) {?> selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['masina']->value['numar'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
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
                        <input type="hidden" name="id_an" value="<?php echo $_smarty_tpl->tpl_vars['ani']->value['an'];?>
">
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            <?php  $_smarty_tpl->tpl_vars['perioada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perioada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_perioade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perioada']->key => $_smarty_tpl->tpl_vars['perioada']->value) {
$_smarty_tpl->tpl_vars['perioada']->_loop = true;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['perioada']->value['id'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['perioada']->value['id']==$_smarty_tpl->tpl_vars['perioada_id']->value) {?> selected="selected" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['perioada']->value['nume'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
                <table cellpadding="0" cellspacing="0" border="0"
                       class="table table-striped table-bordered table-hover" id="dataTable"
                       style="margin-top: 50px;">
                    <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Fisa Id</th>
                        <th>Valoare Z</th>
                        <th>NR. casa</th>
                        <th>Nr. raport Z</th>
                    </tr>
                    </thead>
                    <?php $_smarty_tpl->tpl_vars['nr'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['miscari'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['miscari']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['miscari_fise']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['miscari']->key => $_smarty_tpl->tpl_vars['miscari']->value) {
$_smarty_tpl->tpl_vars['miscari']->_loop = true;
?>
                        <tr>
                            <th class="span1"> <?php echo $_smarty_tpl->tpl_vars['nr']->value++;?>
</th>
                            <td class="span2"><a
                                        href="completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['miscari']->value['fisa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['miscari']->value['fisa_id'];?>
</a>
                            </td>
                            <td class="span2"><?php echo $_smarty_tpl->tpl_vars['miscari']->value['valoare_z'];?>
</td>
                            <td class="span2"><?php echo $_smarty_tpl->tpl_vars['miscari']->value['casa_marcat'];?>
</td>
                            <td class="span2"><?php echo $_smarty_tpl->tpl_vars['miscari']->value['raport_z'];?>
</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
    </section>
</div>
<script src="/js/pagini/miscari_fise.js"></script>

<?php }} ?>
