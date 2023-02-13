<?php
session_start();
include "../connection.php";
if(isset($_SESSION['gr_id']))
{
	$giver_id ="";
	$guserfullname = "";
	$serviceProviding ="";
	$gemail ="";
	$gmobileNumber ="";
	$gaddress ="";
  $gimage ="";
  $imgmsg= "";
  
  	$gr_id = $_SESSION['gr_id'];

  	$sgsql = "select gr_id,guserfullname,serviceProviding,gemail,gmobileNumber,gaddress, gimage from giverregistration where gr_id =$gr_id";
  	$sgquery = mysqli_query($conn,$sgsql) or die("query is failed");

	  if($sgquery)
	  {
	  		if(mysqli_num_rows($sgquery)>0)
	  		{
	  			while($rowsg = mysqli_fetch_assoc($sgquery))
	  			{
	  				//print_r($rowsg);
	  				$giver_id =$rowsg['gr_id'];
					$guserfullname =$rowsg['guserfullname'];
					$serviceProviding =$rowsg['serviceProviding'];
					$gemail =$rowsg['gemail'];
					$gmobileNumber =$rowsg['gmobileNumber'];
					$gaddress =$rowsg['gaddress'];
          $gimage =$rowsg['gimage'];
	
	  		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php echo $guserfullname; ?>Profile Page|</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
  <style>
    #heading {
    margin: 0 auto;
    margin-top: 5rem;
    margin-bottom: 2rem;
    text-align: center;
}

.image-preview-container {
    width: 50%;
    margin: 0 auto;
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: 3rem;
    border-radius: 20px;
}

.image-preview-container img {
    width: 100%;
    display: none;
    margin-bottom: 30px;
}
.image-preview-container input {
    display: none;
}

.image-preview-container label {
    display: block;
    width: 45%;
    height: 45px;
    margin-left: 25%;
    text-align: center;
    background: #8338ec;
    color: #fff;
    font-size: 15px;
    text-transform: Uppercase;
    font-weight: 400;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
  </style>
</head>
<body>

<div class="container">
  <h1 class=" blink-soft text-center text-primary bg-dark text-uppercase  mt-2 rounded"> <?php echo $guserfullname;?> Profile </h1>
  <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="giverDashboard.php">DASHBOARD</a></li>
            <li class="breadcrumb-item"><a href="giverprofile.php?giver_id=<?php echo $giver_id;?>">User</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page"><?php echo $guserfullname;?> Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../images/projectimages/<?php echo $gimage;?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3 text-capitalize"><?php echo $guserfullname;?></h5>
            <p class="text-muted mb-1 text-capitalize"><?php echo $serviceProviding;?></p>
            <p class="text-muted mb-4 text-uppercase"><?php echo $gaddress;?></p>
            <div class="d-flex justify-content-center mb-2">
              <a href="giverprofile.php?giver_id=<?php echo $giver_id;?>" class="btn btn-primary">Edit</a>
              <a href="giverDashboard.php" class="btn btn-outline-warning ms-1">Dashboard</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 text-capitalize"><?php echo $guserfullname;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $gemail;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">+91<?php echo $gmobileNumber;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 text-uppercase"><?php echo $gaddress;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Add Picture Or Change Photo</p>
              </div>
              <div class="col-sm-9">
                <?php
                if(isset($_SESSION['img_successfully']))
                {
                  $imgmsg= $_SESSION['img_successfully'];

                  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>$imgmsg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";

                } 

                elseif(isset($_SESSION['img_uperror']))
                {
                  $imgmsg= $_SESSION['img_uperror'];
                  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>$imgmsg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                }
                ?>
                <form action="gupdateimage.php" method="post" enctype='multipart/form-data'>
                  <input type="hidden" name = "gr_id" value="<?php echo $giver_id;?>">
                  <div class="mb-3">
                    <input class="form-control" type="file" id="formFile" name="gimage" required>
                    <input type="submit" id="file-upload" accept="image/*" name="submit" value="submit" class="btn btn-outline-success mt-2" onchange="previewImage(event);">
                  </div>
                </form>

                <h1 id="heading">Preview an Image Before Uploading Using JavaScript</h1>
                  <div class="image-preview-container">
                  <div class="preview">
                      <img id="preview-selected-image" />
                  </div>
                  <label for="file-upload">Upload Image</label>
                    <input type="file" id="file-upload" accept="image/*" onchange="previewImage(event);" />
                    </div>

              </div>
            </div>
          </div>
        </div>
</div>
<script>
  /**
 * Create an arrow function that will be called when an image is selected.
 */
const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block";
    }
};
</script>
</body>
</html>
<?php
	  		}
		
	  }
}
else
{
	header("location:giverlogin.php");
} 
unset($_SESSION['img_successfully']);
unset($_SESSION['img_uperror']); 
?>
