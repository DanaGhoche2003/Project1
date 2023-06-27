<!-- connection with database -->
<?php

$host = "localhost";
$db = "danafinal";
$user = "root";
$password = "";

try {
    $conn = mysqli_connect($host, $user, $password, $db);
  //  echo("done");
} catch (Exception $e) {
  // echo("Error:" . $e);
}



