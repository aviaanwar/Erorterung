<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/design.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">FORUM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

            </ul>
        </div>
    </div>
    <button class='btn btn-light me-2 ' style='margin: right 10%;' type='button'><a href='login.php'> Login
        </a></button>
</nav>

<body>
    <section id="banner">
        <h2>FORUM</h2>
        <p>A Community Site to keep you up to Date</p>
        <ul>
            <a href="reg.php"><button class="btn btn-dark me-2 button">Register</button></a>

        </ul>
    </section>
</body>

</html>



<!-- echo "<button class='btn btn-dark me-2 button' style='margin-left:50%' type='button'><a href='login.php'> Login
    </a></button>"; --> -->