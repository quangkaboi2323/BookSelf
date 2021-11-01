<?php
include './head.php';
include './header.php';

//check id
if (!isset($_GET['id'])) header('location: ./products.php');

$id = $_GET['id'];

$book = $conn->query("SELECT * FROM books a, categories b WHERE a.category_id = b.id AND id_book = '$id'");
if ($book->num_rows == 0) header('location: ./404.php');

if ($book->num_rows > 0) $row = $book->fetch_assoc();

?>
<!-- Product section-->
<div class="container py-2">
   <span>Trang chủ > Sản phẩm > <?= $row['title'] ?></span>
   <hr>
</div>
<section class="py-5">
   <div class="container px-4 px-lg-5 my-5">
      <div class="row gx-4 gx-lg-5 align-items-center">
         <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./admin/uploads/<?= $row['image_path'] ?>" alt="..." /></div>
         <div class="col-md-6">
            <div class="small mb-1">MÃ SÁCH: S-<?= $row['id'] ?></div>
            <h1 class="display-5 fw-bolder"><?= $row['title'] ?></h1>
            <div class="fs-5 mb-4">
               <span>Thể loại: <?= $row['name'] ?></span>
            </div>
            <div class="fs-5 mb-1">
               <span>Tác giả: <?= $row['author'] ?></span>
            </div>
            <div class="fs-5 mb-4">
               <b class="text-danger"><?= number_format($row['price'], 0, ',', '.') ?> VND</b>
            </div>
            <p><?= $row['description_book'] ?></p>
            <div class="d-flex">
               <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" min="1" style="max-width: 3rem" />
               <button class="btn btn-outline-success flex-shrink-0" type="button">
                  <i class="bi-cart-fill me-1"></i>
                  Thêm vào giỏ hàng
               </button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Related items section-->
<section class="py-3">
   <div class="container px-4 px-lg-5">
      <h2 class="fw-bolder mb-4">Sản phẩm tương tự</h2>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
         <div class="col mb-2">
            <a href="" style="text-decoration: none;">
               <div class="card h-100 border-0">
                  <!-- Product image-->
                  <img class="card-img-top" src="./admin/uploads/171808_p61609m003.jpg" alt="..." />
                  <!-- Product details-->
                  <div class="card-body">
                     <div class="text-center text-dark">
                        <!-- Product name-->
                        <h6>Fancy Product Fancy Product Fancy Product Fancy Product</h6>
                        <!-- Product price-->
                        $40.00
                     </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer border-top-0 bg-transparent">
                     <div class="text-center"><a class="btn btn-sm btn-outline-dark mt-auto" href="#">Thêm vào giỏ hàng</a></div>
                  </div>
               </div>
            </a>
         </div>
         <div class="col mb-2">
            <a href="" style="text-decoration: none;">
               <div class="card h-100 border-0">
                  <!-- Product image-->
                  <img class="card-img-top" src="./admin/uploads/171808_p61609m003.jpg" alt="..." />
                  <!-- Product details-->
                  <div class="card-body">
                     <div class="text-center text-dark">
                        <!-- Product name-->
                        <h6>Fancy Product Fancy Product Fancy Product Fancy Product</h6>
                        <!-- Product price-->
                        $40.00
                     </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer border-top-0 bg-transparent">
                     <div class="text-center"><a class="btn btn-sm btn-outline-dark mt-auto" href="#">Thêm vào giỏ hàng</a></div>
                  </div>
               </div>
            </a>
         </div>
         <div class="col mb-2">
            <a href="" style="text-decoration: none;">
               <div class="card h-100 border-0">
                  <!-- Product image-->
                  <img class="card-img-top" src="./admin/uploads/171808_p61609m003.jpg" alt="..." />
                  <!-- Product details-->
                  <div class="card-body">
                     <div class="text-center text-dark">
                        <!-- Product name-->
                        <h6>Fancy Product Fancy Product Fancy Product Fancy Product</h6>
                        <!-- Product price-->
                        $40.00
                     </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer border-top-0 bg-transparent">
                     <div class="text-center"><a class="btn btn-sm btn-outline-dark mt-auto" href="#">Thêm vào giỏ hàng</a></div>
                  </div>
               </div>
            </a>
         </div>
         <div class="col mb-2">
            <a href="" style="text-decoration: none;">
               <div class="card h-100 border-0">
                  <!-- Product image-->
                  <img class="card-img-top" src="./admin/uploads/171808_p61609m003.jpg" alt="..." />
                  <!-- Product details-->
                  <div class="card-body">
                     <div class="text-center text-dark">
                        <!-- Product name-->
                        <h6>Fancy Product Fancy Product Fancy Product Fancy Product</h6>
                        <!-- Product price-->
                        $40.00
                     </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer border-top-0 bg-transparent">
                     <div class="text-center"><a class="btn btn-sm btn-outline-dark mt-auto" href="#">Thêm vào giỏ hàng</a></div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<?php include './footer.php'; ?>