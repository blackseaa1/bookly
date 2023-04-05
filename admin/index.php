<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="./assets/img/logo/favicon.ico" rel="shortcut icon">

    <!-- FontAwesome JS-->
    <script src="./assets/plugins/fontawesome/js/all.min.js" defer></script>


    <!-- App CSS -->
    <link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.min.css">
    <link href="./assets/style/common/base.css" rel="stylesheet">
    <link href="./assets/style/common/normalize.css" rel="stylesheet">
    <link href="./assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="./assets/style/portal.css" rel="stylesheet">

</head>

<body class="app">

    <?php

    $controller = '';
    if (isset($_GET['controller'])) {

        $controller = $_GET['controller'];
    }
    switch ($controller) {
        case '':
            if (isset($_SESSION['username'])) {
                include_once './views/index.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'customer':
            if (isset($_SESSION['username'])) {
                include_once './controller/customerController.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'brand':
            if (isset($_SESSION['username'])) {
                include_once './controller/brandController.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'publishing_company':
            if (isset($_SESSION['username'])) {
                include_once './controller/publishing_companyController.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'product':
            if (isset($_SESSION['username'])) {
                include_once './controller/productController.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'order':
            if (isset($_SESSION['username'])) {
                include_once './controller/orderController.php';
            } else {
                header('Location:index.php?controller=login');
            }
            break;
        case 'login':
            include_once './controller/loginController.php';
            break;
        default:
            include_once 'views/404/index.php';
            break;
    }

    ?>

    <?php
    if ($controller == 'login') {
        // Nếu là trang login thì không bao gồm header và sidebar
    } else {
        echo "<header class='app-header fixed-top'>";
        include 'views/layout/header.php';
        include 'views/layout/sidebar.php';
        echo " </header>";
    }
    ?>

    <!-- Javascript -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery-1.11.0.min.js"></script>
    <!-- Charts JS -->
    <script src="./assets/plugins/chart.js/chart.min.js"></script>
    <script src="./assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/portal.js"></script>


</body>


</html>