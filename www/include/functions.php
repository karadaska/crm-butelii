<?php
function myQuery($q = '')
{
    global $db;
    try {
        $stmt = $db->query($q);
    } catch (PDOException $ex) {
        debug($ex->getMessage());
        debug($q);
        $stmt = 0;
    }
    return $stmt;
}

function myExec($q = '')
{
    global $db;
    try {
        $stmt = $db->exec($q);
    } catch (PDOException $ex) {
        debug($ex->getMessage());
        debug($q);
        $stmt = 0;
    }
    return $stmt;
}

function getRequestParameter0($field, $default)
{
    $val = $default;
    if (isset($_GET[$field])) {
        $val = $_GET[$field];
    } elseif (isset($_POST[$field])) {
        $val = $_POST[$field];
    }
    return $val;
}

function getRequestParameter($field, $default)
{
    $val = $default;
    if (isset($_GET[$field])) {
        $val = sanitize($_GET[$field]);
    } elseif (isset($_POST[$field])) {
        $val = sanitize($_POST[$field]);
    }
    return $val;
}

function sanitize($string)
{
    $clean_string = trim(htmlentities($string, ENT_QUOTES, "UTF-8"));
    return $clean_string;
}


function web_redirect($url)
{
    header("Location: " . $url);
    exit();
}

function pre($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


function debug($msg)
{
    if (isset($_SESSION['user'])) {
        $user_id = str_pad($_SESSION['user']->id, 3, " ", STR_PAD_LEFT);
    } else {
        $user_id = "NO_USER";
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    $fh = fopen(DEBUG_FILE, 'a');
    fwrite($fh, date('Y-m-d H:i:s | ') . $ip . " | uid: " . $user_id . " | " . $msg . "\n");
    fclose($fh);
}

function throwSqlException($error)
{
    error_log($error);
    throw new Exception($error);
}

?>