<?php
session_start();
include("conn.php");

if(isset($_POST["login"])){
    $entr_mail=$_POST["entr_mail"];
   $entr_pass=$_POST["entr_pass"];
   $new_pass=md5($entr_pass);
    

   

$sql="SELECT * FROM info where mail='$entr_mail' AND pass='$new_pass'";
$result2=mysqli_query($conn, $sql); 
$get = mysqli_fetch_assoc($result2);


  
  $name=$get['name'];
  $_SESSION['name']=$name;
  $pass=$get['pass'];
  $_SESSION['pass']=$pass;

  $mail=$get['mail'];
  $_SESSION['mail']=$mail;
  $sex=$get['sex'];
  $_SESSION['sex']=$sex;
  $type=$get['type'];
  $_SESSION['type']=$type;
  
  

//  if($get['name'])  {
//      $name = $get['name'];
//      $_SESSION['name']=$name;
//     //  echo $name;
//  }
if($result2)

header("Location: ./dashboard.php");

else {
    echo "failed";
    }

// print_n("logged in".$result2);

// else {
//     echo "failed";
//     }

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/design.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Login</title>
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
                </form>
            </div>
        </div>
    </nav>

    <form method="post" action="login.php">
        <h1> Login </h1>
        <label for="">User mail :</label>
        <input type="mail" name="entr_mail" required>
        <br>

        <label for="">Password :</label>
        <input type="password" name="entr_pass" required>
        <br>
        <input type="checkbox" id="1" name="check">
        <br>
        <label for=""> Remember me</label><br>
        <button name="login" type="submit" class="btn btn-dark me-2 ">Submit</button>
    </form>

</body>

</html>