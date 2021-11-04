<?php
require '../config.php';

$id = $_GET['id'];
$order = "SELECT * FROM `orders` WHERE `orders`.`id_order` = '$id'";
$result = $conn->query($order);
if ($result->num_rows > 0) {
   $deleteCate = "DELETE FROM `orders` WHERE `orders`.`id_order` = '$id'";
   $result = $conn->query($deleteCate);

   header('location: ../orders.php');
} else {
   header("Location: 404.php");
}
?>