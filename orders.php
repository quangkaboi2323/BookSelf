<?php
require './admin/config.php';
session_start();

if (isset($_POST['submit'])) {
   $address = $_POST['inputAddress'];
   //find the carts
   $id = $_SESSION['id'];
   //create order id
   $numberOfOrder = $conn->query("SELECT * FROM orders");
   $id_order = $numberOfOrder->num_rows . $id;


   $carts = $conn->query("SELECT * FROM carts WHERE `user_id` = '$id' ");

   //calculator summary 
   $total = 0;
   while ($row = $carts->fetch_array()) {
      $total += $row['price_b'] * $row['qty'];
   }

   //create new order
   $createOrder = $conn->query("INSERT INTO `orders`(`id_order`, `customer_id`, `address_order`, `total_amount`) 
                                    VALUES ('$id_order','$id','$address','$total')");

   //create new orders list
   $carts = $conn->query("SELECT * FROM carts WHERE `user_id` = '$id' ");
   while ($row = $carts->fetch_array()) {
      $book_id = $row['book_id'];
      $qty = $row['qty'];
      $price = $row['price_b'];
      $createOrderList = $conn->query("INSERT INTO `order_list`( `order_id`, `book_id`, `qty`, `price`) 
                                       VALUES ('$id_order','$book_id','$qty','$price')");
   }

   //delete carts after order completion
   $deleteCart = $conn->query("DELETE FROM `carts` WHERE `user_id` = '$id' ");

   //send an email notification order completion
   $customer = $conn->query("SELECT * FROM customers WHERE id = '$id'");
   $row = $customer->fetch_assoc();
   //infomation of email
   $email = $row['email'];
   $number = $row['contact'];
   $name = $_SESSION['name'];
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   // More headers
   $headers .= 'From: Email' . "\r\n";

   //format order id
   $format_id = "0000000000" . $id_order;
   $msg = "
   <table align='center'>
   <tr width='300px'>
      <th colspan='2'>ĐẶT HÀNG THÀNH CÔNG</th>
   </tr>
   <tr>
      <td>Khách hàng</td>
      <td><b>$name</b></td>
   </tr>
   <tr>
      <td>Số điện thoại:</td>
      <td><b>$number</b></td>
   </tr>
   <tr>
      <td>Địa chỉ giao hàng:</td>
      <td><b>$address</b></td>
   </tr>
   <tr>
      <td>Tổng tiền:</td>
      <td><b>" . number_format($total, 0, ',', '.') . " VND</b></td>
   </tr>
   <tr>
      <th colspan='2'>
         <h3>MÃ HÓA ĐƠN</h3>
      </th>
   </tr>
   <tr>
      <th colspan='2'>
         <h2>" . substr($format_id, strlen($id_order), 10) . "</h2>
      </th>
   </tr>
   </table>
   ";

   if (mail($email, "BOOKSELF - Đơn hàng", $msg, $headers)) {
      header('location: ./cart.php');
   } else {
      echo "false";
   }
}
