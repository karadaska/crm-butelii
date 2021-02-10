<?php /* Smarty version Smarty-3.1.15, created on 2021-02-09 14:10:12
         compiled from "/var/www/html/fofoweb/www/templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212554264960227ba4d22966-75465796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45194f7b1b95d1feb73c09fd5011560d9add10d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/top.tpl',
      1 => 1589274006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212554264960227ba4d22966-75465796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'curent_user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60227ba4d25f66_56676436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60227ba4d25f66_56676436')) {function content_60227ba4d25f66_56676436($_smarty_tpl) {?><header id="header" class="navbar navbar-inverse navbar-fixed-top z_index_1000">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="/dashboard.php"><img src="images/logo.png" alt="crm admin"></a>

            <div class="nav-no-collapse">
                <div id="top-search">
                    <form action="/search.php" method="post" class="form-search" id="form_search_top"
                          novalidate="novalidate">
                        <div class="input-append">
                            <input type="text" name="tsearch" id="tsearch" placeholder="Cautare ..." required=""
                                   class="search-query" title="Introduceti un text!">
                            <button type="submit" class="btn" id="buton_search"><i
                                        class="icon16 i-search-2 gap-right0"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="nav pull-right">
                    <li class="dropdown">
                    <li><a href="edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['curent_user_id']->value;?>
" class=""><i class="icon16 i-user"></i> Profil</a>
                    </li>
                    <li><a href="logout.php" class=""><i class="icon16 i-exit"></i> Iesire aplicatie</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
        </div>
    </div>
</header><?php }} ?>
