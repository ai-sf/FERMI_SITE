function docReady(){
  $('input:checkbox').change(function(eventData) {
    //Un misto di Jquery e javascrip O.O ma almeno funziona.
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
       console.log("Data: " + data + "\nStatus: " + status);
   });
  });
}

$(document).ready(docReady);
