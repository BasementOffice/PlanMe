<?php

global $pdo, $eventconfig;
//!IMPORTANT
// Database info

  $eventconfig['database_name'] = 'planme_event';
  $eventconfig['database_host'] = 'localhost';
  $eventconfig['database_user'] = 'planme_event';
  $eventconfig['database_pass'] = 'ZYnbhQ6df';
  // Create a database
  try {
      $pdo = new PDO("mysql:host=" . $eventconfig['database_host'] . ";dbname=" . $eventconfig['database_name'] . ";", $eventconfig['database_user'], $eventconfig['database_pass']);
  }catch(PDOException $e) {
      die("Unable to connect to database.");
  }

?>
