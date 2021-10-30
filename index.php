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
   <!-- best seller and new products    -->
   <div class="d-flex justify-content-center p-2">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-center">
         <div class="col mt-1">
            <div class="card border-success">
               <div class="card-header bg-white border-0">
                  <h5 class="card-title">Tiêu đề</h5>
                  <p class="card-text">Tác giả</p>
                  <p class="card-text">Giá</p>
               </div>
               <div class="card-body ">
                  <img src="./admin/uploads/332492_p86867mscan0001.jpg" class="card-img w-100" alt="...">
               </div>
               <div class="card-footer bg-white border-0">
                  <h5 class="card-title  text-center">SÁCH MỚI</h5>
               </div>
            </div>
         </div>
         <div class="col mt-5">
            <div class="card border-success">
               <div class="card-header bg-white text-center border-0">
                  <h5 class="card-title">SÁCH BÁN CHẠY</h5>
               </div>
               <div class="card-body">
                  <img src="./admin/uploads/332492_p86867mscan0001.jpg" class="card-img w-100" alt="...">
               </div>
               <div class="card-footer bg-white border-0">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Tác giả</p>
                  <p class="card-text">Giá</p>
               </div>
            </div>
         </div>
         <div class="col mt-3">
            <div class="card border-success">
               <div class="card-header bg-white border-0">
                  <img src="./admin/uploads/332492_p86867mscan0001.jpg" class="card-img w-100" alt="...">
               </div>
               <div class="card-body text-center">
                  <h5 class="card-title">SÁCH MỚI</h5>
               </div>
               <div class="card-footer bg-white border-0">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Tác giả</p>
                  <p class="card-text">Giá</p>
               </div>
            </div>
         </div>
         <div class="col mt-4">
            <div class="card border-success">
               <div class="card-header bg-white border-0">
                  <h5 class="card-title">SÁCH BÁN CHẠY</h5>
               </div>
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
               </div>
               <div class="card-footer bg-white border-0">
                  <img src="./admin/uploads/332492_p86867mscan0001.jpg" class="card-img w-100" alt="...">
               </div>
            </div>
         </div>
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