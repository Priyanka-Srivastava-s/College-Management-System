<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</head>
<body>
<?php
session_start();
// include("bootstrap.php");
//echo $_SESSION["user"];
if(!isset($_SESSION["user"]))
{
    header("Location:login.php");
}
include("admin/bootstrap.php");
?>  
<div class="row  m-0 p-0 pt-3 pb-3">
<div class="col-sm-2">
    <img src="images/logo.png" class="w-100">
</div>
<div class="col-sm-9"></div>
<div class="col-sm-1">
    <img src="images/profile.jpg" class=" w-50">
</div>
</div>
<!-- new row -->
 <!-- menu -->
 <div class="row m-0 p-0  ">
            <div class="col-sm-2  mt-2">
                <ul type="none">
                    <li><i class="fa-solid fa-gauge px-2"></i>
                    <a href="student_dashboard.php" class="li">Dashboard</a>
                </li>
                      
                
                   
                    
                    
                   
                    <li class="mt-3"><a href="slog.php" class="li"><i class="fa-solid fa-right-from-bracket px-2"></i>Logout</a>
                    </li>



                </ul>

            </div>
            <div class="col-sm-10 bg-light  ">
                <div class="row m-0 p-0 pt-5 pb-5">
                    <div class="col-sm-12 ">
                        <ul type="none">
                            <li style="display: inline;">Home</li>
                            <li style="display: inline;">/</li>
                            <li style="display: inline;">Dashboard</li>
                        </ul>
                        <h3>WELCOME </h3>
                        <?php
                        include('sview.php');
                        ?>
                    </div>

                </div>
                <div class="row m-0 p-0 ">
                    
                </div>
</div>


    
</body>
</html>