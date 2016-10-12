<?php
$database = "localhost";
$user = "root";
$psw = "";
$db = "fermi";

$mysqli = new mysqli($database, $user, $psw,$db);
if ($mysqli->connect_errno) {
    echo "Failed:" . $mysqli->connect_error;
}
$mysqli->set_charset("utf8");
require 'filters.php';
$res = $mysqli->query($query);
$data = array();
while($row = $res->fetch_array(MYSQL_ASSOC)) {
        $data[] = $row;
   }
   echo json_encode($data,JSON_UNESCAPED_UNICODE);
 ?>
