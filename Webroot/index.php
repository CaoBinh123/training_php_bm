<?php

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define("BASE_URL", str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
// echo ROOT;
// require(ROOT . 'Config/core.php');
// require(ROOT . 'router.php');
// require(ROOT . 'request.php');
// require(ROOT . 'dispatcher.php');
// echo BASE_URL;

require BASE_URL."vendor/autoload.php";
use URL\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();
