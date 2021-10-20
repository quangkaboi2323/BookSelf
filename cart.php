<?php include './header.php'; ?>

<body>
   <div class="container">
      <div class="py-5">
         <div class="row">
            <div class="col-xl-8 col-sm-12">
               <div class="card">
                  <div class="card-body">
                     <!-- item of card -->
                     <div class="row py-2 border">
                        <div class="col-3">
                           <div class="h-100 d-flex justify-content-center align-items-center">
                              <img src="https://i0.wp.com/buubize.com/wp-content/uploads/2020/12/thien-tai.jpg?fit=799%2C1065" alt="" style="width: 100%">
                           </div>
                        </div>
                        <div class="col-6">
                           <p>Tên sách: <b>Thiên tài bên trái kẻ điên bên phải</b></p>
                           <p>Tác giả: <b>Quang</b></p>
                           <p>Giá: <span>69.000</span>đ</p>
                           <br>
                           <div class="row container">
                              <button class="col-3 btn btn-secondary"><b style="font-size:20px">-</b></button>
                              <input type="number" value="1" min="1" readonly class="form-control col text-center">
                              <button class="col-3 btn btn-secondary"><b style="font-size:20px">+</b></button>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="float-end">
                              <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                           </div>
                           <div class="h-100 d-flex justify-content-center align-items-center">
                              <h5><span>124.000</span>đ</h5>
                           </div>
                        </div>
                     </div>
                     <!-- item of card -->
                     <div class="row py-2 border">
                        <div class="col-3">
                           <div class="h-100 d-flex justify-content-center align-items-center">
                              <img src="https://i0.wp.com/buubize.com/wp-content/uploads/2020/12/thien-tai.jpg?fit=799%2C1065" alt="" style="width: 100%">
                           </div>
                        </div>
                        <div class="col-6">
                           <p>Tên sách: <b>Thiên tài bên trái kẻ điên bên phải</b></p>
                           <p>Tác giả: <b>Quang</b></p>
                           <p>Giá: <span>69.000</span>đ</p>
                           <br>
                           <div class="row container">
                              <button class="col-3 btn btn-secondary"><b style="font-size:20px">-</b></button>
                              <input type="number" value="1" min="1" readonly class="form-control col text-center">
                              <button class="col-3 btn btn-secondary"><b style="font-size:20px">+</b></button>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="float-end">
                              <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                           </div>
                           <div class="h-100 d-flex justify-content-center align-items-center">
                              <h5><span>124.000</span>đ</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-sm-12">
               <div class="card mb-2">
                  <div class="card-header bg-primary text-white "><b>TỔNG CỘNG</b></div>
                  <div class="card-body">
                     <div class="float-end h3"><b><span>248.000</span>đ</b></div>
                  </div>
               </div>
               <button class="w-100 text-center btn btn-primary h3" data-bs-toggle="modal" data-bs-target="#checkout">
                  Thanh toán
               </button>

               <!-- Modal -->
               <div class="modal fade right" id="checkout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <p class="h6">Giao dịch này chỉ chấp nhận tiền mặt khi giao hàng. Vui lòng đợi email xác minh hoặc cuộc gọi từ ban quản lý sau khi thanh toán</p>
                           <form action="" method="post">
                              <label for="address" class="h6">Địa chỉ nhận hàng</label>
                              <textarea class="form-control" name="address" id="address" cols="30" rows="3" required></textarea>                              
                           </form>
                        </div>
                        <div class="modal-footer">
                           <input type="submit" name="submit" value="Thanh toán" class="btn btn-primary">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

<?php include './footer.php'; ?>