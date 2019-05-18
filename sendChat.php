<?php

include("./config.php");
$uname = $_POST['uname'];
$umessage = $_POST['umessage'];

$query = "INSERT INTO chat (name, message) VALUES ('$uname','$umessage')";
$run = mysqli_query($con,$query); 

 ?>
