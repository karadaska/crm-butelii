<?php /* Smarty version Smarty-3.1.15, created on 2021-03-04 10:01:42
         compiled from "/var/www/html/fofoweb/www/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9616245660227ba4d27c14-20917452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee1c05b74490fc06d5ebc093667ea556c0e26f1a' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/menu.tpl',
      1 => 1614844589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9616245660227ba4d27c14-20917452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60227ba4d76290_11464050',
  'variables' => 
  array (
    'menu_curent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60227ba4d76290_11464050')) {function content_60227ba4d76290_11464050($_smarty_tpl) {?><aside id="sidebar">
    <div class="side-options">
        <ul>
            <li><a href="#" id="collapse-nav" class="act act-primary tip" title="Collapse navigation"><i
                            class="icon16 i-arrow-left-7"></i></a></li>
        </ul>
    </div>

    <div class="sidebar-wrapper">
        <nav id="mainnav">
            <ul class="nav nav-list">
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==1) {?>class="current"<?php }?>>
                    <a href="/dashboard.php">
                        <span class="icon"><i class="icon20 i-screen"></i></span>
                        <span class="txt">Dashboard</span>
                    </a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==2) {?>class="current"<?php }?>>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-people"></i></span>
                        <span class="txt">Portofoliu</span>
                    </a>
                    <ul class="sub">
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==3) {?>class="current"<?php }?>>
                            <a href="/clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Clienti</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==4) {?>class="current"<?php }?>>
                            <a href="/depozite.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Depozite</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==7) {?>class="current"<?php }?>>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Stocuri</span>
                    </a>
                    <ul class="sub">
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/adauga_stoc.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Adauga stoc depozit</span>
                            </a>
                        </li>
                        

                        
                            
                                
                                
                            
                        
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/actualizeaza_stoc_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Actualizeaza stoc clienti</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==7) {?>class="current"<?php }?>>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Trasee</span>
                    </a>
                    <ul class="sub">
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==6) {?>class="current"<?php }?>>
                            <a href="/trasee.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Lista trasee</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/fisa_traseu.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Fisa traseu</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/apeluri_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Apeluri clienti</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/raport_complet_apeluri_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Raport apeluri clienti</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/raport_livrari_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Raport livrari clienti</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/raport_observatii_fisa_traseu.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Observatii fisa traseu</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==10) {?>class="current"<?php }?>>
                            <a href="/neconcordanta_preturi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Neconcordanta preturi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==7) {?>class="current"<?php }?>>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Parc auto</span>
                    </a>
                    <ul class="sub">
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==8) {?>class="current"<?php }?>>
                            <a href="/masini.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Masini</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==9) {?>class="current"<?php }?>>
                            <a href="/soferi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Soferi</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==9) {?>class="current"<?php }?>>
                            <a href="/raport_livrari_soferi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Raport livrari soferi</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==9) {?>class="current"<?php }?>>
                            <a href="/livrari_masini.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Raport livrari masini</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['menu_curent']->value==1) {?>class="current"<?php }?>>
                    <a href="/configurare.php">
                        <span class="icon"><i class="icon20 i-screen"></i></span>
                        <span class="txt">Config</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<?php }} ?>
