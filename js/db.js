function get_data()
{
   var selection = $('form').serialize();
   if (selection == "")
   {
     return;
   }
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
   if (xhttp.readyState == 4 && xhttp.status == 200)
   {
     //$('#records_table tbody:eq(1)').empty();
     try{
       var response = $.parseJSON(xhttp.responseText);
       console.log(response);
       //$.each(response, function(index, element){
         //$('#records_table tbody:eq(1)').append("<tr> <td>"+ element.id +"</td><td>"+ element.name +"</td><td>"+ element.field +"</td><td>"+ element.retribution +"</td><td>"+ element.period +"</td><td>"+ element.studies[0] +", "+ element.studies[1] +"</td><td><a href=\""+ element.link.link+"\">"+ element.link.label + "</a></td><td>"+ element.description +"</td></tr>");
          // })

        }
      catch(err)
      {
        //$('#records_table tbody:eq(1)').append("<td colspan=\"8\">"+xhttp.responseText+"</td>");
        console.log(xhttp.responseText);
      }
    }
  };
  xhttp.open("GET", "database/getData.php?"+selection, true);
  xhttp.send();
}
