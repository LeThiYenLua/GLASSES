<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH ĐƠN HÀNG LUXEYE</h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-outline-dark" id="update">Cập Nhật</button>
        </div>
        <table class="table table-light text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">THỜI GIAN ĐẶT HÀNG</th>
                    <th scope="col">TỔNG TIỀN</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">TRẠNG THÁI GIAO HÀNG</th>
                    <th scope="col">TRẠNG THÁI THANH TOÁN</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bill as $index => $b) {
                    echo '<tr>
                    <th scope="row">' . ($index + 1) . '</th>
                    <td>' . $b->ngay_lap_hoa_don . '</td>
                    <td class="fw-bold text-danger">' . number_format($b->tong_tien, 0, '.', ',')  . ' VNĐ</td>
                    <td>' . $b->dia_chi . '</td>
                    <td><span class="bg-success text-light rounded-pill px-3 py-1"><i>' . $b->trang_thai_giao_hang . '</i></span></td>
                    <td><span class="bg-warning text-light rounded-pill px-3 py-1"><i>' . $b->trang_thai_thanh_toan . '</i></span></td>
                    <td>
                        <i class="fas fa-edit"></i>
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