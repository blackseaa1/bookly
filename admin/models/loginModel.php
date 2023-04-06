<?php
//function để lấy dữ liệu từ DB về
function loginAdmin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Kiểm tra nếu người dùng không nhập đầy đủ thông tin đăng nhập
    if (empty($username) || empty($password)) {
        $msg = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
        echo "<script>alert('$msg');window.history.back();</script>";
        return 0;
    }

    include_once 'connect/openConnect.php';
    $sql = "SELECT *, COUNT(*) AS count_user 
        FROM tbl_account 
        WHERE username = '$username' AND password = '$password'";
    $users = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';

    foreach ($users as $user) {
        if ($user['count_user'] == 0) {
            $msg = "Mật khẩu hoặc tên người dùng bị sai!";
            echo "<script>alert('$msg'); window.history.back();</script>";
            return 0;
        } elseif ($user['count_user'] == 1) {
            if ($user['role_id'] == '1') {
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $fullname;
                $msg = "Đăng nhập thành công";
                echo "<script>alert('$msg');</script>";
                return 1;
            } else {
                $msg = "Bạn đang đăng nhập dưới quyền người dùng, vui lòng đăng nhập dưới quền quản trị.";
                echo "<script>alert('$msg'); window.history.back();</script>";
                return 0;
            }
        }
    }
}


switch ($action) {
    case 'loginAcccess':
        $test = loginAdmin();
        break;
    case 'logout':
        session_destroy();
        break;
}
