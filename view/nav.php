<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>





                <li class="nav-item">
                    <a class="nav-link" href="about.php">About US</a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" style="margin-top:10px;" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href='./logout.php'>logout</a></li>
                            <li><a class="dropdown-item" href='./changepw.php'>Change Password</a></li>
                            <li><a class="dropdown-item" href='./contact.php'>Contact</a></li>
                        </ul>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" style="margin-top:10px;" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href='#'>
                                    <?php
                            include("conn.php");
                            
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
                                </a></li>

                        </ul>
                </li>




        </div>
    </div>
</nav>