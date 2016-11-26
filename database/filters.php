<?php
$query = "SELECT * FROM fermi WHERE ";

$cond = 0;
if(isSet($_GET['field']) && !in_array(0,$_GET['field']))
{
  $cond = 1;
  $field_query = $_GET['field'];
  $vl = join("','",$field);
  $query = $query."field IN ('$vl')";
}
if(isSet($_GET['period']) && !in_array(0,$_GET['period']))
{
  $period_query = $_GET['period'];
  $vl = join("','",$period);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."period IN ('$vl')";
}
if($cond==0){
  $query = $query."1=1";
}
?>
