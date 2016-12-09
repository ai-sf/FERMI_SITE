function card(data){
  var scard = "<div class=\"row\"><div class=\"col s11\"><div class=\"card blue-grey darken-1\"><div class=\"card-content white-text\"><span class=\"card-title\">"+ data.name+"</span><p>"+data.description  +"</p></div><div class=\"card-action\"><table><tr class=\"blue-text darken-4\"><th></th><th>Campo</th><th>Periodo</th><th>Retribuzione</th><th>Studi</th><th>Luogo</th><th>Qualità</th></tr><tr class=\"white-text\"><td><a href=\""+data.link+"\">Link</a> </td><td>"+data.field+"</td><td>"+data.period+"</td><td>"+data.retribution+"</td><td>"+data.studies+"</td><td>"+data.region+"</td><td>"+data.quality+"</td></tr></table></div></div></div></div>";
return scard;
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
 console.log(selection);
 $.get("database/getData.php", selection ,function(data, status){
   $("#results").empty();
   try{
    var response = $.parseJSON(data.replace("\\","\\\\"));

		 $.each(response, function(index, element)
		 {
		 	$("#results").append(card(element));

   		 })

   	}
   	catch(err)
   	{
   		$("#results").append("No results");
   	}
     console.log(data);
 });
}

function docReady(){
  $('input:checkbox').change(dbgetdata);
}

$(document).ready(docReady);
