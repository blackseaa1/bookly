<?php
// Lay hanh dong dang thuc hien
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action) {
    case '':
        // Tuc la cai nay se lam viec va lay du lieu ve
        include_once 'models/orderModel.php';
        include_once 'views/order/index.php';
        break;
    case 'add_cart':
        include_once 'models/orderModel.php';
        echo '<script>location.href = "index.php?controller=product";</script>';
        break;
    case 'create_order':
        include_once 'models/orderModel.php';
        include_once 'views/order/create.php';
        break;
    case 'change_amount':
        include_once 'models/orderModel.php';
        echo '<script>location.href = "index.php?controller=order&action=create_order";</script>';
        break;
    case 'add_order_to_db':
        include_once 'models/orderModel.php';
        echo '<script>location.href = "index.php?controller=order";</script>';
        break;
    case 'delete_product_in_order':
        include_once 'models/orderModel.php';
        echo '<script>location.href = "index.php?controller=order&action=create_order";</script>';
        break;
    case 'clear_cart':
        include_once 'models/orderModel.php';
        echo '<script>location.href = "index.php?controller=order&action=create_order";</script>';
        break;
    case 'edit_order':
        include_once 'models/orderModel.php';
        include_once 'views/order/edit.php';
        break;
    case 'updated_status':
        include_once 'models/orderModel.php';
        break;
    case 'delete_order':
        include_once 'models/orderModel.php';
        echo '<script>
        location.href = "index.php?controller=order";
    </script>';
        break;
}
