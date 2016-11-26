<?php
$query = "SELECT * FROM fabrik WHERE ";

$cond = 0;
if(isSet($_GET['field']) && !in_array(0,$_GET['field']))
{
  $cond = 1;
  $field_query = $_GET['field'];
  $vl = join("','",$field_query);
  $query = $query."field IN ('$vl')";
}
if(isSet($_GET['period']) && !in_array(0,$_GET['period']))
{
  $period_query = $_GET['period'];
  $vl = join("','",$period_query);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."period IN ('$vl')";
}
if(isSet($_GET['retribution']) && !in_array(0,$_GET['retribution']))
{
  $retribution_query = $_GET['retribution'];
  $vl = join("','",$retribution_query);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."retribution IN ('$vl')";
}
if(isSet($_GET['studies']) && !in_array(0,$_GET['studies']))
{
  $studies_query = $_GET['studies'];
  $vl = join("','",$studies_query);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."studies IN ('$vl')";
}
if(isSet($_GET['region']) && !in_array(0,$_GET['region']))
{
  $region_query = $_GET['region'];
  $vl = join("','",$region_query);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."region IN ('$vl')";
}
if(isSet($_GET['quality']) && !in_array(0,$_GET['quality']))
{
  $quality_query = $_GET['quality'];
  $vl = join("','",$quality_query);
  if($cond==1){
    $query = $query." AND ";
  }
  else{
    $cond=1;
  }
  $query = $query."quality IN ('$vl')";
}
if($cond==0){
  $query = $query."1=1";
}
?>
