    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="index.php?controller=shop" method="post" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input value="<?= $array['search'] ?>" type="text" class="form-control" id="inputModalSearch" name="search" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <!-- php -->
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Danh Mục</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none category-button" href="#" data-category="all">
                            Tất cả sản phẩm
                        </a>
                    </li>
                    <?php
                    foreach ($array['categories'] as $category_id => $category_name) {
                        echo "  
                    <li class='pb-3'>
                    <a class='collapsed d-flex justify-content-between cart-title h3 text-decoration-none category-button' href='' data-category='$category_name'>$category_name</a>
                    </li>
                ";
                    }
                    ?>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 pb-4">
                        <div class="d-flex flex-row-reverse">
                            <form action="index.php?controller=shop" method="post" style="margin-right: 0 !important;" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input value="<?= $array['search'] ?>" type="text" id="search" name="search" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- show product -->
                <div class="row">
                    <?php
                    foreach ($array['infor'] as $category_id => $category_products) {
                        foreach ($category_products as $product) {
                            echo "
                    <div class='col-md-4 product-card' data-category='$category_id'>
                        <div class='card mb-4 product-wap rounded-0'>
                            <div class='card rounded-0'>
                                <img class='card-img rounded-0 img-fluid' src='../admin/assets/img/uploads/$product[img]'>
                                <div class='card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center'>
                                    <ul class='list-unstyled'>
                                        <li><a class='btn btn-success text-white mt-2' href='index.php?controller=shop&action=product_detail&product_id=$product[product_id]'><i class='far fa-eye'></i></a></li>
                                        <li><a class='btn btn-success text-white mt-2' href='shop-single.html'><i class='fas fa-cart-plus'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class='card-body'>
                                <a href='shop-single.html' class='cart-title h3 text-decoration-none'>$product[product_name]</a>
                                <ul class='w-100 list-unstyled d-flex justify-content-between mb-0'>
                                    <li class='pt-2'>
                                        <span class='product-color-dot color-dot-red float-left rounded-circle ml-1'></span>
                                        <span class='product-color-dot color-dot-blue float-left rounded-circle ml-1'></span>
                                        <span class='product-color-dot color-dot-black float-left rounded-circle ml-1'></span>
                                        <span class='product-color-dot color-dot-light float-left rounded-circle ml-1'></span>
                                        <span class='product-color-dot color-dot-green float-left rounded-circle ml-1'></span>
                                    </li>
                                </ul>
                                <ul class='list-unstyled d-flex justify-content-center mb-1'>
                                    <li>
                                        <i class='text-warning fa fa-star'></i>
                                        <i class='text-warning fa fa-star'></i>
                                        <i class='text-warning fa fa-star'></i>
                                        <i class='text-muted fa fa-star'></i>
                                        <i class='text-muted fa fa-star'></i>
                                    </li>
                                </ul>
                                <p class='text-center mb-0'>$product[price] đ</p>
                            </div>
                        </div>
                    </div>";
                        }
                    }
                    ?>

                </div>
                <!-- end show product -->

                <nav class="app-pagination d-flex justify-content-center">
                    <?php
                    for ($i = 1; $i <= $array['page']; $i++) {
                    ?>
                        <form method="post" action="index.php?controller=shop&page=<?= $i ?>">

                            <ul class="pagination justify-content-center">

                                <li class="page-item"><input type="hidden" name="search" value="<?= $array['search'] ?>"></li>
                                <li class="page-item"> <input type="hidden" name="page" value="<?= $i ?>"></li>
                                <li class="page-item"><button class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark p-3 pe-4 ps-4 fs-4"><?= $i ?></button></li>
                                </li>
                            </ul>
                        </form>
                    <?php
                    }
                    ?>

                </nav>
            </div>
            <!-- php -->
        </div>
    </div>
    <!-- End Content -->
    <script>
        // // Lọc sản phẩm khi click vào nút danh mục
        // const categoryButtons = document.querySelectorAll('.category-button');
        // const productCards = document.querySelectorAll('.product-card');
        // const allProductsButton = document.querySelector('.all-products-button');

        // categoryButtons.forEach(button => {
        //     button.addEventListener('click', (event) => {
        //         event.preventDefault();

        //         // Lấy tên danh mục được lưu trữ trong data attribute của nút
        //         const category = button.dataset.category;

        //         // Hiển thị các sản phẩm của danh mục tương ứng và ẩn các sản phẩm khác
        //         productCards.forEach(card => {
        //             if (category === 'all' || card.dataset.category === category) {
        //                 card.style.display = 'block';
        //             } else {
        //                 card.style.display = 'none';
        //             }
        //         });
        //     });
        // });

        // allProductsButton.addEventListener('click', (event) => {
        //     event.preventDefault();

        //     // Hiển thị tất cả sản phẩm
        //     productCards.forEach(card => {
        //         card.style.display = 'block';
        //     });
        // });
        // Lọc sản phẩm khi click vào nút danh mục
        const categoryButtons = document.querySelectorAll('.category-button');
        const productCards = document.querySelectorAll('.product-card');
        const allProductsButton = document.querySelector('.all-products-button');
        const productCategory = document.querySelector('.product-category');

        // Hiển thị tên danh mục sản phẩm đang được chọn
        categoryButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();

                // Lấy tên danh mục được lưu trữ trong data attribute của nút
                const category = button.dataset.category;
                productCategory.innerHTML = category.toUpperCase();
            });
        });

        // Hiển thị sản phẩm của danh mục tương ứng và ẩn các sản phẩm khác
        categoryButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();

                // Lấy tên danh mục được lưu trữ trong data attribute của nút
                const category = button.dataset.category;

                // Hiển thị các sản phẩm của danh mục tương ứng và ẩn các sản phẩm khác
                productCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        allProductsButton.addEventListener('click', (event) => {
            event.preventDefault();

            // Hiển thị tất cả sản phẩm
            productCards.forEach(card => {
                card.style.display = 'block';
            });

            // Hiển thị tên danh mục sản phẩm là Tất cả sản phẩm
            productCategory.innerHTML = 'Tất cả sản phẩm';
        });
    </script>