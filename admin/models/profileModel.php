<?php
function index()
{
    $username = $_SESSION['username'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT tbl_account.*, tbl_role.role_name AS role_name 
        FROM tbl_account 
        INNER JOIN tbl_role 
        ON tbl_account.role_id = tbl_role.role_id 
        WHERE tbl_account.username='$username'";

    $profiles = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $profiles;
}
function update_profile()
{
    $account_id = $_POST['account_id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Retrieve account information from database
    include_once './connect/openConnect.php';
    $result = mysqli_query($connect, "SELECT * FROM tbl_account WHERE account_id = $account_id");
    $account = mysqli_fetch_assoc($result);

    if (!$account) {
        $msg = "Không tìm thấy người dùng!";
        echo "<script>alert('$msg');</script>";
    } else {
        // Check if the new username is unique within the same role
        $result = mysqli_query($connect, "SELECT * FROM tbl_account WHERE username = '$username' AND account_id != $account_id");
        if (mysqli_num_rows($result) > 0) {
            $msg = "Tên người dùng bị trùng! Vui lòng sửa lại";
            echo "<script>alert('$msg');window.history.back();</script>";
        } else {
            // Update account in database
            $sql = "UPDATE tbl_account SET 
                    fullname = '$fullname', 
                    email = '$email',
                    address = '$address',
                    phone = '$phone', 
                    updated_date = now()
                    WHERE account_id = $account_id";
            mysqli_query($connect, $sql);
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            $msg = "Cập nhật thông tin cá nhân thành công!";
            echo "<script>alert('$msg');window.history.back();</script>";
        }
    }
    include_once './connect/closeConnect.php';
}

function update_password()
{
    if (isset($_POST['sbmpassword'])) {
        $account_id = $_POST['account_id'];
        $orpassword = $_POST['orpassword'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        include_once './connect/openConnect.php';
        // Sử dụng prepared statement để tránh SQL injection
        $stmt = mysqli_prepare($connect, "SELECT * FROM tbl_account WHERE account_id=? AND password=?");
        mysqli_stmt_bind_param($stmt, "is", $account_id, $orpassword);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) == 0) {
            $msg = "Mật khẩu cũ không khớp";
            echo "<script>alert('$msg');window.history.back();</script>";
            return;
        } elseif ($password != $repassword) {
            $msg = "Mật khẩu mới không khớp vui lòng nhập lại";
            echo "<script>alert('$msg');window.history.back();</script>";
            return;
        } else {
            // Sử dụng prepared statement để tránh SQL injection
            $stmt = mysqli_prepare($connect, "UPDATE tbl_account SET password=?, updated_date=now() WHERE account_id=?");
            mysqli_stmt_bind_param($stmt, "si", $password, $account_id);
            mysqli_stmt_execute($stmt);
            include_once './connect/closeConnect.php';
            $msg = "Cập nhật mật khẩu cá nhân thành công!";
            echo "<script>alert('$msg');window.history.back();</script>";
            return;
        }
    }
}



switch ($action) {

    case '':
        $profiles = index();
        break;
    case 'update_profile':
        update_profile();
        break;
    case 'update_password':
        update_password();
        break;
}
