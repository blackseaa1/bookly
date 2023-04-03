<?php
//    Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action) {
    case '':
        include_once 'models/shopModel.php';
        include_once 'views/shop/index.php';
        break;
    case 'create_category':
        include_once 'views/brands/create.php';
        break;
    case 'store_category':
        include_once 'models/brandModel.php';
        echo '<script>
                    location.href = "index.php?controller=brand";
                </script>';
        break;
    case 'edit_category':
        include_once 'models/brandModel.php';
        include_once 'views/brands/edit.php';
        break;
    case 'update_category':
        include_once 'models/brandModel.php';
        echo '<script>
                 location.href = "index.php?controller=brand";
                </script>';
        break;
    case 'destroy_category':
        include_once 'models/brandModel.php';
        echo '<script>
                    location.href = "index.php?controller=brand";
                </script>';
        break;
}
