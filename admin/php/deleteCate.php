<?php 
require '../config.php';

$id = $_GET['id'];

$deleteCate = "DELETE FROM `categories` WHERE `categories`.`id` = '$id'";
$result = $conn->query($deleteCate);

header('location: ../categories.php');
?>
