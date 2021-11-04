<?php
include './head.php';

if (!isset($_SESSION['client'])) {
   header('location: ./index.php');
}

include './header.php';


$id = $_SESSION['id'];
$currentCus = $conn->query("SELECT * FROM customers WHERE id = '$id'");
$row = $currentCus->fetch_assoc();

if (is_array($row)) {
   $nameCustomer = $row['name'];
   $numberCustomer = $row['contact'];
   $addressCustomer = $row['address'];
}

if (isset($_POST['submitUpdate'])) {
   $nameCustomer = $_POST['nameCustomer'];
   $numberCustomer = $_POST['numberCustomer'];
   $addressCustomer = $_POST['addressCustomer'];

   if (empty($nameCustomer) || empty($numberCustomer) || empty($addressCustomer)) {
      $updateErr = "Không được để trống!";
   } else {
      if (is_numeric($numberCustomer) && strlen($numberCustomer) == 10) {
         $updateCustomer = $conn->query("UPDATE `customers` SET `name`='$nameCustomer',`address`='$addressCustomer',`contact`='$numberCustomer' 
                                          WHERE id = '$id'");
         $_SESSION['name'] = $nameCustomer;
      } else {
         $updateErr = "Nhập sai số điện thoại";
      }
   }
}

if (isset($_POST['submitChangePass'])) {
   $oldPass = $_POST['oldPass'];

   if (md5($oldPass) == $row['password']) {
      $newPass = $_POST['newPass'];
      $newPassComfirm = $_POST['newPassComfirm'];

      if ($newPass == $newPassComfirm) {
         $newPass = md5($newPass);

         $changePass = $conn->query("UPDATE `customers` SET `password`='$newPass'
                                          WHERE id = '$id'");
      } else {
         $changePassErr = "Mật khẩu mới không khớp!";
      }
   } else {
      $changePassErr = "Nhập sai mật khẩu";
   }
}
?>
<!-- Product section-->
<div class="container py-2">
   <span>Trang chủ > Người dùng</span>
   <hr>
</div>
<div class="container">
   <div class="row">
      <div class="col-xl-6">
         <div class="modal-dialog">
            <form action="./customer.php" method="post">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Thông tin người dùng</h5>
                  </div>
                  <div class="modal-body">
                     <div class="form-floating mb-3 text-center" <?= isset($updateErr) ? "" : "hidden" ?>>
                        <input class="form-control form-sm border-danger text-danger" style="background-color: #ffcccc;" type="text" value="<?= isset($updateErr) ? $updateErr : "" ?>" />
                     </div>
                     <label for="nameCustomer">Tên người dùng</label>
                     <input type="text" id="nameCustomer" name="nameCustomer" class="form-control" value="<?= $nameCustomer ?>" required>
                     <label for="numberCustomer">Số điện thoại liên hệ</label>
                     <input type="text" id="numberCustomer" name="numberCustomer" class="form-control" value="<?= $numberCustomer ?>" required>
                     <label for="addressCustomer">Địa chỉ người dùng</label>
                     <textarea id="addressCustomer" name="addressCustomer" class="form-control" required rows="1"><?= $addressCustomer ?></textarea>
                  </div>
                  <div class="modal-footer">
                     <input type="submit" name="submitUpdate" value="Lưu" class="btn btn-success w-100">
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="col-xl-6">
         <div class="modal-dialog">
            <form action="./customer.php" method="post">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Thay đổi mật khẩu</h5>
                  </div>
                  <div class="modal-body">
                     <div class="form-floating mb-3 text-center" <?= isset($changePassErr) ? "" : "hidden" ?>>
                        <input class="form-control form-sm border-danger text-danger" style="background-color: #ffcccc;" type="text" value="<?= isset($changePassErr) ? $changePassErr : "" ?>" />
                     </div>
                     <label for="oldPass">Mật khẩu cũ</label>
                     <input type="password" id="oldPass" name="oldPass" class="form-control" placeholder="" required>
                     <label for="newPass">Mật khẩu mới</label>
                     <input type="password" id="newPass" name="newPass" class="form-control" minlength="8" required>
                     <label for="newPassComfirm">Xác nhận mật khẩu mới</label>
                     <input type="password" id="newPassComfirm" name="newPassComfirm" class="form-control" minlength="8" required>
                  </div>
                  <div class="modal-footer">
                     <input type="submit" name="submitChangePass" value="Thay đổi" class="btn w-100 btn-danger">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php include './footer.php'; ?>