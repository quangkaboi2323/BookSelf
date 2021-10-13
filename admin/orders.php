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
               <div class="card-header">
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
                        <tr>
                           <td>1</td>
                           <td>10-10-2021</td>
                           <td>Quang</td>
                           <td>3</td>
                           <td><span>300.000</span>đ</td>                           
                           <td>
                              <!-- Button trigger modal of detail-->
                              <input type="button" class="btn btn-primary btn-sm" value="Chi tiết" data-bs-toggle="modal" data-bs-target="#detailOrders">
                              <!-- Modal -->
                              <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                             <p>Khách hàng: <b>Nguyễn Hữu Vinh Quang</b></p>
                                             <p>Số điện thoại: <b>0359518651</b></p>
                                             <p>Địa chỉ giao hàng: <b>Vĩnh Phước, Nha Trang, Khánh Hòa</b></p>
                                             <p>Tổng tiền: <b><span>200.000</span>đ</b></p>
                                             <hr>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save changes</button>
                                          </div> -->
                                    </div>
                                 </div>
                              </div>
                              <!-- Button trigger modal -->
                              <input type="button" class="btn btn-danger btn-sm" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder">
                              <!-- Modal -->
                              <div class="modal fade" id="deleteOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                          <button type="button" class="btn btn-primary">Xóa</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                        </tr>      
                        <tr>
                           <td>1</td>
                           <td>10-10-2021</td>
                           <td>Quang</td>
                           <td>3</td>
                           <td><span>300.000</span>đ</td>                           
                           <td>
                              <!-- Button trigger modal of detail-->
                              <input type="button" class="btn btn-primary btn-sm" value="Chi tiết" data-bs-toggle="modal" data-bs-target="#detailOrders">
                              <!-- Modal -->
                              <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                             <p>Khách hàng: <b>Nguyễn Hữu Vinh Quang</b></p>
                                             <p>Số điện thoại: <b>0359518651</b></p>
                                             <p>Địa chỉ giao hàng: <b>Vĩnh Phước, Nha Trang, Khánh Hòa</b></p>
                                             <p>Tổng tiền: <b><span>200.000</span>đ</b></p>
                                             <hr>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save changes</button>
                                          </div> -->
                                    </div>
                                 </div>
                              </div>
                              <!-- Button trigger modal -->
                              <input type="button" class="btn btn-danger btn-sm" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder">
                              <!-- Modal -->
                              <div class="modal fade" id="deleteOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                          <button type="button" class="btn btn-primary">Xóa</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                        </tr>  
                        <tr>
                           <td>1</td>
                           <td>10-10-2021</td>
                           <td>Quang</td>
                           <td>3</td>
                           <td><span>300.000</span>đ</td>                           
                           <td>
                              <!-- Button trigger modal of detail-->
                              <input type="button" class="btn btn-primary btn-sm" value="Chi tiết" data-bs-toggle="modal" data-bs-target="#detailOrders">
                              <!-- Modal -->
                              <div class="modal fade" id="detailOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                             <p>Khách hàng: <b>Nguyễn Hữu Vinh Quang</b></p>
                                             <p>Số điện thoại: <b>0359518651</b></p>
                                             <p>Địa chỉ giao hàng: <b>Vĩnh Phước, Nha Trang, Khánh Hòa</b></p>
                                             <p>Tổng tiền: <b><span>200.000</span>đ</b></p>
                                             <hr>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-3" style="max-width: 540px;">
                                             <div class="row g-0">
                                                <div class="col-md-4">
                                                   <img src="https://cdn0.fahasa.com/media/flashmagazine/images/page_images/thien_tai_ben_trai__ke_dien_ben_phai_/2019_11_04_14_38_20_1-390x510.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                   <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save changes</button>
                                          </div> -->
                                    </div>
                                 </div>
                              </div>
                              <!-- Button trigger modal -->
                              <input type="button" class="btn btn-danger btn-sm" value="Xóa" data-bs-toggle="modal" data-bs-target="#deleteOrder">
                              <!-- Modal -->
                              <div class="modal fade" id="deleteOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                          <button type="button" class="btn btn-primary">Xóa</button>
                                       </div>
                                    </div>
                                 </div>
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