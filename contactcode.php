<?php
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["msg"];

//now we write here code for database connectivity
$con=mysqli_connect("localhost","root","","udb");

$query= "insert into contact (name,email,msg) values
('$name','$email','$msg')";
 mysqli_query($con,$query);
 echo "<script>alert('enquiry is done');window.location.href='contact.php';</script>";
 ?>