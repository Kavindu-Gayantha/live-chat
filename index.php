<!doctype html>
<html>
<head><title>lets chat</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="indexcss.css">
<script>
$(document).read(function(e))
{
   $('#sendMessageBtn').click(function(e))
   {
     var  name = $("#user_name").val();
     var message = $("#message").val();

     $.ajax(
       {
         url: 'sendChat.php',
         type : 'POST',
         data : {
           uname:name,
           umessage:message
         }
       }
     )
   });
});
</script>

}
</head>
<body>
  <div class = "container-fluid">
    <h3 class="text-center">Live chat Room</h3>
    <div class ="well" id ="chatBox">
       <!-- <h3> Live Chat Room </h3> -->
      <p>
        <span style="color:red;">Kavindu : </span>
        <span style="color:blue">The first chat application</span>
        <span style="float:right;">10.43 PM</span>
      </p>
    </div>
    <form id ="myChatForm">
      <input type="text" id = "user_name" placeholder="enter your name"><br>
      <textarea name="message" id = "message" cols="30" rows="2" placeholder="enter your massage here ...."></textarea><br>
      <button class="btn btn-success btn-ls" id="sendMessageBtn">Send message</button>
    </form>
  </div>



</body>
</html>
