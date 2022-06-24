<?php

include 'connection.php';
$sql=$db->prepare("SELECT * FROM admin");
$sql->execute();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<body>
<main>
    <form  method="post">
        <h1>Admin Login</h1>
        <div>
            <label for="username">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pwd" id="password">
        </div>
        <section>
            <a href="adminpanel.php"><button type="submit" name="submit">Login</button></a>
            <a href="adminregister.php">Register</a>
        </section>
    </form>
</main>
</body>
</html>


<?php

include 'connection.php';
$sql=$db->prepare("SELECT * FROM admin");
$sql->execute();

?>

    <?php 
    if (isset($_POST['submit'])) {
        $email =$_POST['email'];
        $pwd = hash('sha256', $_POST['pwd']);
        while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            if($email!=$email || $pwd!=$password){
                echo "Error";
            }
            else {
                header('Location: adminpanel.php');
            }
        }
    }
?>



                                   