<?php

function even($arr)
{
   $count = 0;

   foreach ($arr as $i) {
      if ($i % 2 == 0) $count++;
   }

   return $count;
}

function simple_quick_sort($arr)
{
   if (count($arr) <= 1) {
      return $arr;
   } else {
      $pivot = $arr[0];
      $left = array();
      $right = array();
      for ($i = 1; $i < count($arr); $i++) {
         if ($arr[$i] > $pivot) {
            $left[] = $arr[$i];
         } else {
            $right[] = $arr[$i];
         }
      }
      return (array_merge(
         simple_quick_sort($left),
         array($pivot),
         simple_quick_sort($right)
      ));
   }
}

if (isset($_POST['submit'])) {
   $n = $_POST['input'];

   if (is_numeric($n) && $n > 0 && is_int($n + 0)) {
      //cau b
      // echo "true";
      $arr = array();

      for ($i = 0; $i < $n; $i++) {
         $arr[$i] = rand(-200, 200);
      }

      $even = even($arr);
   } else {
      // echo "flase";
      header("Location: baitap1.php");
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="baitap1.php" method="post">
      <table align="center">
         <tr>
            <td>Nhập vào số: <input type="text" name="input" value="<?php echo isset($_POST['submit']) ? $_POST['input'] : '' ?>" placeholder="Nhập vào số nguyên dương ..."></td>
            <td><input type="submit" name="submit" value="Thực hiện"></td>
         </tr>
      </table>
   </form>
   <hr>
   <table align="center" <?php echo isset($_POST['submit']) ? "" : 'hidden' ?> border="1">
      <tr>
         <td>Cau b:</td>
         <td>
            <textarea name="caub" id="caub" cols="30" rows="2" wrap=physical><?php if (isset($arr)) foreach ($arr as $i) echo $i . ' ';  ?></textarea>
         </td>
      </tr>
      <tr>
         <td>Cau c:</td>
         <td>
            <?php echo isset($even) ? $even : ''; ?>
         </td>
      </tr>
      <tr>
         <td>Cau d</td>
         <td>
            <?php

            foreach ($arr as $i)
               if ($i < 0) echo $i . ' ';

            ?>
         </td>
      </tr>
      <tr>
         <td>Cau e</td>
         <td>
            <?php
            $sum = 0;
            foreach ($arr as $i)
               if ($i < 0) $sum += $i;

            if ($sum == 0) echo 'Khong co phan tu am trong mang';
            else echo $sum;
            ?>
         </td>
      </tr>
      <tr>
         <td>Cau f</td>
         <td>
            <?php
            foreach ($arr as $key => $i)
               if ($i == 0) echo $key;
            ?>
         </td>
      </tr>
      <tr>
         <td>Cau g</td>
         <td>
            <?php
            if (isset($arr)) {
               $arr = simple_quick_sort($arr);
               foreach ($arr as $i) echo $i . ' ';
            }

            ?>
         </td>
      </tr>
   </table>
</body>

</html>