<?php include './menu.php'; ?>

<div id="layoutSidenav">
    <?php include './head.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Bảng điều khiển</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Chào mừng trở lại <span>admin</span> !</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <span class="h3">
                                <?php $result = $conn->query("SELECT * fROM categories"); echo $result->num_rows; ?>
                                </span>
                                <i class='fas fa-clone' style='font-size:150%; float: right'></i>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./categories.php">Số lượng thể loại</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <span class="h3">
                                <?php $result = $conn->query("SELECT * fROM books"); echo $result->num_rows; ?>
                                </span>
                                <i class='fas fa-book' style='font-size:150%; float: right'></i>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./books.php">Số lượng sách</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <span class="h3">
                                <?php $result = $conn->query("SELECT * fROM orders"); echo $result->num_rows; ?>
                                </span>
                                <i class='fas fa-chart-area' style='font-size:150%; float: right'></i>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./orders.php">Số lượng hóa đơn</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">
                                <span class="h3">
                                <?php $result = $conn->query("SELECT * fROM users"); echo $result->num_rows; ?>
                                </span>
                                <i class='fas fa-user' style='font-size:150%; float: right'></i>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./users.php">Số lượng người dùng</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>


        <?php 
        include './chart.php';
        include './footer.php'; ?>

    </div>
</div>

<?php include './foot.php'; ?>