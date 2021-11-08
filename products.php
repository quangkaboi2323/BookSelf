<?php
include './head.php';
include './header.php';

//set default when open this page
$rowPerPage = 20;
if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}

//find books of category
if (isset($_GET['category'])) {
    $cate = $_GET['category'];
    $result = $conn->query("SELECT * FROM categories WHERE id = $cate");
    $nameCate = $result->fetch_assoc();
    $offset = ($_GET['page'] - 1) * $rowPerPage;

    $books = $conn->query("SELECT * FROM books WHERE category_id = $cate ORDER BY title DESC LIMIT $offset, $rowPerPage");
}

//find books has same value of research input
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $offset = ($_GET['page'] - 1) * $rowPerPage;

    $books = $conn->query("SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%' ORDER BY title DESC LIMIT $offset, $rowPerPage");
}

//find all books
if (!isset($_GET['category']) && !isset($_GET['search'])) {
    $offset = ($_GET['page'] - 1) * $rowPerPage;

    $books = $conn->query("SELECT * FROM books ORDER BY title DESC LIMIT $offset, $rowPerPage");
}
?>
<div class="container py-2">
    <span>Trang chủ > Sản phẩm <?php echo isset($nameCate) ? "> " . $nameCate['name'] : "" ?>
        <?php echo isset($_GET['search']) ? "> Tìm kiếm: " . $_GET['search'] : "" ?> </span>
    <hr>
</div>
<div class="container">
    <div class="row">
        <!-- category -->
        <?php
        // load categories        
        $result = $conn->query("SELECT * FROM categories");
        ?>
        <div class="col-xl-3">
            <ul class="list-group py-3">
                <li class="list-group-item disable text-center"><i class="text-success">DANH MỤC</i></li>
                <a href="./products.php" style="text-decoration: none">
                    <li class="list-group-item <?= isset($cate) ? "" : "bg-success text-white" ?>">Tất cả <span style="float:right"><i class='fa fa-angle-right'></i></span></li>
                </a>

                <?php while ($row = $result->fetch_array()) { ?>
                    <a href="./products.php?category=<?= $row['id'] ?>" style="text-decoration: none">
                        <li class="list-group-item <?php if (isset($cate)) {
                                                        if ($row['id'] == $cate) echo "bg-success text-white";
                                                    } ?>"><?= $row['name'] ?> <span style="float:right"><i class='fa fa-angle-right'></i></span></li>
                    </a>
                <?php } ?>
            </ul>
        </div>
        <!-- Section of products-->
        <div class="col-xl-9">
            <section class="py-3">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php while ($row = $books->fetch_array()) { ?>
                            <div class="col mb-2">
                                <a href="./detail.php?id=<?= $row['id_book'] ?>" style="text-decoration: none;">
                                    <div class="card border-0">
                                        <!-- Product image-->
                                        <img class="card-img-top w-100" style="float: end" src="./admin/uploads/<?= $row['image_path'] ?>" alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body">
                                            <div class="text-center text-dark">
                                                <!-- Product name-->
                                                <p style="font-size: 12px; height:40px"><span><?= $row['title'] ?></span></p>
                                                <!-- Product price-->
                                                <b class="text-danger bg-white"><?= number_format($row['price'], 0, ',', '.') ?> VND</b>
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-sm btn-outline-success mt-auto" href="./actioncart.php?id=<?= $row['id_book'] ?>">Thêm vào giỏ hàng</a></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>                    
        </div>
    </div>
</div>
<!-- navigation -->
<nav aria-label="Page navigation example">
    <?php
    if (isset($_GET['category'])) {
        $id = $_GET['category'];
        $all = $conn->query("SELECT * FROM books WHERE category_id = $id");
    }
    if (isset($_GET['search'])) {
        $value = $_GET['search'];
        $all = $conn->query("SELECT * FROM books WHERE title LIKE '%$value%' OR author LIKE '%$value%'");
    }
    if (!isset($_GET['category']) && !isset($_GET['search'])) {
        $all = $conn->query("SELECT * FROM books");
    }
    $numRow = mysqli_num_rows($all);
    $numPage = ceil($numRow / $rowPerPage);

    ?>
    <ul class="pagination justify-content-center">
        <!-- before page -->
        <?php if ($_GET['page'] > 1) { ?>
            <li class="page-item">
                <a class="page-link text-dark" href="<?php if (isset($cate)) echo "?category=" . $cate . "&";
                                                        if (isset($_GET['search'])) echo "?search=" . $_GET['search'] . "&";
                                                        if (!isset($_GET['search']) && !isset($cate)) echo "?";
                                                        echo "page=" . $_GET['page'] - 1; ?>" tabindex="-1">Trang trước</a>
            </li>
        <?php } ?>
        <!-- list page -->
        <?php for ($i = 1; $i <= $numPage; $i++) { ?>
            <li class="page-item <?= $_GET['page'] == $i ? "active" : ''; ?>">
                <a class="page-link text-dark" href="./products.php<?php
                                                                    if (isset($cate)) echo "?category=" . $cate . "&";
                                                                    if (isset($_GET['search'])) echo "?search=" . $_GET['search'] . "&";
                                                                    if (!isset($_GET['search']) && !isset($cate)) echo "?";
                                                                    echo "page=" . $i;
                                                                    ?>"><?= $i ?></a>
            </li>
        <?php } ?>
        <!-- previous page -->
        <?php if ($_GET['page'] < $numPage) { ?>
            <li class="page-item">
                <a class="page-link text-dark" href="<?php if (isset($cate)) echo "?category=" . $cate . "&";
                                                        if (isset($_GET['search'])) echo "?search=" . $_GET['search'] . "&";
                                                        if (!isset($_GET['search']) && !isset($cate)) echo "?";
                                                        echo "page=" . $_GET['page'] + 1; ?> ">Trang sau</a>
            </li>
        <?php } ?>
    </ul>
</nav>


<?php include './footer.php'; ?>