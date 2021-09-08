<?php
include("conn.php");
include("view/nav.php");
session_start();
if(isset($_SESSION['mail'])){
    $md=$_SESSION['mail'];
    $sql2="SELECT * FROM `post` WHERE `post_user_id`='$md' ";
    $result3=mysqli_query($conn, $sql2);
    

    }
    else{
        echo "<script type='text/javascript'>alert('You are logged out'); window.location.href='login.php'</script>";
    
    }

    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="main-body">
            <div class="row ">
                <div class="col-4 my-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="img\user.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo ucfirst($_SESSION["type"])?></h4>
                                </div>
                                <div class="mt-3">
                                    <h4><?php echo ucfirst($_SESSION["name"])?></h4>
                                </div>
                            </div>

                            <div class="col-sm-15 text-secondary">
                                <h6>
                                    <font color=red>Email</font>
                                </h6>
                                <?php
                                echo$_SESSION['mail']?>
                                <h6>
                                    <font color=red>Gender</font>
                                </h6>
                                <?php
                                echo$_SESSION['sex']?>
                                <br>


                                <h6>
                                    <font color=red>Type</font>
                                </h6>
                                <?php echo $_SESSION['type']?>
                            </div>
                        </div>

                    </div>

                    <!-- </div> -->
                </div>
            </div>


        </div>
        <!-- <div class="col-md-4 m-auto"> -->
        <div class="card">
            <div class="list-group">

                <?php
                            echo "<table class='table table-striped'>";
                            echo "<tr>";
                        
                                echo "<th>Post </th>";
                                echo "<th>Create Time</th>";
                                echo "<th>Delete</th>";
                        
                                echo "</tr>";
                        
                            while($data =mysqli_fetch_assoc($result3)) {
                            echo "<tr>"."<td>".$data["post_desc"]."</td>"."<td>". $data["create_time"]."</td>".
                            "<td><a href='deletepost.php?pid=$data[post_id]' onclick='retuen checkdelete()'>Delete</td>".
                            
                            "</tr>" ;
                                    }
                        
                        
                                    echo "<table>";
                            ?>

            </div>
        </div>
    </div>





    <style type="text/css">
    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 10px;
        width: 100%;
        margin: right 40%;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);


    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;

    }

    body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: sans-serif;
        background-image: url(./img/bg2.jpg);
        background-size: cover;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
    </style>

    <script type="text/javascript">

    </script>
</body>

</html>