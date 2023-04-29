<?php
function cart_bill()
{
    $total_Money = 0;
    include_once 'connect/openConnect.php';
    // $sqlCount =
    //     "SELECT COUNT(*) AS count_record FROM tbl_product";
    // $counts = mysqli_query($connect, $sqlCount);
    // foreach ($counts as $each) {
    //     $countRecord = $each['count_record'];
    // }
    // $recordOnePage = 6; // Số lượng sản phẩm hiển thị trong 1 trang
    // $countPage = ceil($countRecord / $recordOnePage);
    // $start = ($page - 1) * $recordOnePage;
    // $end = $recordOnePage;
    $sql = "SELECT tbl_product.*, tbl_cart.cart_amount, tbl_cart.cart_bill
    , tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
    FROM tbl_product
    INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
    INNER JOIN tbl_cart ON tbl_product.product_id = tbl_cart.product_id
    INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id
    ";
    $products = mysqli_query($connect, $sql);

    // Lấy danh sách các danh mục sản phẩm
    $carts = array();
    $productsByCategory = array();
    $sqlCarts = "SELECT tbl_cart.* FROM tbl_cart";
    $resultCarts = mysqli_query($connect, $sqlCarts);
    while ($cart = mysqli_fetch_assoc($resultCarts)) {
        // $carts[$cart['product_id']] = $cart['product_id'];
        $cart_name = $cart['product_id'];
        $product = mysqli_fetch_assoc($products);
        if ($product['product_id'] = $cart['product_id']) {
            $productsByCategory[$cart_name][] = $product;
            // $product=array_merge($product, $cart);
            // $total_Money=count($cart);
            // $total_Money=var_dump( $cart['cart_bill'] );
            for ($i = 0; $i < 1; $i++) {
                $total_Money += (int)$cart['cart_bill'];
            }
        }
    }


    // while ($product = mysqli_fetch_assoc($products)) {
    //     $cart_name = $cart['product_id'];
    //     // if($carts[$cart['product_id']] = $cart['product_id'])
    //     $productsByCategory[$cart_name][] = $product;
    // }
    include_once './connect/closeConnect.php';
    $array = array();
    // $array['page'] = $countPage;
    $array['infor'] = $productsByCategory;
    $array['resultCarts'] = $resultCarts;
    $array['total_Money'] = $total_Money;
    $array['cart'] = $cart;
    $array['carts'] = $carts; // Thêm thông tin danh mục sản phẩm vào mảng kết quả trả về
    return $array;
}

//    Function lưu dữ liệu lên DB

switch ($action) {
    case '':
        //Lấy dữ liệu từ DB về
        $array = cart_bill();
        break;
}
    