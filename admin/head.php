<div id="layoutSidenav_nav">
   <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
         <div class="nav">
            <div class="sb-sidenav-menu-heading">chính</div>
            <a class="nav-link" href="index.php">
               <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
               BẢNG ĐIỀU KIỂN
            </a>
            <div class="sb-sidenav-menu-heading">Giao diện</div>
            <a class="nav-link" href="orders.php">
               <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
               Hóa đơn
            </a>
            <a class="nav-link" href="books.php">
               <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
               Sách
            </a>
            <a class="nav-link" href="categories.php">
               <div class="sb-nav-link-icon"><i class="fas fa-clone"></i></div>
               Thể loại
            </a>
            <a class="nav-link" href="users.php">
               <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
               Người dùng
            </a>
         </div>
      </div>
      <div class="sb-sidenav-footer">
         <div class="small">Đăng nhập với:</div>
         <?php             
            echo "<b><i>".$_SESSION['name']."</b></i>";
         ?>
      </div>
   </nav>
</div>