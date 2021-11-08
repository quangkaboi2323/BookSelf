<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP and Form - Bai 1</title>
</head>

<body>
   <?php

   if (isset($_POST["dai"]) && isset($_POST["rong"])) {
      $dai = $_POST["dai"];
      $rong = $_POST["rong"];      

      if ($dai <= 0 || $rong <= 0 || $dai < $rong) {
         $result = "Nhập sai, hãy nhập lại!";         
      } else {
         $result = $dai * $rong;              
      }
   }

   ?>
   <form name="S_HCN" action="1_DienTichHCN.php" method="post">
      <table align="center" bgcolor="pink">
         <tr>
            <th colspan="2" bgcolor="orange" style="color: red;">
               <h2>TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
            </th>
         </tr>
         <tr>
            <th>Chiều dài</th>
            <th><input type="text" name="dai" placeholder="Nhập vào chiều dài" value="<?php echo isset($dai) ? $dai : ""; ?>" required></th>
         </tr>
         <tr>
            <th>Chiều rộng</th>
            <th><input type="text" name="rong" placeholder="Nhập vào chiều rộng" value="<?php echo isset($rong) ? $rong : ""; ?>" required></th>
         </tr>
         <tr>
            <th>Diện tích</th>
            <th><input type="text" value="<?php echo isset($result) ? $result: ""; ?>" readonly></th>
         </tr>
         <tr>
            <th colspan="2">
               <input type="submit" value="Tính">
            </th>
         </tr>
      </table>
   </form>
</body>

</html>