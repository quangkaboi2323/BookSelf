<?php 
require '../config.php';

$id = $_GET['id'];
$getBook = "SELECT * FROM `books` WHERE `books`.`id_book` = '$id'";
$result = $conn->query($getBook);
$row  = $result->fetch_assoc();
unlink("../uploads/".$row['image_path']);

$deleteBook = "DELETE FROM `books` WHERE `books`.`id_book` = '$id'";
$result = $conn->query($deleteBook);


header('location: ../books.php');
?>
