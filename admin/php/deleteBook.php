<?php 
require '../config.php';

$id = $_GET['id'];

$deleteBook = "DELETE FROM `books` WHERE `books`.`id_book` = '$id'";
$result = $conn->query($deleteBook);

header('location: ../books.php');
?>
