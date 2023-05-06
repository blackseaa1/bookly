<?php
function index_product()
{
    $search = '';
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    include_once 'connect/openConnect.php';
    // $sql = "SELECT * FROM tbl_category";
    $sqlCount = "SELECT COUNT(*) AS count_record FROM tbl_product WHERE product_name LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 5;
    $sql = "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
    FROM tbl_product
    INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
    INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id
    WHERE tbl_product.product_name LIKE '%$search%' OR tbl_category.category_name LIKE '%$search%' OR tbl_author.author_name LIKE '%$search%' OR tbl_product.quantity LIKE '%$search%' OR tbl_publishing_company.publishing_company_name LIKE '%$search%' OR tbl_product.price LIKE '%$search%'
    LIMIT $start, $end";
    $products = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $products;
    $array['page'] = $countPage;
    return $array;
}
function create_product()
{
    include_once './connect/openConnect.php';
    $sqlCategory = "SELECT * FROM tbl_category";
    $categorys = mysqli_query($connect, $sqlCategory);
    $sqlAuthor = "SELECT * FROM tbl_author";
    $authors = mysqli_query($connect, $sqlAuthor);
    $sqlPublishings = "SELECT * FROM tbl_publishing_company";
    $publishing_companys = mysqli_query($connect, $sqlPublishings);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['categorys'] = $categorys;
    $array['authors'] = $authors;
    $array['publishing_companys'] = $publishing_companys;
    return $array;
}
// function store_product()
// {
//     $product_name = $_POST["product_name"];
//     $img = $_FILES["img"]['name'];
//     $img_tmp = $_FILES["img"]['tmp_name'];
//     $description = $_POST["description"];
//     $author_name = $_POST["author_name"];
//     $quantity = $_POST["quantity"];
//     $price = $_POST["price"];
//     $category_id = $_POST["category_id"];
//     $publishing_company_name = $_POST["publishing_company_name"];
//     // Kiểm tra sản phẩm đã tồn tại trong database hay chưa
//     include_once './connect/openConnect.php';
//     $check_duplicate = mysqli_query($connect, "SELECT * FROM tbl_product WHERE product_name = '$product_name'");
//     if (mysqli_num_rows($check_duplicate) > 0) {
//         $msg = "Sản phẩm đã tồn tại! Vui lòng thêm lại";
//         echo "<script>alert('$msg'); window.history.back();</script>";
//     } else {
//         // Kiểm tra và thêm publishing_company_name vào bảng tbl_publishing_company
//         $check_company_duplicate = mysqli_query($connect, "SELECT * FROM tbl_publishing_company WHERE publishing_company_name = '$publishing_company_name'");
//         if (mysqli_num_rows($check_company_duplicate) > 0) {
//             $company = mysqli_fetch_assoc($check_company_duplicate);
//             $publishing_company_id = $company['publishing_company_id'];
//         } else {
//             mysqli_query($connect, "INSERT INTO tbl_publishing_company (publishing_company_name) VALUES ('$publishing_company_name')");
//             $publishing_company_id = mysqli_insert_id($connect);
//             // $msg .= "Thêm $publishing_company_name thành công! ";
//         }

//         // Kiểm tra và thêm author_name vào bảng tbl_author
//         $check_author_duplicate = mysqli_query($connect, "SELECT * FROM tbl_author WHERE author_name = '$author_name'");
//         if (mysqli_num_rows($check_author_duplicate) > 0) {
//             $author = mysqli_fetch_assoc($check_author_duplicate);
//             $author_id = $author['author_id'];
//         } else {
//             mysqli_query($connect, "INSERT INTO tbl_author (author_name) VALUES ('$author_name')");
//             $author_id = mysqli_insert_id($connect);
//             // $msg .= "Thêm tác giả $author_name thành công! ";
//         }

//         // Thêm sản phẩm vào database
//         $sql = "INSERT INTO tbl_product (product_name, img, description, author_id, quantity, price, category_id, publishing_company_id, created_date)
//         VALUES ('$product_name', '$img', '$description', '$author_id', '$quantity', '$price', '$category_id', '$publishing_company_id', now())";
//         move_uploaded_file($img_tmp, __DIR__ . '/../img/uploads/' . $img);
//         mysqli_query($connect, $sql);
//         $msg .= "Thêm sản phẩm thành công!";
//         echo "<script>alert('$msg');</script>";
//     }

