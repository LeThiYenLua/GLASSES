<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/memory.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<main>
    <div class="container-fluid px-0 m-0 position-sticky free-ship" style="top:171px;z-index:1000;">
        <div class="row discount w-100 m-0">
            <h4 class="bg-dark text-secondary text-center py-2">LỊCH SỬ MUA HÀNG</h4>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="container my-5">
            <table class="table table-hover border border-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NGÀY ĐẶT HÀNG</th>
                        <th scope="col">ĐỊA CHỈ</th>
                        <th scope="col">TỔNG TIỀN</th>
                        <th scope="col">XÁC NHẬN ĐƠN HÀNG</th>
                        <th scope="col">CHI TIẾT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($memo as $index => $m) {
                        echo ' <tr>
                            <th scope="row">' . ($index + 1) . '</th>
                            <td>' . $m->ngay_lap_hoa_don . '</td>
                            <td>' . $m->dia_chi . '</td>
                            <td class="text-danger fw-bold">' . number_format($m->tong_tien, 0, '.', ',')  . ' VNĐ</td>
                            ';
                            if($m->trang_thai_giao_hang == 'Đang chờ xác nhận'){
                                echo '
                                <td><span class="bg-danger text-light rounded-pill px-3"><i>'.$m->trang_thai_giao_hang.'</i></span></td>';
                            }elseif($m->trang_thai_giao_hang == 'Đang chuẩn bị hàng'){
                                echo'
                                <td><span class="bg-warning text-light rounded-pill px-3"><i>'.$m->trang_thai_giao_hang.'</i></span></td>';
                            }
                            echo'
                                <td style="cursor:pointer;"><a href="/detailbill?mdh='.$m->ma_hoa_don.'"><i class="fas fa-info-circle fs-5" data-bs-toggle="modal" data-bs-target="#detail"></i></a></td>
                            </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</main>
<?php $this->stop() ?>