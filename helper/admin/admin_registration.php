<?php
  session_start();
  //date_default_timezone_get("Asia/Kolkata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Helper </title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Helper</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../seekerRegistration.php">Seeker Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../giverRegistration.php">Giver Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../aboutUs.php">AboutUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contactUs.php">ContactUs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registration</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../seekerRegistration.php">Seeker</a>
            <a class="dropdown-item" href="../giverRegistration.php">Giver</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <h1 class="text-center text-dark bg-primary mt-3">Admin Registration Form</h1>

        <?php
        //login error showing
        if(isset($_SESSION['login_error']))
            {
                echo "<h4 class='text-danger bg-dark'>{$_SESSION['login_error']}</h4>";
            }
            //successfully registration
            
        ?>

            <form action="admin_registration_page.php" method="post">
              <?php
                if(isset($_SESSION['email_already']))
                    {   echo "<ul>";
                        echo "<li class=' text-danger '> {$_SESSION['email_already']}</li>";
                        echo "</ul>";
                    }
                ?>
                
                <label>Admin Name:</label>
                <div class="form-group">
                    <input type="text" name = "admin_name" class="form-control" required>
                </div>

                <label>Admin Email:</label>
                <div class="form-group">
                    <input type="email" name = "admin_email" class="form-control" required>
                </div>
                <label>Admin Mobile:</label>
                <div class="form-group">
                    <input type="number" name = "admin_mobile" class="form-control" required>
                </div>

                <label> Admin Password:</label>
                <div class="form-group">
                    <input type="password" name = "admin_password" class="form-control" required>
                </div>
                <input type="hidden" name="reg_date" value="<?php echo date('Y-m-d h:i:s ');?>">
                <input type="submit" class="btn btn-success btn-block mt-2" name="submit" value = "submit"> <a href="admin_registration.php">Click here for Admin Registration </a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include "../footer.php";
unset($_SESSION['login_error']);
unset($_SESSION['email_already']);
unset($_SESSION['successfully']);
?>