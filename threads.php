<?php
include("conn.php");
include("view/nav.php");
// session_start();
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
    //post input
    $id = ((int)$_GET["catid"]);
    
    $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
         $th="zero";
         $dec=$_POST["desc"];
         $sid=$_SESSION['mail'];
    
   
       
        $sql1= "INSERT INTO post (post_titile, post_desc, post_cat_id, post_user_id, create_time) 
        VALUES ('$th', '$dec', '$id', '$sid', current_timestamp());";
        $result1=mysqli_query($conn, $sql1); 
  ;
    
    // $get = mysqli_fetch_assoc($result1);
}
    
    
    ?>
    <!-- post form -->
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

            </h2><br>
            <form method="POST" action="<?php $_SERVER['REQUEST_URI']?>">
                <!-- <div class="mb-4">
                    <label for="example" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="titke" aria-describedby="">
                    <div id="title" name="title" class="form-text">keep your title short </div>
                </div> -->
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="desc" name="desc"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">
                        <font color=#aaa>Type your post here</font>
                </div>
                <br>

                <button name="submit" type="submit" class="btn btn-dark">Post</button>
            </form>

        </div>
        <div class="contatiner my-8">
            <h2 class="py-5"style="margin-left:2%;" >
                <font color=#824032>
                    Latest updates</font>
            </h2>
            <!-- showpost -->
            <?php
                $id = ((int)$_GET["catid"]);
            
                $sql2="SELECT * FROM post WHERE post_cat_id=$id";
                $result2=mysqli_query($conn, $sql2);

                while($row = mysqli_fetch_assoc($result2)){

                    $id=$row['post_id'];
                    $desc=$row['post_desc'];
                    echo'
                    <div class="media my-3" style="margin-left:5%;">
                        <img src="img/use.jpg" width="54px" class=" mr-3" alt="...">
                        <div class="media-body" >
                        <h5 class="mt-0"> <a href="post.php?postid='.$id.'">'.$desc .'</a></h5>
                
                        </div>
                    </div>
                        ';
                }
             ?>


        </div>

</body>

</html>