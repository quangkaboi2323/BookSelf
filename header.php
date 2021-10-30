<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
         <li class="nav-item">Đăng nhập | Đăng ký</li>
      </ul>
      <form class="d-flex" action="./cart.php">
         <button class="btn btn-sm btn-outline-dark" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Giỏ hàng
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
         </button>
      </form>
   </div>
</nav>
<!-- Header-->
<header class="bg-white py-1">
   <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-dark">
         <h1 class="display-4 fw-bolder"><span>BOOK</span><span class="text-danger">SELF</span></h1>
         <p class="lead fw-normal text-secondary-50 mb-0">Find your book to make your life</p>
      </div>
   </div>
</header>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
   <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="./index.php"><b class="text-white">TRANG CHỦ</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="./products.php"><b class="text-white">SẢN PHẨM</b></a></li>
            <li class="nav-item"><a class="nav-link" href="#!"><b class="text-white">CHI TIẾT WEBSITE</b></a></li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b class="text-white">BÀI TẬP</b></a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">All Products</a></li>
                  <li>
                     <hr class="dropdown-divider" />
                  </li>
                  <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                  <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
               </ul>
            </li>
         </ul>
         <form action="" class="d-flex">
            <div class="input-group">
               <input type="search" class="form-control border-0" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="search-addon" />
               <button type="button" class="btn btn-outline bg-white text-success"><b>Tìm kiếm</b></button>
            </div>
         </form>
      </div>
   </div>
</nav>