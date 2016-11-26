<?php require_once("lang.php");require("filtri.php");?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>FERMI - Promotion</title>

<!-- Standard html meta tags -->
    <meta name="description" content="            Support us      If you are interested in promoting our project please write an email to this email address.      " />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="Promotion">
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
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>
</head>

<body>
  <?php require("menu.php");?>
         <div class="row">

        <div class="col s8 offset-s1">
         <h4> Risultati ricerca</h4>
         <div class="row">
     <div class="col s10 offset-s1">
       <div class="card blue-grey darken-1">
         <div class="card-content white-text">
           <span class="card-title">CERN Summer Programme</span>
           <p>Eccellente opportunità per partecipare ai lavori del CERN, collaborando attivamente all’interno di uno dei gruppi di ricerca.  Il programma offre ottime opportunità di socializzazione in un contesto internazionale: saranno infatti presenti molti studenti da tutto il mondo e si potrà  seguire una serie di lezioni preparate appositamente per i partecipanti.</p>
         </div>
         <div class="card-action">
           <table> <tbody>
          <tr>
            <td><a href="#">Link</a> </td>
            <td>Particelle</td>
            <td>Estate</td>
            <td>Retribuito</td>
              <td>Triennale</td>
          </tr>
        </tbody></table>

         </div>
       </div>
     </div>
   </div>

   <div class="row">
   <div class="col s10 offset-s1">
   <div class="card blue-grey darken-1">
   <div class="card-content white-text">
     <span class="card-title">ESA</span>
     <p>Per chi tra di noi è già in possesso di una laurea magistrale (o la otterrà prima di settembre 2015), l'ESA offre un'eccellente opportunità di lavoro e crescita accademica, il programma 'Young Graduate Trainee'. I progetti sono proposti sul sito a partire da metà novembre e la possibilità di fare domanda è fino a metà dicembre. Lo stipendio è ottimo per un giovane laureato, circa €2200 al mese!</p>
   </div>
   <div class="card-action">
     <table> <tbody>
    <tr>
      <td><a href="#">Link</a> </td>
      <td>Space Science</td>
      <td>Annuale</td>
      <td>Retribuito</td>
        <td>Post-Laurea</td>
    </tr>
   </tbody></table>

   </div>
   </div>
   </div>
   </div>



        </div>

        <div class="col s3 ">
          <form id="form" action="">
          <ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header"><?php echo $lang['FIELD'];?></div>
      <div class="collapsible-body"> <p> <input type="checkbox" name="field[]" value="0" id="field0" checked="checked"/> <label for="field0"><?php echo $lang['ALL'];?></label></br>
             <?php
               foreach ($field as $key => $value) {
                   echo("<input type=\"checkbox\" name=\"field[]\" value=\"".$value."\" id=\"field".$value."\"/><label for=\"field".$value."\">".$lang[$key]."</label></br>" );
                   }
             ?></p></div>
    </li>
    </ul>

    <ul class="collapsible" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['PERIOD'];?></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="period[]" value="0" id="period0" checked="checked"/> <label for="period0"><?php echo $lang['ALL'];?></label></br>
       <?php
         foreach ($period as $key => $value) {
             echo("<input type=\"checkbox\" name=\"period[]\" value=\"".$value."\" id=\"period".$value."\"/><label for=\"period".$value."\">".$lang[$key]."</label></br>" );
             }
       ?></p></div>
</li>
</ul>


<ul class="collapsible" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['RETRIBUTION'];?></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="retribution[]" value="0" id="retribution0" checked="checked"/> <label for="retribution0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($retribution as $key => $value) {
         echo("<input type=\"checkbox\" name=\"retribution[]\" value=\"".$value."\" id=\"retribution".$value."\"/><label for=\"retribution".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>


<ul class="collapsible" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['STUDIES'];?></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="studies[]" value="0" id="studies0" checked="checked"/> <label for="studies0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($studies as $key => $value) {
         echo("<input type=\"checkbox\" name=\"studies[]\" value=\"".$value."\" id=\"studies".$value."\"/><label for=\"studies".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>

<ul class="collapsible" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['REGION'];?></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="region[]" value="0" id="region0" checked="checked"/> <label for="region0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($region as $key => $value) {
         echo("<input type=\"checkbox\" name=\"region[]\" value=\"".$value."\" id=\"region".$value."\"/><label for=\"region".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>

<ul class="collapsible" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['QUALITY'];?></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="quality[]" value="0" id="quality0" checked="checked"/> <label for="quality0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($quality as $key => $value) {
         echo("<input type=\"checkbox\" name=\"quality[]\" value=\"".$value."\" id=\"quality".$value."\"/><label for=\"quality".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>


  </form>

        </div>

      </div>


<?php require("footer.php");?>

  </body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/bin/materialize.min.js"></script>
<script>
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
<script src="js/db.js"></script>
</html>
