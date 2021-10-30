<?php
include './head.php';
include './header.php';
?>
<div class="container py-2">
   <span>Trang chủ > Giỏ hàng </span>
   <hr>
</div>
<div class="container">
   <div class="row">
      <div class="col-xl-9 mb-4">
         <ul class="list-group">
            <li class="list-group-item">
               <div class="row">
                  <div class="col-2 text-center">
                     <img src="./admin/uploads/171848_p61628m51mkmsrepsl.jpg" alt="" class="w-100">
                  </div>
                  <div class="col-3 d-flex align-items-center">
                     <div>
                        <p>Tên: Sách A</p>
                        <p>Tác giả: Quang</p>
                     </div>
                  </div>
                  <div class="col-2 d-flex align-items-center">
                     <form action="./cart.php" method="post">
                        <div class="row">
                           <div class="col-xl-6 col-md-8">
                              <input type="submit" name="add" value="+" class="btn btn-sm w-100 btn-outline-dark">
                              <input type="text" name="decide" value="1" min="1" class="form-control text-center bg-white" readonly>
                              <input type="submit" name="decide" value="-" class="btn btn-sm w-100 btn-outline-dark">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-2 d-flex align-items-center">
                     <div class="text-center">
                        <span>22.000 VND</span>
                     </div>
                  </div>
                  <div class="col-2 d-flex align-items-center">
                     <div class="text-center">
                        <p>
                        <h5>TỔNG</h5>
                        </p>
                        <p>22.000 VND</p>
                     </div>
                  </div>
                  <div class="col-1">
                     <form action="./cart.php" method="post" style="float: right;">
                        <button type="submit" name="deleteCartItem" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" style="font-size:20px"></i></button>
                     </form>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <!-- checkout -->
      <div class="col-xl-3 mb-4">
         <div class="card mb-5">
            <div class="card-header text-center bg-success text-white">
               <b>TỔNG HÓA ĐƠN</b>
            </div>
            <div class="card-body">
               <h4 style="float: right;">66.000 VND</h4>
            </div>
         </div>
         <form action="./cart.php" method="post">
            <input type="submit" name="checkout" value="THANH TOÁN" class="btn btn-success w-100">
         </form>
      </div>
   </div>
</div>


<?php include './footer.php'; ?>