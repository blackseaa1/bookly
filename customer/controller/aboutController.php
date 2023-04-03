<?php
//    Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action) {
    case '':
        //Hiển thị danh sách khach hang
        include_once 'models/aboutModel.php';
        include_once 'views/about/index.php';
        break;
   
}
