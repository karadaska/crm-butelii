<?php
require_once "etc/config.php";
$session->logout();
header("Location: /index.php");