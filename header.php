<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>BookSelf - book store online</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Bootstrap icons-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
         <a class="navbar-brand" href="#!"><b>BookSelf</b></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
               <li class="nav-item"><a class="nav-link" aria-current="page" href="#!">Trang chủ</a></li>
               <li class="nav-item"><a class="nav-link" href="#!">Giới thiệu</a></li>
               <li class="nav-item" hidden>
                  <!-- Button trigger modal of detail-->
                  <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#detailOrders">Đăng nhập</a>
                  <!-- Modal -->
                  <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <b class="modal-title" id="exampleModalLabel">ĐĂNG NHẬP</b>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="" method="post">
                                 <label for="email">Email</label>
                                 <input class="form-control" type="email" id="email" name="email" placeholder="" required>
                                 <label for="password">Mật khẩu</label>
                                 <input class="form-control" type="password" id="password" name="password" required>
                                 <div class="sm mt-2"><a class="" href="./register.php">Chưa có tài khoản, đăng kí tại đây!</a></div>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                              <button type="button" class="btn btn-primary">Đăng nhập</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Đăng nhập</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#!">All Products</a></li>
                     <li>
                        <hr class="dropdown-divider" />
                     </li>
                     <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                     <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                  </ul>
               </li> -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="user" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Xin chào: <span>Quang</span></a>
                  <ul class="dropdown-menu" aria-labelledby="user">
                     <li><a class="dropdown-item" href="#!">Quản lý tài khoản</a></li>
                     <li>
                        <hr class="dropdown-divider" />
                     </li>
                     <li><a class="dropdown-item" href="#!">Đăng xuất</a></li>
                  </ul>
               </li>
            </ul>
            <!-- cart -->
            <div>
               <form class="d-flex">
                  <a class="btn btn-outline-dark" href="./cart.php">
                     <i class="bi-cart-fill me-1"></i>
                     Cart
                     <span class="badge bg-dark text-white ms-1 rounded-pill">2</span>
                  </a>                  
               </form>
            </div>
         </div>
      </div>
   </nav>