<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: demo.html");
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found!";
    }

    $conn->close();
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

.container-fluid{
    /* border: 1p solid red; */
    height: 640px;
    width: 1300px;
    display: flex;
}
.cont{
    width: 45%;
    height: 100%; 
    /* border:1px solid; */
}
.teacher{
    height: 574px;
    margin-left: 240px;
    margin-top: 40px;
    
}
.cont1{
    width: 50%;
    height: 100%;
}
.cont3{
    width: 60%;
    height: 92%;
    /* border: 1px solid; */
    margin-top: 40px;
    margin-left:40px;
    background-color: #FAD6A5;
    /* border:1px solid; */
}
.move{
    margin-left: 40px;
}
.login p{
    margin-left:140px;
    font-size: 40px;
}
h5{
    margin-left:80px;
    margin-top:10px;
}
a{
    margin-left:40px;
    text-decoration:none;
}
</style>

<body>
    <div class="container-fluid mx-auto p-2  my-3">
        <div class="col-lg-6   cont">
            <img src="https://images.pexels.com/photos/3661264/pexels-photo-3661264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=50"
                alt="" class="teacher">
        </div>
        <div class="col-lg-6  cont1">
                <div class="cont3">
                    <div class="login" >
                        <div class="log2" style="border:1px solid #FAD6A5">
                            <p style="margin-top:60px";>Login</p>
                        </div>
                    <form method="post">
                    
                        <div class="mb-3 w-75 move" style="margin-top:20px";>
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="username">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                       
                        <div class="mb-3  w-75 move">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                       
                        <button type="submit" class="btn btn-dark move" value="login">Submit</button>
                    </form>
                    <h5>Don't have an account yet?<h5>
                    <a href="registration.php">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



