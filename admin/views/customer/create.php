<div class="app-wrapper">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Thêm Người Dùng</h1>
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
			<div class="card-body bg-white p-4 border rounded">
				<div id="result-message"></div> <!-- Thẻ div để hiển thị thông báo -->
				<form method="post" action="index.php?controller=customer&action=store_customer">
					<div class="mb-3">
						<label class="form-label text-black">Họ Và Tên</label>
						<input required class="form-control" name="fullname" type="text" placeholder="Full Name">
					</div>
					<div class="mb-3">
						<label class="form-label text-black">Tên Người Dùng</label>
						<input required class="form-control" name="username" type="text" placeholder="User Name">
					</div>
					<div class="mb-3">
						<label class="form-label text-black">Địa Chỉ Email</label>
						<input required class="form-control" name="email" type="email" placeholder="Email">
					</div>
					<div class="mb-3">
						<label class="form-label text-black">Số Điện Thoại</label>
						<input required class="form-control" name="phone" type="text" placeholder="Phone">
					</div>
					<div class="mb-3">
						<label class="form-label text-black">Địa Chỉ</label>
						<input required class="form-control" name="address" type="text" placeholder="Address">
					</div>
					<div class="mb-3">
						<label class="form-label text-black" for="password">Mật Khẩu</label>
						<input required class="form-control" id="password" name="password" type="password" placeholder="Password">
					</div>
					<div class="mb-3">
						<label class="form-label text-black" for="repassword">Nhập Lại Mật Khẩu</label>
						<input required class="form-control" id="repassword" name="repassword" type="password" placeholder="Enter the password">
					</div>

					<div class="mb-3">
					<label class="form-label text-black">Vai Trò</label>
						<select class="form-control" name="role_id">
							<option value=""> - Chọn Quyền - </option>
							<?php
							foreach ($roles as $role) {
							?>
								<option value="<?= $role['role_id'] ?>">
									<?= $role['role_name'] ?>
								</option>
							<?php
							}
							?>
						</select>
					</div>

					<button class="btn btn-primary text-white fs-5" name="submit" type="submit">Thêm Mới</button>

				</form>

			</div>
		</div>


	</div><!--//container-fluid-->
</div><!--//app-content-->
<!--//app-wrapper-->