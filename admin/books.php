<?php
include './menu.php';
include './upload.php';

function str_limit($value, $limit = 250, $end = '...')
{
   $limit = $limit - mb_strlen($end); // Take into account $end string into the limit
   $valuelen = mb_strlen($value);
   return $limit < $valuelen ? mb_substr($value, 0, mb_strrpos($value, ' ', $limit - $valuelen)) . $end : $value;
}
?>

<div id="layoutSidenav">
   <?php include './head.php' ?>
   <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Kho sách</h1>
            <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item active">Chào mừng trở lại <span><?= $_SESSION['name']; ?></span> !</li>
            </ol>
            <div class="py-2 row" <?= isset($error) ? "" : "hidden"; ?>>
               <input type="text" value="<?= isset($error) ? $error : "" ?>" readonly class="form-control col text-center border border-danger text-danger" style="background-color: #ffe6e6">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100 mb-4" data-bs-toggle="modal" data-bs-target="#add">
               <i class="fas fa-plus"></i> Thêm sách
            </button>

            <!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <form action="./books.php" method="post" enctype="multipart/form-data">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Thêm sách</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <label for="title">Tiêu đề</label>
                           <input type="text" id="title" name="title" class="form-control" placeholder="" required>
                           <div class="row">
                              <div class="col-8">
                                 <label for="author">Tác giả</label>
                                 <input type="text" id="author" name="author" class="form-control" placeholder="" required>
                              </div>
                              <div class="col-4">
                                 <label for="price">Giá</label>
                                 <input type="text" id="price" name="price" class="form-control" placeholder="" required>
                              </div>
                           </div>
                           <label for="desc">Mô tả</label>
                           <textarea id="desc" name="desc" class="form-control" placeholder="" required></textarea>
                           <label for="category">Thể loại</label>
                           <Select name="category" id="category" class="form-control">
                              <?php
                              $categories = "SELECT * FROM `categories`";
                              $result = $conn->query($categories);
                              while ($row = $result->fetch_array()) { ?>
                                 <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                              <?php } ?>
                              ?>
                           </Select>
                           <label for="image">Hình ảnh</label>
                           <input type="file" id="fileToUpload" name="fileToUpload" class="form-control">
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                           <input type="submit" name="submit" value="Lưu" class="btn btn-primary">
                        </div>
                     </div>
                  </form>
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
                        <tr class="bg-primary text-white">
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
                        <?php
                        $books = "SELECT * FROM books a, categories b WHERE a.category_id = b.id ORDER BY a.date_created DESC";
                        $result = $conn->query($books);

                        if ($result->num_rows > 0) {
                           $number = 1;
                           while ($row = $result->fetch_array()) {
                        ?>
                              <tr>
                                 <td><?= $number ?></td>
                                 <td><img src="./uploads/<?= $row['image_path'] ?>" class="img-fluid rounded-start" alt="..." style="width: 150px"></td>
                                 <td>
                                    <p>Tiêu đề: <b><?= $row['title'] ?></b></p>
                                    <p>Tác giả: <b><?= $row['author'] ?></b></p>
                                    <p>Mô tả: <i><?= str_limit($row['description_book']) ?></i></p>
                                 </td>
                                 <td><?= $row['name'] ?></td>
                                 <td><span><?= number_format($row['price'], 0, ',', '.') ?></span>VNĐ</td>
                                 <td>
                                    <div>
                                       <div class="text-center">
                                          <!-- Button trigger modal of detail-->
                                          <a href="./editBook.php?id=<?= $row['id_book'] ?>" class="my-3 btn btn-sm border-dark w-100">Chỉnh sửa</a>
                                          <button class="my-3 btn btn-sm border-dark w-100" data-bs-toggle="modal" data-bs-target="#deleteBook<?= $row['id_book'] ?>">Xóa</button>
                                       </div>
                                       <!-- Button trigger modal -->
                                       <!-- Modal -->
                                       <div class="modal fade" id="deleteBook<?= $row['id_book'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   Bạn có chắc chắn muốn xóa sản phẩm <?= $row['title'] ?> này
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                   <!-- <button type="button" class="btn btn-danger">Xác nhận</button> -->
                                                   <a href="./php/deleteBook.php?id=<?= $row['id_book'] ?>" class="btn btn-danger">Xác nhận</a>
                                                </div>
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