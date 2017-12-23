<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/conf.inc.php');

//****************************************************
//**********************includes**********************
//****************************************************

if(!isset($_SESSION['events'])) {
    $_SESSION['events'] = new events();
  }

if(!isset($_SESSION['user'])) {
    $_SESSION['user'] = new user();
  }


$events         = &$_SESSION['events'];
$user           = &$_SESSION['user'];

 ?>
