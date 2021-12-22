<?php 
  include "PHP/Connection.php";

  $Name = $_POST['name'];
  $Mno = $_POST['phone'];
  $email = $_POST['mail'];
  $psw = $_POST['pwd'];

  $sql = "INSERT INTO User(Name, Mno, email, pwd) VALUES ('$Name', $Mno, '$email', '$psw')";

  if (mysqli_query($conn, $sql)) {
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>