<?php
require './admin/config.php';

if (isset($_GET['add'])) {
   $id = $_GET['add'];

   $existCart = $conn->query("SELECT * FROM carts WHERE id = '$id'");
   $row = $existCart->fetch_assoc();
   $newQTY = $row['qty'] + 1;

   $result = $conn->query("UPDATE `carts` SET `qty`='$newQTY' WHERE id = '$id'");
   header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if (isset($_GET['minus'])) {
   $id = $_GET['minus'];

   $existCart = $conn->query("SELECT * FROM carts WHERE id = '$id'");
   $row = $existCart->fetch_assoc();
   if ($row['qty'] == 1) header('Location: ' . $_SERVER['HTTP_REFERER']);
   else {
      $newQTY = $row['qty'] - 1;
      $result = $conn->query("UPDATE `carts` SET `qty`='$newQTY' WHERE id = '$id'");
      header('Location: ' . $_SERVER['HTTP_REFERER']);
   }
}

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];

   $existCart = $conn->query("DELETE FROM `carts` WHERE id = '$id'");
   header('Location: ' . $_SERVER['HTTP_REFERER']);
}
