<?php
include './head.php';
include './header.php';
?>
<div class="container">
   <!-- welcome -->
   <div class="d-flex justify-content-center py-5">
      <h1 style="font-size: 50px" class="text-success">WELCOME TO BOOKSELF</h1>
   </div>
   <div class="d-flex justify-content-center py-2">
      <h1 style="font-size: 150px" class="text-success">---<i class="bi bi-book"></i>---</h1>
   </div>
   <hr>
   <!-- new products    -->
   <?php
   function str_limit($value, $limit = 100, $end = '...')
   {
      $limit = $limit - mb_strlen($end); // Take into account $end string into the limit
      $valuelen = mb_strlen($value);
      return $limit < $valuelen ? mb_substr($value, 0, mb_strrpos($value, ' ', $limit - $valuelen)) . $end : $value;
   }
   //select 4 books newest
   $newProducts = "SELECT * FROM books ORDER BY date_created DESC LIMIT 4";
   $result = $conn->query($newProducts);
   ?>
   <div class="d-flex justify-content-center p-2">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-center">
         <?php
         while ($row = $result->fetch_array()) {
         ?>
            <div class="col mt-<?= rand(1, 5) ?>">
               <div class="card border-success">
                  <div class="card-header bg-success border-0">
                     <h5 class="card-title text-center text-white">SÁCH MỚI</h5>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title"><?= $row['title'] ?></h5>
                     <p class="card-text"><?= str_limit($row['description_book']) ?></p>                     
                  </div>
                  <div class="card-footer bg-white border-0">
                     <img src="./admin/uploads/<?= $row['image_path']?>" class="card-img w-100 mb-2" alt="...">
                     <a href="./detail.php?id=<?= $row['id_book']?>" class="btn btn-sm btn-outline-success w-100">Xem Ngay</a>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
   <hr>
   <!-- information author -->
   <div class="card mb-3 ms-5">
      <div class="row g-0">
         <div class="col-md-4">
            <img src="./assets/img/1.png" style="border-radius: 50%;" class="img-fluid rounded-start" alt="...">
         </div>
         <div class="col-md-4">
            <div class="card-body ms-2">
               <h3 class="card-title">Thông tin</h3><br>
               <p class="card-text">Họ và tên: Nguyễn Hữu Vinh Quang</p>
               <p class="card-text">Trường: Đại học Nha Trang</p>
               <p class="card-text">Lớp: 60.CNTT-2</p>
               <p class="card-text">MSSV: 60130835</p>
               <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
         </div>
         <div class="col-md-4 text-center">
            <div class="card-body ms-2">
               <div class="mt-4 text-center text-dark">
                  <h1 class="display-4 fw-bolder"><span>BOOK</span><span class="text-danger">SELF</span></h1>
                  <p class="lead fw-normal text-secondary-50 mb-0">Find your book to make your life</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
include './footer.php';
?>