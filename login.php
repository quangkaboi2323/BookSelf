<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - BookSelf</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<?php
require './admin/config.php';
session_start();

if (isset($_SESSION['id'])) {
    header('location: ./index.php');
}

if (isset($_POST['submitLogin'])) {

    $email = $_POST['inputEmail'];
    $password = md5($_POST['inputPassword']);

    $user = "SELECT * FROM `customers` WHERE `email` = '$email' AND `password` = '$password'";
    $result = $conn->query($user);
    if ($result->num_rows == 0) {
        $err = "Sai mật khẩu hoặc tài khoản!!!";
    } else {
        $row = $result->fetch_array();

        if (is_array($row)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['client'] = 1;

            header('location: ./index.php');
        } else {
            $err = "Sai mật khẩu hoặc tài khoản!!!";
        }
    }
}
?>

<body class="bg-success">
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
                                        <b class="form-control col text-center border border-danger text-danger mb-2" style="background-color: #ffe6e6" <?php echo isset($err) ? "" : "hidden" ?>>
                                            <?php echo isset($err) ? $err : "" ?>
                                        </b>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Địa chỉ Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Mật khẩu</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Quên mật khẩu</a>
                                            <input type="submit" value="Đăng nhập" name="submitLogin" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Cần một tài khoản? Đăng ký!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>