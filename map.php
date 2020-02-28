<?php require_once("lang.php");?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>FERMI - Promotion</title>

<!-- Standard html meta tags -->
    <meta name="description" content="FERMI Interactive map" />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="Map">
<meta property="og:type" content="website">

<meta property="og:description" content="FERMI Interactive map">
<meta property="og:site_name" content="">
<meta property="og:locale" content="it">

<meta property="fb:admins" content=""> <!-- editable in config.yml -->
<meta property="fb:app_id" content="">

<!-- Twitter metadata. twitter:image should not be necessary, as twitter recognizes og:-->
<meta name="twitter:card"           content="summary" />
<meta name="twitter:site"           content="@aisf_fisica" />
<meta name="twitter:title"          content="Promotion" />
<meta name="twitter:description"    content="            Support us      If you are interested in promoting our project please write an email to this email address.      "/>
<!-- <meta name="twitter:image:alt"      content=""> Name of image for visually impaired. Will need to add this to all images -->

<!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/js/bin/materialize.min.js"></script>

    <link rel="stylesheet" href="map/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
  <script src="map/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="map/jquery-jvectormap-world-mill.js"></script>
</head>

<body>
  <?php require("menu.php");?>
  <div class="container">
    <br>
    <div id="world-map" style="width: 800px; height: 600px"></div>
</div>

<?php require("footer.php");?>
<script>
//$.get("database/getData.php",function(data, status){
  //var response = $.parseJSON("[{latLng: [41.90, 12.45], name: 'Vatican City'},{latLng: [43.73, 7.41], name: 'Monaco'}, ]");
//});
var response = $.parseJSON("[{latLng: [41.90, 12.45], name: 'Vatican City'},{latLng: [43.73, 7.41], name: 'Monaco'}, ]");
console.log(response);
$(function(){
      $('#world-map').vectorMap({
        map: 'world_mill',
        markerStyle: {
      initial: {
        fill: '#F8E23B',
        stroke: '#383f47'
      }
    },
        markers: [41.90, 12.45]
    });
  });
  </script>
  </body>
</html>
