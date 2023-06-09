<?php
function index()
{
    $email = $_SESSION['email'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT tbl_account.*, tbl_role.role_name AS role_name 
        FROM tbl_account 
        INNER JOIN tbl_role 
        ON tbl_account.role_id = tbl_role.role_id 
        WHERE tbl_account.email='$email'";

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
function order_management()
{
    $account_id = $_GET['account_id'] = $_SESSION['account_id'];
    include_once './connect/openConnect.php';
    $sqlOrderDetail = "SELECT * FROM tbl_order_detail";
    $orderOdetails = mysqli_query($connect, $sqlOrderDetail);

    $sqlProduct = "SELECT * FROM tbl_product";
    $products = mysqli_query($connect, $sqlProduct);

    $sqlAuthor = "SELECT * FROM tbl_author";
    $authors = mysqli_query($connect, $sqlAuthor);
    $sqlCategory = "SELECT * FROM tbl_category";
    $categorys = mysqli_query($connect, $sqlCategory);

    $sql = "SELECT * FROM tbl_order WHERE account_id='$account_id' ORDER BY order_id DESC";
    $orders = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['orderOdetails'] = $orderOdetails;
    $array['products'] = $products;
    $array['authors'] = $authors;
    $array['category'] = $categorys;
    $array['orders'] = $orders;
    return $array;
}
function index_orders()
{
    include_once 'connect/openConnect.php';

    $sql = "SELECT * FROM tbl_order";
    $orders = mysqli_query($connect, $sql);

    include_once './connect/closeConnect.php';

    $array = array();
    $array['infor'] = $orders;

    return $array;
}
function order_detail()
{
    $order_id = $_GET['order_id'];
    include_once './connect/openConnect.php';
    $sqlOrderDetail = "SELECT * FROM tbl_order_detail";
    $orderOdetails = mysqli_query($connect, $sqlOrderDetail);

    $sqlProduct = "SELECT * FROM tbl_product";
    $products = mysqli_query($connect, $sqlProduct);

    $sqlAuthor = "SELECT * FROM tbl_author";
    $authors = mysqli_query($connect, $sqlAuthor);

    $sql = "SELECT * FROM tbl_order WHERE order_id='$order_id'";
    $orders = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['orderOdetails'] = $orderOdetails;
    $array['products'] = $products;
    $array['authors'] = $authors;
    $array['orders'] = $orders;
    return $array;
}
function updated_status()
{

    $order_id = $_GET['order_id'];
    include_once './connect/openConnect.php';
    // Thực hiện truy vấn kiểm tra trạng thái đơn hàng
    $sql = "SELECT * FROM tbl_order WHERE order_id='$order_id' AND order_status = 2";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Đơn hàng đã được hủy bởi Admin');window.history.back();</script>";
        return;
    } else {
        $sql = "SELECT * FROM tbl_order WHERE order_id='$order_id' AND order_status = 1";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Đơn hàng đã được duyệt Admin');window.history.back();</script>";
            return;
        } else {
            // Nếu không có kết quả trả về thì tiếp tục thực hiện các công việc khác
            // ...
            // Update the order record
            $order_status = 2;
            $sqlUpdate = "UPDATE tbl_order SET
                    order_status = '$order_status',
                    updated_date = now()
                    WHERE order_id = $order_id";
            mysqli_query($connect, $sqlUpdate);

            include_once './connect/closeConnect.php';

            $msg = "Hủy đơn hàng thành công";
            echo "<script>alert('$msg');window.history.back();</script>";
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
    case 'order_management':
        $array = order_management();
        break;
    case 'purchase_history':
        $array = order_management();
        break;
    case 'order_detail':
        $array = order_detail();
        break;
    case 'order_detail _history':
        $array = order_detail();
        break;
    case 'updated_status':
        updated_status();
        break;
}
