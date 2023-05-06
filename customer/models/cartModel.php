<?php
function add_to_cart()
{
    // Lấy được id của sản phẩm vừa được thêm vào
    $product_id = $_GET['product_id'];
    $amount = 1;

    // Lưu lên session id sản phẩm và số lượng
    // Kiểm tra xem giỏ hàng đã tồn tại hay chưa
    if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] += $amount;
        } else {
            $_SESSION['cart'][$product_id] = $amount;
        }
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$product_id] = $amount;
    }

    // Hiển thị thông báo thành công
    $msg = "Thêm sản phẩm vào rỏ hàng thành công";
    echo "<script>alert('$msg');</script>";
}



function view_cart()
{
    $email = $_SESSION['email'];
    include_once 'connect/openConnect.php';
    $cart = array();
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $amount) {
            //                Lấy tên sp và giá theo product_id
            $sql = "SELECT tbl_product.*, tbl_category.category_name, tbl_author.author_name, tbl_publishing_company.publishing_company_name
            FROM tbl_product
            INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
            INNER JOIN tbl_author ON tbl_product.author_id = tbl_author.author_id
            INNER JOIN tbl_publishing_company ON tbl_product.publishing_company_id = tbl_publishing_company.publishing_company_id
            WHERE tbl_product.product_id = '$product_id'";
            $products = mysqli_query($connect, $sql);
            foreach ($products as $product) {
                $cart[$product_id]['product_name'] = $product['product_name'];
                $cart[$product_id]['product_id'] = $product['product_id'];
                $cart[$product_id]['author_name'] = $product['author_name'];
                $cart[$product_id]['category_name'] = $product['category_name'];
                $cart[$product_id]['img'] = $product['img'];
                $cart[$product_id]['price'] = $product['price'];
                $cart[$product_id]['amount'] = $amount;
            }
        }
    }
    $sql = "SELECT tbl_account.*, tbl_role.role_name AS role_name 
    FROM tbl_account 
    INNER JOIN tbl_role 
    ON tbl_account.role_id = tbl_role.role_id 
    WHERE tbl_account.email='$email'";

    $profiles = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    $infor = array();
    $infor['profiles'] = $profiles;
    $infor['cart'] = $cart;
    return $infor;
}




//    function thay đổi số lượng trong giỏ hàng
function change_amount()
{
    //Lấy product_id và amount
    $infor = $_POST['amount'];
    foreach ($infor as $product_id => $value) {
        if ($value == 0) {
            unset($_SESSION['cart'][$product_id]);
        } else {
            $_SESSION['cart'][$product_id] = $value;
        }
    }
}


function add_order_to_db()
{
    $account_id = $_GET['account_id'] = $_SESSION['account_id'];
    $order_recipient_name = $_POST['order_recipient_name'];
    $order_recipient_phone = $_POST['order_recipient_phone'];
    $order_recipient_address = $_POST['order_recipient_address'];
    $order_total = $_POST['order_total'];
    $order_status = 0;
    include_once 'connect/openConnect.php';
    $sqlOrder = "INSERT INTO tbl_order( account_id, order_recipient_name, order_recipient_phone, order_recipient_address, order_total, order_status, created_date, updated_date ) VALUES ( '$account_id', '$order_recipient_name', '$order_recipient_phone', '$order_recipient_address', '$order_total', '$order_status',now(),now() )";
    mysqli_query($connect, $sqlOrder);
    $sqlOrderID = "SELECT MAX(order_id) as order_id FROM tbl_order WHERE account_id = '$account_id'";
    $orderIDs = mysqli_query($connect, $sqlOrderID);
    foreach ($orderIDs as $value) {
        $orderIDs = $value['order_id'];
    }
    foreach ($_SESSION['cart'] as $product_id => $amount) {
        $sqlPriceProduct = "SELECT price FROM tbl_product WHERE product_id = '$product_id'";
        $priceProduct = mysqli_query($connect, $sqlPriceProduct);
        foreach ($priceProduct as $each) {
            $price = $each['price'];
        }
        $sql = "INSERT INTO tbl_order_detail VALUES ('$orderIDs', '$product_id', '$price', '$amount')";
        mysqli_query($connect, $sql);
    }
    $msg = "Thêm đơn hàng thành công!";
    include_once 'connect/closeConnect.php';
    unset($_SESSION['cart']);
    echo "<script>alert('$msg');</script>";
}

function delete_product_in_order()
{
    $product_id = $_GET['id'];
    unset($_SESSION['cart'][$product_id]);
}
function clear_cart()
{
    unset($_SESSION['cart']);
}





function edit_order()
{
    $order_id = $_GET['order_id'];
    include_once './connect/openConnect.php';
    $sqlOrderDetail = "SELECT * FROM tbl_order_detail";
    $orderOdetails = mysqli_query($connect, $sqlOrderDetail);

    $sqlProduct = "SELECT * FROM tbl_product";
    $products = mysqli_query($connect, $sqlProduct);

    $sqlAuthor = "SELECT * FROM tbl_author";
    $authors = mysqli_query($connect, $sqlAuthor);

    $sql = "SELECT * FROM tbl_order WHERE order_id='$order_id'";
    $orders = mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $array = array();
    $array['orderOdetails'] = $orderOdetails;
    $array['products'] = $products;
    $array['authors'] = $authors;
    $array['orders'] = $orders;
    return $array;
}

function updated_status()
{

    $order_id = $_POST['order_id'];
    $order_status = $_POST['order_status'];

    include_once './connect/openConnect.php';
    $sql = "UPDATE tbl_order SET
                            order_status = '$order_status',
                            updated_date = now()
                            WHERE order_id = $order_id";
    mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
    $msg = "Cập nhật đơn hàng thành công";
    echo "<script>alert('$msg');window.history.back();</script>";
}


//    Function lưu dữ liệu lên DB

switch ($action) {
    case 'add_cart':
        add_to_cart();
        break;
    case 'view_cart':
        $infor = view_cart();
        break;
    case 'change_amount':
        change_amount();
        break;
    case 'add_order_to_db':
        add_order_to_db();
        break;
    case 'delete_product_in_order':
        delete_product_in_order();
        break;
    case 'clear_cart':
        clear_cart();
        break;
    case 'edit_order':
        $array = edit_order();
        break;
    case 'updated_status':
        updated_status();
        break;
}
