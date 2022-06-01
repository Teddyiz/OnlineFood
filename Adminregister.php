<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form  method="post">
        <h1>Sign Up for Admin</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="uname" id="uname">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pwd" id="pwd">
        </div>
       
        <button type="submit" name="register">Register</button>
        <footer>Already a member? <a href="adminlogin.php">Login here</a></footer>
    </form>
<?php 
include 'connection.php';
$sql="INSERT INTO admin1(name,email,password) VALUES(?,?,?)";
$sql=$db->prepare ($sql);

    
    if (isset($_POST['register'])) {
        $auname = $_POST['uname'];
        $aemail = $_POST['email'];    
        $apwd = $_POST['pwd'];
    }
    else return FALSE;
    
    if($sql->execute(array($auname, $aemail,  $apwd))){
        
    }
    else echo "FAILED";
?>
</main>
</body>
</html>
