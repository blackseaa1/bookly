<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Chi Tiết Hóa Đơn</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=account&action=purchase_history">
                                    Trở Lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach ($array['orders'] as $order) {
            ?>
                <div class="text-end">
                    <span class="text-red fst-italic">Cập nhật gần đây nhất: <small class="text-danger"><?php echo $order['updated_date']; ?></small>
                </div>

                <div class="card-body bg-white p-4 border rounded">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">


                        <div class="card">
                            <div class="card-body">

                                <div class="container mb-5 mt-3">
                                    <div class="container">
                                        <div class="container">
                                            <div class="col-md-12">
                                                <div class="text-center">
                                                    <h1 class="fw-bold text-success">Bookly</h1>
                                                    <p class="">End Of Alley</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <ul class="list-unstyled">
                                                    <li class="text-black "><span class="fw-bold">Khách Hàng: </span> <span class=" fs-4"> <?php echo $order['order_recipient_name']; ?></span></li>
                                                    <li class=" text-black "><span class="fw-bold">Địa Chỉ: </span><?php echo $order['order_recipient_address']; ?></li>
                                                    <li class=" text-black"><span class="fw-bold">Số Điện Thoại: </span><a class="text-black" href="tel:<?php echo $order['order_recipient_phone']; ?>"><?php echo $order['order_recipient_phone']; ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4">
                                                <ul class="list-unstyled">
                                                    <li class="text-black"><i class="fas fa-circle" style="color:#5cb377 ;"></i> <span class="fw-bold">ID:</span>#<?php echo $order['order_id']; ?></li>
                                                    <li class="text-black"><i class="fas fa-circle" style="color:#5cb377 ;"></i> <span class="fw-bold">Creation Date: </span><?php echo $order['created_date']; ?></li>
                                                    <li class="text-black"><i class="fas fa-circle" style="color:#5cb377 ;"></i> <span class="me-1 fw-bold">


                                                            Status:

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
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row my-2 mx-1 justify-content-center">
                                            <table class="table app-table-hover">
                                                <thead class="text-white bg-success">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Sản Phẩm</th>
                                                        <th scope="col">Số lượng</th>
                                                        <th scope="col">Giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $id = 1;
                                                    foreach ($array['orderOdetails'] as $orderOdetail) {
                                                        if ($order['order_id'] == $orderOdetail['order_id']) {
                                                    ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $id++; ?></th>
                                                                <?php
                                                                foreach ($array['products'] as $product) {
                                                                    if ($product['product_id'] == $orderOdetail['product_id']) {
                                                                ?>
                                                                        <td>
                                                                            <div class='d-flex align-items-center'>
                                                                                <img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                                                                <div class='flex-column ms-4' style="max-width: 70vh;">
                                                                                    <p class='mb-2 truncate-author'><a class="text-black" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$product[product_id]" ?>"><?php echo $product['product_name']; ?></a> </p>
                                                                                    <?php
                                                                                    foreach ($array['authors'] as $author) {
                                                                                        if ($author['author_id'] == $product['author_id']) {
                                                                                    ?>
                                                                                            <p class='mb-0'><?php echo $author['author_name']; ?></p>
                                                                                    <?php
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                                <td><?php echo $orderOdetail['amount']; ?></td>

                                                                <td><?php echo $orderOdetail['price']; ?></td>
                                                            </tr>
                                                </tbody>
                                        <?php
                                                        }
                                                    }
                                        ?>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8">
                                            </div>
                                            <div class="col-xl-3">
                                                <p class="text-black float-start"><span class="text-black me-3">Tổng Cộng :</span><span style="font-size: 25px;"><?php echo $order['order_total']; ?> đ</span></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                <?php
            }
                ?>
                </div>


        </div>

    </div>
</div>