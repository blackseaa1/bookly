  <div class="app-wrapper">
  	<div class="app-content pt-3 p-md-3 p-lg-4">
  		<div class="container-xl">

  			<div class="row g-3 mb-4 align-items-center justify-content-between">
  				<div class="col-auto">
  					<h1 class="app-page-title mb-0">Orders</h1>
  				</div>
  				<div class="col-auto">
  					<div class="page-utilities">
  						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
  							<div class="col-auto">
  								<form class="table-search-form row gx-1 align-items-center" method="post" action="index.php?controller=order">
  									<div class="col-auto">
  										<input value="<?= $array['search'] ?>" type="text" id="search" name="search" class="form-control search-orders" placeholder="Search">
  									</div>
  									<div class="col-auto">
  										<button class="btn app-btn-secondary">Search</button>
  									</div>
  								</form>

  							</div><!--//col-->
  							<!-- <div class="col-auto">
  								<a class="btn app-btn-secondary" href="#">
  									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  										<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
  										<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
  									</svg>
  									Download CSV
  								</a>
  							</div> -->
  							<div class="col-auto">
  								<a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=order&action=create_order">
  									+ Thêm Đơn Hàng</a>
  							</div>
  						</div><!--//row-->
  					</div><!--//table-utilities-->
  				</div><!--//col-auto-->
  			</div><!--//row-->


  			<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
  				<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
  				<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
  				<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
  				<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
  			</nav>


  			<div class="tab-content" id="orders-table-tab-content">
  				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
  					<div class="app-card app-card-orders-table shadow-sm mb-5">
  						<div class="app-card-body">
  							<div class="table-responsive">
  								<table class="table app-table-hover mb-0 text-left">
  									<thead>
  										<tr>
  											<th class="cell">Order</th>
  											<th class="cell">Customer</th>
  											<th class="cell">Address</th>
  											<th class="cell">Order Date</th>
  											<th class="cell">Status</th>
  											<th class="cell">Total</th>
  											<th class="cell"></th>
  										</tr>
  									</thead>
  									<tbody>
  										<?php
											foreach ($array['infor'] as $order) { ?>
  											<tr>
  												<td class="cell"><?= $order['order_id'] ?></td>
  												<td class="cell"><?php echo $order['order_recipient_name']; ?></td>
  												<td class="cell"><span class="truncate"><?php echo $order['order_recipient_address']; ?></span></td>
  												<td class="cell"><span><?php echo $order['created_date']; ?></span></td>
  												<td class="cell">
  													<?php
														if ($order['order_status'] == '0') {
														?>
  														<span class="badge bg-warning">
  															Pending
  														</span>
  													<?php
														} elseif ($order['order_status'] == '1') {
														?>
  														<span class="badge bg-success">
  															Paid
  														</span>
  													<?php
														} elseif ($order['order_status'] == '2') {
														?>
  														<span class="badge bg-danger">
  															Cancelled
  														</span>
  													<?php
														}
														?>

  												</td>
  												<td class="cell"><?php echo $order['order_total']; ?> đ</td>
  												<td class="cell text-center">
  													<a href="index.php?controller=order&action=edit_order&order_id=<?= $order['order_id'] ?>" class="btn-sm app-btn-secondary">View</a>
  													<a class="btn-sm app-btn-secondary" onclick="return confirm('Bạn có muốn xóa đơn *<?= $order['order_recipient_name'] ?>* không?')" href="index.php?controller=order&action=delete_order&order_id=<?= $order['order_id'] ?>">
  														Delete
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
  							<form method="post" action="index.php?controller=order&page=<?= $i ?>">

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

  				<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
  					<div class="app-card app-card-orders-table mb-5">
  						<div class="app-card-body">
  							<div class="table-responsive">

  								<table class="table app-table-hover mb-0 text-left">
  									<thead>
  										<tr>
  											<th class="cell">Order</th>
  											<th class="cell">Customer</th>
  											<th class="cell">Address</th>
  											<th class="cell">Order Date</th>
  											<th class="cell">Status</th>
  											<th class="cell">Total</th>
  											<th class="cell"></th>
  										</tr>
  									</thead>
  									<tbody>
  										<?php
											$id = 1;
											foreach ($array['infor'] as $order) {
												if ($order['order_status'] == '1') {
											?>
  												<tr>
  													<td class="cell"><?php echo $id++; ?></td>
  													<td class="cell"><?php echo $order['order_recipient_name']; ?></td>
  													<td class="cell"><span class="truncate"><?php echo $order['order_recipient_address']; ?></span></td>
  													<td class="cell"><span><?php echo $order['created_date']; ?></span></td>
  													<td class="cell">
  														<?php
															if ($order['order_status'] == '0') {
															?>
  															<span class="badge bg-warning">
  																Pending
  															</span>
  														<?php
															} elseif ($order['order_status'] == '1') {
															?>
  															<span class="badge bg-success">
  																Paid
  															</span>
  														<?php
															} elseif ($order['order_status'] == '2') {
															?>
  															<span class="badge bg-danger">
  																Cancelled
  															</span>
  														<?php
															}
															?>

  													</td>
  													<td class="cell"><?php echo $order['order_total']; ?> đ</td>
  													<td class="cell text-center">
  														<a href="index.php?controller=order&action=edit_order&order_id=<?= $order['order_id'] ?>" class="btn-sm app-btn-secondary" href="#">View</a>
  														<a class="btn-sm app-btn-secondary" onclick="return confirm('Bạn có muốn xóa đơn *<?= $order['order_recipient_name'] ?>* không?')" href="index.php?controller=order&action=delete_order&order_id=<?= $order['order_id'] ?>">
  															Delete
  														</a>
  													</td>
  												</tr>
  										<?php
												}
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
  							<form method="post" action="index.php?controller=order&page=<?= $i ?>">

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
  				<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
  					<div class="app-card app-card-orders-table mb-5">
  						<div class="app-card-body">
  							<div class="table-responsive">
  								<table class="table app-table-hover mb-0 text-left">
  									<thead>
  										<tr>
  											<th class="cell">Order</th>
  											<th class="cell">Customer</th>
  											<th class="cell">Address</th>
  											<th class="cell">Order Date</th>
  											<th class="cell">Status</th>
  											<th class="cell">Total</th>
  											<th class="cell"></th>
  										</tr>
  									</thead>
  									<tbody>
  										<?php
											$id = 1;
											foreach ($array['infor'] as $order) {
												if ($order['order_status'] == '0') { ?>
  												<tr>
  													<td class="cell"><?php echo $id++; ?></td>
  													<td class="cell"><?php echo $order['order_recipient_name']; ?></td>
  													<td class="cell"><span class="truncate"><?php echo $order['order_recipient_address']; ?></span></td>
  													<td class="cell"><span><?php echo $order['created_date']; ?></span></td>
  													<td class="cell">
  														<?php
															if ($order['order_status'] == '0') {
															?>
  															<span class="badge bg-warning">
  																Pending
  															</span>
  														<?php
															} elseif ($order['order_status'] == '1') {
															?>
  															<span class="badge bg-success">
  																Paid
  															</span>
  														<?php
															} elseif ($order['order_status'] == '2') {
															?>
  															<span class="badge bg-danger">
  																Cancelled
  															</span>
  														<?php
															}
															?>

  													</td>
  													<td class="cell"><?php echo $order['order_total']; ?> đ</td>
  													<td class="cell text-center">
  														<a href="index.php?controller=order&action=edit_order&order_id=<?= $order['order_id'] ?>" class="btn-sm app-btn-secondary" href="#">View</a>
  														<a class="btn-sm app-btn-secondary" onclick="return confirm('Bạn có muốn xóa đơn *<?= $order['order_recipient_name'] ?>* không?')" href="index.php?controller=order&action=delete_order&order_id=<?= $order['order_id'] ?>">
  															Delete
  														</a>
  													</td>
  												</tr>
  										<?php
												}
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
  							<form method="post" action="index.php?controller=order&page=<?= $i ?>">

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
  				<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
  					<div class="app-card app-card-orders-table mb-5">
  						<div class="app-card-body">
  							<div class="table-responsive">
  								<table class="table app-table-hover mb-0 text-left">
  									<thead>
  										<tr>
  											<th class="cell">Order</th>
  											<th class="cell">Customer</th>
  											<th class="cell">Address</th>
  											<th class="cell">Order Date</th>
  											<th class="cell">Status</th>
  											<th class="cell">Total</th>
  											<th class="cell"></th>
  										</tr>
  									</thead>
  									<tbody>
  										<?php
											$id = 1;
											foreach ($array['infor'] as $order) {
												if ($order['order_status'] == '2') { ?>
  												<tr>
  													<td class="cell"><?php echo $id++; ?></td>
  													<td class="cell"><?php echo $order['order_recipient_name']; ?></td>
  													<td class="cell"><span class="truncate"><?php echo $order['order_recipient_address']; ?></span></td>
  													<td class="cell"><span><?php echo $order['created_date']; ?></span></td>
  													<td class="cell">
  														<?php
															if ($order['order_status'] == '0') {
															?>
  															<span class="badge bg-warning">
  																Pending
  															</span>
  														<?php
															} elseif ($order['order_status'] == '1') {
															?>
  															<span class="badge bg-success">
  																Paid
  															</span>
  														<?php
															} elseif ($order['order_status'] == '2') {
															?>
  															<span class="badge bg-danger">
  																Cancelled
  															</span>
  														<?php
															}
															?>

  													</td>
  													<td class="cell"><?php echo $order['order_total']; ?> đ</td>
  													<td class="cell text-center">
  														<a href="index.php?controller=order&action=edit_order&order_id=<?= $order['order_id'] ?>" class="btn-sm app-btn-secondary" href="#">View</a>
  														<a class="btn-sm app-btn-secondary" onclick="return confirm('Bạn có muốn xóa đơn *<?= $order['order_recipient_name'] ?>* không?')" href="index.php?controller=order&action=delete_order&order_id=<?= $order['order_id'] ?>">
  															Delete
  														</a>
  													</td>
  												</tr>
  										<?php
												}
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
  							<form method="post" action="index.php?controller=order&page=<?= $i ?>">

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
  				</div>
  			</div><!--//tab-content-->



  		</div><!--//container-fluid-->
  	</div><!--//app-content-->
  </div>