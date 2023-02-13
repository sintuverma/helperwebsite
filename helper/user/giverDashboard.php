<?php
session_start();
if(isset($_SESSION['gr_id']))
{
  $gr_id=$_SESSION['gr_id'];
  include "../connection.php";
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
    <title><?php echo $_SESSION['guserfullname'];?> Dashboard | </title>
</head>
<body>
      
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Welcome <?php echo $_SESSION['guserfullname'];?></a>
  <a href="giverprofile.php?giver_id=<?php echo $gr_id;?>">Profile</a>
  <a href="#">Services</a>
  <a href="../logout.php" id="lgo">LogOut</a>
  <a href="#">Settings</a>
</div>
<span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div id="main">

        <div class="mt-4 p-5 bg-dark text-primary rounded">
        <h1>Giver Dashboard </h1>
        <p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Error corporis eius officiis est dolore veniam blanditiis ad perferendis maiores autem, debitis alias repellendus possimus, a. Officia eveniet culpa excepturi, aspernatur.
        Sint necessitatibus, reiciendis odio distinctio deserunt laborum facere aperiam exercitationem autem labore omnis assumenda illum esse libero maiores aliquid voluptate consequatur eaque quibusdam numquam vitae itaque blanditiis quam ipsum? Amet?
        </p>
     </div>
     <div class="container mt-3">
  <h2 class="text-capitalize"><?php echo $_SESSION['guserfullname'];?> Details</h2>
  <?php
  if(empty($_SESSION['price']))
  {
    if(isset($_SESSION['already_exist']))
    {
      $alr = $_SESSION['already_exist'];
      echo "<h5 class='text-danger'>$alr</h5>";
    }
  ?>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2">
      <form action="price_page.php" method="post">
        <input type="hidden" name ="giver_id"value="<?php echo $_SESSION['gr_id'];?>">
        <div class="form-group">
          <label for="service_price"> Add Your Price: </label>
          <input type="number" class="form-control" name="service_price" required>

        </div>
          <input type="submit" name="submit" value="submit" class="btn btn-outline-success mt-1 mb-1">
      </form>
    </div>
    <div class="col-sm-9"></div>
  </div>
  <?php
  }
  ?>
  
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Service Providing</th>
        <th>Service Price</th>
        <th>Change</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-capitalize"><?php echo $_SESSION['guserfullname'];?></td>
        <td><?php echo $_SESSION['gemail'];?></td>
        <td><?php echo $_SESSION['serviceProviding'];?></td>
        <?php
        if(isset($_SESSION['price_change']))
        {
         ?>
      <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
              <strong>Price Changed!</strong><?php echo $_SESSION['price_change']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div> 
        <?php
        unset($_SESSION['price_change']);
        }
        ?>
        <td>

          <?php
          
          $psql = "select price_id, service_price from price_table where giver_id =$gr_id";
          //echo $psql;
          $pquery =mysqli_query($conn,$psql) or die("Select Query is Failed");
          if($pquery)
          {
            if(mysqli_num_rows($pquery)>0)
            {$price ="";
              $price_id="";
              while($rowp=mysqli_fetch_assoc($pquery))

                {  $price = $rowp['service_price'];
                   $price_id= $rowp['price_id'];
                  echo $price."/- Rs";
                  ?>
                    <!-- Button trigger modal -->
                    
                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Price</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Update Price</h1>
        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <form action="updateprice.php" method ="POST">
            <input type="hidden" name="price_id" value="<?php echo $price_id?>">
            <div class="form-group">
              <input type="number" class="form-control" name="update_price" value="<?php echo $price;?>">
            </div>
            <input type="submit" class="btn btn-outline-success  mt-1 mb-2" name="submit" value = "submit">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" 
        class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                 <?php //print_r($rowp);
                }
            }
          }
          ?> 
        </td>
        <td><a href="" class="btn btn-outline-success">Change</a></td>
        <form method="post" action="giverdelete.php" >
        <input type="hidden" id="gr_id" name="giver_id" value="<?php echo $gr_id;?>">
        <td><input type="submit"class="btn btn-outline-danger" name="submit" id="submit" value="Delete"></td>
      </form>
      </tr>
    </tbody>
  </table>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function(){
      $("#submit").on("click",function(e){
      {
        
        confirm("Are You Confirm Delete this Record");
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

function closeNav() 
{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>

<?php
}
else
{
  header("location:../giverlogin.php");
}

?>
   
        
