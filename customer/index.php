<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookly End Of Alley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./assets/uploads/apple-icon.png">
    <!-- them icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/uploads/favicon.ico">

    <link rel="stylesheet" href="assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="./assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="./assets/style/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="assets/font/fontawesome-pro-5.13.0-web/css/all.min.css">

</head>

<body class="app">
    <header id="header_sticky">
        <?php
        include 'views/layout/header.php';
        ?>
    </header>
    <?php

    $controller = '';
    if (isset($_GET['controller'])) {

        $controller = $_GET['controller'];
    }
    switch ($controller) {
        case '':
            include_once './views/index.php';
            break;
        case 'about':
            include_once './controller/aboutController.php';
            break;
        case 'shop':
            include_once './controller/shopController.php';
            break;
        case 'product':
            include_once './controller/productController.php';
            break;
        case 'brand':
            include_once './controller/brandController.php';
            break;
        case 'logout':
            include_once './controller/userController.php';
            break;
        default:
            echo "Chua co controller nao";
            break;
    }
    ?>
    <?php
    include 'views/layout/footer.php';
    ?>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky');

                } else {
                    $('header').removeClass('sticky');
                }
            })
        });
    </script>
    <!-- End Slider Script -->


</body>

</html>