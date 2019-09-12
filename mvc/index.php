<?php

use AHT\Dispatcher;


define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define('SRCROOT', str_replace("mvc", "mvc/src/", ROOT)); // mvc/src/

require_once( ROOT . '/vendor/autoload.php'); // mvc/vendor/autoload.php


//require(ROOT . 'Config/core.php');

//require(ROOT . 'router.php');
//require(ROOT . 'request.php');
//require(ROOT . 'dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>