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
<div class="container py-5">
    <div class="row gutters">
        <?php
        include 'views/layout/sidebar_account.php';
        ?>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body bg-white p-4  rounded">
                    <?php
                    foreach ($profiles as $profile) {
                    ?>
                        <form method="post" action="index.php?controller=account&action=update_profile">
                            <input type="hidden" name="account_id" value="<?= $profile['account_id'] ?>">
                            <div class="mb-3">
                                <label class="form-label  text-black">Họ Và Tên</label>
                                <input class="form-control" name="fullname" type="text" placeholder="Full name" value="<?= $profile['fullname'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Tên Người Dùng</label>
                                <input class="form-control" name="username" type="text" placeholder="User Name" value="<?= $profile['username'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Địa Chỉ Email</label>
                                <input class="form-control" name="email" type="email" placeholder="Email" value="<?= $profile['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Số Điện Thoại</label>
                                <input class="form-control" name="phone" type="text" placeholder="Phone" value="<?= $profile['phone'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-black">Địa Chỉ</label>
                                <input required="" class="form-control" name="address" type="text" placeholder="Address" value="<?= $profile['address'] ?>">
                            </div>
                            <button class="btn btn-success text-white fs-5" name="submit" type="submit">Cập Nhật</button>

                        </form>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2-heading-5">
                        <button class="accordion-button btn btn-link text-success" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-5" aria-expanded="false" aria-controls="faq5">
                            Bạn có muốn đổi mật khẩu?
                        </button>
                    </h2>
                    <div id="faq2-5" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-5">
                        <div class="accordion-body text-start p4 card-body bg-white p-4 rounded">
                            <form method="post" action="index.php?controller=account&action=update_password">
                                <input type="hidden" name="account_id" value="<?= $profile['account_id'] ?>">

                                <div class="mb-3">
                                    <label class="form-label  text-black" for="password">Mật Khẩu</label>
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-black" for="repassword">Nhập Lại Mật Khẩu</label>
                                    <input class="form-control" id="repassword" name="repassword" type="password" placeholder="Enter The Password">
                                </div>
                                <button class="btn btn-success text-white fs-5" name="sbmpassword" type="submit">Cập Nhật</button>

                            </form>
                        <?php
                    }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>