<?php 


    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="playground";


    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Faiild : " . mysqli_connect_error());
    }
  

