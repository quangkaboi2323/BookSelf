<?php 

if(!isset($_POST['fullname'])){
   header('Location: form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Config</title>
</head>
<body>
   Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập: <br>
   Họ tên: <?php echo $_POST['fullname'] ?> <br>
   Address: <?php echo $_POST['address'] ?> <br>
   Phone: <?php echo is_numeric($_POST['phone']) ? $_POST['phone'] : header('Location: form.php') ?> <br>
   gender: <?php echo $_POST['gender'] ?> <br>
   Country: <?php echo $_POST['country'] ?> <br>
   Notes: <?php echo $_POST['note'] ?> <hr>
   <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
</body>
</html>