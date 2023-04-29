<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Các Thành Viên</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center" method="post" action="index.php?controller=customer">
									<div class="col-auto">
										<input value="<?= $array['search'] ?>" type="text" id="search" name="search" class="form-control search-orders" placeholder="Search">
									</div>
									<div class="col-auto">
										<button class="btn app-btn-secondary">Search</button>
									</div>
								</form>

							</div><!--//col-->

							<div class="col-auto">
								<a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=customer&action=create_customer">
									+ Thêm Người Dùng</a>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#user-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#admin" role="tab" aria-controls="orders-paid" aria-selected="false">Admin</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#customers" role="tab" aria-controls="orders-pending" aria-selected="false">Customers</a>
			</nav>


			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="user-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th>Id</th>
											<th>Full Name</th>
											<th>User Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Role</th>
											<th>Operation</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$id = 1;
										foreach ($array['infor'] as $customer) {
											if($customer['username'] != $_SESSION['username']){
												
											
										?>
											<tr>
												<td class="cell"><?php echo $id++ ?></td>
												<td class="cell">
													<span class="truncate">
														<?php echo $customer['fullname'] ?>
													</span>
												</td>
												<td class="cell">
													<span class="truncate">
														<?php echo $customer['username'] ?>
													</span>
												</td>
												<td class="cell"><?php echo $customer['email'] ?></td>
												<td class="cell">
													<span>
														<?php echo $customer['phone'] ?>
													</span>
												</td>
												<td class="cell">
													<?php
													if ($customer['role_id'] == '1') {
													?>
														<span class="badge bg-danger text-white">
															<?php echo $customer['role_name'] ?>
														</span>
													<?php
													} elseif ($customer['role_id'] == '2') { ?>
														<span class="badge bg-info text-white">
															<?php echo $customer['role_name'] ?>
														</span>
													<?php
													}
													?>

												</td>
												<td class="cell">
													<a href="index.php?controller=customer&action=edit_customer&account_id=<?= $customer['account_id'] ?>">
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
															<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
															<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
														</svg>
													</a>
													<a class="" onclick="return confirm('Bạn có chắc chắn muốn xóa *<?= $customer['fullname'] ?>* không ?')" href='index.php?controller=customer&action=destroy_customer&account_id=<?= $customer['account_id'] ?>'>
														<svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
															<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
															<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
														</svg>
													</a>
												</td>
											</tr>
										<?php
										}
									}
										?>
									</tbody>
								</table>
							</div>
							<!--

										</tbody>
									</table>
						        </div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
					<nav class="app-pagination d-flex justify-content-center">
						<?php
						for ($i = 1; $i <= $array['page']; $i++) {
						?>
							<form method="post" action="index.php?controller=customer&page=<?= $i ?>">

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

				<div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="orders-paid-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th>Id</th>
											<th>Full Name</th>
											<th>User Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Role</th>
											<th>Operation</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$id = 1;
										foreach ($array['infor'] as $customer) {
											if ($customer['username'] != $_SESSION['username'] && $customer['role_id'] == '1') {
										?>
												<tr>
													<td class="cell"><?php echo $id++ ?></td>
													<td class="cell">
														<span class="truncate">
															<?php echo $customer['fullname'] ?>
														</span>
													</td>
													<td class="cell">
														<span class="truncate">
															<?php echo $customer['username'] ?>
														</span>
													</td>
													<td class="cell"><?php echo $customer['email'] ?></td>
													<td class="cell">
														<span>
															<?php echo $customer['phone'] ?>
														</span>
													</td>
													<td class="cell">
														<?php
														if ($customer['role_id'] == '1') {
														?>
															<span class="badge bg-danger text-white">
																<?php echo $customer['role_name'] ?>
															</span>
														<?php
														} elseif ($customer['role_id'] == '2') { ?>
															<span class="badge bg-info text-white">
																<?php echo $customer['role_name'] ?>
															</span>
														<?php
														}
														?>

													</td>
													<td class="cell">
														<a href="index.php?controller=customer&action=edit_customer&account_id=<?= $customer['account_id'] ?>">
															<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
															</svg>
														</a>
														<a class="" onclick="return confirm('Bạn có chắc chắn muốn xóa *<?= $customer['fullname'] ?>* không ?')" href='index.php?controller=customer&action=destroy_customer&account_id=<?= $customer['account_id'] ?>'>
															<svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
																<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
															</svg>
														</a>
													</td>
												</tr>
										<?php
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div><!--//app-card-body-->
					</div><!--//app-card-->
					<nav class="app-pagination d-flex justify-content-center">
						<?php
						for ($i = 1; $i <= $array['page']; $i++) {
						?>
							<form method="post" action="index.php?controller=customer&page=<?= $i ?>">

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

				<div class="tab-pane fade" id="customers" role="tabpanel" aria-labelledby="orders-pending-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th>Id</th>
											<th>Full Name</th>
											<th>User Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Role</th>
											<th>Operation</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$id = 1;
										foreach ($array['infor'] as $customer) {
											if ($customer['username'] != $_SESSION['username'] && $customer['role_id'] == '2') {
										?>
												<tr>
													<td class="cell"><?php echo $id++ ?></td>
													<td class="cell">
														<span class="truncate">
															<?php echo $customer['fullname'] ?>
														</span>
													</td>
													<td class="cell">
														<span class="truncate">
															<?php echo $customer['username'] ?>
														</span>
													</td>
													<td class="cell"><?php echo $customer['email'] ?></td>
													<td class="cell">
														<span>
															<?php echo $customer['phone'] ?>
														</span>
													</td>
													<td class="cell">
														<?php
														if ($customer['role_id'] == '1') {
														?>
															<span class="badge bg-danger text-white">
																<?php echo $customer['role_name'] ?>
															</span>
														<?php
														} elseif ($customer['role_id'] == '2') { ?>
															<span class="badge bg-info text-white">
																<?php echo $customer['role_name'] ?>
															</span>
														<?php
														}
														?>

													</td>
													<td class="cell">
														<a href="index.php?controller=customer&action=edit_customer&account_id=<?= $customer['account_id'] ?>">
															<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
															</svg>
														</a>
														<a class="" onclick="return confirm('Bạn có chắc chắn muốn xóa *<?= $customer['fullname'] ?>* không ?')" href='index.php?controller=customer&action=destroy_customer&account_id=<?= $customer['account_id'] ?>'>
															<svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
																<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
															</svg>
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
							<form method="post" action="index.php?controller=customer&page=<?= $i ?>">

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