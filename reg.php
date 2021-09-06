<?php
session_start();
include("conn.php");

if(!isset($_SESSION['name'])){

if(isset($_POST["register"])){
    $mail=$_POST["mail"];
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $con_pass=$_POST["con_pass"];
    $sex=$_POST["sex"];
    $type=$_POST["type"];


  
  

    if($pass==$con_pass){
      $pass=md5($pass);

        $sql= "INSERT INTO info (mail,name,pass,sex, type) 
                VALUES('$mail','$name','$pass','$sex','$type')";
        $result1=mysqli_query($conn, $sql); 
        echo "<script type='text/javascript'>alert('User is added'); window.location.href='login.php'</script>";
    }
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/design.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="View/design.css" />


    <title>Registration</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FORUM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <form method="post" action="reg.php">
        <h1> Registration Form </h1>
        <label for="">Email :</label>
        <input type="mail" name="mail" required>
        <br>

        <label for="">Name :</label>
        <input type="text" name="name" required>
        <br>

        <label for="">Password :</label>
        <input type="password" name="pass" required>
        <br>
        <label for=""> Confirm Password :</label>
        <input type="password" name="con_pass" required>
        <br>
        <label for="">Sex :</label>
        <input type="radio" name="sex" value="male" required>Male
        <input type="radio" name="sex" value="female" required>Female
        <br>
        <label for="">User Type :</label>
        <input type="radio" name="type" value="admin" required>Admin
        <input type="radio" name="type" value="user" required>User
        <br>
        <br>



        <button name="register" type="submit" class="btn btn-dark me-2 ">Submit</button>

    </form>