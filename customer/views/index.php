<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="w-100 pt-1 mb-5 text-right">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form action="" method="get" class="modal-content modal-body border-0 p-0">
			<div class="input-group mb-2">
				<input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
				<button type="submit" class="input-group-text bg-success text-light">
					<i class="fa fa-fw fa-search text-white"></i>
				</button>
			</div>
		</form>
	</div>
</div>



<!-- Start Banner Hero -->
<section>
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
							<div class="promo pe-md-3 pe-lg-5">
								<h1 class="headline mb-3">
									<span class="fw-bold fs-1">Bookly</span> <br> <span class="text-success">End Of Alley</span>
								</h1><!--//headline-->
								<div class="subheadline mb-4">
									Nơi thỏa mãn đam mê sách của bạn với hàng ngàn tác phẩm đa dạng từ các tác giả nổi tiếng trên thế giới, đến với chúng tôi bạn sẽ được khám phá những kiến thức bổ ích và tinh hoa tri thức đầy sức sống.

								</div><!--//subheading-->

								<div class="cta-holder row gx-md-3 gy-3 gy-md-0">
									<div class="col-12 col-md-auto">
										<a class="btn btn-success w-100" href="index.php?controller=shop">Mua Ngay</a>
									</div>
									<div class="col-12 col-md-auto">
										<a class="btn btn-outline-success border border-success scrollto w-100" href="index.php?controller=about">Tìm Hiểu Thếm</a>
									</div>
								</div><!--//cta-holder-->
							</div><!--//promo-->
						</div><!--col-->
						<div class="col-12 col-md-5 mb-5 align-self-center">
							<div class="book-cover-holder">
								<img class="img-fluid book-cover" src="assets/img/devbook-cover.png" alt="book cover">

							</div><!--//book-cover-holder-->
							<div class="text-center"><a class="theme-link scrollto" href="index.php?controller=shop">Xem tất cả các sản phẩm</a></div>
						</div><!--col-->
					</div><!--//row-->
				</div><!--//container-->
			</div>
		</div>
	</div>
</section>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="bg-light">
	<div class="container py-5">
		<div class="row text-center pt-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">Các danh mục</h1>
				<p>
					Nếu không bị dục vọng làm cho mờ mắt, thì không ra, có lỗi là bỏ bổn phận, mềm lòng, đó là cực nhọc.
				</p>
			</div>
		</div>
		<div class="row">
			<?php

			foreach ($array['products'] as $product) { ?>
				<div class="col-11 col-md-3 p-5 mt-3" style="text-align:center;">
					<a href="#"><img src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" class="img-fluid border" style="width: 300px !important; height:300px"></a>
					<h5 class="text-center mt-3 mb-3"><?php echo $product['category_name']; ?></h5>
					<p class="text-center"><a class="btn btn-success" href="index.php?controller=shop">Go Shop</a></p>
				</div>



			<?php
			} ?>

		</div>
	</div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="">
	<div class="container py-5">
		<div class="row text-center py-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">Sản Phẩm Nổi Bật</h1>
				<p>
					Anh ta sẽ chỉ trích trong niềm vui, anh ta muốn làm một sợi tóc trong nỗi đau, và anh ta sẽ không được sinh ra. Trừ khi họ bị dục vọng che mắt, nếu không họ sẽ không ra ngoài.
				</p>
			</div>
		</div>
		<div class="row">
			<?php

			foreach ($array['productss'] as $products) { ?>
				<div class="col-11 col-md-3 mb-4">
					<div class="card h-100">
						<a href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$products[product_id]" ?>">
							<img src="../admin/assets/img/uploads/<?php echo $products['img']; ?>" style="width: 300px !important; height:300px" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<ul class="list-unstyled d-flex justify-content-between">
								<li>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
									<i class="text-muted fa fa-star"></i>
									<i class="text-muted fa fa-star"></i>
								</li>
								<li class="text-muted text-right text-success"><?php echo $products['price']; ?> đ</li>
							</ul>
							<a href="index.php?controller=shop&action=product_detail&product_id=<?php echo "$products[product_id]" ?>" class="h5 text-decoration-none text-dark"><?php echo $products['product_name']; ?></a>

						</div>
					</div>
				</div>
			<?php
			} ?>

		</div>
	</div>
</section>
<!-- End Featured Product -->