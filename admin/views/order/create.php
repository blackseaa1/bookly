<style>
	#overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.5);
		z-index: 999;
		display: none;
	}

	#my-box {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 60%;
		height: auto;
		max-height: 80%;
		background-color: white;
		z-index: 1000;
		padding: 20px;
		overflow-y: auto;
		display: none;
	}

	.box-content {
		position: relative;
	}

	.close-btn {
		position: absolute;
		top: 0;
		right: 16px;
		font-size: 55px !important;
		background: transparent;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 10px;
		margin: -10px -10px 0 0;
		z-index: 1;
	}
</style>
<div id="overlay" style="display: none;"></div>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Tạo Đơn Hàng</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=product">
									+ Thêm Sản Phẩm</a>
							</div>
							<div class="col-auto">
								<a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=order">
									Trở Lại</a>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->
			<div class="card-body bg-white p-4 border rounded row">
				<?php

				if (!empty($_SESSION['cart'])) {
				?>

					<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col" class="h5">Sản phẩm</th>
										<th scope="col">Giá</th>
										<th scope="col">Số lượng</th>
										<th scope="col" class="text-center"></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$total = 0;
									foreach ($infor['cart'] as $product_id => $value) {
										$subtotal = $value['price'] * $value['amount'];
										$total += $subtotal;
									?>
										<tr>
											<!-- <td class='align-middle'><?= $product_id; ?> -->
											</td>
											<th scope='row'>
												<div class='d-flex align-items-center'>
													<img src='../admin/assets/img/uploads/<?= $value['img']; ?>' class='img-fluid rounded-3' style='width: 120px;' alt='Book'>
													<div class='flex-column ms-4' style="max-width: 35vh;">
														<p class='mb-2 truncate-author'><?= $value['product_name']; ?></p>
														<p class='mb-0'><?= $value['author_name']; ?></p>
													</div>
												</div>
											</th>
											<td class='align-middle'>
												<p class='mb-0' style='font-weight: 500;'><?= $value['price']; ?> đ</p>
											</td>

											<td class='align-middle'>
												<div class='d-flex flex-row amount_sync'>
													<form method="post" action="index.php?controller=order&action=change_amount" class="d-flex">

														<a class='btn text-success px-2' onclick='this.parentNode.querySelector(" input[type=number]").stepDown()'>
															<i class='fas fa-minus'></i>
														</a>
														<input id='form1' min='0' name='amount[<?= $product_id ?>]' value='<?= $value['amount']; ?>' type='number' class='form-control form-control-sm' style='width: 50px;' />
														<a class='btn text-success px-2' onclick='this.parentNode.querySelector(" input[type=number]").stepUp()'>
															<i class='fas fa-plus'></i>
														</a>
														<button type="submit" name="update_cart" value="update" class="text-info bg-white amount_sync_btn ms-4" title="Đồng bộ số lượng">
															<i class="fas fa-sync fa-lg"></i>
														</button>
													</form>
													<a href="index.php?controller=order&action=delete_product_in_order&id=<?= $product_id; ?>" name="clear_cart" class='text-danger ms-2 bg-white d-flex align-items-center' title='Xóa sản phẩm'">
													<i class='fas fa-trash fa-lg'></i>
													</a>

												</div>
												
												</td>

						</tr>
					<?php

									}

					?>
					</tbody>
					</table>
					<div>
						<form class=" d-flex justify-content-end" method="post" action="index.php?controller=order&action=clear_cart" class="d-flex">
														<button class="btn btn-warning" type="submit">Xóa tất cả sản phẩm</button>
														</form>
												</div>

						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

						<div class="card bg-primary text-white rounded-3">
							<div class="card-body">
								<form method="post" action="index.php?controller=order&action=add_order_to_db">
									<div class="mb-3">
										<label class="form-label text-white" for="account_id">Khách Hàng</label>
										<select class="form-select" id="account_id" name="account_id" aria-label="Default select example">
											<option value=""> - Chọn Khách Hàng- </option>
											<?php
											foreach ($infor['customer']  as $customer) {
											?>
												<option value="<?= $customer['account_id'] ?>">
													<?= $customer['fullname'] ?>
												</option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="mb-3">
										<label class="form-label text-white">Tên Người Nhận</label>
										<input required class="form-control" name="order_recipient_name" type="text" placeholder="Full Name">
									</div>
									<div class="mb-3">
										<label class="form-label  text-white">Số Điện Thoại</label>
										<input class="form-control" name="order_recipient_phone" type="text" placeholder="Phone">
									</div>
									<div class="mb-3">
										<label class="form-label text-white">Địa Chỉ</label>
										<input required="" class="form-control" name="order_recipient_address" type="text" placeholder="Address">
									</div>
									<hr class="my-4">
									<div class="d-flex justify-content-between mb-4">
										<p class="mb-2">Tổng Cộng</p>
										<p class="mb-2"><?php echo " $total" ?> đ</p>
									</div>
									<input type="hidden" name="order_total" value="<?php echo " $total" ?>">

									<button class="btn btn-light btn-block btn-lg w-100">
										<div class="d-flex justify-content-between">
											<span><?php echo " $total" ?> đ</span>
											<span>Lên Đơn <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
										</div>
									</button>

								</form>

							</div>
						</div>

					</div>
			</div>
			<!-- end -->





		<?php
				} else {


		?>
			<div>
				<!-- chưa có đơn hàng -->
				<div style="text-align: center;" class="py-5">
					<div style="width: 300px;height:100% ;margin:auto;" class="py-5">
						<img src="../admin/assets/img/uploads/nocart.png" style="width: 100%;" alt="Không có sản phẩm nào trong giỏ hàng của bạn.">
						<span class="mascot-image"></span>
						<p class="pb-3">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
						<a href="index.php?controller=product" class="btn btn-success btn-sm text-white">Thêm sản phẩm</a>
					</div>
				</div>
				<!-- chưa có đơn hàng -->
			</div>
		<?php
				}
		?>

		</div>

	</div>
</div>
</div>


</div><!--//container-fluid-->
<!--//app-content-->

<!--//app-wrapper-->

<script>
	function showBox() {
		// Lấy phần tử overlay
		var overlay = document.getElementById("overlay");
		// Hiển thị overlay
		overlay.style.display = "block";

		// Tạo một đối tượng XMLHttpRequest để gửi yêu cầu đến file PHP khác
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// Nếu yêu cầu được xử lý thành công, hiển thị kết quả trả về trên trang
				document.getElementById("my-box").innerHTML = this.responseText;
				document.getElementById("my-box").style.display = "block";

				// Thêm sự kiện click cho nút đóng để ẩn box đi
				var closeBtn = document.querySelector(".close-btn");
				closeBtn.addEventListener("click", hideBox);

				// Thêm sự kiện click cho overlay để ẩn box đi
				overlay.addEventListener("click", hideBox);
			}
		};
		// Gửi yêu cầu đến file PHP khác
		xmlhttp.open("GET", "index.php?controller=order&action=shop_order", true);
		xmlhttp.send();
	}

	function hideBox() {
		// Lấy phần tử overlay và box
		var overlay = document.getElementById("overlay");
		var box = document.getElementById("my-box");
		// Ẩn overlay và box đi
		overlay.style.display = "none";
		box.style.display = "none";
	}
</script>