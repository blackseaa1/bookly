<?php
//function để lấy dữ liệu từ DB về
function createCustomer()
{

    // Lấy dữ liệu từ biểu mẫu
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Kiểm tra tên đăng nhập đã tồn tại hay chưa
    include_once 'connect/openConnect.php';
    $check_duplicate = mysqli_query($connect, "SELECT * FROM tbl_account WHERE username = '$username'");
    if (mysqli_num_rows($check_duplicate) > 0) {
        $msg = 'Tài khoản này đã tồn tại!';
        echo "<script>alert('$msg'); window.history.back();</script>";
    } else {
        // Kiểm tra mật khẩu và xác nhận mật khẩu khớp nhau hay không
        if ($password != $repassword) {
            $msg = 'Mật khẩu không khớp!';
            echo "<script>alert('$msg'); window.history.back();</script>";
        } else {
            // Lưu dữ liệu vào cơ sở dữ liệu
            $sql = "INSERT INTO tbl_account (fullname,username,email,address,phone,password,role_id,created_date) 
                        VALUES ('$fullname','$username','$email','$address','$phone','$password','2', now())";
            mysqli_query($connect, $sql);
            $msg = 'Tạo tài khoản thành công!';
            include_once 'connect/closeConnect.php';
            echo "<script>alert('$msg');</script>";
        }
    }
}



switch ($action) {
    case 'createCustomer':
        createCustomer();
        break;
}
