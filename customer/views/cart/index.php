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
<section class="h-custom ">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col">
                <?php

                if (!empty($_SESSION['cart'])) {
                ?>



                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">Sản phẩm</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($infor['cart'] as $product_id => $value) {
                                    $subtotal = $value['price'] * $value['amount'];
                                    $total += $subtotal;
                                ?>
                                    <tr>
                                        <!-- <td class='align-middle'><?= $product_id; ?> -->
                                        </td>
                                        <th scope='row'>
                                            <div class='d-flex align-items-center'>
                                                <img src='../admin/assets/img/uploads/<?= $value['img']; ?>' class='img-fluid rounded-3' style='width: 120px;' alt='Book'>
                                                <div class='flex-column ms-4'>
                                                    <p class='mb-2'><a class="text-black" href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$value[product_id]" ?>"><?= $value['product_name']; ?></a></p>
                                                    <p class='mb-0'><?= $value['author_name']; ?></p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class='align-middle'>
                                            <p class='mb-0' style='font-weight: 500;'><?= $value['category_name']; ?></p>
                                        </td>
                                        <td class='align-middle'>
                                            <p class='mb-0' style='font-weight: 500;'><?= $value['price']; ?> đ</p>
                                        </td>

                                        <td class='align-middle'>
                                            <div class='d-flex flex-row amount_sync'>
                                                <form method="post" action="index.php?controller=cart&action=change_amount" class="d-flex">
                                                    <a class='btn text-success px-2' onclick='this.parentNode.querySelector(" input[type=number]").stepDown()'>
                                                        <i class='fas fa-minus'></i>
                                                    </a>
                                                    <input id='form1' min='0' name='amount[<?= $product_id ?>]' value='<?= $value['amount']; ?>' type='number' class='form-control form-control-sm' style='width: 50px;' />
                                                    <a class='btn text-success px-2' onclick='this.parentNode.querySelector(" input[type=number]").stepUp()'>
                                                        <i class='fas fa-plus'></i>
                                                    </a>
                                                    <button type="submit" name="update_cart" value="update" class="text-info bg-white amount_sync_btn ms-4" title="Đồng bộ số lượng">
                                                        <i class="fas fa-sync fa-lg"></i>
                                                    </button>
                                                </form>
                                                <a href="index.php?controller=cart&action=delete_product_in_order&id=<?= $product_id; ?>" name="clear_cart" class='text-danger ms-2 bg-white d-flex align-items-center' title='Xóa sản phẩm'">
													<i class='fas fa-trash fa-lg'></i>
													</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>
                            </tbody>
                        </table>
                        <div class=" mb-4">
                                                    <form class=" d-flex justify-content-end" method="post" action="index.php?controller=cart&action=clear_cart" class="d-flex">
                                                        <button class="btn btn-warning" type="submit">Xóa tất cả sản phẩm</button>
                                                    </form>
                                            </div>
                    </div>

                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-2">Tổng giá</p>
                                    <p class="mb-2"><?php echo " $total" ?> đ</p>
                                </div>


                                <hr class="my-4">
                                <?php
                                foreach ($infor['profiles'] as $profile) {
                                ?>
                                    <form method="post" action="index.php?controller=cart&action=add_order_to_db" style="margin-right: 0 !important;">
                                        <input type="hidden" name="order_total" value="<?php echo " $total" ?>">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputname">Tên người nhận</label>
                                                <input value="<?= $profile['fullname'] ?>" required class="form-control" name="order_recipient_name" type="text" placeholder="Full Name">
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputemail">Số điện thoại</label>
                                                <input value="<?= $profile['phone'] ?>" class="form-control" name="order_recipient_phone" type="text" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputsubject">Địa chỉ</label>
                                            <input value="<?= $profile['address'] ?>" required="" class="form-control" name="order_recipient_address" type="text" placeholder="Address">
                                        </div>
                                        <hr class="my-4">
                                        <button class="btn btn-success btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span>Đặt đơn</span>
                                            </div>
                                        </button>
                                    </form>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>

                <?php
                } else {


                ?>

                    <!-- chưa có đơn hàng -->
                    <div style="text-align: center;" class="py-5">
                        <div style="width: 300px;height:100% ;margin:auto;" class="py-5">
                            <img src="../customer/assets/uploads/cart.png" style="width: 100%;" alt="Không có sản phẩm nào trong giỏ hàng của bạn.">
                            <span class="mascot-image"></span>
                            <p class="pb-3">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                            <a href="index.php?controller=shop" class="btn btn-success btn-sm">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                    <!-- chưa có đơn hàng -->
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->