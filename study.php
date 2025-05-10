<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
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
 <div class="row m-0 p-0 mt-3">
            <div class="col-sm-2  mt-2">
            <ul type="none">
                    <li><i class="fa-solid fa-gauge px-2"></i>
                    <a href="student_dashboard.php" class="li">Dashboard</a>
                </li>
                    
                    
                    <li class="mt-3"><a href="s_change.php" class="li"><i class="fa-solid fa-key px-2"></i>Change Password</a><i
                            class="fa-solid fa-chevron-right" style="float:right"></i></li>
                           
                    
                    
                 
                   
                   
                   
                    <li class="mt-3"><a href="logout.php" class="li"><i class="fa-solid fa-right-from-bracket px-2"></i>Logout</a>
                    </li>



                </ul>
            </div>
            <div class="col-sm-10 bg-light  ">
                <div class="row m-0 p-0">
                    <div class="col-sm-12 ">
                        <ul type="none">
                            <li style="display: inline;">Home</li>
                            <li style="display: inline;">/</li>
                            <li style="display: inline;">Dashboard</li>
                        </ul>
            <div class="col-sm-10 bg-light">
                <div class="row mb-5">
                    <div class="col-sm-4">
                        <h3>
                            Study Material
                        </h3>
                        <?php
                        include("sview.php");
                        ?>
                    
                       
                    </div>
                </div>
                
               
                    </div>
                </div>


    
</body>
</html>