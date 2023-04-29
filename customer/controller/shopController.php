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
    case 'product_detail':
        include_once 'models/shopModel.php';
        include_once 'views/shop/product_detail.php';
        break;
    case 'add_cart':
        include_once 'models/shopModel.php';
        echo '<script>
                        window.history.back();
                    </script>';
        break;
    case 'view_cart':
        include_once 'models/shopModel.php';
        include_once 'views/cart/index.php';
        break;
        // case 'edit_category':
        //     include_once 'models/brandModel.php';
        //     include_once 'views/brands/edit.php';
        //     break;
        // case 'update_category':
        //     include_once 'models/brandModel.php';
        //     echo '<script>
        //              location.href = "index.php?controller=brand";
        //             </script>';
        //     break;
        // case 'destroy_category':
        //     include_once 'models/brandModel.php';
        //     echo '<script>
        //                 location.href = "index.php?controller=brand";
        //             </script>';
        //     break;
}
