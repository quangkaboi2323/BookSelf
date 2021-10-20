<?php include './menu.php'; ?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Quản lý người dùng</h1>
            <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item active">Chào mừng trở lại <span>admin</span> !</li>
            </ol>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100 mb-4" data-bs-toggle="modal" data-bs-target="#add">
               <i class="fas fa-plus"></i> Thêm người dùng
            </button>

            <!-- Modal -->
            <div class="modal fade right" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form action="" method="post">
                           <label for="name">Tên</label>
                           <input type="text" id="name" name="name" class="form-control" placeholder="" required>
                           <label for="username">Tên tài khoản</label>
                           <input type="text" id="username" name="username" class="form-control" placeholder="" required>
                           <label for="password">Mật khẩu</label>
                           <input type="password" id="password" name="password" class="form-control" placeholder="" required>
                           <label for="type">Loại người dùng</label>
                           <select id="type" name="type" class="form-control">
                              <option value="admin">Quản trị</option>
                              <option value="staff">Nhân viên</option>
                           </select>
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
                           <th>Tên</th>
                           <th>TÊn tài khoản</th>
                           <th>Chức vụ</th>
                           <th>Chức năng</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>#</th>
                           <th>Tên</th>
                           <th>TÊn tài khoản</th>
                           <th>Chức vụ</th>
                           <th>Chức năng</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Quang</td>
                           <td>adminquang</td>
                           <td>Admin</td>
                           <td>
                              <div>
                                 <!-- Button trigger modal of detail-->
                                 <input type="button" class=" btn btn-sm border-dark" value="Chỉnh sửa" data-bs-toggle="modal" data-bs-target="#detailOrders">
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
                                                <label for="name">Tên</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="" required>
                                                <label for="type">Loại người dùng</label>
                                                <select id="type" name="type" class="form-control">
                                                   <option value="admin">Quản trị</option>
                                                   <option value="staff">Nhân viên</option>
                                                </select>
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
                                 <input type="button" class="btn btn-sm border-dark" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder">
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