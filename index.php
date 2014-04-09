<?php

$_page = (empty($_GET['page']) ) ? 'list' : $_GET['page'];
$_content = null;
$_pageId = $_page;

// Charge le contenu 
$file = './' . $_page . '.html';
if (file_exists($file)) {
  ob_start();
  include $file;
  $_content = ob_get_contents();
  ob_end_clean();
} else {
  $file = './' . $_page . '.php';
  if (file_exists($file)) {
    ob_start();
    include $file;
    $_content = ob_get_contents();
    ob_end_clean();
  } else {
    $_content = '404 ERROR - THE FILE ' . $_page . ' DOES NOT EXISTS';
  }
}

if ( $_page == 'list' ) echo $_content;
else include 'layout.php';