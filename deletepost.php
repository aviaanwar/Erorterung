<?php
include("conn.php");

$id=$_GET['pid'];
$sql="DELETE FROM post Where post_id='$id'";
$result3=mysqli_query($conn, $sql);
if($result3)

header("Location:./profile.php");
else "couldn't execute";
?>