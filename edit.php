<?php
include 'header1.php';
include 'connection.php';
$eid = $_GET['eid'];

$sql=$db->prepare("SELECT * FROM food WHERE id='$eid'");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);
$rephoto = "images/".$photo; 
?>
<html>
	<div class="container" align="center" >
	
		<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
		<form method="post" action="editprocess.php" enctype="multipart/form-data" >
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		
			Item Name  <input type="text"  name="name" value="<?php echo $name; ?>"><br>
			
			Category  <input type="text" name="category" value="<?php echo $category; ?>"><br>
			Price <input type="text" name="price" value="<?php echo $price; ?>"><br>
			<img src="<?php echo $rephoto; ?>" width="50" height="50" >
			<input type="hidden" name="oldimage" value="<?php echo $photo; ?>">
			Change Photo   <input type="file" name="newimage"> <br>
			<br><button type="submit" class="btn btn-primary btn-block">Update</button>
		</form>
	
	</div>

</html>