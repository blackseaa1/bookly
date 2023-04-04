<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Sửa Nhà Xuất Bản</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=publishing_company">
                                    Trở Lại</a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->
            <?php foreach ($publishing_companys as $publishing_company) { ?>
                <div class="card-body bg-white p-4 border rounded">
                    <form method="post" action="index.php?controller=publishing_company&action=update_publishing_company">
                        <input type="hidden" name="publishing_company_id" value="<?= $publishing_company['publishing_company_id'] ?>">
                        <div class="mb-3">
                            <label class="form-label">Tên Nhà Xuất Bản</label>
                            <input class="form-control" name="publishing_company_name" type="text" value="<?php echo $publishing_company['publishing_company_name'] ?>">
                        </div>
                        <button class="btn btn-primary text-white fs-5" name="submit" type="submit">Cập Nhật</button>

                    </form>
                </div>
            <?php
            }
            ?>
        </div>


    </div><!--//container-fluid-->
</div><!--//app-content-->

<!--//app-wrapper-->