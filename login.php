
<?php include('connection.php');?>
<?php

session_start();
// die($_SESSION["userid"]);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
	$password=$_POST['password'];

}?>
<?php
$sql = mysqli_query($conn,"SELECT * FROM admin where  name='$name' and password='$password' ");



 if (mysqli_num_rows($sql)>0) {

    $sqlio=mysqli_fetch_array($sql);

    $_SESSION["userid"]=$sqlio["id"];

     echo "<script>  window.location.href ='index.php' </script>";
    
// echo $sql ;
        
  } else {
     echo "<script>  window.location.href ='Admin.login'; </script>";
    // echo $sql;
  }
  ?>
  
  

