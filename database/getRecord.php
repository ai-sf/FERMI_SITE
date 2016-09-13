<?php

function getRecord($id){

$database = "localhost";
$user = "root";
$psw = "";
$db = "fermi";

$mysqli = new mysqli($database, $user, $psw,$db);
if ($mysqli->connect_errno) {
    echo "Failed:" . $mysqli->connect_error;
}

$query = "SELECT * FROM fermi WHERE id=".$id;
$res = $mysqli->query($query);
if($res->num_rows == 1){
  $data = array();
  while($row = $res->fetch_array(MYSQL_ASSOC)) {
        $data[] = $row;
    }
  	return $data;
}
else {
  return False;
}

}


 ?>
