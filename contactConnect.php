<?php
                           $name=$_POST["name"];
                           $email=$_POST["email"];
                           $subject=$_POST["subject"];
                           $message=$_POST["message"];
                          
                           // database connect
                           $con= new mysqli('localhost','root','','school');
                           if (!$con) {
                               die("Connection failed: " . mysqli_connect_error());
                           }
                           else{
                               $stmt = $con->prepare("insert into contact(name,email,subject,message) values (? , ? , ? , ? )");
                                   $stmt->bind_param("ssss",$name,$email,$subject,$message);
                                   $stmt->execute();
                                   header("location:contact.php");
                                   $stmt->close();
                                   $con->close();
                               
                           }
                            ?>