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
}
