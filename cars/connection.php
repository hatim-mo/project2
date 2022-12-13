

<?php

$conn = mysqli_connect ('localhost','root','','cars');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>