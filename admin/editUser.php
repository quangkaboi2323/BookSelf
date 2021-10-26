<?php
include './menu.php';

$id = $_GET['id'];
$user = "SELECT * FROM `users` WHERE `users`.`id` = '$id'";
$result = $conn->query($user);
if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $name = $row['name'];
   $username = $row['username'];
   $type = $row['type'];
} else {
   header("Location: 404.php");
}

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $username = $_POST['username'];
   $type = $_POST['type'];
   $password = $_POST['password'];

   if (empty($password)) {
      $updateUser = "UPDATE `users` SET `name`='$name', `username`='$username', `type`='$type' WHERE `users`.`id` = '$id'";
      $result = $conn->query($updateUser);
      header('location: users.php');
   } else {
      $password = md5($password);
      $updateUser = "UPDATE `users` SET `name`='$name',`username`='$username',`password`='$password',`type`='$type' WHERE `users`.`id` = '$id'";
      $result = $conn->query($updateUser);
      header('location: users.php');
   }
}

?>

<div id="layoutSidenav" style="background-color: #f2f2f2;">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <div class="" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <form action="./editUser.php?id=<?= $id ?>" method="post">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa người dùng</h5>                     
                  </div>
                  <div class="modal-body">
                     <label for="name">Tên</label>
                     <input type="text" id="name" name="name" class="form-control" value="<?= isset($name) ? $name : "" ?>" required>
                     <label for="username">Tên tài khoản</label>
                     <input type="text" id="username" name="username" class="form-control" value="<?= isset($username) ? $username : "" ?>" required>
                     <label for="password">Mật khẩu</label>
                     <input type="password" id="password" name="password" class="form-control" value="">
                     <p class="text-muted h6">Để trống nếu không thay đổi mật khẩu</p>
                     <label for="type">Loại người dùng</label>
                     <select id="type" name="type" class="form-control">
                        <option <?= $type == 1 ? 'selected' : '' ?> value="1">Quản trị</option>
                        <option <?= $type == 0 ? 'selected' : '' ?> value="0">Nhân viên</option>
                     </select>
                  </div>
                  <div class="modal-footer ">
                     <a href="./users.php" class="btn btn-secondary">Quay lại</a>
                     <input type="submit" name="submit" value="Lưu" class="btn btn-primary">
                  </div>
               </div>
            </div>
         </form>
      </div>

      <?php include './footer.php'; ?>

   </div>
</div>

<?php include './foot.php'; ?>