<?php

$id=$_GET['postid'];

include('./db_config/connect.php');
// Including database connection file



// Checking if the form is submitted
if (isset($_POST["submit"])) {

echo"hello";

        $query="DELETE FROM post WHERE id='$id' ";
        $result = mysqli_query($conn, $query);
    
        header('location:seePost.php');
    



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
<style>
.button{
    display: flex;
    justify-content: center;
   
    margin: auto;
    margin-top: 20%;
    
}
.link{
    text-decoration: none;
}
</style>
</head>
<body>
    <form action="./delete.php?postid=<?php echo $id; ?>" method="post">
    
    <button type="submit" name="submit" class=" btn btn-large btn-outline-danger button" >Confirm your post delete</button>
    
    </form>
</body>
</html>