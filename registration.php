<?php
include_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
        header("location:login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<style>
    *{
    margin: 0px;
    padding: 0px;
}
 .body{
    height: 400px;
    width: 100%;
    
 }
 body{
    background-color:#ff7f50;
 }

.container-fluid{
    /* border: 1px solid red; */
    height: 640px;
    width: 1300px;
    display: flex;
}
.cont{
    width: 45%;
    height: 100%; 
    /* border: 1px solid; */
}
.teacher{
    height: 375px;
    margin-left: 0px;
    margin-top: 140px;
}
.cont1{
    width: 50%;
    height: 100%;
}
.cont3{
    width:60%;
    height: 80%;
    /* border: 1px solid red; */
    margin-top: 60px;
    margin-left:310px;
}
.move{
    margin-left: 40px;
    margin-top: 10px;
}
.Register p{
    margin-left:80px;
    font-size: 40px;
}
a{
    margin-left:0px;
    text-decoration:none;
}
p{
    margin-left:40px;
    margin-top:10px;
}
</style>
<body>
    <div class="container-fluid mx-auto p-2  my-3">
        <div class="col-lg-6  cont1">
                <div class="cont3">
                    <div class="Register">
                        <p>Register form<p>
                    <form method="post" >
                       
                        <div class="mb-3  w-75 move">
                            <label for="exampleInputLastname1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputLastname1" name="username">
                        </div>
                        <div class="mb-3 w-75 move">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3  w-75 move">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <!-- <div class="mb-3 w-75 move form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-dark move">Submit</button>
                    </form>
                </div>
                <p>
                "Have you registered before? 
                <a href="login.php">Log In"</a>
                to continue."
                </p>
            </div>
        </div>
        <div class="col-lg-6   cont">
            <img src="images/picture-teacher-girl-front-white-board_1052748-1865-removebg-preview.png"
                alt="" class="teacher">
        </div>
        
    </div>
</body>

</html>

    

