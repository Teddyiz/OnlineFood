<?php
include 'header.php';
include 'connection.php';
$sql=$db->prepare("SELECT * FROM food");
$sql->execute();
?>
<table class="table table-striped">
    <thead>
    <th scope="col">Name</th>
    <th scope="col">Category</th>
    <th scope="col">Price</th>    
    <th scope="col">Photo</th>   
    </thead>
    <?php 
       while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $category; ?></td>
        <td><?php echo $price; ?> Ks</td>       
        <td><img src="images/<?php echo $photo ?>" width="100" height="100"></td>
        
    </tr>
    <?php } ?>
</table>

