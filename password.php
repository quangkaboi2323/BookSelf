<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Password Reset - Bookself</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<?php
require './admin/config.php';
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['inputEmail'];

    $result = $conn->query("SELECT * FROM customers WHERE email = '$email'");
    if ($result->num_rows == 0) {
        $err = "Email chưa được đăng ký tài khoản!";
    } else {
        //creat comfirm code to recovery account
        $permitted_chars = '0123456789';
        $codeComfirm = substr(str_shuffle($permitted_chars), 0, 6);
        $msg = "Mã xác nhận là: " . $codeComfirm;
        $headers = "From: email";
        
        //create sesstion email and comfirm code to use
        $_SESSION['emailRecovery'] = $email;
        $_SESSION['codeComfirm'] = $codeComfirm;        

        $msg = wordwrap($msg, 70);
        
        mail($email, "BOOKSELF - code comfirm", $msg, $headers);

        $comfirm = true;
    }
}

if (isset($_POST['comfirmCode'])) {
    $inputCode = $_POST['inputCode'];

    if ($inputCode == $_SESSION['codeComfirm']) {
        //create new password
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $newPassword = substr(str_shuffle($permitted_chars), 0, 10);
        $msg = "Mật khẩu mới là: " . $newPassword;
        $headers = "From: email";

        $msg = wordwrap($msg, 70);

        //hast new password
        $password = md5($newPassword);
        $email = $_SESSION['emailRecovery'];
        $updatePass = $conn->query("UPDATE `customers` SET `password`='$password' WHERE email = '$email'");
        mail($email, "BOOKSELF - new password", $msg, $headers);
        
        //unset code comfirm and email which was created above
        unset($_SESSION['codeComfirm'], $_SESSION['emailRecovery']);

        header('location: ./login.php');
    } else {
        $errComfirm = "Nhập sai mã!";
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
                                    <h3 class="text-center font-weight-light my-4">Khôi phục mật khẩu</h3>
                                </div>
                                <div class="card-body" <?= isset($comfirm) ? 'hidden' : '' ?>>
                                    <div class="small mb-3 text-muted">Nhập vào địa chỉ Email và để khôi phục tài khoản</div>
                                    <form action="" method="post">
                                        <b class="form-control col text-center border border-danger text-danger mb-2" style="background-color: #ffe6e6" <?php echo isset($err) ? "" : "hidden" ?>>
                                            <?php echo isset($err) ? $err : "" ?>
                                        </b>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Địa chỉ Email</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="login.php">Quay lại trang đăng nhập</a>
                                            <input type="submit" name="submit" value="Khôi phục mật khẩu" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body" <?= isset($comfirm) ? '' : 'hidden' ?>>
                                    <div class="small mb-3 text-muted">Nhập vào mã xác nhận</div>
                                    <form action="" method="post">
                                        <b class="form-control col text-center border border-danger text-danger mb-2" style="background-color: #ffe6e6" <?php echo isset($err) ? "" : "hidden" ?>>
                                            <?php echo isset($errComfirm) ? $errComfirm : "" ?>
                                        </b>
                                        <div class="form-floating mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-control" id="inputCode" name="inputCode" type="text" placeholder="000000" />
                                                </div>
                                                <div class="col-6">
                                                    <input type="submit" name="comfirmCode" value="Khôi phục mật khẩu" class="btn btn-success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="./password.php">Quay lại</a>
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
<?php $conn->close(); ?>

</html>