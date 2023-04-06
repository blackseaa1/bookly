<?php
// Lay hanh dong dang thuc hien
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action) {

    case '':
        include_once 'models/profileModel.php';
        include_once 'views/profile/index.php';
        break;
    case 'update_profile':
        include_once 'models/profileModel.php';
        break;
    case 'update_password':
        include_once 'models/profileModel.php';
        break;
}
