<?php include './header.php'; ?>
<style>
    #category:hover {
        background-color: darkgrey;
    }
</style>

<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">Find your book to make your life!</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-sm-12">
                <div class="card">
                    <div class="card-header col text-center">
                        <b class="h4">Thể loại</b>
                    </div>
                    <div class="card-body">
                        <div class="card col text-center">
                            <div class="card-body" id="category">Thể loại 1</div>
                        </div>
                        <div class="card col text-center">
                            <div class="card-body" id="category">Thể loại 1</div>
                        </div>
                        <div class="card col text-center">
                            <div class="card-body" id="category">Thể loại 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-sm-12">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- Button trigger modal -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#add">
                                        Xem chi tiết
                                    </button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal right fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết sách</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-12 text-center">
                                                    <img src="https://i0.wp.com/buubize.com/wp-content/uploads/2020/12/thien-tai.jpg?fit=799%2C1065" alt="" style="width: 60%">
                                                </div>
                                                <div class="mt-2 col-xl-8 col-sm-12 ">
                                                    <p>Tiêu đề: <b>Thiên tài bên trái kẻ điên bên phải</b></p>
                                                    <p>Tác giả: <b>Quang</b></p>
                                                    <p>Thể loại: <b>THể loại</b></p>
                                                    <p>Mô tả: <br>
                                                        ádjahdkjagdjkasdgakjsdgajdka
                                                    </p>
                                                    <hr>
                                                    <div class="text-center">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="number" class="form-control" value="1" min="1">
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="submit" name="submit" class="btn btn-outline-dark mt-auto w-100" value="Thêm vào giỏ hàng">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './footer.php'; ?>