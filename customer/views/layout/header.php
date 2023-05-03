<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
            <div class="content">
                <h3 class="fw-bold text-secondary">Bookly</h3>
                <p class="">End Of Alley</p>
            </div>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=about">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=shop">Cửa Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=contact">Liên Hệ</a>
                    </li>
                </ul>
            </div>




            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="index.php?controller=cart&action=view_cart">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <!-- <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a> -->

                    <!-- Thêm đăng nhập đăng kí -->
                </a>
                <?php
                if (isset($_SESSION['email'])) {
                    // Biến SESSION tồn tại
                    // Hiển thị nội dung cần thiết ở đây
                    echo "<div class='app-utility-item app-user-dropdown dropdown d-flex align-items-end'>
                    <a href='index.php?controller=account' class='pe-2 text-capitalize'>Tài khoản</a>
                    <a class='dropdown-toggle' id='user-dropdown-toggle' data-bs-toggle='dropdown' href='index.php?controller=account' role='button' aria-expanded='false'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                            <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z' />
                        </svg></a>
                    <ul class='dropdown-menu' aria-labelledby='user-dropdown-toggle'>
                        <li><a class='dropdown-item' href='index.php?controller=account'>Thông tin cá nhân</a></li>
                        <li><a class='dropdown-item' href='index.php?controller=cart&action=view_cart'>Rỏ hàng</a></li>
                        <li><a class='dropdown-item' href='index.php?controller=account&action=order_management'>Quản lý đơn hàng</a></li>
                        <li><a class='dropdown-item' href='index.php?controller=account&action=purchase_history'>Lịch sử mua hàng</a></li>
                        <li>
                            <hr class='dropdown-divider'>
                        </li>
                        <li><a class='dropdown-item' href='index.php?controller=login&action=logout'>Đăng xuất</a></li>
                    </ul>
                </div>'";
                } else {
                    echo "<div>
                    <a href='index.php?controller=login' class='btn btn-outline-success border border-success me-2'>Đăng Nhập</a>
                    <a href='index.php?controller=register' class='btn btn-success text-white'>Đăng Kí</a>
                </div>";
                }

                ?>

                <!-- Kết thúc đăng nhập đăng kí -->
                <!-- Người dùng  -->


                <!-- Kết thúc người dùng -->
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->