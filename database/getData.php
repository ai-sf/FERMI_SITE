<?php
$database = "localhost";
$user = "root";
$psw = "";
$db = "fermi";

$mysqli = new mysqli($database, $user, $psw,$db);
if ($mysqli->connect_errno) {
    echo "Failed:" . $mysqli->connect_error;
}
$query = "SELECT * FROM fermi WHERE ";

if(isSet($_GET['field']) && $_GET['field']!=0)
{
  $field = $_GET['field'];
  $vl = join("','",$field);
  $query = $query."field IN ('$vl')";
}
echo $query;
//if(isSet($_GET['period']) && $_GET['period']!=0)
//{
  //$query = $query."AND period=".$_GET['period'];
//}
$res = $mysqli->query($query);
$data = array();
while($row = $res->fetch_array(MYSQL_ASSOC)) {
        $data[] = $row;
   }
   echo json_encode($data);
 ?>
