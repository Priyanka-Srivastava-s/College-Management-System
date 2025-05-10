<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","udb");
    $query="select * from study";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0)
    {
    ?>
    
<h3 class="mt-5">Study Material</h3>
    <table border="1" class="table">
    <tr>
    
    <th>Study Material</th>
    <th>Download Here</th>


    </tr>
    <?php
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
    <tr>
        <td><?php echo $row["file"]?></td>
   
    <td>

        <a href="upload/<?php echo $row["file"]?>">Download</a></td>

    
    </tr>
    <?php
    }
    ?>
    </table>
    
<?php
    }
    else
    {
        echo "no record found";
    }
    ?>
    
</body>
</html>