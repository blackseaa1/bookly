<div class="app-header-inner shop-app-header-inner">
    <div class="container-fluid py-2">
        <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <a class="sidepanel-toggler d-inline-block d-xl-none" id="sidepanel-toggler" href="#">
                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                        </svg>
                    </a>
                </div><!--//col-->
                <div class="search-mobile-trigger d-sm-none col">
                    <i class="search-mobile-trigger-icon fas fa-search"></i>
                </div><!--//col-->
                <!-- <div class="app-search-box col">
                    <form class="app-search-form">
                        <input class="form-control search-input" name="search" type="text" placeholder="Tìm Kiếm...">
                        <button class="btn search-btn btn-primary" type="submit" value="Search"><i class="fas fa-search"></i></button>
                    </form>
                </div>//app-search-box -->

                <div class="app-utilities col-auto">

                    <div class="app-utility-item app-user-dropdown dropdown d-flex align-items-end">
                        <?php
                        $fullname = $_SESSION['fullname'];
                        ?>
                        <a href="index.php?controller=profile" class="pe-2 text-capitalize"><?php
                        echo $fullname
                        ?></a>
                        <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg></a>
                        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                            <li><a class="dropdown-item" href="index.php?controller=profile">Account</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index.php?controller=login&action=logout">Log Out</a></li>
                        </ul>
                    </div><!--//app-user-dropdown-->
                </div><!--//app-utilities-->
            </div><!--//row-->
        </div><!--//app-header-content-->
    </div><!--//container-fluid-->
</div>