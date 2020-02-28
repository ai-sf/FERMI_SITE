<?php require_once("lang.php");?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>FERMI - Contribute</title>

<!-- Standard html meta tags -->
    <meta name="description" content="            Support us      If you are interested in promoting our project please write an email to this email address.      " />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="Contribute">
<meta property="og:type" content="website">
<meta property="og:url" content="/promotion/">

<meta property="og:description" content="            Support us      If you are interested in promoting our project please write an email to this email address.      ">
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
     <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
  <?php require("menu.php");?>
  <div class="container">
<div class="post">

<header class="post-header">
  <h4 class="post-title"><?php echo $lang['MENU_CONTRIBUTE'];?></h4>
</header>

<article class="post-content">
 <!--<div class="valign-wrapper">
<img id="promotion-logo" class="valign materialboxed" alt="" src="img">
</div>-->
<div class="section">
<div class="row">
<div class="col s12">
<p><?php echo $lang['CONTRIBUTE_TEXT'];?></p>
<script type="text/javascript" src="https://form.jotformeu.com/jsform/72635699853373"></script>
</article>
</div>
</div>
</div>
</div>
</div>

<?php require("footer.php");?>

  </body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/bin/materialize.min.js"></script>

<script> // Slider
  $(document).ready(function(){
  $('.slider').slider({full_width: false});
  });
</script>
<script> // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();
</script>
<script>
  $(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  });
</script>
<script>
  $(document).ready(function(){
      $('.carousel').carousel();
  });
</script>

</html>
