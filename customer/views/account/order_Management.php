<div class="container h-100 py-5">
    <div class="row gutters">
        <?php
        include 'views/layout/sidebar_account.php';
        ?>
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body bg-white p-4  rounded">
                    <div class="panel panel-default panel-order">
                        <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 border border-success text-white" role="tablist">
                            <a class=" text-success flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tất cả</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false" tabindex="-1">Thành công</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false" tabindex="-1">Chưa giải quyết</a>
                            <a class=" text-success flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false" tabindex="-1">Hủy </a>
                        </nav>
                        <div class="tab-content" id="orders-table-tab-content">
                            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                <div class="app-card app-card-orders-table shadow-sm mb-5">
                                    <div class="app-card-body">
                                        <div class="table-responsive">
                                            <div class="border overflow-hidden p-3 mb-3">
                                                <div class="mb-2 d-flex justify-content-sm-between align-items-center"> <strong class="fw-bold">Mã đơn hàng #12</strong> <strong class="">Ngày tạo: 22/2/2002</strong></div>
                                                <div class="panel-body">
                                                    <div class="row mb-4 bg-light">
                                                        <div class="col-md-2"><img src="../../bookly/admin/assets/img/uploads/thaydoicuocsongvoinhandohoc.jpg" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                        <div class="col-md-10 d-flex justify-content-sm-between align-items-center">
                                                            <div>
                                                                <span><strong>Tên sản phẩm: Hiểu Về Trái Tim (Tái Bản 2023)</strong></span><br />
                                                                <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                <span class="label label-info">Số lượng: 2</span><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 bg-light">
                                                        <div class="col-md-2"><img src="../../bookly/admin/assets/img/uploads/thaydoicuocsongvoinhandohoc.jpg" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                        <div class="col-md-10 d-flex justify-content-sm-between align-items-center">
                                                            <div>
                                                                <span><strong>Tên sản phẩm: Hiểu Về Trái Tim (Tái Bản 2023)</strong></span><br />
                                                                <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                <span class="label label-info">Số lượng: 2</span><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 bg-light">
                                                        <div class="col-md-2"><img src="../../bookly/admin/assets/img/uploads/thaydoicuocsongvoinhandohoc.jpg" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                                        <div class="col-md-10 d-flex justify-content-sm-between align-items-center">
                                                            <div>
                                                                <span><strong>Tên sản phẩm: Hiểu Về Trái Tim (Tái Bản 2023)</strong></span><br />
                                                                <span class="label label-info">Danh mục: Văn Học</span><br />
                                                                <span class="label label-info">Số lượng: 2</span><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" d-flex justify-content-sm-between align-items-center">

                                                        <div><label class="text-danger">Thành tiền: ₫101.266</label></div>
                                                        <div>
                                                            <a data-placement="top" class="btn btn-success btn-sm glyphicon glyphicon-ok p-1 pe-3 ps-3" href="#" title="View">Mua lại
                                                            </a>
                                                            <a data-placement="top" class="btn btn-outline-danger border border-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="#" title="Danger">
                                                                Liên hệ shop</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--//table-responsive-->

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                            <!-- <nav class="app-pagination d-flex justify-content-center">
  						
  					</nav> -->

                        </div><!--//tab-pane-->

                        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">

                                        <table class="table mb-0 text-left">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15346</td>
                                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$259.35</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="cell">#15344</td>
                                                    <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
                                                    <td class="cell">Teresa Holland</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$123.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="cell">#15343</td>
                                                    <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
                                                    <td class="cell">Jayden Massey</td>
                                                    <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$199.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>


                                                <tr>
                                                    <td class="cell">#15341</td>
                                                    <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
                                                    <td class="cell">Raymond Atkins</td>
                                                    <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$678.26</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-left">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15345</td>
                                                    <td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
                                                    <td class="cell">Dylan Ambrose</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                                                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                                    <td class="cell">$96.20</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-left">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="cell">#15342</td>
                                                    <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
                                                    <td class="cell">Reina Brooks</td>
                                                    <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                                                    <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                                    <td class="cell">$59.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div><!--//tab-pane-->
                    </div>
                    <!-- <div class="panel-heading pb-2">
                            <strong class="fw-bold">Quản lý đơn hàng</strong>

                        </div>

                        <div class="panel-body">
                            <div class="row border">
                                <div class="col-md-2 border"><img src="../../bookly/admin/assets/img/uploads/thaydoicuocsongvoinhandohoc.jpg" class="media-object img-thumbnail" alt="Ảnh sản phẩm" /></div>
                                <div class="col-md-10 border d-flex justify-content-sm-between align-items-center">
                                    <div><span><strong>Order name</strong></span> <span class="label label-info">group name</span><br />
                                        Quantity : 2, cost: $323.13 <br />
                                        <a data-placement="top" class="btn btn-success btn-sm glyphicon glyphicon-ok p-1 pe-3 ps-3" href="#" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg></a>
                                        <a data-placement="top" class="btn btn-danger btn-sm glyphicon glyphicon-trash p-1 pe-3 ps-3" href="#" title="Danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg></a>
                                        <a data-placement="top" class="btn btn-info btn-sm glyphicon glyphicon-usd p-1 pe-3 ps-3 text-white" href="#" title="Danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                            </svg></a>
                                    </div>
                                    <div><label class="btn btn-danger">Rejected</label></div>



                                </div>
                            </div>
                        </div> -->

                </div>
            </div>
        </div>

    </div>

</div>
</div>
</div>