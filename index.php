<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "core.php";

$core = new Core();
$core->handleRequest();
?>