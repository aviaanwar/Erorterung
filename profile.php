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
include("view/nav.php");
session_start();
if(isset($_SESSION['name'])){
    echo "<h1>Profile</h1>";
    echo "<table  border=1 width=100 height=100>";
    echo "<tr>";
    echo "<th >Name </th>";
    echo "<th >Email</th>";
    echo "<th >Type </th>";
    echo "</tr>";
    echo "<tr>"."<td>".$_SESSION["name"]."</td>"."<td>". $_SESSION["mail"]. "</td>". "<td>".$_SESSION["type"]."</tr>";
    echo"</table>";
    echo "<p><a href='./dashboard.php'>Return to home</a></p>";
}
else{
    echo "<script type='text/javascript'>alert('You have to login first'); window.location.href='login.php'</script>";}


?>