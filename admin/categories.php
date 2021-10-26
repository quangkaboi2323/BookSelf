<?php
include './menu.php';
include './php/categories.php';
?>


<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <form action="./categories.php" method="post">
         <main>
            <div class="container-fluid px-4">
               <h3 class="mt-4">Thể loại</h3>
               <hr>
               <div class="row">
                  <!-- form create new category -->
                  <div class="col-lg-4 col-md-12">
                     <div class="card">
                        <form action="./categories.php" method="post">
                           <div class="card-header">
                              <div class="h6">Biểu mẫu thể loại</div>
                           </div>
                           <div class="card-body">
                              <b class="form-control col text-center border border-danger text-danger" style="background-color: #ffe6e6" <?php echo isset($catchErr) ? "" : "hidden" ?>>
                                 <?php echo isset($catchErr) ? $catchErr : "" ?>
                              </b>
                              <input type="text" name="id" hidden value="<?php echo isset($id) ? $id : '' ?>">
                              <label for="categoryName">Tên thể loại</label>
                              <input type="text" id="categoryName" name="categoryName" class="form-control" placeholder="" value="<?php echo isset($name) ? $name : '' ?>">
                              <label for="categoryDesc">Mô tả thể loại</label>
                              <textarea name="categoryDesc" id="categoryDesc" cols="30" rows="5" class="form-control"><?php echo isset($desc) ? $desc : '' ?></textarea>
                           </div>
                           <div class="card-footer col text-center">
                              <input type="submit" name="submit" value="Lưu" class="btn btn-primary btn-sm w-25">
                              <input type="submit" name="reset" value="Hủy" class="btn btn-sm border-dark w-25">
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- table list categories -->
                  <div class="col-lg-8 col-dm-12">
                     <div class="card mb-4">
                        <div class="card-header">
                           <i class="fas fa-table me-1"></i>
                           Danh sách thể loại
                        </div>
                        <div class="card-body">
                           <table id="datatablesSimple">
                              <thead>
                                 <tr style="border: 1px solid black;" class="bg-primary text-white">
                                    <th>#</th>
                                    <th>Thông tin thể loại</th>
                                    <th>Chức năng</th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>#</th>
                                    <th>Thông tin thể loại</th>
                                    <th>Chức năng</th>
                                 </tr>
                              </tfoot>
                              <tbody>
                                 <?php
                                 $sql1 = "SELECT * FROM `categories`";
                                 $result = $conn->query($sql1);

                                 if ($result->num_rows > 0) {
                                    $number = 1;
                                    while ($row = $result->fetch_array()) {
                                 ?>
                                       <tr bgcolor="<?= $number % 2 == 1 ? "#cce6ff" : '' ?>">
                                          <td><?= $number ?></td>
                                          <td>
                                             Thể loại: <b><?= $row['name'] ?></b> <br>
                                             Mô tả: <span><?= $row['description'] ?></span>
                                          </td>
                                          <td class="col text-center">
                                             <form action="./categories.php" method="post">
                                                <!-- Button edit-->
                                                <input type="text" value="<?= $row['name'] ?>" name="editName" hidden>
                                                <input type="text" value="<?= $row['description'] ?>" name="editDesc" hidden>
                                                <button class=" btn btn-sm border-dark bg-white" name="idCate" value="<?= $row['id'] ?>">Chỉnh sửa</button>
                                                <!-- Button trigger modal -->
                                                <input type="button" class=" btn btn-sm border-dark bg-white" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteCate<?= $row['id'] ?>">
                                             </form>
                                             <!-- Modal -->
                                             <div class="modal fade" id="deleteCate<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                         Bạn có chắc chắn muốn xóa thể loại <?= $row['name'] ?> này
                                                      </div>
                                                      <div class="modal-footer">
                                                         <form action="./categories.php" method="post">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                            <a href="./php/deleteCate.php?id=<?= $row['id'] ?>" class="btn btn-danger">Xác nhận</a>
                                                         </form>
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
               </div>
            </div>
         </main>
      </form>
      <?php include './footer.php'; ?>

   </div>

</div>

<?php include './foot.php'; ?>