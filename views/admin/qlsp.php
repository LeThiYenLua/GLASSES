<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container" style="min-height: 100vh;">
    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH SẢN PHẨM L.PERFUME</h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-dark me-3" id="add" data-bs-toggle="modal" data-bs-target="#addpro" style="border-radius:0">+ Thêm Sản Phẩm</button>
            <div class="modal fade" tabindex="-1" id="addpro" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content border border-dark-50 border-3" style="border-radius: 0;">
                        <div class="modal-header">
                            <div class="row"></div>
                            <h5 class="modal-title text-dark fw-bold ms-4">THÔNG TIN SẢN PHẨM MỚI</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="/add">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group mb-4 col-3 fw-bold">
                                            <label for="idsp" class="form-label">ID Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="idsp" name="idsp" style="border-radius:0" required>
                                        </div>
                                        <div class="form-group mb-4 col-9 fw-bold">
                                            <label for="name" class="form-label">Tên Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="name" name="name" style="border-radius:0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="price" class="form-label">Giá Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="price" name="price" style="border-radius:0" required>
                                        </div>
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="type" class="form-label">Mã Loại Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="type" name="type" style="border-radius:0" required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="dungtich" class="form-label">Dung Tích (ml):</label>
                                            <input type="text" class="form-control py-2" id="dungtich" name="dungtich" style="border-radius:0" required>
                                        </div>
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="brand" class="form-label">Mã Thương Hiệu:</label>
                                            <input type="text" class="form-control py-2" id="brand" name="brand" style="border-radius:0" required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 fw-bold">
                                            <label for="img" class="form-label">Hình Ảnh Sản Phẩm:</label>
                                            <input type="file" class="form-control py-2" id="img" name="img" style="border-radius:0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="mota" name="mota" style="height: 100px;border-radius:0"></textarea>
                                            <label for="mota" class="fw-bold" id="mota">Mô Tả Sản Phẩm:</label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="add-pro" style="border-radius:0">THÊM</button>
                                <button type="button" class="btn btn-danger" style="border-radius:0" data-bs-dismiss="modal">HỦY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-dark me-3" id="update" style="border-radius:0">Cập Nhật Sản Phẩm</button>
            <a class="dropdown">
                <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="border-radius:0" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-sort-amount-down"></i>
                </a>

                <ul class="dropdown-menu border border-dark border-2 mt-2" aria-labelledby="dropdownMenuLink" style="border-radius:0">
                    <li><a class="dropdown-item fw-bold" href="/filter?malsp=L01">Nam - L01</a></li>
                    <li><a class="dropdown-item fw-bold" href="/filter?malsp=L02">Nữ - L02</a></li>
                    <li><a class="dropdown-item fw-bold" href="/filter?math=TH01">CHANEL</a></li>
                    <li><a class="dropdown-item fw-bold" href="/filter?math=TH02">DIOR</a></li>
                    <li><a class="dropdown-item fw-bold" href="/filter?math=TH03">GUCCI</a></li>
                </ul>
            </a>

        </div>
        <?php if (isset($detail)) { ?>
            <div class="modal show mt-5" tabindex="-1" id="edit" data-bs-backdrop="static" style="display: block;">
                <div class="modal-dialog">
                    <div class="modal-content border border-dark border-3" style="border-radius:0">
                        <div class="modal-header">
                            <div class="row"></div>
                            <h5 class="modal-title text-dark fw-bold ms-4">CẬP NHẬT SẢN PHẨM <?= $detail->ma_san_pham ?></h5>
                            <a href="/qlsp"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                        </div>
                        <form method="post" action="/update">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group mb-4 col-3 fw-bold">
                                            <label for="id" class="form-label">ID Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="id" name="id" style="border-radius:0" value="<?= $detail->ma_san_pham ?>" disabled>
                                            <input type="hidden" class="form-control py-2" id="idsp" name="idsp" style="border-radius:0" value="<?= $detail->ma_san_pham ?>">

                                        </div>
                                        <div class="form-group mb-4 col-9 fw-bold">
                                            <label for="name" class="form-label">Tên Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="name" name="name" style="border-radius:0" value="<?= $detail->ten_san_pham ?>" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="price" class="form-label">Giá Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="price" name="price" style="border-radius:0" value="<?= $detail->gia_san_pham ?>" required>
                                        </div>
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="type" class="form-label">Mã Loại Sản Phẩm:</label>
                                            <input type="text" class="form-control py-2" id="type" name="type" style="border-radius:0" value="<?= $detail->ma_loai_san_pham ?>" disabled required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="dungtich" class="form-label">Dung Tích (ml):</label>
                                            <input type="text" class="form-control py-2" id="dungtich" name="dungtich" style="border-radius:0" value="<?= $detail->dung_tich ?>" required>
                                        </div>
                                        <div class="form-group mb-4 col-6 fw-bold">
                                            <label for="brand" class="form-label">Mã Thương Hiệu:</label>
                                            <input type="text" class="form-control py-2" id="brand" name="brand" style="border-radius:0" value="<?= $detail->ma_thuong_hieu ?>" disabled required>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="/update"><button type="submit" class="btn btn-primary" style="border-radius:0">CẬP NHẬT</button></a>
                                <a href="/qlsp"><button type="button" class="btn btn-danger" style="border-radius:0" data-bs-dismiss="modal">HỦY</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
        <table class="table table-striped table-hover table-light text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 50px;">TÊN SẢN PHẨM</th>
                    <th scope="col">HÌNH ẢNH</th>
                    <th scope="col">LOẠI</th>
                    <th scope="col">MÃ THƯƠNG HIỆU</th>
                    <th scope="col">GIÁ SẢN PHẨM</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                if (isset($error)) {
                    echo "<p class='text-danger fw-bold'>$error</p>";
                }
                foreach ($sanpham as $sp) {
                    echo '<tr>
                        <th scope="row">' . $sp->ma_san_pham . '</th>
                        <td class="px-0 w-25">' . $sp->ten_san_pham . '</td>
                        <td class="px-0 w-25"><img class="m-0" src="/assets/picture/';
                    switch ($sp->ma_thuong_hieu) {
                        case 'TH01':
                            if ($sp->ma_loai_san_pham == 'L01')
                                echo 'CHANEL/man/' . $sp->hinh_anh . '" width="40%">';
                            else echo 'CHANEL/woman/' . $sp->hinh_anh . '" width="40%">';
                            break;
                        case 'TH02':
                            if ($sp->ma_loai_san_pham == 'L01')
                                echo 'DIOR/man/' . $sp->hinh_anh . ' " width="40%">';
                            else echo 'DIOR/woman/' . $sp->hinh_anh . ' " width="40%">';
                            break;
                        case 'TH03':
                            if ($sp->ma_loai_san_pham == 'L01')
                                echo 'GUCCI/man/' . $sp->hinh_anh . '" width="40%">';
                            else echo 'GUCCI/woman/' . $sp->hinh_anh . '" width="40%">';
                            break;
                    }
                    echo '</td>
                        <td >' . $sp->ma_loai_san_pham . '</td>
                        <td >' . $sp->ma_thuong_hieu . '</td>
                        <td class="px-0 w-25 text-danger fw-bold">' . number_format($sp->gia_san_pham, 0, '.', ',') . ' VNĐ</td>
                        <td>
                            <a  id="edit" href="/edit?masp=' . $sp->ma_san_pham . '" ><button type="button" class="btn btn-outline-dark mb-1 px-2" style="border-radius:0"><i class="fas fa-edit"></i></button></a>
                            <button class="btn btn-dark px-2" style="border-radius:0" id="' . $sp->ma_san_pham . '"
                            data-bs-toggle="modal" data-bs-target="#del" onclick="handleDelete(id)"><i class="fas fa-trash text-light"></i></button>
                        </td>
                </tr>';
                }
                ?>

                <div class="modal show" tabindex="-1" id="del" data-bs-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content border border-dark border-3" style="border-radius:0">
                            <div class="modal-header">
                                <div class="row"></div>
                                <h5 class="modal-title text-dark fw-bold ms-4"></h5>
                                <a href="/qlsp"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                            </div>
                            <form method="post" action="/update">
                                <div class="modal-body">
                                    <h4 id="modal-body">BẠN CÓ CHẮC MUỐN XÓA SẢN PHẨM ?</h4>
                                </div>
                                <div class="modal-footer">
                                    <a id="delete" href="/delPro?masp="><button type="button" class="btn btn-primary" style="border-radius:0">XÓA SẢN PHẨM</button></a>
                                    <button type="button" class="btn btn-danger" style="border-radius:0" data-bs-dismiss="modal">HỦY</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </tbody>
        </table>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#update').click(function() {
            window.location.reload();
        });

        $('#add-pro').click(function() {
            $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
        });

    });

    function handleDelete(id) {
        $('#delete').attr("href", "/delPro?masp=" + id);
        $("#modal-body").html("BẠN CÓ CHẮC MUỐN XÓA SẢN PHẨM " + id + " ?");
    }
</script>

<?php $this->stop(); ?>