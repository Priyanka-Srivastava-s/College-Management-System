<?php
include("header.php");
?>
<div class="row sec2">
    <div class="col-sm-12 sec2-inner">
        <h3 class="text-white text-center "  style="margin-top:100px;">Gallery</h3>
    
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
        <?php
            $con=mysqli_connect("localhost","root","","udb");
            $query="select * from gallery";
            $res=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($res))
        {
        ?>
    

    <img src="upload/<?php echo $row["file"]?>" class="mt-3"  style="width:313px;height:200px;"/>

        

    
        <?php
        }
        ?>
            
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>

    </div>
</div>
  
<?php
include("footer.php");

?>