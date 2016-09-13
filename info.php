<?php require_once("lang.php");?>
<html>
<head>
<title> <?php echo $lang['PAGE_TITLE'];?></title>
</head>
<body>
<?php require("menu.php");?>
<p><?php
if(isSet($_GET['id']))
{
  $id = $_GET['id'];
  echo "Informazioni sul record con id = ".$id;
}
else {
  echo "Nessuna entry selezionata";
}
?></p>
</body>
</html>
