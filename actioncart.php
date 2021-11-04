<?php
require './admin/config.php';
session_start();
$idBook = $_GET['id'];

if (!isset($_SESSION['client'])) {
   session_unset();
   session_destroy();
   header('Location: ./login.php');
} else {
   $idCustomer = $_SESSION['id'];

   $existCart = $conn->query("SELECT * FROM carts WHERE `book_id` = '$idBook' AND `user_id` = '$idCustomer'");

   if ($existCart->num_rows > 0) {
      $row = $existCart->fetch_assoc();
      $newQTY = $row['qty'] + 1;
      $updateQTY = $conn->query("UPDATE `carts` SET `qty`='$newQTY' WHERE `book_id` = '$idBook' AND `user_id` = '$idCustomer'");
   } else {
      $book = $conn->query("SELECT * FROM `books` WHERE `id_book` = '$idBook'");
      $row = $book->fetch_assoc();

      $price = $row['price'];

      $inserCart = $conn->query("INSERT INTO `carts`( `book_id`, `user_id`, `price_b`) VALUES ('$idBook','$idCustomer','$price')");
   }

   header('Location: ' . $_SERVER['HTTP_REFERER']);
}
