<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP and Form - Bai 2</title>
</head>

<body>
   <?php    
   if (isset($_POST["bk"])) {
      define('PI', 3.14);
      $bk = $_POST["bk"];          

      if($bk <= 0){
         $dt = "Nhập sai, hãy nhập lại!";
         $cv = "Nhập sai, hãy nhập lại!";
      } else {
         $dt = PI * $bk ** 2; 
         $cv = PI * $bk * 2;
      }
   }

   ?>
   <form name="S_HT" action="2_DienTichHT.php" method="post">
      <table align="center" bgcolor="pink">
         <tr>
            <th colspan="2" bgcolor="orange" style="color: red;">
               <h2>DIỆN TÍCH và CHU VI <br> HÌNH TRÒN</h2>
            </th>
         </tr>
         <tr>
            <th>Bán kính</th>
            <th><input type="text" name="bk" placeholder="Nhập vào bán kính" value="<?php echo isset($bk) ? $bk : ""; ?>" required></th>
         </tr>         
         <tr>
            <th>Diện tích</th>
            <th><input type="text" value="<?php echo isset($dt) ? $dt: ""; ?>" readonly></th>
         </tr>
         <tr>
            <th>Chu vi</th>
            <th><input type="text" value="<?php echo isset($cv) ? $cv: ""; ?>" readonly></th>
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