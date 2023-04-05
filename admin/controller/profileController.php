<?php
// Lay hanh dong dang thuc hien
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action) {

    case 'login':
        include_once 'views/profile/login.php';
        break;
    case 'loginAcccess':
        include_once 'models/profileModel.php';
        break;
        // case '':
        //     // Tuc la cai nay se lam viec va lay du lieu ve
        //     // include_once 'login.php';
        //     include_once 'models/profileModel.php';
        //     include_once 'views/profile/index.php';
        //     break;
}
