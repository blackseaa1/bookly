<div class="container h-100 py-5">
    <div class="row gutters">
        <?php
        include 'views/layout/sidebar_account.php';
        ?>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body bg-white p-4  rounded">
                    <form method="post" action="index.php?controller=customer&amp;action=update_customer">
                        <input type="hidden" name="account_id" value="11">
                        <div class="mb-3">
                            <label class="form-label  text-black">Họ Và Tên</label>
                            <input class="form-control" name="fullname" type="text" placeholder="Full name" value="Đặng Hữu Hải">
                        </div>
                        <div class="mb-3">
                            <label class="form-label  text-black">Tên Người Dùng</label>
                            <input class="form-control" name="username" type="text" placeholder="User Name" value="danghai24">
                        </div>
                        <div class="mb-3">
                            <label class="form-label  text-black">Địa Chỉ Email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email" value="bi@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label  text-black">Số Điện Thoại</label>
                            <input class="form-control" name="phone" type="text" placeholder="Phone" value="0943278481">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-black">Địa Chỉ</label>
                            <input required="" class="form-control" name="address" type="text" placeholder="Address" value="0">
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
                            <form method="post" action="index.php?controller=customer&amp;action=update_password">
                                <input type="hidden" name="account_id" value="11">
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
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input class="form-control" id="fullName" type="text" placeholder="Enter full name">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="eMail">Email</label>
                        <input class="form-control" id="eMail" type="email" placeholder="Enter email ID">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" id="phone" type="text" placeholder="Enter phone number">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input class="form-control" id="website" type="url" placeholder="Website url">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="Street">Street</label>
                        <input class="form-control" id="Street" type="name" placeholder="Enter Street">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="ciTy">City</label>
                        <input class="form-control" id="ciTy" type="name" placeholder="Enter City">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="sTate">State</label>
                        <input class="form-control" id="sTate" type="text" placeholder="Enter State">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="zIp">Zip Code</label>
                        <input class="form-control" id="zIp" type="text" placeholder="Zip Code">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button class="btn btn-secondary" id="submit" name="submit" type="button">Cancel</button>
                        <button class="btn btn-primary" id="submit" name="submit" type="button">Update</button>
                    </div>
                </div>
            </div>
        </div> -->
            </div>

        </div>
    </div>
</div>