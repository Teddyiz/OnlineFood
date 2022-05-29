<?php
include 'connection.php';
$did = $_GET['did'];

$sql=$db->prepare("DELETE FROM food WHERE IID='$did'");
$sql->execute();
header('Location: viewdata.php');
?>