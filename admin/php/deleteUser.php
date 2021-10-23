<?php
require '../config.php';

$id = $_GET['id'];
$user = "SELECT * FROM `users` WHERE `users`.`id` = '$id'";
$result = $conn->query($user);
if ($result->num_rows > 0) {
   $deleteCate = "DELETE FROM `users` WHERE `users`.`id` = '$id'";
   $result = $conn->query($deleteCate);

   header('location: ../users.php');
} else {
   header("Location: 404.php");
}
?>
