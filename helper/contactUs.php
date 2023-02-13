<?php
  session_start();
  include "header.php";
?>
  <!---- contact us page start ------>
  <div class="container-fluid row mt-2 rounded">
         <div class="col-sm-12 bg-dark text-primary rounded">
          <hr>
          <h2 class="intro-text text-center rounded" ><strong>Contact Form</strong>
          </h2>
          <hr>
  </div>
       </div>
        <br>
        <br>
<div class="row">
<!-------- start our information tag ------->
          <div class="col-sm-8">
            
            <p><strong>Phon No.</strong><span class="glyphicon glyphicon-earphone"></span>    :
              <strong>8090587674 , 8299819953 , 8960491286</strong>
            </p>
             <p><strong>Email</strong> <span class="glyphicon glyphicon-envelope"></span>     :
               <strong><a href="mailto:name@example.com"><b>eventshall007@gmail.com</b></a></strong>
             </p>
             <p><strong>Address</strong> <span class="glyphicon glyphicon-home"></span>:
               <strong>228 E.W.S. gunjan vihar
                <br>Barra kanpur pincode-208027</strong>
             </p>
<!----------- close our information tag ----->

<!------ start google map link ----->
             <br><br><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14292.76340863821!2d80.29649622118923!3d26.417316995862087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDI1JzAyLjMiTiA4MMKwMTgnMTguOSJF!5e0!3m2!1sen!2sin!4v1528703658212" width="50%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></p>
        </div>
<!----- close google map link ----->

        <div class="col-md-4 bg-dark text-primary rounded"><br>
          <?php
            // if(isset($_SESSION['feedback'])
            // {
            //   echo "<h1 class='bg-light text-success'>$_SESSION['feedback']</h1>";
            // }
            // if(isset($_SESSION['feedbackerr'])
            // {
            //   echo "<h1 class='bg-light text-red'>$_SESSION['feedbackerr']</h1>";
            // }
          ?>
             <form id="contactUs" name="ContactUs" action="contactusPage.php"  method="post">
            <h4><strong><center><p>HELLO, WE ARE ALWAYS READY TO SERVE YOU!</p></center></strong></h4>
            <!---strat name input tag ----->
            <label>Your Name:</label>
                <div class="form-group">
                    <input type="text"  name = "contactname"class="form-control" placeholder="Enter Your Name" required>
                </div>

                <label>Your Email:</label>
                <div class="form-group">
                    <input type="text"  name = "cemail"class="form-control" placeholder="Enter Your Email" required>
                </div>
                <label>Mobile Number:</label>
                <div class="form-group">
                    <input type="text"  name = "cmobile"class="form-control" placeholder="Enter Your Mobile Number" required>
                </div>

              <div class="form-group">
                 <label>Send Feedback And Problems </label>
                <textarea class="form-control" rows="3" placeholder="Problem & Suggestion " name="message"></textarea>
              </div>

            <input type="submit" class="btn btn-success d-block mt-2 mb-2" name="submit" value = "submit"> 
          </form>

      </div>
</div>


<!---- contact us page close ------->
<br>
<br>

<?php
  unset($_SESSION['feedback']);
  unset($_SESSION['feedbackerr']);
  include "footer.php";
?>