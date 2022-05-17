<?php

include 'header.php';
include 'connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Capital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">

  </style>
</head>
<body>
  
  <!-- carousel -->
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/11.png" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Combo Meal</h3>
          <p>Big Mac® Combo Meal</p>
          <li class=" btn btn-outline-dark me-2">
                  <a class="nav-link" href="food.php"> Order Now</a>
                </li>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/12.jpg" alt="Chicago" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Fries</h3>
          <p>Better Choice!</p>
           <li class=" btn btn-outline-dark me-2">
                  <a class="nav-link" href="food.php"> Order Now</a>
                </li>
        </div> 
      </div>
      <div class="carousel-item">
        <img src="images/13.jpg" alt="New York" class="d-block" style="width:100%">
        <div class="carousel-caption">
       
          <h3 style="color:blue;" >Cheese Burger</h3>
          <p style="color:blue;">Try it now!</p>
           <li class=" btn btn-outline-dark me-2">
                  <a class="nav-link" href="food.php"> Order Now</a>
                </li>
        </div>  
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


  <section style="background-color: #eee;">
  <div class="container py-5">
    <h4 class="text-center mb-5"><strong>Menu</strong></h4>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="images/14.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$123</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="images/15.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$239</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="images/14.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$147</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
          <img src="images/15.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$83</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="images/14.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$106</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="images/15.jpg"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$58</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>





</section>


  

</body>

</html>
<?php
include 'footer.php';
?>