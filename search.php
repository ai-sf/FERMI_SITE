<?php require("lang.php");require("filtri.php"); ?>
<html>
<head>
<title> <?php echo $lang['PAGE_TITLE'];?></title>
<style>
table, th, td {
    border: 1px solid black;
}

#wrap {
  width:1000px;
  margin:10px auto;
}
#data{
  float:left;
  width:750px;
}
#filter{
  float:right;
  width:250px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/db.js"></script>
</head>
<body>
<?php require("menu.php");?>
<div id ="wrap">
  <div id = "filter">
  <form id="form" action="">
    <div class="row">
      <div class="large-8 small-centered columns">
        <fieldset>
      <div class="row">
        <div class="small-12 columns">
	     <label  for="field"><?php echo $lang['FIELD'].":";?></label></br>
            <?php
              foreach ($field as $key => $value) {
                  echo("<input type=\"checkbox\" name=\"field\" value=\"".$value."\">".$lang[$key]."</br>" );
                  }
            ?>
      </div>
    </div>
	    <label for="period"><?php echo $lang['PERIOD'].":";?></label></br>
	    <!--<input type="checkbox" name="period" value="0"><?php echo $lang['ALL'];?></br>-->
		        <?php
		          foreach ($period as $key => $value) {
			            echo("<input type=\"checkbox\" name=\"period\" value=\"".$value."\">".$lang[$key]."</br>" );
		              }
		        ?>
      </fieldset>
    </div>
  </div>
</form>

  </div>
<div id = "data">
  <table>
    <tr>
	<td>
		Esempio nome
	</td>
	<td>
		Quando
	</td>
	<td>
		Dove
	</td>
	<td>
		Quando
	</td>
	<td>
		Retribuzione
	</td>
	<td>
		Campo
	</td>
	<td>
		<a href="info.php?id=1"><?php echo $lang['MORE'];?></a>
	</td>
  </tr>
  </table>
  </div>
</div>

</body>
</html>
