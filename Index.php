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
        <img src="images/lg1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3 style="color:blue;">Burgers</h3>
          <p style="color:blue;">Big Mac®</p>
          <li class=" btn btn-outline-info me-2">
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

    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/combo1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Big Mac® Combo Meal</h5>
      <p class="card-text">The one and only McDonald’s Big Mac® Combo Meal. Big Mac Ingredients include a classic sesame hamburger bun, Big Mac Sauce, American cheese and sliced pickles.</p>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/combo2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cheeseburger Combo Meal</h5>
      <p class="card-text">Double Quarter Pounder®* with Cheese, Dr Pepper® (Medium), World Famous Fries® (Medium)</p>
    
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/combo3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">10 piece Chicken McNuggets® Meal</h5>
      <p class="card-text">10 piece Chicken McNuggets® Combo Meal features 10 tender and delicious Chicken McNuggets® made with all white meat chicken—plus our World Famous Fries® and your choice of a Medium McDonald’s drink.</p>
   
    </div>
  </div>
</div><br>


<div class="card mb-3">
  <img class="card-img-top" src="images/11.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Exclusive McDonald's Deals</h5>
    <p class="card-text">Enjoy free medium Fries with any $1 minimum Mobile Order & Pay purchase, only in the app.* After all—without free Fries, Fridays are just another day.</p>
    
  </div>
</div>
</div>

</section>


</body>

</html>
<?php
include 'footer.php';
?>