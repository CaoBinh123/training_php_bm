<?php

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define("BASE_URL", str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require BASE_URL."vendor/autoload.php";
use URL\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();
