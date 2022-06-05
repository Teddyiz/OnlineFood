<?php
include 'connection.php';
$did = $_GET['did1'];

$sql=$db->prepare("DELETE FROM user WHERE id='$did'");
$sql->execute();
header('Location: viewuser.php');
?>
