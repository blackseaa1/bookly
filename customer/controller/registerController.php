<?php
// Lay hanh dong dang thuc hien
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action) {

    case '':

        include_once 'views/register/register.php';
        break;
    case 'createCustomer':
        include_once 'views/register/register.php';
        include_once 'models/registerModel.php';
        echo '<script>location.href = "index.php?controller=login";</script>';
        break;
}
