<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP and Form - Bai 3</title>
</head>

<body>
   <?php

   if (isset($_POST['name'])) {
      $csc = $_POST['old'];
      $csm = $_POST['new'];
      $cost = $_POST['cost'];      

      if($csc > $csm || $cost < 0 || $csc < 0 || $csm < 0){
         $result = "Nhập sai, hãy nhập lại.";
      } else {
         $result = ($csm - $csc) * $cost;
      }   
   }

   ?>
   <form name="TienDien" action="3_TienDien.php" method="post">
      <table align="center" bgcolor="FFCCFF">
         <tr>
            <th colspan="3" bgcolor="FFB266" style="color: red;">
               <h2>THANH TOÁN TIỀN ĐIỆN</h2>
            </th>
         </tr>
         <tr>
            <th>Tên chủ hộ</th>
            <th><input type="text" name="name" placeholder="Nhập vào tên chủ hộ" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "";?>"required></th>
            <th></th>
         </tr>
         <tr>
            <th>Chỉ số cũ:</th>
            <th>
               <input type="text" name="old" placeholder="Nhập vào chỉ số cũ" value="<?php echo isset($csc) ? $csc : ""; ?>" required>
            </th>
            <th>(Kw)</th>
         </tr>
         <tr>
            <th>Chỉ số mới:</th>
            <th>
               <input type="text" name="new" placeholder="Nhập vào chỉ số mới" value="<?php echo isset($csm) ? $csm : ""; ?>" required>
            </th>
            <th>(Kw)</th>
         </tr>
         <tr>
            <th>Đơn giá:</th>
            <th>
               <input type="text" name="cost" placeholder="Nhập vào đơn giá" value="<?php echo isset($cost) ? $cost : ""; ?>" required>
            </th>
            <th>(VNĐ)</th>
         </tr>
         <tr>
            <th>Số tiền thanh toán:</th>
            <th>
               <input style="background-color: #FF99FF" type="text" value="<?php echo isset($result) ? $result :"";?>" readonly>
            </th>
            <th>(VNĐ)</th>
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