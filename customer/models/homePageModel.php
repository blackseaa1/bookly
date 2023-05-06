<?php
function index_shop()
{
    include_once 'connect/openConnect.php';
    // $sql = "SELECT * FROM tbl_product ORDER BY RAND() LIMIT 4";
    $sql = "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
FROM tbl_product
INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id ORDER BY RAND() LIMIT 4";
    $products = mysqli_query($connect, $sql);

    $sqls = "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
    FROM tbl_product
    INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
    INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id ORDER BY RAND() LIMIT 4";
    $productss = mysqli_query($connect, $sqls);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['products'] = $products;
    $array['productss'] = $productss;
    return $array;
}

switch ($action) {
    case '':
        //Lấy dữ liệu từ DB về
        $array = index_shop();
        break;
}
