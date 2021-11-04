<?php
include './head.php';
include './header.php';

if (!isset($_SESSION['client'])) {
   session_unset();
   session_destroy();
   header('Location: ./login.php');
}
$id = $_SESSION['id'];
$myCart = $conn->query("SELECT * FROM carts a, books b WHERE `a`.`user_id` = '$id' AND `a`.`book_id` = `b`.`id_book`");
$totalPrice = 0;
?>
<div class="container py-2">
   <span>Trang chủ > Giỏ hàng </span>
   <hr>
</div>
<div class="container">
   <div class="row">
      <div class="col-xl-9 mb-4">
         <ul class="list-group">
            <?php while ($row = $myCart->fetch_array()) { ?>
               <li class="list-group-item">
                  <div class="row">
                     <div class="col-2 text-center">
                        <img src="./admin/uploads/<?= $row['image_path'] ?>" alt="" class="w-100">
                     </div>
                     <div class="col-3 d-flex align-items-center">
                        <div>
                           <p>Tên: <?= $row['title'] ?></p>
                           <p>Tác giả: <?= $row['author'] ?></p>
                        </div>
                     </div>
                     <div class="col-2 d-flex align-items-center">
                        <form action="./cart.php" method="post">
                           <div class="row">
                              <div class="col-xl-6 col-md-8">
                                 <a href="./actionOrder.php?add=<?= $row['id'] ?>" class="btn btn-sm w-100 btn-outline-dark">+</a>
                                 <input type="text" name="decide" value="<?= $row['qty'] ?>" min="1" class="form-control text-center bg-white" readonly>
                                 <a href="./actionOrder.php?minus=<?= $row['id'] ?>" class="btn btn-sm w-100 btn-outline-dark">-</a>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col-2 d-flex align-items-center">
                        <div class="text-center">
                           <span><?= number_format($row['price_b'], 0, ',', '.') ?> VND</span>
                        </div>
                     </div>
                     <div class="col-2 d-flex align-items-center">
                        <div class="text-center">
                           <p>
                           <h5>TỔNG</h5>
                           </p>
                           <p><?= number_format($row['price'] * $row['qty'], 0, ',', '.') ?> VND</p>
                        </div>
                     </div>
                     <div class="col-1">
                        <a href="./actionOrder.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" style="font-size:20px"></i></a>
                     </div>
                  </div>
               </li>
            <?php $totalPrice += $row['price'] * $row['qty'];
            } ?>
         </ul>
      </div>
      <!-- checkout -->
      <div class="col-xl-3 mb-4">
         <div class="card mb-5">
            <div class="card-header text-center bg-success text-white">
               <b>TỔNG HÓA ĐƠN</b>
            </div>
            <div class="card-body">
               <h4 style="float: right;"><?= number_format($totalPrice, 0, ',', '.') ?> VND</h4>
            </div>
         </div>
         <!-- <input type="submit" name="checkout" value="THANH TOÁN" class="btn btn-success w-100"> -->
         <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#exampleModal" <?= $myCart->num_rows == 0 ? "disabled" : ""?>>
            THANH TOÁN
         </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form action="./orders.php" method="post">
                  <div class="modal-header bg-success text-white">
                     <h5 class="modal-title" id="exampleModalLabel">XÁC NHẬN THÔNG TIN</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                     <div class="form-floating mb-3 ms-5 me-5">
                        <span style="font-size: 20px;" class="text-danger">*Hãy chắc chắn rằng thông tin về địa điểm nhận hàng là chính xác.</span>
                     </div>
                     <hr>
                     <div class="form-floating mb-3">
                        <?php $address = $conn->query("SELECT * FROM customers WHERE id = '$id'");
                        $row = $address->fetch_assoc(); ?>
                        <table class="w-100" style="font-size: 18px;">
                           <tr>
                              <th colspan="2" class="text-success">HÓA ĐƠN</th>
                           </tr>
                           <tr>
                              <td>Tên người nhận: </td>
                              <td><?= $row['name']; ?></td>
                           </tr>
                           <tr>
                              <td>Số điện thoại: </td>
                              <td><?= $row['contact']; ?></td>
                           </tr>
                        </table>
                     </div>
                     <div class="form-floating mb-3">
                        <textarea class="form-control" name="inputAddress" id="address" cols="30" rows="10" required><?= $row['address']; ?></textarea>
                        <label for="inputAddress">Địa chỉ</label>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">hủy</button>
                     <input type="submit" value="Đặt hàng" name="submit" class="btn btn-sm btn-success">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>


<?php include './footer.php'; ?>