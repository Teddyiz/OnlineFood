
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<style>
body {
  background-image: url('images/lo.jpg');
}
</style>
<body>
<main>
    <form  method="post">
        <h1>Login</h1>
        <div>
            <label for="username">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pwd" id="password">
        </div>
        <section>
            <a href="index.php"><button type="submit" name="submit">Login</button></a>
            <a href="register.php">Register</a>
        </section>
    </form>
</main>
</body>
</html>


<?php 

include 'connection.php';
$sql=$db->prepare("SELECT * FROM user");
$sql->execute();

    if (isset($_POST['submit'])) {
        $email =$_POST['email'];
        $pwd =  hash('sha512', $_POST['pwd']);
        while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            if($email!=$email || $pwd!=$password){
                echo "Error";
            }
            else {
                header('Location: index.php');
            }
        }
    }
?>