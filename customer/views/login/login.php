<div class="bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng Nhập</h5>
                        <form method="post" action="index.php?controller=login&action=loginAcccess">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Địa Chỉ Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Mật Khẩu</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Đăng Nhập</button>
                            </div>
                            <a class="d-block text-center mt-2 small text-success" href="index.php?controller=register">Không có tài khoản? Đăng ký</a>
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