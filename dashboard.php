<?php
include("conn.php");
include("view/nav.php");
// session_start();
if(isset($_SESSION['mail'])){

    }
    else{
        echo "<script type='text/javascript'>alert('You are not logged in'); window.location.href='login.php'</script>";
    
    }

    
?>
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

    <title>Welcome</title>
</head>

<body>


    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2800x900/?travel" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2800x900/?movie" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2800x900/?sports" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php if($_SESSION['type']=='admin'){
       echo' <button type="button" class="btn btn-dark btn-lg btn-block"; style= "width:100%";> <a href="./admin.php">USER LIST</a></button>';
       

    }
    else echo"Hello Dear User";
    ?>
    <p style=" margin-left: 46%; font-size:28px">Hi <b
            style="font-size:34px; margin-left:5px"><?php echo ucfirst($_SESSION['name'])?></b></p>
    <br>




    <div class='container' style='margin-left: 15%' ;>
        <div class='row '>
            <?php
            $sql="SELECT * FROM `catagories`";
            $result=mysqli_query($conn, $sql); 
            
            while($get =mysqli_fetch_assoc($result)) {
                $cat_id =$get['cat_id'];
   
               $cat_name=$get['cat_name'];
            
               $cat_description=$get['cat_description'];
              
               
               echo"  
            <div class='col-4 my-4 '> 
    
                    <div class='card' style='width: 20rem;'>
                        <img src='https://source.unsplash.com/500x500/?.$cat_name.',actress' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'><herf='threads.php?cat_id='.$cat_id.''>$cat_name</a></h5>
                            <p class='card-text'>$cat_description</p>
                            <a href='threads.php?catid=$cat_id'' class='btn btn-primary'>Browse Catagory</a>
                        
                            </div>
                    </div>
                </div>
                ";
                
            }
            ?>

        </div>
    </div>
</body>

</html>