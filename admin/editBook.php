<?php
include './menu.php';

$id = $_GET['id'];
$user = "SELECT * FROM `books` WHERE `books`.`id_book` = '$id'";
$result = $conn->query($user);
if ($result->num_rows > 0) {

   $row = $result->fetch_assoc();
   $title = $row['title'];
   $author = $row['author'];
   $price = $row['price'];
   $category = $row['category_id'];
   $desc = $row['description_book'];
   $img = $row['image_path'];
} else {
   header("Location: 404.php");
}

$target_dir = "uploads/";
$extension = array('jpg', 'png', 'jpeg');

if (isset($_POST['submit'])) {
   $title = $_POST['title'];
   $author = $_POST['author'];
   $price = $_POST['price'];
   $desc = $_POST['desc'];
   $category = $_POST['category'];

   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (!empty($_FILES['fileToUpload']['name'])) {
      if (!is_numeric($price + 0) || ($price + 0) < 0) {
         $error = "Nhập sai !!!";
      } else {
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if ($check === false) {
            $error = "Đã xảy ra lỗi khi tải ảnh lên.";
         } else {
            if (file_exists($target_file)) {
               $error = "Ảnh đã tồn tại.";
            } else if ($_FILES["fileToUpload"]["size"] > 500000) {
               $error = "Ảnh quá lớn.";
            } else if (!in_array($imageFileType, $extension)) {
               $error = "Tệp tin không phải là ảnh.";
            } else {
               unlink($target_dir . $img);
               move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
               $image_path = basename($_FILES["fileToUpload"]["name"]);
               $updateBook = "UPDATE `books` SET `category_id`='$category',`title`='$title',`author`='$author',
                              `description_book`='$desc',`price`='$price', `image_path` = '$image_path' WHERE `books`.`id_book` = '$id'";
               $result = $conn->query($updateBook);
               if (!$result) {
                  $error = "Lỗi cập đăng lên server!";
               }
               header("Location: books.php");
            }
         }
      }
   } else {
      $updateBooks = "UPDATE `books` SET `category_id`='$category',`title`='$title',`author`='$author',
                           `description_book`='$desc',`price`='$price' WHERE `books`.`id_book` = '$id'";
      $result = $conn->query($updateBooks);
      if (!$result) {
         $error = "Lỗi cập đăng lên server!";
      } else {
         header("Location: books.php");
      }
   }
}

?>

<div id="layoutSidenav" style="background-color: #f2f2f2;">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <div class="h4 mt-2 ms-2 text-center" style="text-transform: uppercase;"><b>Chỉnh sửa sản phẩm</b></div>
      <hr>
      <div class="row mt-2 ms-2 me-2">
         <div class="col-xl-4 col-sm-12">
            <img src="./uploads/<?= $img ?>" class="img-fluid rounded-start" alt="..." style="width: 100%">
         </div>
         <div class="col-xl-8  col-sm-12">
            <form action="" method="post" enctype="multipart/form-data">
               <div class="card">
                  <div class="card-header">
                     <h5 style="text-transform: uppercase;">Thôn tin sản phẩm</h5>
                  </div>
                  <div class="card-body">
                     <label for="title">Tiêu đề</label>
                     <input type="text" id="title" name="title" class="form-control" value="<?= $title ?>" required>
                     <div class="row">
                        <div class="col-8">
                           <label for="author">Tác giả</label>
                           <input type="text" id="author" name="author" class="form-control" value="<?= $author ?>" required>
                        </div>
                        <div class="col-4">
                           <label for="price">Giá</label>
                           <input type="text" id="price" name="price" class="form-control" value="<?= $price ?>" required>
                        </div>
                     </div>
                     <label for="desc">Mô tả</label>
                     <textarea id="desc" name="desc" class="form-control" placeholder="" required><?= $desc ?></textarea>
                     <label for="category">Thể loại</label>
                     <Select name="category" id="category" class="form-control">
                        <?php
                        $categories = "SELECT * FROM `categories`";
                        $result = $conn->query($categories);
                        while ($row = $result->fetch_array()) { ?>
                           <option value="<?= $row['id'] ?>" <?php if ($row['id'] == $category) echo 'selected'; ?>><?= $row['name'] ?></option>
                        <?php } ?>
                        ?>
                     </Select>
                     <label for="image">Hình ảnh</label>
                     <input type="file" id="fileToUpload" name="fileToUpload" class="form-control">
                  </div>
                  <div class="card-footer text-center">
                     <a href="./books.php" class="btn btn-secondary">Quay về</a>
                     <input type="submit" name="submit" value="Lưu" class="btn btn-primary">
                  </div>
               </div>
            </form>
         </div>
      </div>

      <?php include './footer.php'; ?>

   </div>
</div>

<?php include './foot.php'; ?>