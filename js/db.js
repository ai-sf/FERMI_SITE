function card(data,lang,mobile){
  //console.log(mobile)
  if(mobile=="false"){
    var carddiv = "<div class=\"row\"><div class=\"col s11\"><div class=\"card blue-grey darken-1\"><div class=\"card-content white-text\"><span class=\"card-title\">";
    var carddescription = data.name+"</span><p>"+data.description +"</p></div><div class=\"card-action\">";
    var cardtable1 = "<table><tr class=\"blue-text darken-4\"><th></th><th>"+lang.FIELD+"</th><th>"+lang.PERIOD+"</th><th>"+lang.RETRIBUTION+"</th><th>"+lang.STUDIES+"</th><th>"+lang.REGION+"</th><th>"+lang.QUALITY+"</th></tr>";
    var cardtable2 = "<tr class=\"white-text\"><td><a href=\""+data.link+"\">Link</a> </td><td>"+data.field+"</td><td>"+data.period+"</td><td>"+data.retribution+"</td><td>"+data.studies+"</td><td>"+data.region+"</td><td>"+data.quality+"</td></tr></table></div></div></div></div>";
    return carddiv+carddescription+cardtable1+cardtable2;
  }
  else{
    var collapsible_field = "<ul class=\"collection\"><li class=\"collection-item\"><a href=\""+data.link+"\">Link</a></li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.FIELD+":</span> "+data.field+"</li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.PERIOD+":</span> "+data.period+"</li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.RETRIBUTION+":</span> "+data.retribution+"</li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.STUDIES+":</span> "+data.studies+"</li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.REGION+":</span> "+data.region+"</li><li class=\"collection-item\"><span class=\"blue-text text-darken-4\">"+lang.QUALITY+":</span> "+data.quality+"</li></ul>";
    return "<li><div class=\"s12 collapsible-header\">"+data.name+"</div><div class=\"collapsible-body\">"+data.description +"</br>"+collapsible_field+"</div></li>"
  }
}

function dbgetdata(eventData) {
  if(this.value==0){
      $("input[name='"+this.name +"']").each(function(){
        if(this.value!=0)
        {
            this.checked = false;
        }
      });
  }
  else{
    $("input[name='"+this.name +"'][value=0]").prop("checked",false);
  }

 var selection = $('form').serialize();
 if (selection == ""){
   return;
 }
 //console.log(selection);
 $.ajaxSetup({async:true});
 $.get("database/getData.php", selection ,function(data, status){
   $("#results").empty();
   var mobile = $( "input[type=hidden][name=mobile]").val();
   var str_result = "";
   if(mobile=="true"){
    str_result +="<ul class=\"collapsible popout s12\" data-collapsible=\"accordion\">";
   }
   try{
       //console.log("cazzo ce la fai?")
    //console.log(data);
    var response = $.parseJSON(data.replace("\\","\\\\"));

    var langutilities = null;
    $.ajaxSetup({async:false});
    $.get("lang/jsgetlang.php", function(data1, status1){
    langutilities = $.parseJSON(data1);
  });
  $.each(response, function(index, element)
     {
      var mobile = $( "input[type=hidden][name=mobile]").val();
      if(mobile=="true"){
        str_result+=card(element,langutilities,mobile);
      }
      else{ 
      $("#results").append(card(element,langutilities,mobile));
      }
       });
    if(mobile=="true"){
      str_result+="</ul>";
      $("#results").append(str_result);
      $('.collapsible').collapsible();
   }
 }
    catch(err)
    {
      console.log(err);
      $("#results").append("No results");
    }
     //console.log(data);
 });
}
function docReady(){
  $('input:checkbox').change(dbgetdata);
}

$(document).ready(docReady);
