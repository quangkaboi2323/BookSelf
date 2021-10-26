<?php

$target_dir = "uploads/";
$extension = array('jpg', 'png', 'jpeg');

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
   $title = $_POST["title"];
   $author = $_POST["author"];
   $desc = $_POST["desc"];
   $category = $_POST["category"];
   $price = $_POST["price"];
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   $existBook = "SELECT * FROM `books` WHERE `title` = '$title' AND `author` = '$author' AND  `category_id` = '$category' AND `price` = '$price'";
   $result = $conn->query($existBook);
   if ($result->num_rows > 0) {
      $error = "Sách đã tồn tại.";
   } else if (!is_numeric($price + 0) || $price + 0 < 0) {
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
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $image_path = basename($_FILES["fileToUpload"]["name"]);
            $insertNewBook = "INSERT INTO `books`(`category_id`, `title`, `author`, `description_book`, `price`, `image_path`) 
                                 VALUES ('$category','$title','$author','$desc','$price','$image_path')";
            $result = $conn->query($insertNewBook);
            if (!$result) {
               $error = "Lỗi cập đăng lên server!";
            }
            // header("Location: books.php");
         }
      }
   }
}
