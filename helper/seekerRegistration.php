<?php
include "header.php";
session_start();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            

        <h1 class="text-center text-primary mt-3 blink-soft"> Seeker Registration Form</h1>
        <?php
        if(isset($_SESSION['email_already']  ))
        {
            echo "<h5 class='text-center text-danger mt-3'> {$_SESSION['email_already']}</h5>";
            
        }
        if(isset( $_SESSION['perror']))
        {
            echo "<h5 class='text-center text-danger mt-3'> {$_SESSION['perror']}</h5>";
        }
        ?>
            <form action="sinsert.php" method="post" id="seeker_registration">

                <label>User Full Name:</label>
                <div class="form-group">
                    <input type="text"  name = "suserfullname"class="form-control" >
                </div>
                <label>Email:</label>
                <div class="form-group">
                    <input type="text" name = "semail" class="form-control" >
                </div>
                <label>Mobile:</label>
                <div class="form-group">
                    <input type="number" name = "smobileNumber" class="form-control">
                </div>
                <label>Address:</label>
                <div class="form-group">
                    <input type="text" name = "saddress" class="form-control">
                </div>
                <label>Password:</label>
                <div class="form-group">
                    <input type="password" id="spassword" name = "spassword" class="form-control">
                </div>
                <label> Conirm Password:</label>
                <div class="form-group">
                    <input type="password" name = "cpassword" class="form-control">
                </div>

                <input type="submit" class="btn btn-success btn-block mt-2" name="submit" value = "submit"> <a href="login.php">Click here for Login </a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<?php
include "footer.php";
unset($_SESSION['perror']);
?>