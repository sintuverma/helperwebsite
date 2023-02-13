
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
    <link rel="stylesheet" href="css/parsleyerror.css">
    <link rel="stylesheet" href="css/userSidemenu.css">
    <!-- <link rel="stylesheet" href="css/parsleytext.css"> -->
    <title>Helper </title>
    <style>
      .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 input.parsley-success,
 select.parsley-success,
 textarea.parsley-success {
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 input.parsley-error,
 select.parsley-error,
 textarea.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 .parsley-errors-list {
   margin: 2px 0 3px;
   padding: 0;
   list-style-type: none;
   font-size: 0.9em;
   line-height: 0.9em;
   opacity: 0;

   transition: all .3s ease-in;
   -o-transition: all .3s ease-in;
   -moz-transition: all .3s ease-in;
   -webkit-transition: all .3s ease-in;
 }

 .parsley-errors-list.filled {
   opacity: 1;
 }

 .parsley-type, .parsley-required, .parsley-equalto{
  color:#ff0000;
 }

    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2 rounded sticky-top">
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
          <a class="nav-link text-primary bg-dark rounded blink-soft" href="seekerlogin.php">Seeker Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="seekerRegistration.php">Seeker Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success bg-dark rounded blink-soft" href="giverlogin.php">Giver Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="giverRegistration.php">Giver Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">AboutUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">ContactUs</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
        
