<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    header("location:signup.php");
}

include("./addpostaction.php");

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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <style>
        body{background-color: black;}

        .form1{background-color: white;
            background-size: contain;
            display: flex;
            justify-content: center;
            
            width: 40%;
            margin: auto;
            margin-top: 15%;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="form1 ">
    <form action="addPost.php" method="post" enctype="multipart/form-data">
        <h1 class="d-flex justify-content-center mb-5">ADD POST</h1>
        <div class="form-outline">
            <input type="file" id="form12" class="form-control" name="image" placeholder="Enter an image" />
            <label class="form-label mb-4" for="form12">Post image</label>
          </div>
       
        <input type="text" id="form12" class="form-control" name="desc" placeholder="Enter description" />
        <label class="form-label mb-4" for="form12">Description</label>
<br>
        <button type="submit" class="btn btn-outline-dark mb-5" name="submit">add post</button>
    </form>
</div>
</body>
</html>