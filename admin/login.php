<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - BS Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>


<?php

session_start();

if (isset($_SESSION['id'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    require './config.php';

    $inputUsername = $_POST['inputUsername'];
    $inputPassword = md5($_POST['inputPassword']);

    $query = "SELECT * FROM `users` WHERE `username` = '$inputUsername' AND `password` = '$inputPassword'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        $err = "Sai mật khẩu hoặc tài khoản!!!";
    } else {
        $row = mysqli_fetch_array($result);

        if (is_array($row)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['type'];

            header("Location: index.php");
        } else {
            $err = "Sai mật khẩu hoặc tài khoản!!!";
        }
    }
}

?>



<body class="bg-secondary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">ĐĂNG NHẬP</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="inputUsername" type="text" placeholder="Username..." required />
                                            <label for="inputEmail">Tài khoản đăng nhập</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="inputPassword" type="password" placeholder="Password" required />
                                            <label for="inputPassword">Mật khẩu</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="row mt-4 mb-0">
                                            <div class="text-center">
                                                <input type="submit" value="Đăng nhập" class="btn btn-primary" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer" <?php echo isset($err) ? "" : "hidden" ?>>
                                    <div class="text-center text-danger h5">
                                        <?php echo isset($err) ? $err : "" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>