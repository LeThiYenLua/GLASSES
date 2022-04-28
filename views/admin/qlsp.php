<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH SẢN PHẨM LUXEYE</h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-outline-dark" id="update">Cập Nhật</button>
        </div>
        <table class="table table-striped table-hover table-light text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">HÌNH ẢNH</th>
                    <th scope="col">LOẠI SẢN PHẨM</th>
                    <th scope="col">GIÁ SẢN PHẨM</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sanpham as $index => $sp) {
                    echo '<tr>
                        <th scope="row">'.($index+1).'</th>
                        <td>'.$sp->ten_san_pham.'</td>
                        <td class="px-0 w-25"><img class="m-0" src="/assets/picture/product/';
                            if ($sp->ma_loai_san_pham == "L01")
                                echo 'Nam/' . $sp->hinh_anh . '" width="40%" >';
                            else echo 'Nu/'.$sp->hinh_anh . '" width="40%">';
                            echo '</td>
                        <td>'.$sp->ma_loai_san_pham.'</td>
                        <td>' . number_format($sp->gia_san_pham, 0, '.', ',') . ' VNĐ</td>
                        <td>
                            <i class="fas fa-edit fs-5"></i>
                            <i class="fas fa-trash fs-5"></i>
                        </td>
                </tr>';
                }
                ?>



            </tbody>
        </table>


    </div>

</div>

<script>
    $(document).ready(function() {
        $('#update').click(function() {
            window.location.reload();
        });
    });
</script>

<?php $this->stop(); ?>