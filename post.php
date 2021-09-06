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
<!-- threads=post -->

<body>
    <?php
    
        $id = ((int)$_GET["postid"]);
        // echo $id;
        $sql="SELECT * FROM `post` where post_id=$id";
        $result=mysqli_query($conn, $sql);
                    
        $get = mysqli_fetch_assoc($result);
            $title=$get['post_titile'];//title spelling in db is titile
            $desc=$get['post_desc'];
        
                    
            
     ?>

    <div class="container my-4">
        <div class="jumbotron" style=color:#365879>
            <h1 class="display-4"><?php echo $title;?> </h1>
            <p class="lead"> <?php echo $desc;?> </p>
            <hr class="my-4">
            <p>This is a peer to peer forum Share your thoughts.It uses utility classes for typography and spacing
                to
                space content out within the larger container.
            </p>
            <p><b>Posted by <?php echo "Avia"?> </b>
            </p>
        </div>
        <div class="contatiner my-4">
            <h2 class="py-4">Discussion</h2>









        </div>

</body>

</html>