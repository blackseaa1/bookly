<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Cập Nhật Sản Phẩm</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=product">
                                    Trở Lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach ($array['products'] as $product) {
            ?>

                <div class="text-end"> <span class="text-red fst-italic">Ngày tạo: <small class="text-danger"><?php echo $product['created_date']; ?></small>
                        <span class="text-red fst-italic">Cập nhật gần đây nhất: <small class="text-danger"><?php echo $product['updated_date']; ?></small>
                </div>

                <div class="card-body bg-white p-4 border rounded">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <form class="tm-edit-product-form" action="index.php?controller=product&action=update_product" enctype="multipart/form-data" method="post">
                            <input name="product_id" type="hidden" value="<?= $product['product_id'] ?>">
                            <div class="row tm-edit-product-row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="product_name">Tên sản phẩm</label>
                                        <input class="form-control" id="product_name" name="product_name" type="text" value="<?php echo $product['product_name']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="description">Mô tả sản phẩm</label>
                                        <textarea class="form-control" name="description" type="text" rows="4" cols="50"><?php echo $product['description']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="author_id">Tác giả</label>
                                        <select class="form-select" name="author_id" aria-label="Default select example">
                                            <?php
                                            foreach ($array['authors'] as $author) {
                                            ?>
                                                <option value="<?= $author['author_id'] ?>" <?php
                                                                                            if ($author['author_id'] == $product['author_id']) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                            ?>>
                                                    <?= $author['author_name'] ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="category_id">Danh mục</label>
                                        <select class="form-select" name="category_id" aria-label="Default select example">
                                            <option value=""> - Choose - </option>
                                            <?php
                                            foreach ($array['categorys'] as $category) {
                                            ?>
                                                <option value="<?= $category['category_id'] ?>" <?php
                                                                                                if ($category['category_id'] == $product['category_id']) {
                                                                                                    echo 'selected';
                                                                                                }
                                                                                                ?>>
                                                    <?= $category['category_name'] ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="publishing_company_id">Nhà xuất bản</label>
                                        <select class="form-select" name="publishing_company_id" aria-label="Default select example">
                                            <?php
                                            foreach ($array['publishing_companys'] as $publishing_company) {
                                            ?>
                                                <option value="<?= $publishing_company['publishing_company_id'] ?>" <?php
                                                                                            if ($publishing_company['publishing_company_id'] == $product['publishing_company_id']) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                            ?>>
                                                    <?= $publishing_company['publishing_company_name'] ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="exampleInputPassword1">Giá</label>
                                        <input class="form-control" id="exampleInputPassword1" name="price" type="text" value="<?php echo $product['price']; ?>">

                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-black" for="exampleInputPassword1">Số lượng</label>
                                        <input class="form-control" id="exampleInputPassword1" name="quantity" type="number" value="<?php echo $product['quantity']; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4 text-center">
                                    <div class="mb-3">
                                        <div class="card p-3 d-flex">
                                            <a class="text-center pb-4" onclick="changeImage()"><img id="preview" class="product-img" src="../admin/assets/img/uploads/<?php echo $product['img']; ?>" alt="Ảnh xem trước" style="max-width: 300px; max-height: 300px;"></a>
                                            <input class="d-none" class="form-control" id="img" name="img" type="file" onchange="previewImage()">
                                            <label class="form-label text-black btn btn-secondary text-white" for="img">Đổi Ảnh Khác</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white fs-5" name="submit" type="submit">Cập Nhật</button>
                            </div>
                    </div>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>


    </div>

</div>
</div>

<script>
    function previewImage() {
        var preview = document.getElementById("preview");
        var fileInput = document.getElementById("img");
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
            document.getElementById("image-preview").style.display = "block";
            document.getElementById("image-preview-none").style.display = "none";
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = document.getElementById("preview").src;
        }
    }

    function changeImage() {
        document.getElementById("img").value = "";
        document.getElementById("image-preview").style.display = "none";
        document.getElementById("image-preview-none").style.display = "block";
    }

    function changeProductImage() {
        var fileInput = document.getElementById("img");
        var file = fileInput.files[0];
        var productId = <?php echo $product['id']; ?>;

        if (file || !fileInput.value) {
            var formData = new FormData();
            formData.append("img", file);
            formData.append("id", productId);

            $.ajax({
                url: "change_product_image.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function() {
                    window.location.reload();
                }
            });
        }
    }

    function changeImage() {
        img.click();
    }
</script>