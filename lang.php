<?php
session_start();

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'it';
}

switch ($lang) {
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