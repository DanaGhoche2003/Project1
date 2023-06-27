<?php


$id = $_GET['postid'];

include("./db_config/connect.php");


 if (isset($_POST["delete"])) {

  

    $sql = "DELETE FROM post WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    header("location:seePost.php");

    if ($result) {
        echo "Record deleted successfully";
    } 
}


?>

<form action="deletaction.php?postid=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
  
    <button type="submit" name="delete">delete</button>
</form>





