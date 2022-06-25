<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/memory.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<main>
    <div class="container">
        <a href="/memory"><i class="fas fa-arrow-alt-circle-left fs-2 ms-5 text-dark " style="cursor:pointer;"></i></a>
    </div>
    <div class="container border border-2 border-dark mb-5 mt-2 w-50">
        <div class="row text-center bg-dark py-2 border-bottom border-2 border-dark">
            <h5 class="modal-title text-light fw-bold">CHI TIẾT ĐƠN HÀNG</h5>
        </div>

        <?php
        foreach ($info as $i) {
            echo '
       
            <div class="row mt-3">
                <div class="col-6">
                <img class="w-75" src="/assets/picture/';
            switch ($i->ma_thuong_hieu) {
                case "TH01":
                    if ($i->ma_loai_san_pham == "L01")
                        echo 'CHANEL/man/' . $i->hinh_anh . '"';
                    else echo 'CHANEL/woman/' . $i->hinh_anh . '"';
                    break;
                case "TH02":
                    if ($i->ma_loai_san_pham == 'L01')
                        echo 'DIOR/man/' . $i->hinh_anh . ' "';
                    else echo 'DIOR/woman/' . $i->hinh_anh . ' "';
                    break;
                case "TH03":
                    if ($i->ma_loai_san_pham == 'L01')
                        echo 'GUCCI/man/' . $i->hinh_anh . '" ';
                    else echo 'GUCCI/woman/' . $i->hinh_anh . '"';
                    break;
            }
            echo '>
                </div>
                <div class="col-6">
                    <h5 class="mt-5 mb-4 fw-bold">' . $i->ten_san_pham . '</h5>
                    <p>Dung tích: ' . $i->dung_tich . 'ml</p>
                    <p>Loại sản phẩm: ' . $i->ten_loai_san_pham . '</p>
                    <div class="row fw-bold mt-4">
                        <div class="col-8"><i>' . number_format($i->gia_san_pham, 0, '.', ',')  . ' VNĐ</i></div>
                        <div class="col-4"><i>x' . $i->so_luong_sp . '</i></div>
                    </div>
                </div>
            </div>
      
        
        <hr>
        ';
        } ?>
        <div class="row ">
            <h5 class="fw-bold text-end">TỔNG TIỀN: <i class="text-danger ms-2"><?= number_format($info[0]->tong_tien, 0, '.', ',') ?> VNĐ</i></h5>
        </div>
    </div>



</main>
<?php $this->stop() ?>