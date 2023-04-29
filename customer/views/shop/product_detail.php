    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <?php
            foreach ($array['products'] as $product) {
            ?>
                <div class="row">


                    <div class="card col-lg-5 mt-5">
                        <img class="card-img img-fluid m-auto" src="../admin/assets/img/uploads/<?php echo $product['img'] ?>" alt="Card image cap" id="product-detail">

                        <!-- <div class="card mb-3"> -->
                        <!-- <img style="width:524px;height:524px;" class="card-img img-fluid" src="./assets/img/bookupdate/book-1.png" alt="Card image cap" id="product-detail"> -->
                        <!-- </div> -->
                        <!-- <div class="row">
                            <div class="d-flex justify-content-evenly">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img style="width: 128px; height: 128px;" class="card-img img-fluid" src="./assets/img/bookupdate/book-1.png" alt="Product Image 7">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img style="width: 128px; height: 128px;" class="card-img img-fluid" src="./assets/img/bookupdate/book-1.png" alt="Product Image 8">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img style="width: 128px; height: 128px;" class="card-img img-fluid" src="./assets/img/bookupdate/book-1.png" alt="Product Image 9">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card" style="height:670px;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h1 class="card-title-shop-single h2"><?php echo $product['product_name'] ?></h1>
                                <p class="h3 py-2"><?php echo $product['price'] ?> đ</p>
                                <p class="py-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                                </p>

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Nhà xuất bản:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <?php
                                        foreach ($array['publishing_companys'] as $publishing_company) {
                                        ?>
                                            <p class="text-muted"><strong><?php
                                                                            if ($publishing_company['publishing_company_id'] == $product['publishing_company_id']) {
                                                                                echo $publishing_company['publishing_company_name'];
                                                                                break;
                                                                            }
                                                                            ?>
                                                </strong></p>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>

                                <h6 class="pb-1">Mô Tả:</h6>
                                <p class="pb-5"><?php echo strlen($product['description']) > 300 ? substr($product['description'], 0, 300) . "..." : $product['description'] ?></p>
                                <h6 class=" pb-5">Tác giả:
                                    <?php
                                    foreach ($array['authors'] as $author) {
                                    ?>
                                        <?php
                                        if ($author['author_id'] == $product['author_id']) {
                                            echo $author['author_name'];
                                            break;
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </h6>
                                <form action="" method="GET">
                                    <input name="product_id" type="hidden" value="<?= $product['product_id'] ?>">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantity
                                                    <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Mua</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->

    <!-- End Article -->
    