//     include_once './connect/closeConnect.php';
// }
function store_product()
{
    $product_name = $_POST["product_name"];
    $img = $_FILES["img"]["name"];
    $img_tmp = $_FILES["img"]["tmp_name"];
    $description = $_POST["description"];
    $author_name = $_POST["author_name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];
    $publishing_company_name = $_POST["publishing_company_name"];
    // Kiểm tra sản phẩm đã tồn tại trong database hay chưa
    include_once './connect/openConnect.php';
    $check_duplicate = mysqli_query($connect, "SELECT * FROM tbl_product WHERE product_name = '$product_name'");
    if (mysqli_num_rows($check_duplicate) > 0) {
        $msg = "Sản phẩm đã tồn tại! Vui lòng thêm lại";
        echo "<script>alert('$msg'); window.history.back();</script>";
    } else {
        // Kiểm tra và thêm publishing_company_name vào bảng tbl_publishing_company
        $check_company_duplicate = mysqli_query($connect, "SELECT * FROM tbl_publishing_company WHERE publishing_company_name = '$publishing_company_name'");
        if (mysqli_num_rows($check_company_duplicate) > 0) {
            $company = mysqli_fetch_assoc($check_company_duplicate);
            $publishing_company_id = $company['publishing_company_id'];
        } else {
            mysqli_query($connect, "INSERT INTO tbl_publishing_company (publishing_company_name) VALUES ('$publishing_company_name')");
            $publishing_company_id = mysqli_insert_id($connect);
        }

        // Kiểm tra và thêm author_name vào bảng tbl_author
        $check_author_duplicate = mysqli_query($connect, "SELECT * FROM tbl_author WHERE author_name = '$author_name'");
        if (mysqli_num_rows($check_author_duplicate) > 0) {
            $author = mysqli_fetch_assoc($check_author_duplicate);
            $author_id = $author['author_id'];
        } else {
            mysqli_query($connect, "INSERT INTO tbl_author (author_name) VALUES ('$author_name')");
            $author_id = mysqli_insert_id($connect);
        }
        $upload_dir = "assets/img/uploads/";
        $img_path = $upload_dir . basename($img);
        move_uploaded_file($img_tmp, $img_path);

        $sql = "INSERT INTO tbl_product (product_name, img, description, author_id, quantity, price, category_id, publishing_company_id, created_date)
        VALUES ('$product_name', '$img', '$description', '$author_id', '$quantity', '$price', '$category_id', '$publishing_company_id', now())";
        mysqli_query($connect, $sql);
        $msg = "Thêm sản phẩm thành công!";
        echo "<script>alert('$msg');</script>";
    }

    include_once './connect/closeConnect.php';
}

function edit_product()
{
    $product_id = $_GET['product_id'];
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
    $array['categorys'] = $categorys;
    $array['products'] = $products;
    $array['publishing_companys'] = $publishing_companys;
    $array['authors'] = $authors;
    return $array;
}
function update_product()
{
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $img = $_FILES["img"]['name'];
    $img_tmp = $_FILES["img"]['tmp_name'];
    $description = $_POST["description"];
    $author_id = $_POST["author_id"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];
    $publishing_company_id = $_POST["publishing_company_id"];


    // Retrieve product information from database
    include_once './connect/openConnect.php';
    $result = mysqli_query($connect, "SELECT * FROM tbl_product WHERE product_id = $product_id");
    $product = mysqli_fetch_assoc($result);

    if (!$product) {
        $msg = "Không tìm thấy sản phẩm!";
        echo "<script>alert('$msg');</script>";
    } else {
        // Check if the new product_name is unique within the same category
        $result = mysqli_query($connect, "SELECT * FROM tbl_product WHERE category_id = $category_id AND product_name = '$product_name' AND product_id != $product_id");
        if (mysqli_num_rows($result) > 0) {
            $msg = "Tên sách bị trùng! Vui lòng sửa lại";
            echo "<script>alert('$msg');window.history.back();</script>";
        } else {
            // Update product in database
            $sql = "UPDATE tbl_product SET 
                    product_name = '$product_name', 
                    description = '$description', 
                    author_id = '$author_id', 
                    quantity = '$quantity', 
                    price = '$price', 
                    publishing_company_id = '$publishing_company_id',
                    updated_date =   now(),
                    category_id = '$category_id'";
            if ($img) {
                $upload_dir = "assets/img/uploads/";
                $img_path = $upload_dir . basename($img);
                move_uploaded_file($img_tmp, $img_path);
                $sql .= ", img = '$img'";
            }
            $sql .= " WHERE product_id = $product_id";
            mysqli_query($connect, $sql);
            $msg = "Cập nhật sản phẩm thành công!";
            echo "<script>alert('$msg');</script>";
        }
    }
    include_once './connect/closeConnect.php';
}


//fucntion xóa dữ liệu trên db
function destroy_product()
{
    $product_id = $_GET['product_id'];
    include_once './connect/openConnect.php';
    $sql = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
    mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
}
switch ($action) {
    case '':
        // Lay du lieu tu DB ve sau đó đổ dữ liệu lên mục views
        $array = index_product();
        break;
    case 'create_product':
        $array = create_product();
        break;
    case 'store_product':
        store_product();
        break;
    case 'edit_product':
        $array = edit_product();
        break;
    case 'update_product':
        update_product();
        break;
    case 'destroy_product':
        //xóa dữ liệu trên db
        destroy_product();
        break;
}

