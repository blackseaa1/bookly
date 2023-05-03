<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-2 fw-light fs-1 text-success fw-bold">Welcome back!</h5>
                    <h5 class="card-title text-center mb-4 fw-light">Trang Quản Lý</h5>
                    <form method="post" action="index.php?controller=login&action=loginAccess">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="floatingInput" name="username" type="text" placeholder="username">
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