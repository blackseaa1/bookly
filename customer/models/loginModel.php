<?php
//function để lấy dữ liệu từ DB về
function loginCustomer() {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Kiểm tra nếu người dùng không nhập đầy đủ thông tin đăng nhập
    if (empty($email) || empty($password)) {
        $msg = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
        echo "<script>alert('$msg');window.history.back();</script>";
        return 0;
    }

    include_once 'connect/openConnect.php';
    $sql = "SELECT *, COUNT(*) AS count_user 
        FROM tbl_account 
        WHERE email = '$email' AND password = '$password'";
    $users = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';

    foreach ($users as $user) {
        if ($user['count_user'] == 0) {
            $msg = "Mật khẩu hoặc tên người dùng bị sai!";
            echo "<script>alert('$msg'); window.history.back();</script>";
            return 0;
        } elseif ($user['count_user'] == 1) {
            if ($user['role_id'] == '2') {
                $_SESSION['email'] = $email;
                $_SESSION['account_id'] = $user['account_id'];
                $_SESSION['fullname'] = $user['fullname'];
                $msg = "Đăng nhập thành công";
                echo "<script>alert('$msg');</script>";
                return 1;
            } else {
                $msg = "Bạn đang đăng nhập dưới quyền quản trị, vui lòng đăng nhập dưới quyền người dùng!";
                echo "<script>alert('$msg'); window.history.back();</script>";
                return 0;
            }
        }
    }
}



switch ($action) {
    case 'loginAccess':
        $test = loginCustomer();
        break;
    case 'logout':
        session_destroy();
        break;
}
