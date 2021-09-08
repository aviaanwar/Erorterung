<?php
include("conn.php");
include("view/nav.php");
session_start();
if(isset($_SESSION['mail'])){
    $md=$_SESSION['mail'];
    $sql="SELECT post_cat_id,create_time FROM post WHERE create_time = (SELECT MAX(create_time) FROM post WHERE post_user_id = '$md') ORDER BY create_time";

    
    $result=mysqli_query($conn, $sql);
    $get = mysqli_fetch_assoc($result);
     $got=  $get['post_cat_id'];
    //  echo $got;
   
    $sql2="SELECT post_user_id,post_desc,create_time FROM post WHERE create_time = (SELECT MAX(create_time) FROM post WHERE post_cat_id = '$got') ORDER BY create_time";

    
    $result2=mysqli_query($conn, $sql2);
    $data = mysqli_fetch_assoc($result2);
    
    $desc=  $data['post_desc'];
    $id = $data['post_user_id'];
    if($id==$md){
        echo "There is no new post in this catagory";
    }
    else echo $id.$desc;

    }
    else{
        echo "<script type='text/javascript'>alert('You are logged out'); window.location.href='login.php'</script>";
    
    }

    
?>