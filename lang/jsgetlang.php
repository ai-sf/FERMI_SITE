<?php
require_once("../lang.php");

$jslang = array();

$jslang['FIELD'] = $lang['FIELD'];
$jslang['PERIOD'] = $lang['PERIOD'];
$jslang['RETRIBUTION'] =  $lang['RETRIBUTION'];
$jslang['STUDIES'] = $lang['STUDIES'];
$jslang['REGION'] = $lang['REGION'];
$jslang['QUALITY'] = $lang['QUALITY'];

echo json_encode($jslang,JSON_UNESCAPED_UNICODE);
?>
