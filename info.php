<?php require_once("lang.php");?>
<html>
<head>
<title> <?php echo $lang['PAGE_TITLE'];?></title>
</head>
<body>
<?php require("menu.php");?><br>
<?php
if(isSet($_GET['id']))
{
  $id = $_GET['id'];
  echo "<p>Informazioni sul record con id = ".$id."</p>";
  require("database/getRecord.php");
  $record = getRecord($id);
  if(!$record){
    echo "Nessun risultato trovato per l'id = ".$id;
  }
  else {
    var_dump($record);
  }
}
else {
  echo "<p>Nessuna entry selezionata</p>";
}
?>
</body>
</html>
