<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/lib/secret/include.php");
  echo 'a page for individual events. ';
  print_r('event code: ' . $_GET['page2']);

  if (!is_numeric($_GET['page2'])) {
    $_events = $events->get_event($_GET['page2']);
    print_r($_events);
    if ($_events['status'] == FALSE || empty($_events['content'])) {
      echo 'seems like it doesnt excist';
    }
  }
?>
