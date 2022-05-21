<?php
    $servername='localhost:3307';
    $username='root';
    $password='';
    $dbname = "projekti";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_connect_error());
        }
        echo "U lidh";
?>