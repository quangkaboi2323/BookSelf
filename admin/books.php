<?php include './menu.php'; ?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Kho sách</h1>
            <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item active">Chào mừng trở lại <span>admin</span> !</li>
            </ol>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100 mb-4" data-bs-toggle="modal" data-bs-target="#add">
               <i class="fas fa-plus"></i> Thêm sách
            </button>

            <!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm sách</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form action="" method="post">
                           <label for="title">Tiêu đề</label>
                           <input type="text" id="title" name="title" class="form-control" placeholder="" required>
                           <label for="author">Tác giả</label>
                           <input type="text" id="author" name="author" class="form-control" placeholder="" required>
                           <label for="desc">Mô tả</label>
                           <textarea id="desc" name="" class="form-control" placeholder="" required></textarea>
                           <label for="category">Thể loại</label>
                           <input type="text" id="category" name="price" class="form-control" placeholder="" required>
                           <label for="price">Giá</label>
                           <input type="text" id="price" name="price" class="form-control" placeholder="" required>
                           <label for="image">Hình ảnh</label>
                           <input type="file" id="image" name="image" class="form-control">
                        </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <input type="submit" name="submit" value="Lưu" class="btn btn-primary">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card mb-4">
               <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  Danh sách sách
               </div>
               <div class="card-body">
                  <table id="datatablesSimple">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Ảnh</th>
                           <th>Chi tiết</th>
                           <th>Thể loại</th>
                           <th>Giá</th>
                           <th>Chức năng</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>#</th>
                           <th>Ảnh</th>
                           <th>Chi tiết</th>
                           <th>Thể loại</th>
                           <th>Giá</th>
                           <th>Chức năng</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td><img src="https://www.vinabook.com/images/thumbnails/product/240x/367592_p94387mstartup1.jpg" class="img-fluid rounded-start" alt="..."></td>
                           <td>
                              <p>Tiêu đề: <b>Startup Trong Thời Kỳ Bình Thường Mới - Phát Hành Dự Kiến 26/10/2021</b></p>
                              <p>Tác giả: <b>Lý Quí Trung</b></p>
                              <p>Mô tả: <i>Đại dịch Covid-19 xuất hiện làm xáo trộn mọi thứ liên quan đến kinh doanh nói chung và khởi nghiệp nói riêng. Các doanh nghiệp đều phải thay đổi những cách thức cũ, thậm chí “khởi nghiệp” lại mô hình kinh doanh cũ, để đáp ứng kịp thời những ...</i></p>
                           </td>
                           <td>Sách <span>Kinh tế</span></td>
                           <td><span>489.000</span>đ</td>
                           <td align="center">
                              <div>
                                 <!-- Button trigger modal of detail-->
                                 <input type="button" class="my-3 btn btn-sm border-dark" value="Chỉnh sửa" data-bs-toggle="modal" data-bs-target="#detailOrders">
                                 <!-- Modal -->
                                 <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <b class="modal-title" id="exampleModalLabel">CHI TIẾT SÁCH</b>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                             <form action="" method="post">
                                                <label for="title">Tiêu đề</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="" required>
                                                <label for="author">Tác giả</label>
                                                <input type="text" id="author" name="author" class="form-control" placeholder="" required>
                                                <label for="desc">Mô tả</label>
                                                <textarea id="desc" name="" class="form-control" placeholder="" required></textarea>
                                                <label for="category">Thể loại</label>
                                                <input type="text" id="category" name="price" class="form-control" placeholder="" required>
                                                <label for="price">Giá</label>
                                                <input type="text" id="price" name="price" class="form-control" placeholder="" required>
                                                <label for="image">Hình ảnh</label>
                                                <input type="file" id="image" name="image" class="form-control">
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
      </main>

      <?php include './footer.php'; ?>

   </div>
</div>

<?php include './foot.php'; ?>