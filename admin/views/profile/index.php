<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl h-100 py-5">
            <div class="card h-100">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <svg color="#146c43" xmlns="http://www.w3.org/2000/svg" width="240" height="240" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </div>
                </div>
                <div class="card-body bg-white p-4  rounded">
                    <?php
                    foreach ($profiles as $profile) {
                    ?>
                        <h2 class=" text-center">Vai Trò: <span class="text-danger"><?= $profile['role_name'] ?></span></h2>
                        <form method="post" action="index.php?controller=profile&action=update_profile">
                            <input type="hidden" name="account_id" value="<?= $profile['account_id'] ?>">
                            <div class="mb-3">
                                <label class="form-label  text-black">Họ Và Tên</label>
                                <input class="form-control" name="fullname" type="text" placeholder="Full name" value="<?= $profile['fullname'] ?>">
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
                            <form method="post" action="index.php?controller=profile&action=update_password">
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
                            <?php
                        }
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>