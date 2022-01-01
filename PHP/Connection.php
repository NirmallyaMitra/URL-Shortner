<?php
  $servername = "localhost";
  $username = "root";
  $password = "Pravat@123";
  $dbname = "urlshortner";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>