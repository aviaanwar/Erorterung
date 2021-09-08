<?php
include("conn.php");
include("View/nav.php");
session_start();
if(isset($_SESSION['mail'])){

    if($_SESSION['type']=="admin"){

        $sql2="SELECT * FROM info ";
        $result3=mysqli_query($conn, $sql2); 
        // $data = mysqli_fetch_assoc($result3);
        
 

        echo "<table class='table table-striped'>";
        echo "<tr>";

        echo "<th >Name </th>";
        echo "<th >Email</th>";
        echo"<th> Sex</th>";
        echo "<th>Type </th>";
        echo "<th colspan='2'align='center'>Action</th>";
        echo "</tr>";
        while($data =mysqli_fetch_assoc($result3)) {    
        
            echo "<tr>".
            "<td>".$data["name"]."</td>".
            "<td>". $data["mail"]. "</td>". 
            "<td>".$data["sex"].
            "<td>".$data["type"].
            "<td><a href='delete.php?rn=$data[mail]' onclick='retuen checkdelete()'>Ban</td>".
            "</tr>";
        }
        echo "<table>";

       
        
        echo "<p><a href='./dashboard.php'>Return to home</a></p>";
    }
    else{
      echo  "<script type='text/javascript'>alert('You are not Admin'); window.location.href='dashboard.php'</script>";

    }
}
        

else{
    echo "<script type='text/javascript'>alert('You have to login'); window.location.href='login.php'</script>";

}
?>
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