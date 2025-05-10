<?php
include("header.php");
?>
<div class="row sec2">
    <div class="col-sm-12 sec2-inner">
        <h3 class="text-white text-center "  style="margin-top:100px;">Register Now</h3>
    
    </div>
</div>
<!-- register -->
<div class="row">
    <div class="col-sm-5 mt-5 mx-auto ">
    <form action="regcode.php" method="post" enctype="multipart/form-data"  class="bg-light p-5">
    <h3>Registration Form</h3>

        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male" >Male
                    <input type="radio" name="gender"  value="female">Female

                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Mobile </td>
                <td>
                    <input type="number" name="mobile" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Address </td>
                <td>
                    <textarea name="address" id="" cols="30" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <input type="file" name="file" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" class="form-control">
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <input type="submit" class="btn bg border-dark mt-3">
                </td>
            </tr>
           
        </table>

    </form>
    </div>
</div>

  
<?php
include("footer.php");

?>