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
    <!-- Open Content -->
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">Shopping Bag</th>
                                    <th scope="col">Format</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/img/book1.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                            <div class="flex-column ms-4">
                                                <p class="mb-2">Thinking, Fast and Slow</p>
                                                <p class="mb-0">Daniel Kahneman</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;">Digital</p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />

                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;">$9.99</p>
                                    </td>
                                    <td class="align-middle">

                                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/img/book1.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                            <div class="flex-column ms-4">
                                                <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                                                <p class="mb-0">Yuval Noah Harari</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle border-bottom-0">
                                        <p class="mb-0" style="font-weight: 500;">Paperback</p>
                                    </td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 50px;" />

                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">
                                        <p class="mb-0" style="font-weight: 500;">$13.50</p>
                                    </td>
                                    <td class="align-middle">

                                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                    <p class="mb-2">Tổng giá</p>
                                    <p class="mb-2">$23.49</p>
                                </div>

                                
                                <hr class="my-4">

                                <button type="button" class="btn btn-success btn-block btn-lg">
                                    <div class="d-flex justify-content-between">
                                        <span>Thanh Toán</span>
                                        <span>$26.48</span>
                                    </div>
                                </button>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

