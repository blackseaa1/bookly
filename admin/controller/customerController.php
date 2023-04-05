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
        include_once 'models/customerModel.php';
        include_once 'views/customer/index.php';
        break;
    case 'create_customer':
        include_once 'models/customerModel.php';
        include_once 'views/customer/create.php';
        break;
    case 'store_customer':
        include_once 'models/customerModel.php';
        echo '<script>location.href = "index.php?controller=customer";</script>';
        break;
    case 'edit_customer':
        include_once 'models/customerModel.php';
        include_once 'views/customer/edit.php';
        break;
    case 'update_customer':
        include_once 'models/customerModel.php';
        break;
    case 'update_password':
        include_once 'models/customerModel.php';
        break;
    case 'destroy_customer':
        include_once 'models/customerModel.php';
        echo '<script>
                    location.href = "index.php?controller=customer";
                </script>';
        break;
}
