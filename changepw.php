<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="view/design.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
include("conn.php");
include("View/nav.php");
session_start();
if(isset($_SESSION['mail'])){
    
    if(isset($_POST["changepw"])){
        $old_pass=md5($_POST["old_pass"]);
        $new_pass=md5($_POST["new_pass"]);
    
        $mail=$_SESSION['mail'];
        $pass=$_SESSION['pass'];
        echo $pass;
        if($old_pass==$pass)
        {
            $sql="UPDATE info set pass = '$new_pass' where mail = '$mail'";
            // $result=mysqli_query($conn, $sql); 
            $result = $conn->query($sql) or die('error');
        
            if($result){

                echo "<script type='text/javascript'>alert('Your password is changed succesfully'); window.location.href='dashboard.php'</script>";
            }
        
        }

    }

}
else{
    echo "<script type='text/javascript'>alert('You have to login first'); window.location.href='login.php'</script>";

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/design.css" />

    <title>Change Password</title>
</head>

<body>
    <form method="post" action="changepw.php">


        <label for=""> Type old Password :</label>
        <input type="password" name="old_pass" required>
        <br>
        <label for=""> Type New Password :</label>
        <input type="password" name="new_pass" required>
        <br>

        <button name="changepw" type="submit">Submit</button>
    </form>
</body>

</html>