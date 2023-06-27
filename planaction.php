<?php
include("./db_config/connect.php");
session_start();

$id=$_SESSION['userId'];

if (isset($_POST["first"])) {
    

$checkempty="SELECT plan FROM trainers WHERE user_id='$id'";
$results=mysqli_query($conn,$checkempty);
$rowcount=mysqli_num_rows($results);
if($rowcount>0)
{      $sql = "UPDATE trainers SET plan='Workout+Cardio(2$)' WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);
    header("location:./home.php");

}else{
        $sql = "INSERT INTO trainers (user_id,plan) VALUES ('$id','Workout+Cardio(2$)')";
        $result = mysqli_query($conn, $sql);
        header("location:./home.php");}
    }

   else if (isset($_POST["second"])) {
    
    $checkempty="SELECT plan FROM trainers WHERE user_id='$id'";
$results=mysqli_query($conn,$checkempty);
$rowcount=mysqli_num_rows($results);
if($rowcount>0)
{      $sql = "UPDATE trainers SET plan='Workout+Cardio(12$)' WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);
    header("location:./home.php");

}else{


        $sql = "INSERT INTO trainers (user_id,plan) VALUES ('$id','Workout+Cardio(12$)')";
        $result = mysqli_query($conn, $sql);

        header("location:./home.php");
    }}

   else if (isset($_POST["third"])) {
    

    $checkempty="SELECT plan FROM trainers WHERE user_id='$id'";
    $results=mysqli_query($conn,$checkempty);
    $rowcount=mysqli_num_rows($results);
    if($rowcount>0)
    {      $sql = "UPDATE trainers SET plan='Workout+Cardio+DetPLan(50$)' WHERE user_id='$id'";
        $result = mysqli_query($conn, $sql);
        header("location:./home.php");
    
    }else{


        $sql = "INSERT INTO trainers (user_id,plan) VALUES ('$id','Workout+Cardio+Diet plan(50$)')";
        $result = mysqli_query($conn, $sql);

        header("location:./home.php");}
    }
?>
