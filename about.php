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
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>
</head>

<body>
  <?php require("menu.php");?>
  <div class="container">
<div class="post">

<header class="post-header">
  <h1 class="post-title">About FERMI</h1>
</header>

<article class="post-content">
  <div class="section">
<p>
The FERMI project was initiated by the Italian Association of Physics Students (AISF) in December 2014. It has the twofold goal of: <p> &bull; Collecting information on high-level internships for physics students available both in Italy and abroad.</p> <p> &bull; Promoting the creation of new internship opportunities in Italian universities, laboratories and research centers.</p> This webpage contains the FERMI Project database of internships and summer schools for physics students, collected over the last months. They are classified according to many parameters (field of research, country, region, paid/unpaid, period of the year, etc.) for your convenience.   <p> Research internships are incredible opportunities to work hands on alongside experts in your chosen field, putting in practice the theoretical knowledge one gathered during courses at universities to tackle challenging problems in a creative and original fashion. They can be great fun too! Some of the most well-established internship programs (for example, the CERN summer research internship or the SURF fellowship at Caltech) offer a very rich social program! You’ll be meeting dozens of other interesting and motivated students from around the world, creating strong bonds and having lots of fun! </p> Even in programs with a smaller number of participants, the atmosphere is usually stimulating and nurturing, and professors as well as PhD students are often very eager to involve the newcomers in the life of the research group! Have a look at the opportunities we collected here for you and in case you’d like to suggest an addition to the database, do not hesitate to contact Lucio Milanese, the FERMI Project Coordinator, at lucio.milanese@ai-sf.it
</p>
</div>

<div class="section">
<h2>Characteristics</h2>
<div class="collection">

<a

   href="https://philosophysics.github.io/fermivisual/#!"

class="collection-item black-text">
FILTRI

</a>


<a

   href="http://www.ai-sf.it/owncloud/index.php/s/i1BwR0nMXbbom2g"

class="collection-item black-text">
Database offline: We thought an offline copy of the database would be useful so we compiled all the opportunities in a document you can download here

  <span class="badge custom1 white-text">PDF</span>
</a>
<a href="https://philosophysics.github.io/fermivisual/" class="collection-item black-text"> User guide
<span class="badge custom1 white-text">User Guide</span>
</a>
</div>
</div>

</article>

</div>
</div>

<?php require("footer.php");?>

  </body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/bin/materialize.min.js"></script>


</html>
