function card(data,lang){
  var carddiv = "<div class=\"row\"><div class=\"col s11\"><div class=\"card blue-grey darken-1\"><div class=\"card-content white-text\"><span class=\"card-title\">";
  var carddescription = data.name+"</span><p>"+data.description +"</p></div><div class=\"card-action\">";
  var cardtable1 = "<table><tr class=\"blue-text darken-4\"><th></th><th>"+lang.FIELD+"</th><th>"+lang.PERIOD+"</th><th>"+lang.RETRIBUTION+"</th><th>"+lang.STUDIES+"</th><th>"+lang.REGION+"</th><th>"+lang.QUALITY+"</th></tr>";
  var cardtable2 = "<tr class=\"white-text\"><td><a href=\""+data.link+"\">Link</a> </td><td>"+data.field+"</td><td>"+data.period+"</td><td>"+data.retribution+"</td><td>"+data.studies+"</td><td>"+data.region+"</td><td>"+data.quality+"</td></tr></table></div></div></div></div>";
return carddiv+carddescription+cardtable1+cardtable2;
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
   try{
    var response = $.parseJSON(data.replace("\\","\\\\"));

    var langutilities = null;
    $.ajaxSetup({async:false});
    $.get("lang/jsgetlang.php", function(data1, status1){
    langutilities = $.parseJSON(data1);
  });
	$.each(response, function(index, element)
		 {
		 	$("#results").append(card(element,langutilities));

   		 })

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
