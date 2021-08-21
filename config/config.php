<?php
//error_reporting(0);//Hide all errors
date_default_timezone_set('Africa/Harare');
/**
 * config site
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

include 'settings.php';

define("BASIC_CLASS", ROOT . DS . "library/");
/**
 * load libraries
 */
function __autoload($class)
{

    if (is_file(BASIC_CLASS . $class . ".php")) {
        require BASIC_CLASS . $class . ".php";
    }

}
