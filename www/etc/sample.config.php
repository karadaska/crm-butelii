<?php

$tstart = microtime(true);

define('ROOT_DIR', '/var/www/html/fofoweb/');
define('SMARTY_DIR', ROOT_DIR . 'Smarty-3.1.15/libs/');
define('WWW_DIR', ROOT_DIR . 'www/');
define("SITE_TITLE", "crm.butelie.ro");
define("SITE_URL", "http://fofoweb.antibiotice.ro");
define('AVATARE_UPLOAD_ROOT', WWW_DIR . "images/avatars/");


require SMARTY_DIR . '/Smarty.class.php';

$smarty = new Smarty;
$smarty->setTemplateDir(WWW_DIR . 'templates/');
$smarty->setCompileDir(ROOT_DIR . 'templates_c/');
$smarty->setConfigDir(ROOT_DIR . 'configs/');
$smarty->setCacheDir(ROOT_DIR . 'cache/');

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 60;


$allowed_filetypes = array('.gif', '.jpg', '.png', '.xls', '.pdf', '.doc', '.csv');
$smarty->assign('title', 'CRM');

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'dinobaby_crm');
define('MYSQL_PASSWORD', 'Crmvlad20!');
define('MYSQL_DB', 'dinobaby_crm');

require_once WWW_DIR . '/include/functions.php';

$db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);

require_once WWW_DIR . '/include/class.session.php';
require_once WWW_DIR . '/include/class.utilizatori.php';
require_once WWW_DIR . '/include/class.clienti.php';
require_once WWW_DIR . '/include/class.parcauto.php';
require_once WWW_DIR . '/include/class.stocuri.php';
require_once WWW_DIR . '/include/class.target.php';
require_once WWW_DIR . '/include/class.trasee.php';
require_once WWW_DIR . '/include/class.asignari.php';
require_once WWW_DIR . '/include/class.depozite.php';
require_once WWW_DIR . '/include/class.zone.php';
require_once WWW_DIR . '/include/class.produse.php';
require_once WWW_DIR . '/include/class.test.php';


$session = new Session();

if ($session->is_logged_in()) {
    $smarty->assign('curent_user_id', $_SESSION["user"]->id);
}

//$smarty->assign('title', 'Crm');


$scriptname = end(explode('/', $_SERVER['PHP_SELF']));
if ($scriptname != 'index.php' and $scriptname != 'dologin.php' and !$session->is_logged_in()) {
    web_redirect('/index.php');
}
if (isset($menu_curent)) {
    $smarty->assign('menu_curent', $menu_curent);
    $_SESSION['menu_curent'] = $menu_curent;
} else {
    if (isset($_SESSION['menu_curent'])) {
        $smarty->assign('menu_curent', $_SESSION['menu_curent']);
    } else {
        $smarty->assign('menu_curent', 1);
    }
}
