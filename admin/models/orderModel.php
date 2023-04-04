<?php
// function de lay du lieu tu db ve
function index_orders()
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

    // Tính toán số bản ghi và số trang
    $sqlCount = "SELECT COUNT(*) AS count_record FROM tbl_order WHERE order_id LIKE ?";
    $stmt = mysqli_prepare($connect, $sqlCount);
    mysqli_stmt_bind_param($stmt, "s", $searchParam);
    $searchParam = "%$search%";
    mysqli_stmt_execute($stmt);
    $counts = mysqli_stmt_get_result($stmt);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);

    // Lấy danh sách đơn hàng dựa trên trang và từ khóa tìm kiếm
    $start = ($page - 1) * $recordOnePage;
    $sql = "SELECT tbl_order.*, tbl_account.fullname, tbl_account.phone, tbl_account.address, tbl_account.email
        FROM tbl_order
        INNER JOIN tbl_account ON tbl_account.account_id = tbl_order.account_id
        WHERE fullname LIKE ?
        ORDER BY order_status ASC, created_date DESC
        LIMIT ?, ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "sii", $searchParam, $start, $recordOnePage);
    mysqli_stmt_execute($stmt);
    $orders = mysqli_stmt_get_result($stmt);

    include_once './connect/closeConnect.php';

    $array = array();
    $array['search'] = $search;
    $array['infor'] = $orders;
    $array['page'] = $countPage;

    return $array;
}


switch ($action) {
    case '':
        $array = index_orders();
        break;
}
