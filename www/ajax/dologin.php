<?php
require_once '../etc/config.php';

$user   = getRequestParameter('user', '');
$parola = getRequestParameter('password', '');

$row_count = 0;
$query     = 'SELECT id FROM users where user="' . $user . '" and parola="' . $parola . '" and sters=0;';
$result    = myQuery($query);
if ($result) {
    $row_count = $result->rowCount();
}
if ($row_count == 1) {
    $row = $result->fetchObject();
    $session->login($row->id);
    echo "ok";
} else echo "failed";

