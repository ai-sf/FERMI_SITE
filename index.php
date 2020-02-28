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
     <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
  <?php require("menu.php");?>

  <div id="index-banner">
  <div class="row">
    <div class="col l4 offset-l4 s12">
      
         <img id="index-top-logo" src="img/banner.jpg" style='width:100%;' alt="Event logo">
   
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
            <h4 class="center"><i class="medium material-icons custom1-text">supervisor_account</i></h4>
            <h4 class="center"><?php echo $lang['OBJECTIVE_TITLE'];?></h4>
            <p align="center" class="light"><?php echo $lang['HOME_OBJECTIVE'];?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h4 class="center"><i class="medium material-icons custom1-text">today</i></h4>
            <h4 class="center"><?php echo $lang['HOW_TITLE'];?></h4>
            <p align="center" class="light"><?php echo $lang['HOME_HOW'];?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h4 class="center"><i class="medium material-icons custom1-text">location_on</i></h4>
            <h4 class="center">Target</h4>
            <p align="center" class="light"><?php echo $lang['HOME_TARGET'];?></p>
          </div>
        </div>
      </div>

    <!-- paragraph -->
    <div class="section">
      <div class="row">
        <div class="col s8 offset-s2">
          <div class="icon-block">
            <h5 class="center"><i class="medium material-icons custom1-text">send</i></h5>
            <p class="center light"> <?php echo $lang['WELCOME'];?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- slideshow -->
 <div class="section">
      <div class="slider" id="foto-eventi">
        <ul class="slides">
          <li>
              <img src="http://www.ai-sf.it/fermi/img/cern.jpg" alt="CERN">
              <div class="caption left-align">
                <h4>LHC</h4>
                <p class="light grey-text text-lighten-3">Large Hadron Collider</p>
              </div>
            </li>
<li>
              <img src="http://www.ai-sf.it/fermi/img/AustralianAstronomicalObservatory.jpg" alt="CERN">
              <div class="caption left-align">
                <h4>Australian Astronomical Observatory</h4>
                <p class="light grey-text text-lighten-3">Coonabarabran</p>
              </div>
            </li>
<li>
              <img src="http://www.ai-sf.it/fermi/img/fermilab.jpg" alt="CERN">
              <div class="caption left-align">
                <h4>Fermilab</h4>
                <p class="light grey-text text-lighten-3">Chicago</p>
              </div>
            </li>
<li>
              <img src="http://www.ai-sf.it/fermi/img/CulhamCentreforFusionEnergy.jpg" alt="CERN">
              <div class="caption left-align">
                <h4>Culham Centre for Fusion Energy</h4>
                <p class="light grey-text text-lighten-3">Oxford</p>
              </div>
            </li>

        </ul>
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