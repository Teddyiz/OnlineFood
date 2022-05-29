<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post"> 
		<select  name="tableform">
			<option>choose table</option>
			<option value="item">item</option>
			<option value="user">user</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	$table = $_POST['tableform'];
	
	if($table == "item"){
		$sql=$db->prepare("SELECT * FROM $table");
		$sql->execute();
	?>
	<table> 
    	<th>ID</th>
    	<th>Name</th>
    	<th>Category</th>
    	<th>Price</th>
    	<th>Photo</th>
    	<th>Edit</th>
    	<th>Delete</th>
	<?php 
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
	    extract($row);
	
	?>
		<tr>
		<td><?php echo $IID; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $category; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $photo; ?></td>
		<td><a href="edit.php?eid=<?php echo $IID; ?>">Edit</a></td>
		<td><a href="delete.php?did=<?php echo $IID; ?>">Delete</a></td>
		</tr>
		
	<?php } ?>	
	</table>
	<?php
	
	}
	elseif ($table == "user") {
	    $sql=$db->prepare("SELECT * FROM $table");
	    $sql->execute();
	?>
	<table>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Edit</th>
    	<th>Delete</th>
    	
    <?php 
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        extract($row);
    ?>	
    	<tr>
    		<td><?php echo $UID; ?></td>
    		<td><?php echo $name; ?></td>
    		<td><?php echo $email; ?></td>
    		<td><?php echo $phone; ?></td>
    		<td><a href="edit.php?eid=<?php echo $UID; ?>">Edit</a></td>
			<td><a href="delete.php?did=<?php echo $UID; ?>">Delete</a></td>
    	</tr>
    <?php }?>
	</table>
	<?php     
	}
	else echo "please choose table";
}
else return FALSE;
?>