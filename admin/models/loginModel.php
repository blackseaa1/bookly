<?php
//function để lấy dữ liệu từ DB về
function loginAdmin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT *, COUNT(*) AS count_user FROM tbl_account WHERE username = '$username' AND password = '$password'";
    $users = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';

    foreach ($users as $user) {
        if ($user['count_user'] == 0) {
            return 0;
        } elseif ($user['count_user'] == 1) {
            $_SESSION['username'] = $username;
            return 1;
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
