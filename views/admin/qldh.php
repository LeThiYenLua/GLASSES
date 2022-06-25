<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/qldh.css">
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH ĐƠN HÀNG L.PERFUME</h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-dark" id="update" style="border-radius:0">Cập Nhật Đơn Hàng</button>
        </div>
        <table class="table table-light text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">THỜI GIAN ĐẶT HÀNG</th>
                    <th scope="col">TỔNG TIỀN</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">TRẠNG THÁI THANH TOÁN</th>
                    <th scope="col">DUYỆT ĐƠN HÀNG</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                foreach ($bill as $index => $b) {
                    echo '<tr>
                    <th scope="row">' . ($index + 1) . '</th>
                    <td>' . $b->ngay_lap_hoa_don . '</td>
                    <td class="fw-bold text-danger">' . number_format($b->tong_tien, 0, '.', ',')  . ' VNĐ</td>
                    <td>' . $b->dia_chi . '</td>
                    <td><span class="bg-warning text-light rounded-pill px-3 py-1"><i>' . $b->trang_thai_thanh_toan . '</i></span></td>
                    <td class="duyet-don-hang">';
                    if($b->trang_thai_giao_hang == 'Đang chờ xác nhận')
                    echo '<a href="/update_status?mhd='.$b->ma_hoa_don.'"><i class="fas fa-times text-danger fs-5"></i></a>';
                    else
                    echo '<i class="fas fa-check text-success fs-5"></i>
                    
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

        // $('.duyet-don-hang').click(function() {
        //     $('.duyet-don-hang').toggle();
        //     $('.duyet-don-hang').toggle();
        // })
    });
</script>

<?php $this->stop(); ?>