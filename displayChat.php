<?php
    include("./config.php");
     $query = " SELECT * FROM chatroom ";
     $run = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($run))
       {
         ?>
         <p>
             <span style="color:red; font-weight:bold;"><?php echo $row ['name'] ." : ";?> </span>
             <span style="color:blue"><?php echo $row ['message'];?></span>
             <span style="float:right;"><?php echo $row['time'];?></span>
         </p>
         <?php
       }


?>
