<?php

include 'header.php';
include 'connection.php';
//$sql=$db->prepare("SELECT * FROM food");
//$sql->execute();

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

<!-- left side nav -->
    <div class="container-fluid mt-5">
      <!-- display products  -->
      <div class="row" align="">
        <div class="col-sm-2 bg-white">
          <nav class="navbar">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class=" btn btn-outline-danger me-2">
                  <a class="nav-link" href="#Burger"> Burgers</a>
                </li><br>
                <li class="btn btn-outline-danger me-2">
                  <a class="nav-link" href="#Beverages">Beverages</a>
                </li><br>
                <li class="btn btn-outline-danger me-2">
                  <a class="nav-link" href="#Combo Meal">Combo Meal</a>
                </li><br>
                <li class="btn btn-outline-danger me-2">
                  <a class="nav-link" href="#Desserts">Desserts</a>
                </li>
               

              </ul>
            </div>
          </nav>
        </div>
        
      <div class="col-sm-10 bg-white" >
        <!-- display products -->
        <div class="row" id="mobile">

          <?php 
          $sql=$db->prepare("SELECT * FROM food WHERE category='Burger' " );
          $sql->execute();
          while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            ?>

            <div class="col-sm-4" align="center">
              <form method="post" action="manage_cart.php">
              <img src="images/<?php echo $photo; ?>" width="200" height="200"><br>
              Name : <?php echo $name; ?><br>
              Price : $<?php echo $price; ?> <br> 
              
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <button type="submit" class="btn btn-outline-primary" name="buy">Add To Cart</button>
              <br><br> <bR>
            </form>
            </div>
          <?php } ?>
        </div>
        <!-- display products -->
        <div class="row" id="computer">

          <?php 
          $sql=$db->prepare("SELECT * FROM food WHERE category='Beverages' " );
          $sql->execute();
          while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            ?>

            <div class="col-sm-4" align="center">
              <form method="post" action="manage_cart.php">
              <img src="images/<?php echo $photo; ?>" width="200" height="200"><br>
               Name : <?php echo $name; ?><br>
              Price : $<?php echo $price; ?><br> 
              
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <button type="submit" class="btn btn-outline-primary" name="buy">Add To Cart</button>
              <br><br> <bR>
            </form>
            </div>
          <?php } ?>
        </div>
      
    
        <!-- display products -->
        <div class="row" id="electronic">

          <?php 
          $sql=$db->prepare("SELECT * FROM food WHERE category='Combo Meal' " );
          $sql->execute();
          while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            ?>

            <div class="col-sm-4" align="center">
              <form method="post" action="manage_cart.php">
              <img src="images/<?php echo $photo; ?>" width="200" height="200"><br>
              Name : <?php echo $name; ?><br>
              Price : $<?php echo $price; ?> <br> 
              
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <button type="submit" class="btn btn-outline-primary" name="buy">Add To Cart</button>
              <br><br> <bR>
            </form>
            </div>
          <?php } ?>
        </div>

         <!-- display products -->
         <div class="row" id="computer">

            <?php 
            $sql=$db->prepare("SELECT * FROM food WHERE category='Desserts' " );
            $sql->execute();
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
              extract($row);

              ?>

              <div class="col-sm-4" align="center">
                <form method="post" action="manage_cart.php">
                <img src="images/<?php echo $photo; ?>" width="200" height="200"><br>
                Name : <?php echo $name; ?><br>
                Price : $<?php echo $price; ?><br> 
                
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">
                <button type="submit" class="btn btn-outline-primary" name="buy">Add To Cart</button>
                <br><br> <bR>
              </form>
              </div>
            <?php } ?>
            </div>

      </div>
    </div>
    
</div>

</body>

</html>
<?php
include 'footer.php';
?>