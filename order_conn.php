<?php include('connection.php');


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sqli = mysqli_query ($conn, "INSERT INTO orders  (name,email, subject, message) VALUES 
('$name','$email','$subject','$message')");

?>
<script>
window.alert('Done ,Successfully ordered');
window.location.href ='index.php';
</script>
