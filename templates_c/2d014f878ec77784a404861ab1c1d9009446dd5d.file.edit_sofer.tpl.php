<?php /* Smarty version Smarty-3.1.15, created on 2021-03-24 13:45:43
         compiled from "/var/www/html/fofoweb/www/templates/edit_sofer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1531118446605b26678e3697-05411757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d014f878ec77784a404861ab1c1d9009446dd5d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/edit_sofer.tpl',
      1 => 1604923620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531118446605b26678e3697-05411757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'sofer' => 0,
    'sofer_id' => 0,
    'lista_masini' => 0,
    'lista_asignari_soferi_masini' => 0,
    'asignare' => 0,
    'masina' => 0,
    'gasit' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_605b26679bf4d7_39451608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b26679bf4d7_39451608')) {function content_605b26679bf4d7_39451608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-user"></i> Edit sofer: <?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>
</h1>
                    <button type="button" onclick="location.href='/soferi.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista soferi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii sofer</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/edit_sofer.php?id=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
"
                                      method="post">
                                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['sofer_id']->value['id'];?>
"/>
                                    <table class="table table-bordered" style="width: 600px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Nume sofer:</th>
                                            <th style="text-align: left;"><input style="margin-top: 12px;"
                                                                                 autocomplete="off" id="nume"
                                                                                 type="text" name="nume"
                                                                                 value="<?php echo $_smarty_tpl->tpl_vars['sofer']->value['nume'];?>
">
                                            </th>
                                            <th style="text-align: center;vertical-align: middle;">
                                                <button type="submit" name="modifica" value="modifica"
                                                        class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeSofer(<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
)">Sterge sofer
                                                </button>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid span12">
            <form action="/edit_sofer.php?id=<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
"/>
                <input type="hidden" value="1"/>
                <table class="table table-bordered table-striped" style="width: 611px;">
                    <thead>
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza masina:</span>
                            <select name="masina_id" style="width: 200px;" data-schimba="2">
                                <option value="0">Alege...</option>
                                <?php  $_smarty_tpl->tpl_vars['masina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['masina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['masina']->key => $_smarty_tpl->tpl_vars['masina']->value) {
$_smarty_tpl->tpl_vars['masina']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['asignare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asignare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_soferi_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asignare']->key => $_smarty_tpl->tpl_vars['asignare']->value) {
$_smarty_tpl->tpl_vars['asignare']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['asignare']->value['masina_id']==$_smarty_tpl->tpl_vars['masina']->value['id']) {?>
                                            <?php $_smarty_tpl->tpl_vars['gasit'] = new Smarty_variable(1, null, 0);?>
                                        <?php }?>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['gasit']->value==0) {?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['masina']->value['id'];?>
><?php echo strtoupper($_smarty_tpl->tpl_vars['masina']->value['numar']);?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                            <button style="margin-bottom: 5px;" type="submit" name="adauga_asignare" value="adauga"
                                    class="btn btn-small btn-primary">
                                Adauga
                            </button>
                        </td>
                    </tr>
                    </thead>
                </table>
            </form>
            <?php if (count($_smarty_tpl->tpl_vars['lista_asignari_soferi_masini']->value)>0) {?>
            <table cellpadding="0" cellspacing="0" border="0"
                   class="table table-bordered table-hover" style="width: 611px;">
                <thead>
                <tr>
                    <th style="text-align: left;width: 220px;">
                        Numar
                    </th>
                    <th style="text-align: left;width: 220px;">
                        Model
                    </th>
                    <td>&nbsp</td>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_asignari_soferi_masini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->key => $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
?>
                    <tr>
                        <td style="text-align: left;width: 150px;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['numar'];?>
</td>
                        <td style="text-align: left;width: 150px;"><?php echo $_smarty_tpl->tpl_vars['lista']->value['model'];?>
</td>
                        <td style="text-align: center;" class="span1">
                            <img title="Sterge asignare"
                                 src="../images/delete.png"
                                 style="cursor: pointer"
                                 onclick="clickOnStergeAsignareMasinaSofer(<?php echo $_smarty_tpl->tpl_vars['sofer']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['lista']->value['masina_id'];?>
)">
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <?php }?>
        </div>
    </section>
</div>
<script src="js/pagini/edit_sofer.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
