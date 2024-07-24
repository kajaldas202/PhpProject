<?php
   
   $gname=$_POST["gname"];
   $gemail=$_POST["gemail"];
   $cname=$_POST["cname"];
   $cage=$_POST["cage"];
   $message=$_POST["message"];
   // database connect
   $con= new mysqli('localhost','root','','school');
   if (!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   else{
       $stmt = $con->prepare("insert into appointment(g_name,g_email,child_name,child_age,message) values (? , ? , ? , ? , ?)");
           $stmt->bind_param("sssis",$gname,$gemail, $cname,$cage,$message);
           $stmt->execute();
           header("location:Make Appointement.php");
           $stmt->close();
           $con->close();
       
   }
    
?>