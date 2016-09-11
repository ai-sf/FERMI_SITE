<?php require("lang.php");require("filtri.php"); ?>
<html>
<head>
<title> <?php echo $lang['PAGE_TITLE'];?></title>
</head>
<body>
<?php require("menu.php");?>
<form id="form" action="">
	<label  for="field"><?php echo $lang['FIELD'];?></label>		
	<select id="field" name="field"> 
		<option value="0"><?php echo $lang['ALL'];?></option>
		<?php 
		foreach ($field as $key => $value) {
			echo("<option value=\"".$value."\">".$lang[$key]."</option>" );
		}
		?>
	</select>
	<label  for="period"><?php echo $lang['PERIOD'];?></label>		
	<select id="period" name="period"> 
		<option value="0"><?php echo $lang['ALL'];?></option>
		<?php 
		foreach ($period as $key => $value) {
			echo("<option value=\"".$value."\">".$lang[$key]."</option>" );
		}
		?>
	</select>	
</form>	
</body>
</html>