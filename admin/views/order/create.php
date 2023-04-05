<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Thêm Đơn Hàng Mới</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=product">
									Trở Lại</a>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->
			<div class="card-body bg-white p-4 border rounded">
				<form method="post" action="index.php?controller=product&action=store_order" enctype="multipart/form-data">
					<?php

					?>
					<div class="mb-3">
						<label class="form-label text-black" for="product_name">Tên khách hàng</label>
						<input required class="form-control" id="product_name" name="product_name" type="text">
					</div>
					<div class="mb-3">
						<label class="form-label text-black" for="product_name">Tên sản phẩm</label>
						<input required class="form-control" id="product_name" name="product_name" type="text">
					</div>

					<div class="mb-3">
						<label class="form-label text-black" for="price">Giá</label>
						<input required class="form-control" id="price" name="price" type="text">
					</div>
					<div class="mb-3">
						<label class="form-label text-black" for="quantity">Số lượng</label>
						<input required class="form-control" id="quantity" name="quantity" type="number">
					</div>
					<div class="mb-3">
						<label class="form-label text-black" for="publishing_company_name">Trạng thái đơn hàng</label></label>
						<input required class="form-control" id="publishing_company_name" name="publishing_company_name" type="text">
					</div>
					<!-- <div class="mb-3">
					<label class="form-label text-black" for="created_date">Ngày tạo</label>
					<input required class="form-control" id="created_date" name="created_date" type="datetime-local">
				</div> -->
					<!--                        <button type="submit" name="backsubmit" class="btn btn-outline-dark">Back to products</button>-->
					<button class="btn btn-primary text-white fs-5" name="submit" type="submit">Thêm Sản Phẩm</button>
				</form>

			</div>
		</div>
	</div>


</div><!--//container-fluid-->
<!--//app-content-->

<!--//app-wrapper-->

<script>
	function previewImage() {
		var preview = document.querySelector('#preview');
		var file = document.querySelector('input[type=file]').files[0];
		var reader = new FileReader();
		var img = document.querySelector("#img");

		reader.addEventListener("load", function() {
			preview.src = reader.result;
			document.querySelector('#image-preview').style.display = 'block';
		}, false);

		if (file) {
			reader.readAsDataURL(file);
		}
	}

	function changeImage() {
		img.click();
	}
</script>