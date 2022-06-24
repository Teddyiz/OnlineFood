<?php
include 'header1.php';
include "connection.php";

$sql = $db->prepare("SELECT * FROM user  ");
$sql->execute();
?>
           
<table class="table .thead-dark "  >
    <thead>
    <th scope="col">Name</th>
    <th scope="col">Email</th>  
    <th scope="col">Password</th>   
    <th scope="col">Delete<th>
    </thead>
    <?php 
       while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $password; ?></td>       
        <td><a href="delete1.php?did1=<?php echo $id;?>"class="btn btn-outline-danger">DELETE</a></td>

    </tr>
    <?php } ?>
</table>