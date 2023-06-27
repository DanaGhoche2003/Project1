<?php

include("./signupaction.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <section class="vh-100" style="background-color: black;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./myimages/gym3.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center px-5">
                                <div class="card-body  text-black">

                                    <form action="./signup.php" method="post" enctype="multipart/form-data" >

                                        <div class="d-flex align-items-center  pb-1">
                                            <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold  mb-0 d-flex justify-content-center"><img src="./myimages/gym2.jpg" style="width: 30%;"></span>
                                            
                                        </div>

                                        <h5 class="fw-normal mb-2 pb-3" style="letter-spacing: 1px;">Sign Up</h5>
                                        <div class="form-outline mb-2">
                                            <input type="text" id="form2Example17"
                                                class="form-control form-control-lg" name="username" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" name="email"/>
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg"  name="password"/>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>
                                        <div class="form-outline mb-0">
                                            <input type="file" id="form2Example27"
                                                class="form-control form-control-lg" name="image"/>
                                            <label class="form-label" for="form2Example27">Image</label>
                                        </div>


                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Sign Up</button>
                                        </div>

                                    
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</body>

</html>