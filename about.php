<?php
include("view/nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />
</head>

<body style="background-color: black; color: rgb(245, 237, 237);">
    <div class="jumbotron jumbotron-fluid bg-dark text-white text-center" style="background: #aaa;">
        <div class="container">
            <h1 class="display-3">Welcome to Discussion forum</h1>
            <p class="lead">Where you can share your thougts</p>
            <p> Here I am building a site for the recent trending topics.People can post about them here and state their
                point of view on that topic. They can find the topics in which they are interested and can start a
                conversation about it.
            </P>
        </div>
    </div>

    <div class="container text-muted">
        <!-- cards -->

        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/500x500/?politics" />
                    <div class="card-block">
                        <h3 class="card-title">Politics</h3>
                        <p class="card-text">
                            What is happening with the world economy.Get every trending news

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/500x500/?cricket" />
                    <div class="card-block">
                        <h3 class="card-title">Football</h3>
                        <p class="card-text">
                            Get the latest update of your favourite player.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/500x500/?movie" />
                    <div class="card-block">
                        <h3 class="card-title">Movies</h3>
                        <p class="card-text">
                            Find the latest gossips about trending movies. Share your thoughts about it
                        </p>
                    </div>
                </div>
            </div>
        </div>






</body>

</html>