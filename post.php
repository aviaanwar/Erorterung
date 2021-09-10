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
    
        $id = ((int)$_GET["postid"]);
        // echo $id;
        $sql="SELECT * FROM `post` where post_id=$id";
        $result=mysqli_query($conn, $sql);
                    
        $get = mysqli_fetch_assoc($result);
            $title=$get['post_titile'];//title spelling in db is titile
            $desc=$get['post_desc'];
            $user=$get['post_user_id']
        
                    
            
     ?>
     <!-- show post in post page -->

    <div class="container my-4">
        <div class="jumbotron" style=color:#365879>
            <h3 class="display-4">Post </h3>
            <h5 class="lead"> <?php echo $desc;?> </h5>
            <hr class="my-4">
            <p>This is a peer to peer forum Share your thoughts.
            </p>
            <p><b>Posted by <?php echo ucfirst($user)?> </b>
            </p>
        </div>

        <!-- comment input -->


        <?php
        
        
        $method=$_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            $comment=$_POST['comment'];
           
            $sid=$_SESSION['name'];
        
        
        
            $sql1= "INSERT INTO  cmt (`comment_body`, `post_id`, `comment_by`, `comment_time`) 
            VALUES ( '$comment', '$id', '$sid', current_timestamp())";
            $result1=mysqli_query($conn, $sql1); 
    
        
        // $get = mysqli_fetch_assoc($result1);
    }
    
    
    ?>

        <div class="container">
            <h2 class="py">
                <font color=#824032>Share your openion</font>

            </h2>

            <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']?>">
                <!-- <div class="mb-4">
                    <label for="example" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="titke" aria-describedby="">
                    <div id="title" name="title" class="form-text">keep your title short </div>
                </div> -->
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="comment" name="comment"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">
                        <font color=#aaa>Comment here</font>
                </div>
                <br>
                <button name="submit" type="submit" class="btn btn-dark">Comment</button>
            </form>

        </div>
        <!-- comment show -->
        <div class="contatiner my-5" style="margin: left 20%;">
            <h2 class="py-4">Discussion</h2>
            <div class="con my-5" style="margin: right 30%;">

                <?php
                $id = ((int)$_GET["postid"]);
            
                $sql2="SELECT * FROM cmt WHERE post_id=$id";
                $result2=mysqli_query($conn, $sql2);

                while($row = mysqli_fetch_assoc($result2)){

                    $id=$row['comment_id'];
                    $content=$row['comment_body'];
                    $by=$row['comment_by'];
                    echo'
                    <div class="media my-3">
                        <img src="img/2.jpg" width="54px" class=" mr-3" alt="...">
                        <div class="media-body">
                       '.$content.'
                       <p><br>Comment by <br>'.ucfirst($by).'</p>
                
                        </div>
                    </div>
                        ';
                }
             ?>
            </div>
        </div>
        <!-- end comment -->




</body>

</html>