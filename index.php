<?php require_once("lang.php");?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title> <?php echo $lang['PAGE_TITLE'];?></title>

<!-- Standard html meta tags -->
    <meta name="description" content="Database of opportunities for physics students" />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="FERMI - Formazione E Ricerca Menti Italiane">
<meta property="og:type" content="website">

<meta property="og:description" content="Database of opportunities for physics students">
<meta property="og:site_name" content="">
<meta property="og:locale" content="it">

<meta property="fb:admins" content=""> <!-- editable in config.yml -->
<meta property="fb:app_id" content="">

<!-- Twitter metadata. twitter:image should not be necessary, as twitter recognizes og:-->
<meta name="twitter:card"           content="summary" />
<meta name="twitter:site"           content="@aisf_fisica" />
<meta name="twitter:title"          content="FERMI - Formazione E Ricerca Menti Italiane" />
<meta name="twitter:description"    content="Database of opportunities for physics students"/>
<!-- <meta name="twitter:image:alt"      content=""> Name of image for visually impaired. Will need to add this to all images -->

<!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>
</head>

<body>
  <?php require("menu.php");?>

  <div id="index-banner">
  <div class="row">
    <div class="col l4 offset-l4 s8 offset-s2">
      <h1>
         <img id="index-top-logo" src="img/banner.jpg" alt="Event logo">
      </h1>
    </div>
  </div>
</div>


<div class="no-pad-top" id="index-page">
  <div class="container">

    <!--   Icon Section   -->
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="medium material-icons custom1-text">supervisor_account</i></h2>
            <h2 class="center">Objective</h2>
            <p align="center" class="light">Building a database of internships and opportunities for physics students and help them getting into contact with research institutes.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="medium material-icons custom1-text">today</i></h2>
            <h2 class="center">How</h2>
            <p align="center" class="light">The database allows you to do tailor made searches by field of study, place, retribution and many more</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="medium material-icons custom1-text">location_on</i></h2>
            <h2 class="center">Target</h2>
            <p align="center" class="light">Young physics students, especially Italian but not restricted.</p>
          </div>
        </div>
      </div>

    <!-- slideshow -->
 <div class="section">
      <div class="slider" id="foto-eventi">
        <ul class="slides">
          <li>
              <img src="/img/cern.jpg" alt="CERN">
              <div class="caption left-align">
                <h4>LHC</h4>
                <p class="light grey-text text-lighten-3">Large Hadron Collider</p>
              </div>
            </li>

        </ul>
      </div>
</div>

    <!-- paragraph -->
    <div class="section">
      <div class="row">
        <div class="col s8 offset-s2">
          <div class="icon-block">
            <h3 class="center"><i class="medium material-icons custom1-text">send</i></h2>
            <p class="center light"> <?php echo $lang['WELCOME'];?></p>
          </div>
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
