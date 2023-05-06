 <div class="app-wrapper">
 	<div class="app-content pt-3 p-md-3 p-lg-4">
 		<div class="container-xl">

 			<div class="row g-3 mb-4 align-items-center justify-content-between">
 				<div class="col-auto">
 					<h1 class="app-page-title mb-0">Danh Sách Sản Phẩm</h1>
 				</div>
 				<div class="col-auto">
 					<div class="page-utilities">
 						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
 							<div class="col-auto">
 								<form class="table-search-form row gx-1 align-items-center" method="post" action="index.php?controller=product">
 									<div class="col-auto">
 										<input value="<?= $array['search'] ?>" type="text" id="search" name="search" class="form-control" placeholder="Search">
 									</div>
 									<div class="col-auto">
 										<button class="btn app-btn-secondary">Search</button>
 									</div>
 								</form>

 							</div><!--//col-->
 							<!-- <div class="col-auto">

 								<select class="form-select w-auto">
 									<option selected value="option-1">All</option>
 									<option value="option-2">This week</option>
 									<option value="option-3">This month</option>
 									<option value="option-4">Last 3 months</option>

 								</select>
 							</div> -->
 							<div class="col-auto">
 								<a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=product&action=create_product">
 									+ Thêm Sản Phẩm Mới</a>
 							</div>
 							<div class="col-auto">
 								<a class="btn app-btn-secondary bg-warning text-white" href="index.php?controller=order&action=create_order">
 									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
 										<path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
 										<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
 									</svg> Đơn Hàng
 								</a>
 							</div>
 						</div><!--//row-->
 					</div><!--//table-utilities-->
 				</div><!--//col-auto-->
 			</div><!--//row-->
 			<div class="tab-content" id="orders-table-tab-content">
 				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
 					<div class="app-card app-card-orders-table shadow-sm mb-5">
 						<div class="app-card-body">
 							<div class="table-responsive">
 								<table class="table app-table-hover mb-0">
 									<thead>
 										<tr>
 											<th>ID</th>
 											<th>Name</th>
 											<th>Image</th>
 											<th>Author</th>
 											<th class="text-lg-center">Quantity</th>
 											<th class="text-lg-center">Prices</th>
 											<th class="text-lg-center">Category</th>
 											<th class="text-center">Operation</th>
 										</tr>
 									</thead>
 									<tbody class="text-center">
 										<?php
											$id = 1;
											foreach ($array['infor'] as $product) { ?>
 											<tr>
 												<td class="cell text-lg-start"> <?php echo $id++; ?></td>
 												<td class="cell text-lg-start">
 													<span class="truncate-product"><?php echo $product['product_name']; ?></span>
 												</td>
 												<td class="cell text-lg-start">
 													<img style="max-width: 200px; max-height: 200px;" src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" alt="Book">
 												</td>
 												<td class="cell text-lg-start">
 													<span class="truncate-author"><?php echo $product['author_name']; ?></span>
 												</td>
 												<td class="cell text-lg-center">
 													<span class="truncate-quantity">x<?php echo $product['quantity']; ?></span>
 												</td>
 												<td class="cell text-lg-center">
 													<span class="truncate-price p-2"><?php echo $product['price']; ?>đ</span>
 												</td>
 												<td class="cell text-lg-center">
 													<span class="truncate-category fs-6">
 														<?php echo $product['category_name']; ?>
 													</span>
 												</td>
 												<td class="cell text-lg-center">
 													<a href="index.php?controller=product&action=edit_product&product_id=<?php echo $product['product_id']; ?>">
 														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
 															<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
 															<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
 														</svg>
 													</a>
 													<a onclick="return confirm('Bạn có muốn thêm sách *<?= $product['product_name'] ?>* vào đơn hàng không?')" href="index.php?controller=order&action=add_cart&product_id=<?= $product['product_id'] ?>">
 														<svg style="color: #000" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
 															<path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
 															<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
 														</svg>
 													</a>
 													<a onclick="return confirm('Bạn có muốn xóa sách *<?= $product['product_name'] ?>* không?')" href="index.php?controller=product&action=destroy_product&product_id=<?= $product['product_id'] ?>">
 														<svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
 															<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
 															<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
 														</svg>
 													</a>
 												</td>
 											</tr>
 										<?php
											}
											?>

 									</tbody>
 								</table>
 							</div><!--//table-responsive-->

 						</div><!--//app-card-body-->
 					</div><!--//app-card-->
 					<nav class="app-pagination d-flex justify-content-center">
 						<?php
							for ($i = 1; $i <= $array['page']; $i++) {
							?>
 							<form method="post" action="index.php?controller=product&page=<?= $i ?>">

 								<ul class="pagination justify-content-center">

 									<li class="page-item"><input type="hidden" name="search" value="<?= $array['search'] ?>"></li>
 									<li class="page-item"> <input type="hidden" name="page" value="<?= $i ?>"></li>
 									<li class="page-item"><button class="page-link"><?= $i ?></button></li>
 									</li>
 								</ul>
 							</form>
 						<?php
							}
							?>

 					</nav>

 				</div><!--//tab-pane-->
 			</div><!--//tab-content-->



 		</div><!--//container-fluid-->
 	</div><!--//app-content-->
 </div><!--//app-wrapper-->