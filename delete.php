<?php
include("conn.php");

$id=$_GET['rn'];
$sql="DELETE FROM info Where mail='$id'";
$result3=mysqli_query($conn, $sql);
if($result3)

header("Location:./admin.php");
else "couldn't execute";
?>