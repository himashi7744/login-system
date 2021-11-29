<?php
include "connect.php";


  session_start();
  $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $age= mysqli_real_escape_string($conn, $_POST['age']); 
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  $food = mysqli_real_escape_string($conn, $_POST['food']);
  

 

  $sql = "INSERT INTO student( first_name,last_name,age,dob,food)
          VALUES('{$firstName}','{$lastName }','{$age}','{$dob}','{$food}');";

  if(mysqli_multi_query($conn, $sql)){
   
     header("location:application.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }





