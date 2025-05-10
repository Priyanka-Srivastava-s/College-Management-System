<?php
session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","udb");
$query="select * from register where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    
    
    header("location:student_dashboard.php");
    $_SESSION["user"]=$email;
    $_SESSION["password"]=$password;    


}
else{
    echo "<script>alert('email or password not matched');window.location.href='login.php';</script> ";

}


?>