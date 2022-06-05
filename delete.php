<?php
include 'connection.php';
$did = $_GET['did'];

$sql=$db->prepare("DELETE FROM food WHERE id='$did'");
$sql->execute();
header('Location: viewfood.php');
?>