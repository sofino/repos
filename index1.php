<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">

    <script type="text/javascript">


function serverRequest(data) {

    var request = createRequestObject();
    request.open('POST', 'obrab.php', true);
    request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    request.send("name=" + encodeURIComponent(data['name'] ) + "&tel=" + encodeURIComponent(data['tel'] ) );
    request.onreadystatechange  = function() { 
            if(request.readyState == 4 ){
                if(request.status == 200){
                
                      $('#frm').remove();
                      if(request.responseText){  
                      $('body').append('<div id="frm">'+request.responseText+'</div>');

                      }
                    
                }
            }
        };
}


        $(document).ready(function () {
      
            
           $("#send").bind('click', function(event) {
              
            if(!$("#name").val())
            {
                $("#name:not(:animated)").css( 'borderColor' , 'red').animate({borderColor: '#000'},1000)         
            }

             if(!$("#tel").val())
             {
                 $("#tel:not(:animated)").css( 'borderColor' , 'red').animate({borderColor: '#000'},1000)   
             }

             if($("#name").val() && $("#tel").val())
              {

                var data = new Array();
                data['name'] = $("#name").val();
                data['tel'] =  $("#tel").val();
                 serverRequest(data);

               
              }
           
           })
                   
        })
    </script>



</br>

</br>
</br>
</br>

 <audio controls >
    <source src="4967c78af01c99.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    
  </audio>
 



</body>
</html>