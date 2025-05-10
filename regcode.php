<?php
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$password=$_POST["password"];

$file=$_FILES["file"]["name"];
$file_tmp=$_FILES["file"]["tmp_name"];
$ext=pathinfo($file,PATHINFO_EXTENSION);
if($ext=="jpg" || $ext=="jpeg" || $ext=="jpeg" || $ext=="png" || $ext=="bmp" || $ext=="gif")
{
    $con=mysqli_connect("localhost","root","","udb");
     $query="insert into register(name,gender,email,mobile,address,file,password) values('$name',
    '$gender','$email','$mobile','$address','$file','$password')"; 
    $res=mysqli_query($con,$query);
    if($res>0)
    {
        move_uploaded_file($file_tmp,"upload/$file");
        echo "<script>alert('data saved');window.location.href='student.php';</script> ";

    }
    else
    {
        echo "<script>alert('data is not saved');</script>";

    }


}
else
{
    echo "<script>alert('only upload image files');</script>";
}

?>
