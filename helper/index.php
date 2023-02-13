<?php
include "header.php";
?>
<div class="mt-2">
            <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>
  

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<h1 class="text-center bg-dark text-success rounded mt-3 mb-2 " id="welcome"> Welcome In Helper </h1>
<div class="mt-4 p-5 bg-dark text-primary rounded">
  <h1 > Many Services Providing </h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, rem placeat animi impedit tempora architecto eligendi consequatur, quaerat beatae alias numquam, laboriosam voluptatem, provident aliquid quidem corrupti. Quod, modi vitae!
  Earum voluptas facere commodi fugit minima eum dicta possimus voluptatum distinctio nemo? Harum facere hic non et voluptates consequatur ab at blanditiis, officia eligendi aperiam perspiciatis? Earum, quaerat quis officia.</p>
</div>

<div class="row mt-2">
<div class="col-sm-4">
  <div class="card" style="width: 18rem;">
      <img src="images/4.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-primary text-dark rounded">
      <h5 class="card-title">Tow Vehicle</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="seekerlogin.php" class="btn btn-success">Book Service</a>
     </div>
  </div>
</div>

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="images/3.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-primary text-dark rounded">
      <h5 class="card-title">Petrol Empty</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="seekerlogin.php" class="btn btn-success">Book Service</a>
     </div>
  </div>
</div>

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="images/3.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-primary text-dark rounded">
      <h5 class="card-title">Tyre Puncture</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="seekerlogin.php" class="btn btn-success">Book Service</a>
     </div>
  </div>
  </div>
</div>

<?php
include "footer.php";
?>