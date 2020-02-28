<?php require_once("lang.php");?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>FERMI - About FERMI</title>

<!-- Standard html meta tags -->
    <meta name="description" content="      {{ site.data.about.info }}    Characteristics    {% for item in site.data.about.char.specs %}          {{ item.text }}      {% if item.url != "#!" %}  ..." />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="About FERMI">
<meta property="og:type" content="website">
<meta property="og:url" content="https://philosophysics.github.io/fermivisual/about/">

<meta property="og:description" content="      {{ site.data.about.info }}    Characteristics    {% for item in site.data.about.char.specs %}          {{ item.text }}      {% if item.url != "#!" %}  ...">
<meta property="og:site_name" content="">
<meta property="og:locale" content="it">

<meta property="fb:admins" content=""> <!-- editable in config.yml -->
<meta property="fb:app_id" content="">

<!-- Twitter metadata. twitter:image should not be necessary, as twitter recognizes og:-->
<meta name="twitter:card"           content="summary" />
<meta name="twitter:site"           content="@aisf_fisica" />
<meta name="twitter:title"          content="About FERMI" />
<meta name="twitter:description"    content="      {{ site.data.about.info }}    Characteristics    {% for item in site.data.about.char.specs %}          {{ item.text }}      {% if item.url != "#!" %}  ..."/>
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
  <h4 class="post-title">About FERMI</h4>
</header>

<article class="post-content">
  <div class="section">
<p><?php echo $lang['ABOUT_TEXT'];?>
</p>
</div>

<div class="section">
<h4>Characteristics</h4>
<div class="collection">

<div class="collection-item black-text">
<?php echo $lang['ABOUT_FILTER'];?>
</div>

<div class="collection-item black-text">
<?php echo $lang['ABOUT_OFFLINE'];?>
<a href="http://www.ai-sf.it/owncloud/index.php/s/i1BwR0nMXbbom2g"">
  <span class="badge custom1 white-text teal lighten-2">PDF</span>
</a>
</div>
</div>
</div>

</article>

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
