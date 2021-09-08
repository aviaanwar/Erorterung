<?php
include("conn.php");
include("View/nav.php");
session_start();
if(isset($_SESSION['mail'])){

    if($_SESSION['type']=="admin"){
        
        $id = ((int)$_GET["catid"]);
        
        $method=$_SERVER['REQUEST_METHOD'];
         if($method=='POST'){
             $th="zero";
             $dec=$_POST["desc"];
             $sid=$_SESSION['mail'];
        
           
             
                 $cat_id =$get['cat_id'];
    
                $cat_name=$get['cat_name'];
             
                $cat_description=$get['cat_description'];
           
            $sql1= "INSERT INTO catagories (cat_id, cat_name, cat_description,create_date) 
            VALUES ('$id', '$name', '$dec', current_timestamp());";
            $result1=mysqli_query($conn, $sql1); 
         }
        
         else{
         echo "<script type='text/javascript'>
         alert('You are not Admin');
         window.location.href = 'dashboard.php'
         </script>";
     
     
         }
    } echo'?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="view/design.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Discussion forum</title>
</head>

<body>