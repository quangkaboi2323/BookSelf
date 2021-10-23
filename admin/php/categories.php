<?php
if (isset($_POST['idCate'])) {
   $id = $_POST['idCate'];
   $name = $_POST['editName'];
   $desc = $_POST['editDesc'];
}

if (isset($_POST['reset'])) header("location: ./categories.php");



if (isset($_POST['submit'])) {
   $id = $_POST['id'];
   $categoryName = $_POST['categoryName'];
   $categoryDesc = $_POST['categoryDesc'];      

   if (!empty($id)) {
      $updateCate = "UPDATE `categories` SET `name`='$categoryName',`description`='$categoryDesc' WHERE `categories`.`id` = '$id'";
      $result = $conn->query($updateCate);
      header('location: categories.php');
   } else {
      $existCate = "SELECT * FROM `categories` WHERE `name` = '$categoryName'";
      $result = $conn->query($existCate);
      if ($result->num_rows > 0) {
         $catchErr = "Đã có thể loại này";
      } else {
         $inserCate = "INSERT INTO `categories`( `name`, `description`) VALUES ('$categoryName','$categoryDesc')";
         $result = $conn->query($inserCate);
         header('location: categories.php');
      }
   }
}

?>
<!-- <button type="button" id="actionAlert" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" hidden></button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-sm">
      <div class="modal-content">
         <div class="modal-body bg-success text-white rounded border border-white">
            <div class="text-center h5">
               Thêm thành công
            </div>
         </div>
      </div>
   </div>
</div> -->