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
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">Shopping Bag</th>
                                    <th scope="col">Format</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($array['infor'] as $product_id => $cart_products) {
                                    foreach ($cart_products as $product) {
                                        echo "
                                <tr>
                                    <th scope='row'>
                                        <div class='d-flex align-items-center'>
                                            <img src='../admin/assets/img/uploads/$product[img]' class='img-fluid rounded-3' style='width: 120px;' alt='Book'>
                                            <div class='flex-column ms-4'>
                                                <p class='mb-2'>$product[product_name]</p>
                                                <p class='mb-0'>$product[author_name]</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class='align-middle'>
                                        <p class='mb-0' style='font-weight: 500;'>$product[category_name]</p>
                                    </td>
                                    <td class='align-middle'>
                                        <div class='d-flex flex-row'>
                                            <button class='btn btn-link px-2' onclick='this.parentNode.querySelector('input[type=number]').stepDown()'>
                                                <i class='fas fa-minus'></i>
                                            </button>

                                            <input id='form1' min='0' name='quantity' value='$product[cart_amount]' type='number' class='form-control form-control-sm' style='width: 50px;' />

                                            <button class='btn btn-link px-2' onclick='this.parentNode.querySelector('input[type=number]').stepUp()'>
                                                <i class='fas fa-plus'></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class='align-middle'>
                                        <p class='mb-0' style='font-weight: 500;'>$product[cart_bill] đ</p>
                                    </td>
                                    <td class='align-middle'>

                                        <a href='#!' class='text-danger'><i class='fas fa-trash fa-lg'></i></a>

                                    </td>
                                </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-2">Tổng giá</p>
                                    <p class="mb-2"><?= $array['total_Money'] ?></p>
                                </div>


                                <hr class="my-4">

                                <form action="index.php?controller=cart" method="post" style="margin-right: 0 !important;">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="inputname">Tên người nhận</label>
                                            <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="inputemail">Số điện thoại</label>
                                            <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputsubject">Địa chỉ</label>
                                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <hr class="my-4">
                                    <button type="button" class="btn btn-success btn-block btn-lg">
                                        <div class="d-flex justify-content-between">
                                            <span>Thanh Toán</span>
                                        </div>
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->