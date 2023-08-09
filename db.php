<?php

  /* DATABASE CONNECTION*/


 
  $servername="localhost";
  $username="root";
  $password="";
  $database="as-admin";
  
  $conn=mysqli_connect($servername,$username,$password,$database);
  
  if(!$conn){
    die('Cannot Establish A Secure Connection To The Host Server At The Moment!');
  }



?>