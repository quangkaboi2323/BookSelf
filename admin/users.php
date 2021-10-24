<?php
include './menu.php';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $type = $_POST['type'];

   $create = "INSERT INTO `users`(`name`, `username`, `password`, `type`) VALUES ('$name','$username','$password','$type')";
   $result = $conn->query($create);
}
?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Quản lý người dùng</h1>
            <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item active">Chào mừng trở lại <span><?= $_SESSION['name'] ?></span> !</li>
            </ol>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100 mb-4" data-bs-toggle="modal" data-bs-target="#add">
               <i class="fas fa-plus"></i> Thêm người dùng
            </button>

            <!-- Modal -->
            <div class="modal fade right" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <form action="" method="post">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <label for="name">Tên</label>
                           <input type="text" id="name" name="name" class="form-control" placeholder="" required>
                           <label for="username">Tên tài khoản</label>
                           <input type="text" id="username" name="username" class="form-control" placeholder="" required>
                           <label for="password">Mật khẩu</label>
                           <input type="password" id="password" name="password" class="form-control" placeholder="" required>
                           <label for="type">Loại người dùng</label>
                           <select id="type" name="type" class="form-control">
                              <option value="1">Quản trị</option>
                              <option value="0">Nhân viên</option>
                           </select>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                           <input type="submit" name="submit" value="Lưu" class="btn btn-primary">
                        </div>
                     </div>
                  </div>
               </form>
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
                           <th>Tên tài khoản</th>
                           <th>Chức vụ</th>
                           <th>Chức năng</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>#</th>
                           <th>Tên</th>
                           <th>Tên tài khoản</th>
                           <th>Chức vụ</th>
                           <th>Chức năng</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <?php
                        $sql1 = "SELECT * FROM `users`";
                        $result = $conn->query($sql1);

                        if ($result->num_rows > 0) {
                           $number = 1;
                           while ($row = $result->fetch_array()) {
                        ?>
                              <tr>
                                 <td><?= $number ?></td>
                                 <td><?= $row['name'] ?></td>
                                 <td><?= $row['username'] ?></td>
                                 <td><?= $row['type'] ? "Quản trị" : "Nhân viên" ?></td>
                                 <td class="text-center">
                                    <div>
                                       <!-- Button trigger modal of detail-->
                                       <form action="./users.php" method="post">
                                          <a href="./editUser.php?id=<?= $row['id'] ?>" class="btn btn-sm border-dark">Chỉnh sửa</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-sm border-dark" data-bs-toggle="modal" data-bs-target="#deleteOrder<?= $row['id'] ?>" data-bs-whatever="@<?= $id ?>">Xóa</button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="deleteOrder<?= $row['id'] ?>" tabindex="-1" rolearia-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h5 class="modal-title" id="deleteOrderLabel">Xác nhận xóa</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      Bạn có chắc chắn muốn xóa người dùng <?= $row['name'] ?> này
                                                   </div>
                                                   <div class="modal-footer">
                                                      <form action="users.php" method="post">
                                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                         <a href="./php/deleteUser.php?id=<?= $row['id'] ?>" class="btn btn-danger">Xác nhận</a>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
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