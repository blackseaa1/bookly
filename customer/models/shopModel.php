<?php
//function để lấy dữ liệu từ DB về
function index_shop()
{
    include_once 'connect/openConnect.php';

    $sql = "SELECT * FROM tbl_category";
    $categories = mysqli_query($connect, $sql);

    $products = array();
    while ($category = mysqli_fetch_assoc($categories)) {
        $category_id = $category['category_id'];
        $category_name = $category['category_name'];

        $sql = "SELECT * FROM tbl_product WHERE category_id = $category_id";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[$category_name][] = $product;
            }
        }
    }

    include_once './connect/closeConnect.php';

    return $products;
}


//    Function lưu dữ liệu lên DB

switch ($action) {
    case '':
        //Lấy dữ liệu từ DB về
        $products = index_shop();
        break;
}
