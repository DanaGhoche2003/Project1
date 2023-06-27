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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="background-color: black;">

    <section class="contact">
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
                    <h1 class="contacthead text-light"><b>CONTACT US</b></h1>

                </div>
            </div>
            <div class="row contactbox bg-light justify-content-center">

             
                    <div class="col-12 col-md-6  "  align="center">
                        <textarea name="comment" id="" rows="10"
                            style="margin: 2%;border-radius: 10px;width: 80%; "> comment</textarea>
                       
                            <div class="col-12 col-md-6 ">
                                <button type="submit" class="btn btn-outline-dark btn-lg  mb-1">Submit</button>
                            </div>
                        



                    </div>
                    <div class="col-12 col-md-6 " align="center">
                        <p class="fs-2 mt-5">Phone Number:  <br> +961 70/787/368</p>
                        <i class="bi-facebook  m-2 " ></i>
                        <i class="bi bi-instagram m-2 " ></i>
                        <i class="bi bi-whatsapp m-2 " ></i>
                    </div>
                

            </div>
        </div>

    </section>
</body>

</html>