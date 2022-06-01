<?php
include 'header1.php';
include "connection.php";
$sql = $db->prepare("SELECT * FROM food");
$sql->execute();
?>
           
<table class="table .thead-dark " >
    <thead>
    <th scope="col">Name</th>
    <th scope="col">Category</th>
    <th scope="col">Price</th>   
    <th scope="col">Photo</th>
    <th scope="col">Update</th>
    <th scope="col">Delete<th>
    </thead>
    <?php 
       while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $category; ?></td>
        <td>$<?php echo $price; ?></td>       
        <td><img src="images/<?php echo $photo ?>" width="100" height="100"></td>
        <td><a href="edit.php?eid=<?php echo $IID;?>" class="btn btn-outline-warning">UPDATE</a></td>
        <td><a href="delete.php?did=<?php echo $IID;?>"class="btn btn-outline-danger">DELETE</a></td>
    </tr>
    <?php } ?>
</table>