<?php
session_start();
$name=$_SESSION['name'];
if(isset($_SESSION['name']))
{
session_unset();
session_destroy();
echo"<script type='text/javascript'>alert('You are logged out!'); window.location.href='./login.php'</script>";
}

?>