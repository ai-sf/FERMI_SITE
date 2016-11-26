<?php

require_once("../filtri.php");
require_once("../lang.php");

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
        var_dump($row);
        $decode = array();
        $decode["id"] = $row["id"];
        $decode["name"] = $row["name"];
        $decode["field"] = $lang[array_search((int)$row["field"], $field)];
        $decode["period"] = $lang[array_search((int)$row["period"], $period)];
        $decode["region"] = $lang[array_search((int)$row["region"], $region)];
        $decode["studies"] = $lang[array_search((int)$row["studies"], $studies)];
        $decode["retribution"] = $lang[array_search((int)$row["retribution"], $retribution)];
        $decode["quality"] = $lang[array_search((int)$row["quality"], $retribution)];
        $decode["descriptio"] = $row["description_".$selectedlang];
        $data[] = $decode;
   }
 //echo json_encode($data,JSON_UNESCAPED_UNICODE);
 var_dump($data);
 ?>
