<?php
ini_set('display_errors', 'On');
print("hellow world");
//Define autoloader
function __autoload($className) {
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/lib/classes/" . $className . '.class.php')) {
        require ($_SERVER['DOCUMENT_ROOT'] . "/lib/classes/" . $className . '.class.php');
    }else{
        require ($_SERVER['DOCUMENT_ROOT'] . "/lib/" . $className . '.php');
    }
}
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/config.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/include.php');
echo $events;
?>
