<?php
//    Lấy hành động đang thực hiện

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action) {
    case 'view_cart':
        include_once 'models/cartModel.php';
        include_once 'views/cart/index.php';
        break;
    case 'add_cart':
        include_once 'models/cartModel.php';
        echo '<script>location.href = "index.php?controller=shop";</script>';
        break;
    case 'change_amount':
        include_once 'models/cartModel.php';
        echo '<script>location.href = "index.php?controller=cart&action=view_cart";</script>';
        break;
    case 'add_order_to_db':
        include_once 'models/cartModel.php';
        echo '<script>location.href = "index.php?controller=account&action=order_management";</script>';
        break;
    case 'delete_product_in_order':
        include_once 'models/cartModel.php';
        echo '<script>location.href = "index.php?controller=cart&action=view_cart";</script>';
        break;
    case 'clear_cart':
        include_once 'models/cartModel.php';
        echo '<script>location.href = "index.php?controller=cart&action=view_cart";</script>';
        break;
    case 'edit_order':
        include_once 'models/cartModel.php';
        include_once 'views/order/edit.php';
        break;
    case 'updated_status':
        include_once 'models/cartModel.php';
        break;
}
