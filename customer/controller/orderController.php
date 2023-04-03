<?php
// Lay hanh dong dang thuc hien
$action='';
if (isset($_GET['action'])){
    $action=$_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action){
    case '':
    // Tuc la cai nay se lam viec va lay du lieu ve
    include_once 'views/oders/index.php';
    include_once 'models/orderModel.php';
    break;
}


?>
