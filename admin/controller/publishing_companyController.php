<?php
//    Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action) {
    case '':
        include_once 'models/publishing_companyModel.php';
        include_once 'views/publishing_company/index.php';
        break;
    case 'create_publishing_company':
        include_once 'views/publishing_company/create.php';
        break;
    case 'store_publishing_company':
        include_once 'models/publishing_companyModel.php';
        echo '<script>
                    location.href = "index.php?controller=publishing_company";
                </script>';
        break;
    case 'edit_publishing_company':
        include_once 'models/publishing_companyModel.php';
        include_once 'views/publishing_company/edit.php';
        break;
    case 'update_publishing_company':
        include_once 'models/publishing_companyModel.php';
        echo '<script>
                 location.href = "index.php?controller=publishing_company";
                </script>';
        break;
    case 'destroy_publishing_company':
        include_once 'models/publishing_companyModel.php';
        echo '<script>
                    location.href = "index.php?controller=publishing_company";
                </script>';
        break;
        // case 'destroy_publishing_company_all':
        //     include_once 'models/publishing_companyModel.php';
        //     echo '<script>
        //                 location.href = "index.php?controller=publishing_company";
        //             </script>';
        //     break;
}


