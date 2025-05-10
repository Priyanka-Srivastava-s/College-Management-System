<?php
include("header.php");
?>
<div class="row sec2">
    <div class="col-sm-12 sec2-inner">
        <h3 class="text-white text-center "  style="margin-top:100px;">Contact US</h3>
    
    </div>
</div>
<!-- enquiry -->
<div class="row mt-5">
    <div class="col-sm-5 mx-auto">
    <form action="contactcode" method="post" class="bg text-white p-5">
    <h3>Enquiry Now</h3>
        <table>
            <tr>
                <td>Enter Your Name</td>
                <td><input type="text" name="name" id="" class="form-control"></td>
            </tr>
            <tr>
                <td>Enter Your Email</td>
                <td><input type="text" name="email" id="" class="form-control"></td>
            </tr>
            <tr>
                <td>Enter Your Message</td>
                <td><textarea name="msg"  cols="30" rows="3" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Send" class="btn bg text-white border-white mt-3"></td>
            </tr>
        </table>
    </form>
    </div>
    
</div>
 <!-- contact -->
 <div class="row mt-5 m-0 p-0" id="contact">
          <div class="col-sm-6">
            <h3>Fort Campus</h3>
        <h5 class="border-sec pt-3 pb-3"> 
           <i class="fa-solid fa-location-dot text-warning px-3"></i>
          Mahatma Gandhi Road, Fort, Mumbai, Maharashtra 400032.
</h5>
<h5 class="border-sec pt-3 pb-3 "> <i class="fa-solid fa-phone px-3 text-warning"></i>022 68320000</h5>
<h3 class="mt-4">Kalina Campus</h3>
<h5 class="border-sec pt-3 pb-3">
  <i class="fa-solid fa-location-dot text-warning px-3"></i>
  University of Mumbai,Vidya Nagari, Kalina, Santacruz East, Mumbai, Maharashtra 400098.</h5>
<h5 class="border-sec">
  <i class="fa-solid fa-phone px-3 text-warning"></i>
  022 26543000
</h5>

          </div>
          <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120716.31240258981!2d72.77228591481185!3d19.002759822886166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c31de0a5d9%3A0x7a593c99f631b64f!2sUniversity%20of%20Mumbai!5e0!3m2!1sen!2sin!4v1699272000893!5m2!1sen!2sin" class="w-100 " style="border:0;min-height: 500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>  
  
<?php
include("footer.php");

?>