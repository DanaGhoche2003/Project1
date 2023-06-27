<?php

session_start();
include("./db_config/connect.php");
if (!isset($_SESSION['logged_in'])) {
    header("location:./signup.php");
}


$sql = "SELECT u.id, p.id as post_id, u.username, u.image, p.user_id, p.description, p.post_image, p.created_at
        FROM user AS u
        JOIN post AS p where  u.id = p.user_id
        ORDER BY p.created_at DESC";

$result = mysqli_query($conn , $sql);





?>


<!DOCTYPE html>
<html>
<head>
    <title>Post Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <style>
        .post-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-content {
            margin-bottom: 20px;
        }

        .post-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .post-date {
            font-size: 14px;
            color: #888;
        
        }
    
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-50  fixed-top ">
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
                            <a class="nav-link text-light" href="./addpost.php">ADD POST</a>
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
<br><br><br><br><br>


    <?php
    
    if(mysqli_num_rows($result) < 1){
        echo "no data found";
    }else{
        while($row = mysqli_fetch_assoc($result)){
            $post_id = $row['post_id'];
            $id = $row['id'];
            $name = $row['username'];
            $image = $row['image'];
            $user_id = $row['user_id'];
            $description = $row['description'];
            $post_image = $row['post_image'];
            $created_at = $row['created_at'];
    
    ?>
    <div class="post-container mb-3">
        <div class="post-header">
           <img src="./images/<?php echo $image?>" alt="User Avatar">
           <h3><?php echo $name; ?></h3>
        </div>
        <div class="post-content">
            <img src="./images/<?php echo $post_image?>" class="post-image" alt="Post Image">
            <p><?php echo $description?></p>
        </div>
  
        <div class="post-date">
            <p>Posted on <?php echo $created_at?></p>
        </div>
        <?php if ($row['user_id']==$_SESSION['userId'])
  {    ?><a href="./delete.php?postid=<?php echo $post_id;?>"><button type="submit" name="submit" class="btn btn-outline-dark">delete</button></a>

  <?php } 
  
  ?>
    </div>


  
  
    
    <?php } ?>

    <?php }     // echo '<div class="post-container">';
            // echo '<div class="post-header">';
            // echo '<img src="' . $image . '" alt="User Avatar">';
            // echo '<h3>' . $name . '</h3>';
            // echo '</div>';
            // echo '<div class="post-content">';
            // echo '<img src="' . $post_image . '" class="post-image" alt="Post Image">';
            // echo '<p>' . $description . '</p>';
            // echo '</div>';
            // echo '<div class="post-date">';
            // echo '<p>Posted on ' . $created_at . '</p>';
            // echo '</div>';
            // echo '</div>';?>
</body>
</html>
