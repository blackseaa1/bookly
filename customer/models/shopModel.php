<?php
function index_shop()
{
    $search = '';
    $category = '';
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    if (isset($_POST['category'])) {
        $category = $_POST['category'];
    }
    if (isset($_POST['all'])) {
        $category = $_POST['all'];
    }
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    include_once 'connect/openConnect.php';
    $sqlCount = $category === 'all' ?
        "SELECT COUNT(*) AS count_record FROM tbl_product WHERE 
    -- tbl_product.category_id LIKE '%$category%'
    product_name LIKE '%$search%'"
        : "SELECT COUNT(*) AS count_record FROM tbl_product WHERE 
    product_name LIKE '%$search%' AND 
    tbl_product.category_id LIKE '%$category%' ";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 6; // Số lượng sản phẩm hiển thị trong 1 trang
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = $recordOnePage;
    $sql = $category === 'all' ?
        "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
    FROM tbl_product
    INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
    INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id
    WHERE 
    -- tbl_product.category_id LIKE '%$category%' AND
    (tbl_product.product_name LIKE '%$search%' OR tbl_category.category_name LIKE '%$search%' OR tbl_author.author_name LIKE '%$search%' OR tbl_publishing_company.publishing_company_name LIKE '%$search%' OR tbl_product.price LIKE '%$search%')
    LIMIT $start, $end"
        : "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
    FROM tbl_product
    INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
    INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id
    WHERE 
    tbl_product.category_id LIKE '%$category%' AND
    (tbl_product.product_name LIKE '%$search%' OR tbl_category.category_name LIKE '%$search%' OR tbl_author.author_name LIKE '%$search%' OR tbl_publishing_company.publishing_company_name LIKE '%$search%' OR tbl_product.price LIKE '%$search%')
    LIMIT $start, $end";
    $products = mysqli_query($connect, $sql);

    // Lấy danh sách các danh mục sản phẩm
    $categories = array();
    $sqlCategories = "SELECT * FROM tbl_category";
    $resultCategories = mysqli_query($connect, $sqlCategories);
    while ($category = mysqli_fetch_assoc($resultCategories)) {
        $categories[$category['category_id']] = $category['category_name'];
    }

    $productsByCategory = array();
    while ($product = mysqli_fetch_assoc($products)) {
        $category_name = $categories[$product['category_id']];
        $productsByCategory[$category_name][] = $product;
    }

    include_once './connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $productsByCategory;
    $array['page'] = $countPage;
    $array['category'] = $category;
    $array['categories'] = $categories; // Thêm thông tin danh mục sản phẩm vào mảng kết quả trả về
    return $array;
}
function product_detail()
{

    $product_id = $_GET['product_id'];
    $amount = 1;
    include_once './connect/openConnect.php';
    $sqlCategory = "SELECT * FROM tbl_category";
    $categorys = mysqli_query($connect, $sqlCategory);
    $sqlAuthor = "SELECT * FROM tbl_author";
    $authors = mysqli_query($connect, $sqlAuthor);
    $sqlPublishings = "SELECT * FROM tbl_publishing_company";
    $publishing_companys = mysqli_query($connect, $sqlPublishings);
    $sql = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
    $products = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['amount'] = $amount;
    $array['categorys'] = $categorys;
    $array['products'] = $products;
    $array['publishing_companys'] = $publishing_companys;
    $array['authors'] = $authors;
    return $array;
}
//    function thêm sản phẩm lên giỏ hàng




//    Function lưu dữ liệu lên DB

switch ($action) {
    case '':
        //Lấy dữ liệu từ DB về
        $array = index_shop();
        break;
    case 'product_detail':
        $array = product_detail();
        break;
}
