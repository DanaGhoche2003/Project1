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
    <section class="rolesection">
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
                            <a class="nav-link active text-light" aria-current="page" href="./home.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="./home.php#home3">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./logout.php">LOGOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="./contactus.php" tabindex="-1">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="rolehead"><b>PLANS</b></h1>

                </div>
            </div>
            
            <div class="row justify-content-center mt-5 row2" style="border: 2px solid; border-radius: 20px;" align="center">
                <div class="col-12 col-md-6 col-xl-3" style="margin:1%;">
                    <div class="card bg-danger my-2" style="width: 90%;">
                        <img class="card-img-top"
                            src="./myimages/gym6.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">Workout + Cardio</h2>
                            <p class="card-text text-dark"><b> 2$</b></p>
                            <div class="btn btn-danger fs-4">Day</div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3"  style="margin:1%;">
                    <div class="card bg-danger  my-2" style="width: 90%;">
                        <img class="card-img-top" src="./myimages/gym7.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">Workout + Cardio</h2>
                            <p class="card-text text-dark"><b> 12$</b></p>
                            <div class="btn btn-danger fs-4">Week</div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-xl-3"  style="margin:1%;">
                    <div class="card bg-danger my-2" style="width: 90%;">
                        <img class="card-img-top" src="./myimages/gym8.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">W + C + Diet Plan</h2>  
                            <p class="card-text text-dark"><b> 50$</b></p>
                            <div class="btn btn-danger fs-4">Month</div>
                        </div>

                    </div>

                </div>
            </div>
    </section>







    <section class="rolesection" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="rolehead "><b>TRAINERS</b></h1>

                </div>
            </div>
            <div class="row justify-content-evenly mt-5 row2" style="border: 1px solid;border-radius: 20px;" align="center">
                <div class="col-12 col-md-6 col-xl-3" style="margin:1%;">
                    <div class="card bg-danger my-2" style="width: 90%;">
                        <img class="card-img-top"
                            src="./myimages/gym10.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">Certificate</h2>
                        
                            <div class="btn btn-danger fs-4">Lasya</div>
                        </div>

                    </div>
                </div>
                <div class=" col-12 col-md-6 col-xl-3"  style="margin:1%;">
                    <div class="card bg-danger my-2" style="width: 90%;">
                        <img class="card-img-top" src="./myimages/gym9.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">Certificate</h2>
                           
                            <div class="btn btn-danger fs-4">Alex</div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-xl-3"  style="margin:1%;">
                    <div class="card bg-danger my-2" style="width: 90%;">
                        <img class="card-img-top" src="./myimages/gym11.jpg">
                        <div class="card-body">
                            <h2 class="card-title text-light">Certificate</h2>
                            
                            <div class="btn btn-danger fs-4">Nora</div>
                        </div>

                    </div>

                </div>
            </div>
    </section>
</body>

</html>