<body class="app">
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Cập Nhật Người Dùng</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=customer">
                                        Trở Lại</a>
                                </div>
                            </div><!--//row-->
                        </div><!--//table-utilities-->
                    </div><!--//col-auto-->
                </div><!--//row-->
                <?php
                foreach ($array['customers'] as $customer) {
                ?><div class="text-end"> <span class="text-red fst-italic">Ngày tạo: <small class="text-danger"><?php echo $customer['created_date']; ?></small>
                            <span class="text-red fst-italic">Cập nhật gần đây nhất: <small class="text-danger"><?php echo $customer['updated_date']; ?></small>
                    </div>
                    <div class="card-body bg-white p-4 border rounded">
                        <form method="post" action="index.php?controller=customer&action=update_customer">
                            <input type="hidden" name="account_id" value="<?= $customer['account_id'] ?>">
                            <div class="mb-3">
                                <label class="form-label  text-black">Họ Và Tên</label>
                                <input class="form-control" name="fullname" type="text" placeholder="Full name" value="<?php echo $customer['fullname'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Tên Người Dùng</label>
                                <input class="form-control" name="username" type="text" placeholder="User Name" value="<?php echo $customer['username'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Địa Chỉ Email</label>
                                <input class="form-control" name="email" type="email" placeholder="Email" value="<?php echo $customer['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Số Điện Thoại</label>
                                <input class="form-control" name="phone" type="text" placeholder="Phone" value="<?php echo $customer['phone'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-black">Địa Chỉ</label>
                                <input required class="form-control" name="address" type="text" placeholder="Address" value="<?php echo $customer['address'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label  text-black">Vai Trò</label>

                                <select class="form-select" name="role_id" aria-label="Default select example">
                                    <option value=""> - Choose - </option>
                                    <?php
                                    foreach ($array['roles'] as $role) {
                                    ?>
                                        <option value="<?= $role['role_id'] ?>" <?php
                                                                                if ($role['role_id'] == $customer['role_id']) {
                                                                                    echo 'selected';
                                                                                }
                                                                                ?>>
                                            <?= $role['role_name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <button class="btn btn-primary text-white fs-5" name="submit" type="submit">Cập Nhật</button>

                        </form>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2-heading-5">
                            <button class="accordion-button btn btn-link text-success" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-5" aria-expanded="false" aria-controls="faq5">
                                Bạn có muốn đổi mật khẩu?
                            </button>
                        </h2>
                        <div id="faq2-5" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-5">
                            <div class="accordion-body text-start p4 card-body bg-white p-4 border rounded">
                                <form method="post" action="index.php?controller=customer&action=update_password">
                                    <input type="hidden" name="account_id" value="<?= $customer['account_id'] ?>">
                                    <div class="mb-3">
                                        <label class="form-label  text-black" for="password">Mật Khẩu</label>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Password">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-black" for="repassword">Nhập Lại Mật Khẩu</label>
                                        <input class="form-control" id="repassword" name="repassword" type="password" placeholder="Enter The Password">
                                    </div>
                                    <button class="btn btn-primary text-white fs-5" name="sbmpassword" type="submit">Cập Nhật</button>

                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>


        </div>
    </div>
    <!--//app-content-->
    <!--//app-wrapper-->
</body>