<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<?php
require './admin/config.php';

if (isset($_POST['createAccount'])) {
    $name = $_POST['inputName'];
    $address = $_POST['inputAddress'];
    $contact = $_POST['inputSDT'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $passwordConfirm = $_POST['inputPasswordConfirm'];

    //check password
    if ($password != $passwordConfirm) {
        $err = "Mật khẩu không khớp!";
    } else {
        if (is_numeric($contact)) {
            $password = md5($password);
            $existCus = "SELECT * FROM customers WHERE email = '$email'";
            $result = $conn->query($existCus);
            if ($result->num_rows > 0) {
                $err = "Email đã tồn tại!";
            } else {
                $msg = "Thông báo tạo tài khoản thành công. Chúc mừng người dùng " . $name;
                $headers = "From: email";

                $msg = wordwrap($msg, 70);
                if (mail($email, "BOOKSELF", $msg, $headers)) {
                    $createAcc = "INSERT INTO `customers`(`name`, `address`, `contact`, `email`, `password`) 
                                    VALUES ('$name','$address','$contact','$email','$password')";
                    $result = $conn->query($createAcc);
                    if ($result) header('location: ./login.php');
                } else {
                    $err = "Email không tồn tại";
                }
            }
        } else {
            $err = "Số điện thoại nhập sai!";
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
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-2">TẠO TÀI KHOẢN</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3 text-center" <?= isset($err) ? "" : "hidden" ?>>
                                            <input class="form-control form-sm border-danger text-danger" style="background-color: #ffcccc;" type="text" value="<?= isset($err) ? $err : "" ?>" />
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputName" name="inputName" type="text" required />
                                            <label for="inputName">Tên</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="inputAddress" id="address" cols="30" rows="10" required></textarea>
                                            <label for="inputAddress">Địa chỉ</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputSDT" name="inputSDT" type="text" required />
                                            <label for="inputSDT">SĐT liên hệ</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="inputEmail" type="email" required />
                                            <label for="inputEmail">Địa chỉ Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" name="inputPassword" minlength="8" type="password" required />
                                                    <label for="inputPassword">Mật khẩu</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" minlength="8" type="password" required />
                                                    <label for="inputPasswordConfirm">Xác nhận mật khẩu</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input type="submit" name="createAccount" value="Tạo tài khoản" class="btn btn-success btn-block">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Có một tài khoản? Đi đến đăng nhập</a></div>
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