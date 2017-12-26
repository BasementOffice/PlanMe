<?php
ini_set('display_errors', 'On');

//Define autoloader
function __autoload($className) {
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/lib/classes/" . $className . '.class.php')) {
        require ($_SERVER['DOCUMENT_ROOT'] . "/lib/classes/" . $className . '.class.php');
    }else{
        require ($_SERVER['DOCUMENT_ROOT'] . "/lib/" . $className . '.php');
    }
}
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/conf.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/include.php');

if(empty($_GET['page1'])){
    $_GET['page1'] = '';
}

$body = "";

switch ($_GET['page1']) {
    // case 'home':
    // case '': {
    //     include_once($_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home.php');
    // break;}

    case 'event': {
      include_once($_SERVER['DOCUMENT_ROOT'] . '/lib/pages/event.php');
    break;}

    case 'events': {
      include_once($_SERVER['DOCUMENT_ROOT'] . '/lib/pages/events.php');
    break;}
}
?>
