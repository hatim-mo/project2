<?php include('connection.php');


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sqli = mysqli_query ($conn, "INSERT INTO admin  (name,email,password) VALUES 
('$name','$email','$password')");


?>
