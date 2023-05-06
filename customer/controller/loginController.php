<?php
// Lay hanh dong dang thuc hien
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action) {

    case '':

        include_once 'views/login/login.php';
        break;
    case 'login':
        if (isset($_SESSION['email'])) {
            header('Location:index.php');
        } else {
            //            Hiển thị form đăng nhập
            include_once 'views/login/login.php';
        }
        break;
    case 'loginAccess':
        include_once 'models/loginModel.php';
        if ($test == 0) {
            echo '<script>
                    location.href = "index.php?controller=login&action=login";
                </script>';
        } elseif ($test == 1) {
            echo '<script>
            location.href = "index.php?";
                    </script>';
        }
        break;
    case 'logout':
        //            Xóa bỏ session
        include_once 'models/loginModel.php';
        //            quay về form đăng nhập
        echo '<script>
        location.href = "index.php?controller=login&action=login";
                </script>';
        break;
}
