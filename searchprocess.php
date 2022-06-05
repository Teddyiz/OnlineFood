<?php
include 'header.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <?php
    $search=$_POST['search'];
    $sql=$db->prepare("SELECT * FROM food WHERE name LIKE '%$search%'");
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
    <div style="margin-top:150px"></div>
    
</body>
</html>
<?php
include 'footer.php';
?>