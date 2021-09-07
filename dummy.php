<?php
include("conn.php");
include("view/nav.php");
session_start();
if(isset($_SESSION['mail'])){

    }
    else{
        echo "<script type='text/javascript'>alert('You are logged out'); window.location.href='login.php'</script>";
    
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

    <title>Discussion forum</title>
</head>

<body>

    <?php
    
        $id = ((int)$_GET["catid"]);
        $_SESSION['id']=$id;
        $sql="SELECT * FROM `catagories` where cat_id=$id";
        $result=mysqli_query($conn, $sql);
                    
        $get = mysqli_fetch_assoc($result);
        $catname=$get['cat_name'];
        $catdesc=$get['cat_description'];
                    
            
     ?>
    <?php
    $id = ((int)$_GET["catid"]);
    
    $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
         $th=$_POST["title"];
         $dec=$_POST["desc"];
    
    
       
        $sql1= "INSERT INTO post (post_titile, post_desc, post_cat_id, post_user_id, create_time) 
        VALUES ('$th', '$dec', '$id', '0', current_timestamp());";
        $result1=mysqli_query($conn, $sql1); 
  ;
    
    // $get = mysqli_fetch_assoc($result1);
}
    
    
    ?>
    <div class="container my-4">
        <div class="jumbotron" style=color:#365879>
            <h1 class="display-4">Welcome to <?php echo $catname;?> Forum</h1>
            <p class="lead"> <?php echo $catdesc;?> </p>
            <hr class="my-4">
            <p>This is a peer to peer forum Share your thoughts.
            </p>
            <!-- <a class="btn btn-primary btn-lg" href="#" role="button"></a> -->
        </div>
        <div class="container">
            <h2 class="py">
                <font color=#824032>Share your thoughts</font>

            </h2>

            <form method="POST" action="<?php $_SERVER['REQUEST_URI']?>">
                <div class="mb-4">
                    <label for="example" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="titke" aria-describedby="">
                    <div id="title" name="title" class="form-text">keep your title short </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="desc" name="desc"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">
                        <font color=#aaa>Type your post here</font>
                </div>

                <button name="submit" type="submit" class="btn btn-dark">Post</button>
            </form>

        </div>
        <div class="contatiner my-4">
            <h2 class="py-4">
                <font color=#824032>
                    Latest updates</font>
            </h2>
            <!-- showpost -->
            <?php
                $id = ((int)$_GET["catid"]);
            
                $sql2="SELECT * FROM post WHERE post_cat_id=$id";
                $result2=mysqli_query($conn, $sql2);

                while($row = mysqli_fetch_assoc($result2)){

                    $title=$row['post_titile'];
                    $desc=$row['post_desc'];
                    echo'
                    <div class="media my-3">
                        <img src="img/2.jpg" width="54px" class=" mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0"> <a href="post.php?postid='.$id.'">'.$title.'</a></h5>'.$desc .'
                
                        </div>
                    </div>
                        ';
                }
             ?>
            <!-- dummy post -->
            <div class=" media my-3">
                <img src="img/2.jpg" width="54px" class=" mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">TikTok Announces TikTok World Showcase Event for September 28th
                    </h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                    sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                    nunc ac
                    nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
            <!-- form for post -->






            <!-- dymmy of threads -->


            <!-- // end -->

        </div>

</body>

</html>