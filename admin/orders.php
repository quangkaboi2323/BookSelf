<?php include './menu.php'; ?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Hóa đơn</h1>
            <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item active">Chào mừng trở lại <span>admin</span> !</li>
            </ol>
            <div class="card mb-4">
               <div class="card-header bg-dark text-white">
                  <i class="fas fa-table me-1"></i>
                  Danh sách hóa đơn
               </div>
               <div class="card-body">
                  <table id="datatablesSimple">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Ngày</th>
                           <th>Khách hàng</th>
                           <th>Số mặt hàng</th>
                           <th>Tổng hóa đơn</th>
                           <th>Thao tác</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>#</th>
                           <th>Ngày</th>
                           <th>Khách hàng</th>
                           <th>Số mặt hàng</th>
                           <th>Tổng hóa đơn</th>
                           <th>Thao tác</th>
                        </tr>
                     </tfoot>

                     <tbody>
                        <?php
                        $orders = $conn->query("SELECT * FROM orders a, customers b WHERE a.customer_id = b.id ORDER BY a.created_day DESC");
                        if ($orders->num_rows > 0) {
                           $number = 1;
                           while ($row = $orders->fetch_array()) {
                              $id = $row['id_order'];
                              $orderList = $conn->query("SELECT * FROM order_list a, books b WHERE a.book_id = b.id_book AND a.order_id = '$id'"); ?>
                              <tr>
                                 <td><?= $number ?></td>
                                 <td><?= date('d - m - Y', strtotime($row['created_day'])); ?></td>
                                 <td><?= $row['name'] ?></td>
                                 <td><?= $orderList->num_rows ?></td>
                                 <td><span><?= number_format($row['total_amount'], 0, ',', '.') ?></span>đ</td>
                                 <td>
                                    <!-- Button trigger modal of detail-->
                                    <input type="button" class="btn btn-primary btn-sm" value="Chi tiết" data-bs-toggle="modal" data-bs-target="#detailOrders<?= $id ?>">
                                    <!-- Modal -->
                                    <div class="modal fade" id="detailOrders<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <b class="modal-title" id="exampleModalLabel">CHI TIẾT HÓA ĐƠN</b>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                <div>
                                                   <div class="col text-center">
                                                      <b><i style="color: grey">Thông tin</i></b>
                                                   </div>
                                                   <hr>
                                                   <p>Khách hàng: <b><?= $row['name'] ?></b></p>
                                                   <p>Số điện thoại: <b>0<?= $row['contact'] ?></b></p>
                                                   <p>Địa chỉ giao hàng: <b><?= $row['address_order'] ?></b></p>
                                                   <p>Tổng tiền: <b><span><?= number_format($row['total_amount'], 0, ',', '.') ?></span>đ</b></p>
                                                   <hr>
                                                </div>
                                                <?php while ($row = $orderList->fetch_array()) { ?>
                                                   <div class="card mb-3" style="max-width: 540px;">
                                                      <div class="row g-0">
                                                         <div class="col-md-4">
                                                            <img src="./uploads/<?= $row['image_path'] ?>" class="img-fluid rounded-start" alt="...">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <div class="card-body">
                                                               <h5 class="card-title"><?= $row['title'] ?></h5>
                                                               <p class="card-text">Tác giả: <?= $row['author'] ?></p>                                                               
                                                               <p class="card-text">Số lượng: <?= $row['qty'] ?></p>        
                                                               <p class="card-text"><span class="text-muted">Giá tiền: <?= number_format($row['price'], 0, ',', '.') ?> vnd</span></p>                                                       
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                <?php } ?>
                                             </div>                                             
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <input type="button" class="btn btn-danger btn-sm" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder<?= $id ?>">
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteOrder<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xóa hóa đơn</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa hóa đơn này?
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">hủy</button>
                                                <!-- <button type="button" class="btn btn-primary">Xóa</button> -->
                                                <a href="./php/deleteOrder.php?id=<?= $id ?>" class="btn btn-danger">Xác nhận</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                        <?php $number++;
                           }
                        } ?>
                     </tbody>
                  </table>
               </div>
            </div>

         </div>
      </main>

      <?php include './footer.php'; ?>

   </div>
</div>

<?php include './foot.php'; ?>