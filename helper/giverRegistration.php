<?php
session_start();
include "header.php";
include "connection.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <h3 class=" text-center text-success mt-3 blink-soft"> Giver Registration Form</h3>
        <?php
        if(isset($_SESSION['email_already']))
        {   echo "<ul>";
            echo "<li class=' text-danger '> {$_SESSION['email_already']}</li>";
            echo "</ul>";
        }
        if(isset($_SESSION['cperror']))
        {
            echo "<ul>";
            echo "<li class=' text-danger '> {$_SESSION['cperror']}</li>";
            echo "</ul>";
        }
        ?>
            <form action="ginsert.php" method="post" id="giver_registration">
                <label>User Full Name:</label>
                <div class="form-group">
                    <input type="text" data-parsley-pattern="^[a-zA-z]+$"data-parsley-trigger="keyup" name = "guserfullname"class="form-control">
                </div>
                <label>What Kind Service You Provide:</label>
                 <select class="form-select" name="serviceProviding">
                    <option >Select The Level Of Game </option>
                     
                     <?php
                        $sql = "select * from serviceslist";
                        $query = mysqli_query($conn,$sql) or die("Query is failed");
                        if($query)
                        {
                            if(mysqli_num_rows($query)>0)
                            {
                                while($row = mysqli_fetch_assoc($query))
                                {
                        ?>
                            <option value="<?php echo $row['services']?>"><?php echo $row['services']?></option>
                        <?php
                                }
                            }
                        }
                        ?>
                </select> 

                <label>Email:</label>
                <div class="form-group">
                    <input type="text" data-parsley-type="email" name = "gemail" class="form-control">
                </div>
                <label>Mobile:</label>
                <div class="form-group">
                    <input type="number" data-parsley-type="integer" data-parsley-max="10" name = "gmobileNumber" class="form-control">
                </div>
                <label>Address:</label>
                <div class="form-group">
                    <input type="text" name = "gaddress" class="form-control">
                </div>
                <label>Password:</label>
                <div class="form-group">
                    <input type="password" data-parsley-length="[8,16]"id ="gpassword"name = "gpassword" class="form-control">
                </div>
                <label> Conirm Password:</label>
                <div class="form-group">
                    <input type="password" data-parsley-equaltp="#gpassword"name = "cpassword" class="form-control">
                </div>

                <input type="submit" class="btn btn-success d-block mt-2" name="submit" value = "submit"> <a href="giverlogin.php">Click here for Login </a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php
unset($_SESSION['cperror']);
unset($_SESSION['email_already']);
include "footer.php";
?>
