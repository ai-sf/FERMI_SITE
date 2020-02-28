 <div class="row">
<div class="col s9 offset-s1">
         <h5> Risultati ricerca</h5>
 </div>
 <div class="col s1"><h5> <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">filter_list</i></a></h5></div>
</div>
 <div class="row">
<div id="results">
         
</div>
</div>
<ul id="slide-out" class="side-nav">
  <form id="form_mobile" action=""><input type="hidden" name="mobile" value="true">
  </form>
   <form id="form" action="">
    <div class="collection">
     <ul class="collapsible collection-item" data-collapsible="expandable">
    <li>
      <div class="collapsible-header"><?php echo $lang['FIELD'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
      <div class="collapsible-body"> <p> <input type="checkbox" name="field[]" value="0" id="field0" checked="checked"/> <label for="field0"><?php echo $lang['ALL'];?></label></br>
             <?php
               foreach ($field as $key => $value) {
                   echo("<input type=\"checkbox\" name=\"field[]\" value=\"".$value."\" id=\"field".$value."\"/><label for=\"field".$value."\">".$lang[$key]."</label></br>" );
                   }
             ?></p></div>
    </li>
    </ul>
    <ul class="collapsible collection-item" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['PERIOD'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="period[]" value="0" id="period0" checked="checked"/> <label for="period0"><?php echo $lang['ALL'];?></label></br>
       <?php
         foreach ($period as $key => $value) {
             echo("<input type=\"checkbox\" name=\"period[]\" value=\"".$value."\" id=\"period".$value."\"/><label for=\"period".$value."\">".$lang[$key]."</label></br>" );
             }
       ?></p></div>
</li>
</ul>


<ul class="collapsible collection-item" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['RETRIBUTION'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="retribution[]" value="0" id="retribution0" checked="checked"/> <label for="retribution0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($retribution as $key => $value) {
         echo("<input type=\"checkbox\" name=\"retribution[]\" value=\"".$value."\" id=\"retribution".$value."\"/><label for=\"retribution".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>

<ul class="collapsible collection-item" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['STUDIES'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="studies[]" value="0" id="studies0" checked="checked"/> <label for="studies0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($studies as $key => $value) {
         echo("<input type=\"checkbox\" name=\"studies[]\" value=\"".$value."\" id=\"studies".$value."\"/><label for=\"studies".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>

<ul class="collapsible collection-item" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['REGION'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="region[]" value="0" id="region0" checked="checked"/> <label for="region0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($region as $key => $value) {
         echo("<input type=\"checkbox\" name=\"region[]\" value=\"".$value."\" id=\"region".$value."\"/><label for=\"region".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>

<ul class="collapsible collection-item" data-collapsible="expandable">
<li>
<div class="collapsible-header"><?php echo $lang['QUALITY'];?><a href="#!" class="secondary-content"><i class="material-icons">arrow_drop_down</i></a></div>
<div class="collapsible-body"> <p> <input type="checkbox" name="quality[]" value="0" id="quality0" checked="checked"/> <label for="quality0"><?php echo $lang['ALL'];?></label></br>
   <?php
     foreach ($quality as $key => $value) {
         echo("<input type=\"checkbox\" name=\"quality[]\" value=\"".$value."\" id=\"quality".$value."\"/><label for=\"quality".$value."\">".$lang[$key]."</label></br>" );
         }
   ?></p></div>
</li>
</ul>
  </form>
  </ul>
</div>
<script>
// Initialize collapse button
  $(".button-collapse").sideNav({
      edge: 'right',
    });
   
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
</script>