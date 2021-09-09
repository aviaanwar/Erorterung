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
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href='./logout.php'>logout</a></li>
                            <li><a class="dropdown-item" href='./changepw.php'>Change Password</a></li>
                            <li><a class="dropdown-item" href='./contact.php'>Contact</a></li>
                        </ul>
                </li>
                <li class="nav-item dropdown">
              

                    <a class="nav-link dropdown" style="margin-top:10px;" href="#" id="ownMenuLink"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                        </svg>
                        </a>

                        <ul class="dropdown-menu" >
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
                                else echo $id." "."<font color =#A59793 >Posted this </font>"."<br> '".$desc."<font color =#A59793 >' <br>in the catagory where you have recently posted</font>";

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