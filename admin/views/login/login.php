<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-3">Đăng Nhập</h5>
                    <form method="post" action="index.php?controller=login&action=loginAcccess">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="floatingInput" name="username" type="username" placeholder="name@example.com">
                            <label for="floatingInput">Tên người dùng</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="floatingPassword" name="password" type="password" placeholder="Password">
                            <label for="floatingPassword">Mật khẩu</label>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-success btn-login text-uppercase fw-bold text-white pt-3 pb-3 fs-4" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>