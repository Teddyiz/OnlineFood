<?php


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    
</head>
<center>
   <body>
        <form method="post" action="" enctype="multipart/form-data">
            Enter item Name : <input type="text" name="name"><br>
            Enter Category : <input type="text" name="category"><br>
            Enter Price : <input type="text" name="price"><br>
            Upload Photo HERE : <input type="file" name="image"> <br>
            <button type="submit"  name="submit">SUBMIT</button></a>
            <a href="adminpanel.php">View Items</a>
        </form>
        
    </body>
    </center>
</html>
<?php 
if(isset($_FILES['image'])){
    $errors = array();
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type']; /**images/png**/
    $fext = explode("/", $filetype);
    $file_ex = strtolower(end($fext));
    $extention = array("jpeg","jpg","png","gif");
    
    if (in_array($file_ex, $extention)==FALSE) {
        $errors[] = "please upload valid file type";
    }
    else if ($filesize > 2097152){
        $errors[] = "file size is too big";
    }
    else if(empty($errors)==TRUE){
        move_uploaded_file($filetmp, "images/".$filename);        
    }
    else echo $errors;
}
else return FALSE;
try {
    include 'connection.php';    
    $sql="INSERT INTO food(name, category, price, photo) VALUES(?,?,?,?)";
    $sq= $db->prepare($sql);    
    $name= $_POST['name'];
    $category= $_POST['category'];
    $price= $_POST['price'];
    $photo= $filename;   
    if($sq->execute(array($name,$category,$price,$photo))){        
    }
    else echo "FAILED";
} catch (PDOException $e) {
    echo $e->getMessage();
}
$db=null;
?>