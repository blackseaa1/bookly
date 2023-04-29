<div class="bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng Kí</h5>
                        <form method="post" action="index.php?controller=register&action=createCustomer">
                            <div class="form-floating mb-3">
                                <input required class="form-control" name="fullname" type="text" placeholder="Full Name">
                                <label class="form-label text-black">Họ Và Tên</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" name="username" type="text" placeholder="User Name">
                                <label class="form-label text-black">Tên Người Dùng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Địa Chỉ Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" name="phone" type="text" placeholder="Phone">
                                <label class="form-label text-black">Số Điện Thoại</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" name="address" type="text" placeholder="Address">
                                <label class="form-label text-black">Địa Chỉ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Mật Khẩu</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input required class="form-control" id="repassword" name="repassword" type="password" placeholder="Enter the password">
                                <label class="form-label text-black" for="repassword">Nhập Lại Mật Khẩu</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Đăng Kí</button>
                            </div>
                            <a class="d-block text-center mt-2 small text-success" href="index.php?controller=login">Đã có tài khoản? Đăng nhập</a>
                            <!-- <hr class="my-4">
                            <div class="d-grid mb-2">
                                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i> Sign in with Google
                                </button>
                            </div>
                            <div class="d-grid"> -->
                            <!-- <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                                </button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>