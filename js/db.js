$('input:checkbox').change(function() {
   var selection = $('form').serialize();
   if (selection == "")
   {
     return;
   }
   console.log(selection);
   $.get("database/getData.php", selection ,function(data, status){
       console.log("Data: " + data + "\nStatus: " + status);
   });
});
