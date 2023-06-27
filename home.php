<?php
session_start();
if(!isset($_SESSION['logged_in']))
{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>




    <section class="main" id="home">
        <!-- Navbar start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-50 ">
            <div class="container-fluid">
                <a class="navbar-brand text-light fs-1" href="#">D-ACTIVE</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-auto gap-5 fs-5">
                      

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#home3">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./addpost.php">ADD POST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./logout.php">LOGOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./seePost.php">POSTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="./contactus.php" tabindex="-1">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row  ">
                <div class="col-sm-12">
                    <p class="text-light " style="font-size: 55px;">BE STRONGER THAN YOUR EXCUSE</p>
                </div>
                <div class=" col-12 col-lg-8 ">




                </div>

            </div>
        </div>
    </section>



    <section id="home2">
        <div class="container ">
            <div class="row row1">
                <div class=" col-12 col-md-6 pt-5 ">
                    <br>
                   <a href="./role.php"> <button class=" btn btn-lg mt-5  col-12 fs-1 text-light"> CHOOSE YOUR PLAN</button></a>
                   <a href="./role.php"> <button class=" btn btn-lg  col-12 fs-1 mt-5"> OUR TRAINERS</button></a>
                

                </div>
                <div class=" col-12 col-md-6 col2 d-flex justify-content-center">
                    <img src="./myimages/gym6.png" class="img " align="center">


                </div>
            </div>

        </div>

    </section>

    <section id="home3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-start text-dark abouthead"><b>ABOUT US</b></h1>
                    <p class="fs-3 mt-5"><b>Our gym was founded in 2023 with the goal of creating a welcoming environment for people of all fitness levels. We believe that everyone deserves the opportunity to improve their health and wellness, regardless of their experience or background. Our team of experienced trainers is dedicated to helping you achieve your fitness goals through personalized training plans and group classes. Whether you're looking to build strength, lose weight, or simply improve your overall health, we're here to support you every step of the way.</b></p>

                                  


                </div>
            </div>
        </div>

    </section>







</body>

</html>