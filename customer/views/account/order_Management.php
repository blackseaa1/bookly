<div class="container py-5">
    <div class="row gutters">
        <?php
        include 'views/layout/sidebar_account.php';
        ?>
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body bg-white p-4  rounded">
                    <div class="panel panel-default panel-order">

                        <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 border border-success text-white" role="tablist">
                            <a class=" text-success flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tất cả</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Thành công</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Đang xử lý</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Hủy </a>
                        </nav>
                        <div class="tab-content" id="orders-table-tab-content">
                            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                <div class="app-card app-card-orders-table shadow-sm mb-5">
                                    <div class="app-card-body">
                                        <?php
                                        foreach ($array['orders'] as $order) {
                                        ?>
                                            <div class="table-responsive">
                                                <div class="border overflow-hidden p-3 mb-3">
                                                    <div class="mb-2 d-flex justify-content-sm-between align-items-center"> <strong class="fw-bold">Mã đơn hàng #<?= $order['order_id'] ?></strong> <strong class="">Ngày tạo: <?php echo $order['created_date']; ?></strong></div>
                                                    <div class="panel-body">
                                                        <?php
                                                        foreach ($array['orderOdetails'] as $orderOdetail) {
                                                            if ($order['order_id'] == $orderOdetail['order_id']) {
                                                        ?>
                                                                <?php
                                                                foreach ($array['products'] as $product) {
                                                                    if ($product['product_id'] == $orderOdetail['product_id']) {
                                                                ?>
                                                                        <div class="row mb-4 bg-light">
                                                                            <div class="col-md-2"><img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                                            <div class="col-md-8 d-flex justify-content-sm-between align-items-center">
                                                                                <div>
                                                                                    <span><strong><a class="text-black fw-bold" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$product[product_id]" ?>"><?php echo $product['product_name']; ?></a></strong></span><br />
                                                                                    <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                                    <span class="label label-info">Số lượng: x<?php echo $orderOdetail['amount']; ?></span><br />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2 d-flex justify-content-sm-between align-items-end"> <span class="label label-info">Giá: <?php echo $orderOdetail['price']; ?> đ</span><br />
                                                                            </div>

                                                                        </div>
                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                        <div class=" d-flex justify-content-sm-between align-items-center">

                                                            <div><label class="text-danger">Thành tiền: <?php echo $order['order_total']; ?> đ</label></div>
                                                            <div>

                                                                <span class=" p-1 pe-3 ps-3"> Status:
                                                                    <?php
                                                                    if ($order['order_status'] == '0') {
                                                                    ?> <span class="badge bg-warning">
                                                                            Đang xử lý
                                                                        </span>
                                                                    <?php
                                                                    } elseif ($order['order_status'] == '1') {
                                                                    ?>
                                                                        <span class="badge bg-success">
                                                                            Thành công
                                                                        </span>
                                                                    <?php
                                                                    } elseif ($order['order_status'] == '2') {
                                                                    ?>
                                                                        <span class="badge bg-danger">
                                                                            Hủy
                                                                        </span>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </span>
                                                                <a data-placement="top" class="btn btn-outline-danger border border-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="index.php?controller=account&action=order_detail&order_id=<?= $order['order_id'] ?>" title="Danger">
                                                                    Chi tiết đơn hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div><!--//table-responsive-->

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->

                            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                                <div class="app-card app-card-orders-table mb-5">
                                    <div class="app-card-body">
                                        <?php
                                        foreach ($array['orders'] as $order) {
                                            if ($order['order_status'] == '1') {
                                        ?>
                                                <div class="table-responsive">
                                                    <div class="border overflow-hidden p-3 mb-3">
                                                        <div class="mb-2 d-flex justify-content-sm-between align-items-center"> <strong class="fw-bold">Mã đơn hàng #<?= $order['order_id'] ?></strong> <strong class="">Ngày tạo: <?php echo $order['created_date']; ?></strong></div>
                                                        <div class="panel-body">
                                                            <?php
                                                            foreach ($array['orderOdetails'] as $orderOdetail) {
                                                                if ($order['order_id'] == $orderOdetail['order_id']) {

                                                            ?>
                                                                    <?php
                                                                    foreach ($array['products'] as $product) {
                                                                        if ($product['product_id'] == $orderOdetail['product_id']) {
                                                                    ?>
                                                                            <div class="row mb-4 bg-light">
                                                                                <div class="col-md-2"><img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                                                <div class="col-md-8 d-flex justify-content-sm-between align-items-center">
                                                                                    <div>
                                                                                        <span><strong><a class="text-black fw-bold" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$product[product_id]" ?>"><?php echo $product['product_name']; ?></a></strong></span><br />
                                                                                        <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                                        <span class="label label-info">Số lượng: x<?php echo $orderOdetail['amount']; ?></span><br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 d-flex justify-content-sm-between align-items-end"> <span class="label label-info">Giá: <?php echo $orderOdetail['price']; ?> đ</span><br />
                                                                                </div>

                                                                            </div>
                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <div class=" d-flex justify-content-sm-between align-items-center">

                                                                <div><label class="text-danger">Thành tiền: <?php echo $order['order_total']; ?> đ</label></div>
                                                                <div>

                                                                    <span class=" p-1 pe-3 ps-3"> Status:
                                                                        <?php
                                                                        if ($order['order_status'] == '0') {
                                                                        ?> <span class="badge bg-warning">
                                                                                Pending
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '1') {
                                                                        ?>
                                                                            <span class="badge bg-success">
                                                                                Paid
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '2') {
                                                                        ?>
                                                                            <span class="badge bg-danger">
                                                                                Cancelled
                                                                            </span>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </span>
                                                                    <a data-placement="top" class="btn btn-outline-danger border border-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="index.php?controller=account&action=order_detail&order_id=<?= $order['order_id'] ?>" title="Danger">
                                                                        Chi tiết đơn hàng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div><!--//app-card-body-->
                                </div><!--//app-card-->
                            </div><!--//tab-pane-->
                            <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                                <div class="app-card app-card-orders-table mb-5">
                                    <div class="app-card-body">
                                        <?php
                                        foreach ($array['orders'] as $order) {
                                            if ($order['order_status'] == '0') {
                                        ?>
                                                <div class="table-responsive">
                                                    <div class="border overflow-hidden p-3 mb-3">
                                                        <div class="mb-2 d-flex justify-content-sm-between align-items-center"> <strong class="fw-bold">Mã đơn hàng #<?= $order['order_id'] ?></strong> <strong class="">Ngày tạo: <?php echo $order['created_date']; ?></strong></div>
                                                        <div class="panel-body">
                                                            <?php
                                                            foreach ($array['orderOdetails'] as $orderOdetail) {
                                                                if ($order['order_id'] == $orderOdetail['order_id']) {
                                                            ?>
                                                                    <?php
                                                                    foreach ($array['products'] as $product) {
                                                                        if ($product['product_id'] == $orderOdetail['product_id']) {
                                                                    ?>
                                                                            <div class="row mb-4 bg-light">
                                                                                <div class="col-md-2"><img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                                                <div class="col-md-8 d-flex justify-content-sm-between align-items-center">
                                                                                    <div>
                                                                                        <span><strong><a class="text-black fw-bold" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$product[product_id]" ?>"><?php echo $product['product_name']; ?></a></strong></span><br />
                                                                                        <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                                        <span class="label label-info">Số lượng: x<?php echo $orderOdetail['amount']; ?></span><br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 d-flex justify-content-sm-between align-items-end"> <span class="label label-info">Giá: <?php echo $orderOdetail['price']; ?> đ</span><br />
                                                                                </div>

                                                                            </div>
                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <div class=" d-flex justify-content-sm-between align-items-center">

                                                                <div><label class="text-danger">Thành tiền: <?php echo $order['order_total']; ?> đ</label></div>
                                                                <div>

                                                                    <span class=" p-1 pe-3 ps-3"> Status:
                                                                        <?php
                                                                        if ($order['order_status'] == '0') {
                                                                        ?> <span class="badge bg-warning">
                                                                                Pending
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '1') {
                                                                        ?>
                                                                            <span class="badge bg-success">
                                                                                Paid
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '2') {
                                                                        ?>
                                                                            <span class="badge bg-danger">
                                                                                Cancelled
                                                                            </span>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </span>
                                                                    <a data-placement="top" class="btn btn-outline-danger border border-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="index.php?controller=account&action=order_detail&order_id=<?= $order['order_id'] ?>" title="Danger">
                                                                        Chi tiết đơn hàng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div><!--//app-card-->
                                </div><!--//tab-pane-->
                            </div>
                            <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                                <div class="app-card app-card-orders-table mb-5">
                                    <div class="app-card-body">
                                        <?php
                                        foreach ($array['orders'] as $order) {
                                            if ($order['order_status'] == '2') {
                                        ?>
                                                <div class="table-responsive">
                                                    <div class="border overflow-hidden p-3 mb-3">
                                                        <div class="mb-2 d-flex justify-content-sm-between align-items-center"> <strong class="fw-bold">Mã đơn hàng #<?= $order['order_id'] ?></strong> <strong class="">Ngày tạo: <?php echo $order['created_date']; ?></strong></div>
                                                        <div class="panel-body">
                                                            <?php
                                                            foreach ($array['orderOdetails'] as $orderOdetail) {
                                                                if ($order['order_id'] == $orderOdetail['order_id']) {
                                                            ?>
                                                                    <?php
                                                                    foreach ($array['products'] as $product) {
                                                                        if ($product['product_id'] == $orderOdetail['product_id']) {
                                                                    ?>
                                                                            <div class="row mb-4 bg-light">
                                                                                <div class="col-md-2"><img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                                                <div class="col-md-8 d-flex justify-content-sm-between align-items-center">
                                                                                    <div>
                                                                                        <span><strong><a class="text-black fw-bold" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$product[product_id]" ?>"><?php echo $product['product_name']; ?></a></strong></span><br />
                                                                                        <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                                        <span class="label label-info">Số lượng: x<?php echo $orderOdetail['amount']; ?></span><br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 d-flex justify-content-sm-between align-items-end"> <span class="label label-info">Giá: <?php echo $orderOdetail['price']; ?> đ</span><br />
                                                                                </div>

                                                                            </div>
                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <div class=" d-flex justify-content-sm-between align-items-center">

                                                                <div><label class="text-danger">Thành tiền: <?php echo $order['order_total']; ?> đ</label></div>
                                                                <div>

                                                                    <span class=" p-1 pe-3 ps-3"> Status:
                                                                        <?php
                                                                        if ($order['order_status'] == '0') {
                                                                        ?> <span class="badge bg-warning">
                                                                                Pending
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '1') {
                                                                        ?>
                                                                            <span class="badge bg-success">
                                                                                Paid
                                                                            </span>
                                                                        <?php
                                                                        } elseif ($order['order_status'] == '2') {
                                                                        ?>
                                                                            <span class="badge bg-danger">
                                                                                Cancelled
                                                                            </span>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </span>
                                                                    <a data-placement="top" class="btn btn-outline-danger border border-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="index.php?controller=account&action=order_detail&order_id=<?= $order['order_id'] ?>" title="Danger">
                                                                        Chi tiết đơn hàng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div><!--//app-card-body-->
                                </div><!--//app-card-->
                            </div><!--//tab-pane-->

                        </div><!--//tab-pane-->

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>