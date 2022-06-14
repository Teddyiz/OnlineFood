<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<style>
body {
  background-image: url('images/ft.jpg');
}
</style>
<body>
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
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
       
        <button type="submit" name="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>
<?php 
include 'connection.php';
$sql="INSERT INTO user(name,email,password) VALUES(?,?,?)";
$sql=$db->prepare ($sql);

    
    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $email = $_POST['email'];    
        $pwd = $_POST['pwd'];
    }
    else return FALSE;
    
    if($sql->execute(array($uname, $email,  $pwd))){
        
    }
    else echo "FAILED";
?>