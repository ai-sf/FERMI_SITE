<?php
session_start();

if(isSet($_GET['lang']))
{
$selectedlang = $_GET['lang'];

$_SESSION['lang'] = $selectedlang;

setcookie("lang", $selectedlang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$selectedlang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$selectedlang = $_COOKIE['lang'];
}
else
{
$selectedlang = 'it';
}

switch ($selectedlang) {
  case 'it':
    $lang_file = 'it.php';
    break;

  case 'en':
    $lang_file = 'en.php';
    break;
  default:
    $lang_file = 'it.php';
}

include_once 'lang/'.$lang_file;
?>
