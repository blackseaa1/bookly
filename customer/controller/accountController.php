<?php
//    Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action) {
    case '':
        //Hiển thị danh sách san pham
        include_once 'models/accountModel.php';
        include_once 'views/account/index.php';
        break;
    case 'order_management':
        //Hiển thị danh sách san pham
        include_once 'models/accountModel.php';
        include_once 'views/account/order_management.php';
        break;
    case 'purchase_history':
        //Hiển thị danh sách san pham
        include_once 'models/accountModel.php';
        include_once 'views/account/purchase_history.php';
        break;
}
