<?php
session_start();
include "header.php";
?>
<div class="container">
    <div class="row mt-2 mb-2 bg-dark text-primary rounded">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <h3 class="text-center text-dark bg-primary mt-3 rounded"> Giver Registration Login Form</h3>
        <?php
        //login error showing
        if(isset($_SESSION['login_error']))
            {
                echo "<h4 class='text-danger bg-dark rounded'>{$_SESSION['login_error']}</h4>";
            }
            //successfully registration
            if(isset($_SESSION['successfully']))
            {
                echo "<h3 class='text-success bg-light rounded'>{$_SESSION['successfully']}</h1>";
            }
        ?>
            <form action="giverloginpage.php" method="post">
                <input type="hidden" name="giver" value="2">
                <label>Email:</label>
                <div class="form-group">
                    <input type="email" name = "email" class="form-control" required>
                </div>

                <label>Password:</label>
                <div class="form-group">
                    <input type="password" name = "password" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-success btn-block mt-2 mb-2" name="submit" value = "submit"> <a href="giverRegistration.php">Click here for Registration </a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include "footer.php";
session_destroy();
?>