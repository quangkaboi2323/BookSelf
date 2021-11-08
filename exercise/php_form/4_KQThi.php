<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP and Form - Bai 4</title>
</head>

<body>
   <?php

   if (isset($_POST['toan'])) {
      $t = $_POST['toan'];
      $l = $_POST['ly'];
      $h = $_POST['hoa'];

      $dc = rand(10,30);

      if($t <= 0 || $l <= 0 || $h <= 0){
         $result = "Nhập sai, hãy nhập lại!";
      } else {
         $sum = $t + $l + $h;
         
         if($sum >= $dc) $result = "Đậu";
         else $result = "Rớt";
      }
   }

   ?>
   <form name="KetQuaThi" action="4_KQThi.php" method="post">
      <table align="center" bgcolor="FFCCFF">
         <tr>
            <th colspan="3" bgcolor="pink" style="color: white;">
               <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
            </th>
         </tr>
         <tr>
            <th>Toán: </th>
            <th><input type="text" name="toan" placeholder="Nhập vào điểm toán" value="<?php echo isset($t) ? $t : ""; ?>" required></th>
            <th width="20px"></th>
         </tr>
         <tr>
            <th>Lý:</th>
            <th>
               <input type="text" name="ly" placeholder="Nhập điểm lý" value="<?php echo isset($l) ? $l : ""; ?>" required>
            </th>
            <th></th>
         </tr>
         <tr>
            <th>Hóa:</th>
            <th>
               <input type="text" name="hoa" placeholder="Nhập điểm hóa" value="<?php echo isset($h) ? $h : ""; ?>" required>
            </th>
            <th></th>
         </tr>
         <tr>
            <th>Điểm chuẩn:</th>
            <th>
               <input style="color: red"  type="text" name="dc" value="<?php echo isset($dc) ? $dc : ""; ?>" readonly>
            </th>
            <th></th>
         </tr>
         <tr>
            <th>Tổng điểm:</th>
            <th>
               <input type="text" value="<?php echo isset($sum) ? $sum : ""; ?>" readonly>
            </th>
            <th></th>
         </tr>
         <tr>
            <th>Kết quả:</th>
            <th>
               <input type="text" value="<?php  echo isset($result) ? $result : ""; ?>" readonly>
            </th>
            <th></th>
         </tr>
         <tr>
            <th colspan="2">
               <input type="submit" value="Xem kết quả">
            </th>
         </tr>
      </table>
   </form>
</body>

</html>