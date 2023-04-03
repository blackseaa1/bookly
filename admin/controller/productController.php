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
        include_once 'models/productModel.php';
        include_once 'views/product/index.php';
        break;
    case 'create_product':
        include_once 'models/productModel.php';
        include_once 'views/product/create.php';
        break;
    case 'store_product':
        include_once 'models/productModel.php';
        echo '<script>
                    location.href = "index.php?controller=product";
                </script>';
        break;
    case 'edit_product':
        //Hiển thị form sửa
        include_once 'models/productModel.php';
        include_once 'views/product/edit.php';
        break;
    case 'update_product':
        include_once 'models/productModel.php';
        echo '<script>
                    location.href = "index.php?controller=product";
                </script>';
        break;
    case 'destroy_product':
        include_once 'models/productModel.php';
        echo '<script>
                    location.href = "index.php?controller=product";
                </script>';
        break;
}