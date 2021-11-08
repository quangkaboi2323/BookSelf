<?php

if (isset($_POST['submit'])) {
   $number = $_POST['number'];

   $numbers = explode(',', $number);

   if (count($numbers) > 0) {
      $sum = 0;
      for ($i = 0; $i < count($numbers); $i++)
         if (is_numeric($i)) $sum += $numbers[$i];
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ArrayFunction - bai2</title>
</head>

<body>
   <form action="2_array.php" method="post" name="bai2">
      <table align="center" bgcolor="lightblue">
         <tr>
            <td colspan="4" bgcolor="blue" style="color: white; padding: 0px 30px">
               <h2>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h2>
            </td>
         </tr>
         <tr>
            <td>Nhập vào dãy số: </td>
            <td><input type="text" name="number" required placeholder="Nhập vào dãy số ..." value="<?php echo isset($number) ? $number : "" ?>"></td>
            <td style="color: red"><b>(*)</b></td>
            <td></td>
         </tr>
         <tr>
            <td></td>
            <td colspan="3"><input type="submit" name="submit" value="Tổng dãy số" style="background-color: lightyellow; padding: 5px 20px"></td>
         </tr>
         <tr>
            <td>Tổng dãy số: </td>
            <td colspan="3"><input type="text" value="<?php echo isset($sum) ? $sum : "" ?>" readonly style="background-color:lightgreen"></td>
         </tr>
         <tr>
            <td colspan="4" align="center">
               <b style="color: red">(*)</b> Các số được nhập cách nhau bàng dấu ","
            </td>
         </tr>
      </table>
   </form>
</body>

</html>