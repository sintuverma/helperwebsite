<?php
session_start();
if(isset($_SESSION['sr_id']))
{
  $sr_id = $_SESSION['sr_id'];
  include "../connection.php";
}
else
{
  header("location:seekerlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
    <link rel="stylesheet" href="../css/parsleyerror.css">
    <link rel="stylesheet" href="../css/userSidemenu.css">
    <!-- <link rel="stylesheet" href="css/parsleytext.css"> -->
    <title><?php echo $_SESSION['suserfullname'];?> Dashboard | </title>
</head>
<body>
      
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="seekerprofile.php?seeker_id=<?php echo $_SESSION['sr_id'];?>">Profile</a>
  <a href="#">Services</a>
  <a href="#">LogOut</a>
  <a href="#">Settings</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div id="main">

      <div class="row bg-dark text-primary rounded">
    <div class="col-sm-3"></div>

    <div class="col-sm-8">
     <form action="" class="" id="service_need_user">
      <div class="form-group">
        <label for="giver_location">Your Location:</label>
        <input type="text" class="form-control mt-2" id="giver_location" name="giver_location" value="Noida Sector 15"/>
      </div>

      <div class="form-group">
         <label for="seeker_destination">Your Destination:</label>
        <input type="text" class="form-control mt-2" id ="seeker_destination" name="seeker_destination" value="Noida Sector 62"/>
      </div>

      <label for="service_need">select services you need:</label>
                 <select class="form-select mt-2" id= "services_need" name="service_need">
                    <option >Select Services Need: </option>
                     
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
                <input type="submit" class="btn btn-success mb-2 mt-2" value="submit" id="submit">
     </form>
    </div>
    
    <div class="col-sm-3"></div>
</div>

  <div class="mt-4 p-5 bg-dark text-primary rounded">
    
    <h1 class="text-capitalize"> <?php echo $_SESSION['suserfullname'];?> Dashboard </h1>
    <p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Error corporis eius officiis est dolore veniam blanditiis ad perferendis maiores autem, debitis alias repellendus possimus, a. Officia eveniet culpa excepturi, aspernatur.
    Sint necessitatibus, reiciendis odio distinctio deserunt laborum facere aperiam exercitationem autem labore omnis assumenda illum esse libero maiores aliquid voluptate consequatur eaque quibusdam numquam vitae itaque blanditiis quam ipsum? Amet?</p>
 </div>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"></div>
  <div class="col-sm-3"></div>
</div>

<script src="../js/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
      var location = ('#seeker_location').val();
      var destination = ('#seeker_destination').val();
      var services = ('#services_need').val();
      
      $("#submit").on("click",function(e){
      {
        alert(location+","+destination+","+services);
        
      }
    });
  });

</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>
   
        
