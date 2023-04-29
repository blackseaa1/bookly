<?php
//function để lấy dữ liệu từ DB về
function index_publishing_company()
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
    // $sql = "SELECT * FROM tbl_publishing_company";
    $sqlCount = "SELECT COUNT(*) AS count_record FROM tbl_publishing_company WHERE publishing_company_name LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each){
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 10;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 10   ;
    $sql = "SELECT * FROM tbl_publishing_company WHERE publishing_company_name LIKE '%$search%' LIMIT $start, $end";
    $publishing_companys = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $publishing_companys;
    $array['page'] = $countPage;
    return $array;
}

//    Function lưu dữ liệu lên DB
function store_publishing_company()
{
    $publishing_company_name = $_POST['publishing_company_name'];
    include_once 'connect/openConnect.php';
    // Kiểm tra kết nối
    if (!$connect) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    // Kiểm tra dữ liệu đã tồn tại trong database hay chưa
    $sql = "SELECT * FROM tbl_publishing_company WHERE publishing_company_name = '$publishing_company_name'";
    $result = mysqli_query($connect, $sql);
    // Nếu dữ liệu chưa tồn tại trong database thì thêm mới
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO tbl_publishing_company(publishing_company_name) VALUES ('$publishing_company_name')";
        if (mysqli_query($connect, $sql)) {
            $message = "Thêm nhà xuất bản thành công";
        } else {
            $message = "Lỗi: " . mysqli_error($connect);
        }
    } else {
        $message = "Nhà xuất bản đã tồn tại, Vui lòng thêm lại!";
        echo "<script>alert('$message');window.history.back();</script>";
    }

    // Đóng kết nối đến database
    include_once 'connect/closeConnect.php';
    // Hiển thị thông báo
    echo "<script>alert('$message');</script>";
}
//function lấy dữ liệu trên db dựa theo id
function edit_publishing_company()
{
    $id = $_GET['publishing_company_id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM tbl_publishing_company WHERE publishing_company_id = '$id'";
    $publishing_companys = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $publishing_companys;
}
//    function update dữ liệu trên db
function update_publishing_company()
{
    $id = $_POST['publishing_company_id'];
    $publishing_company_name = $_POST['publishing_company_name'];
    include_once 'connect/openConnect.php';
    // Kiểm tra dữ liệu đã tồn tại trong database hay chưa
    $sql = "SELECT * FROM tbl_publishing_company WHERE publishing_company_name = '$publishing_company_name' AND publishing_company_id != '$id'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 0) {
        $sql = "UPDATE tbl_publishing_company SET publishing_company_name = '$publishing_company_name' WHERE publishing_company_id = '$id'";
        if (mysqli_query($connect, $sql)) {
            $message = "Cập nhật nhà xuất thành công";
            echo "<script>alert('$message');</script>";
        } else {
            $message = "Lỗi: " . mysqli_error($connect);
            echo "<script>alert('$message');</script>";
            echo "<script>window.history.back();</script>";
        }
    } else {
        $message = "Nhà xuất bản đã tồn tại, Vui lòng sửa lại!";
        echo "<script>alert('$message');<script>window.history.back();</script>";
    }
    include_once 'connect/closeConnect.php';
}

//fucntion xóa dữ liệu trên db
function destroy_publishing_company()
{
    $id = $_GET['publishing_company_id'];
    include_once 'connect/openConnect.php';

    // Delete the corresponding records in tbl_product
    $delete_products_sql = "DELETE FROM tbl_product WHERE publishing_company_id = '$id'";
    mysqli_query($connect, $delete_products_sql);

    // Delete the record in publishing_company
    $delete_publishing_company_sql = "DELETE FROM tbl_publishing_company WHERE publishing_company_id = '$id'";
    if (mysqli_query($connect, $delete_publishing_company_sql)) {
        $message = "Xóa nhà xuất bản thành công";
    } else {
        $message = "Lỗi: " . mysqli_error($connect);
    }
    include_once 'connect/closeConnect.php';
    echo "<script>alert('$message');</script>";
}
// function destroy_publishing_company_all()
// {
//     include_once 'connect/openConnect.php';

//     // Delete all corresponding records in tbl_product
//     $delete_products_sql = "DELETE tbl_product FROM tbl_product INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id";
//     if (mysqli_query($connect, $delete_products_sql)) {
//         $message = "Xóa tất cả các sản phẩm ";
//     } else {
//         $message = "Lỗi: " . mysqli_error($connect);
//     }

//     // Delete all records in tbl_publishing_company
//     $delete_publishing_company_sql = "DELETE FROM tbl_publishing_company";
//     if (mysqli_query($connect, $delete_publishing_company_sql)) {
//         $message .= "và các danh mục thành công";
//     } else {
//         $message .= "Lỗi: " . mysqli_error($connect);
//     }

//     include_once 'connect/closeConnect.php';
//     echo "<script>alert('$message');</script>";
// }


switch ($action) {
    case '':
        //Lấy dữ liệu từ DB về
        $array = index_publishing_company();
        break;
    case 'store_publishing_company':
        //            Lưu dữ liệu lên DB
        store_publishing_company();
        break;
    case 'edit_publishing_company':
        //Lấy dữ liệu từ DB về dựa trên id
        $publishing_companys = edit_publishing_company();
        break;
    case 'update_publishing_company':
        //chỉnh sửa dữ liệu lên db
        update_publishing_company();
        break;
    case 'destroy_publishing_company':
        //xóa dữ liệu trên db
        destroy_publishing_company();
        break;
        // case 'destroy_publishing_company_all':
        //     //xóa tát cả dữ liệu trên db
        //     destroy_publishing_company_all();
        //     break;
}
