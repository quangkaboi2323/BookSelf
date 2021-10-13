<?php include './menu.php'; ?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h3 class="mt-4">Thể loại</h3>
            <hr>
            <div class="row">
               <!-- form create new category -->
               <div class="col-lg-4 col-md-12">
                  <div class="card">
                     <form action="" method="post">
                        <div class="card-header">
                           <div class="h6">Biểu mẫu thể loại</div>
                        </div>
                        <div class="card-body">
                           <label for="categoryName">Tên thể loại</label>
                           <input type="text" id="categoryName" name="categoryName" class="form-control" placeholder="">
                           <label for="categoryDesc">Mô tả thể loại</label>
                           <textarea name="categoryDesc" id="categoryDesc" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="card-footer col text-center">
                           <input type="submit" value="Lưu" class="btn btn-primary btn-sm w-25">
                           <input type="reset" value="Hủy" class="btn btn-sm border-dark w-25">
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
                              <tr>
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
                              <tr>
                                 <td>1</td>                                
                                 <td>
                                    <p>Thể loại: <b>Kinh tế</b></p>                                    
                                    <p>Mô tả <span>Xample description</span></p>
                                 </td>
                                 <td class="col text-center">
                                    <div>
                                       <!-- Button trigger modal of detail-->
                                       <input type="button" class="my-3 btn btn-sm border-dark" value="Chỉnh sửa" data-bs-toggle="modal" data-bs-target="#detailOrders">
                                       <!-- Modal -->
                                       <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <b class="modal-title" id="exampleModalLabel">CHI TIẾT THỂ LOẠI</b>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <form action="" method="post">
                                                      <label for="name">Tiêu đề</label>
                                                      <input type="text" id="name" name="name" class="form-control" placeholder="" required>                                                      
                                                      <label for="desc">Mô tả</label>
                                                      <textarea id="desc" name="" class="form-control" placeholder="" required></textarea>                                                      
                                                   </form>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                   <input type="submit" name="submit" value="Lưu thay đổi" class="btn btn-primary">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Button trigger modal -->
                                       <input type="button" class="my-3 btn btn-sm border-dark" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder">
                                       <!-- Modal -->
                                       <div class="modal fade" id="deleteOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   Bạn có chắc chắn muốn xóa sản phẩm này
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                   <button type="button" class="btn btn-danger">Xác nhận</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div>

                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>

      <?php include './footer.php'; ?>

   </div>
</div>

<?php include './foot.php'; ?>