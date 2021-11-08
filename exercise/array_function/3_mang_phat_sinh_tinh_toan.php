<?php

function createArr(int $number)
{
   $result = array();
   for ($i = 0; $i < $number; $i++) {
      array_push($result, rand(0, 20));
   }

   return $result;
}

function printArr($arr)
{
   foreach ($arr as $i) echo $i . " ";
}

function sum($arr)
{

   $sum = 0;
   foreach ($arr as $i) $sum += $i;

   return $sum;
}

function maxValue($arr)
{
   $max = $arr[0];
   for ($i = 1; $i < count($arr); $i++)
      if ($arr[$i] > $max) $max = $arr[$i];

   return $max;
}

function minValue($arr)
{
   $min = $arr[0];
   for ($i = 1; $i < count($arr); $i++)
      if ($arr[$i] < $min) $min = $arr[$i];

   return $min;
}

if (isset($_POST['input'])) {
   $n = $_POST['input'];

   if (!is_numeric($n) || $n < 0) {          
      header('location: 3_array.php');
   } else
      $arr = createArr($n);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ArrayFunction - bai3</title>
</head>

<body>
   <form action="3_array.php" method="post" name="bai3">
      <table align="center" style="border: 1px solid">
         <tr>
            <td colspan="2" bgcolor="#61176f" style="color: white; padding: 0px 30px">
               <h2 style="padding: 0px 20px;">PHÁT SINH MẢNG VÀ TÍNH TOÁN</h2>
            </td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2">Nhập vào số phần tử: </td>
            <td bgcolor="#f4bef2"><input style="width: 70%" type="text" name="input" value="<?php echo isset($_POST['submit']) ? $_POST['input'] : ''; ?>" placeholder="Nhập vào số phần tử..." required></td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2"> </td>
            <td bgcolor="#f4bef2"><input style="width: 60%;" type="submit" name="submit" value="Phát sinh và tính toán"></td>
         </tr>
         <tr>
            <td>Mảng:</td>
            <td><input type="text" value="<?php isset($_POST['submit']) ? printArr($arr) : ''; ?>" readonly style="width: 80%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td>GTLN (MAX) trong mảng:</td>
            <td><input type="text" value="<?php echo isset($_POST['submit']) ? maxValue($arr) : ''; ?>" readonly style="width: 40%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td>GTNN (MIN) trong mảng:</td>
            <td><input type="text" value="<?php echo isset($_POST['submit']) ? minValue($arr) : ''; ?>" readonly style="width: 40%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td>Tổng mảng:</td>
            <td><input type="text" value="<?php echo isset($_POST['submit']) ? sum($arr) : ''; ?>" readonly style="width: 40%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td colspan="2" align="center">
               (<b style="color: red">Ghi chú:</b> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
            </td>
         </tr>
      </table>
   </form>
</body>

</html>