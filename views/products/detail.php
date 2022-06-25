<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/detail.css">
<main>
    <div class="container mb-5">
        <?php
                echo ' <div class="row detail">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="/assets/picture/';
                switch ($product->ma_thuong_hieu) {
                    case 'TH01':
                        if ($product->ma_loai_san_pham == 'L01')
                            echo 'CHANEL/man/' . $product->hinh_anh . '" class="mt-4" width="90%" height="95%">';
                        else echo 'CHANEL/woman/' . $product->hinh_anh . '" class="mt-4" width="90%" height="90%">';
                        break;
                    case 'TH02':
                        if ($product->ma_loai_san_pham == 'L01')
                            echo 'DIOR/man/' . $product->hinh_anh . ' " class="ms-5 mt-5" width="90%" height="85%">';
                        else echo 'DIOR/woman/' . $product->hinh_anh . ' " class="ms-5 mt-5" width="80%" height="auto">';
                        break;
                    case 'TH03':
                        if ($product->ma_loai_san_pham == 'L01')
                            echo 'GUCCI/man/' . $product->hinh_anh . '" class="ms-5 mt-5" width="80%" height="85%">';
                        else echo 'GUCCI/woman/' . $product->hinh_anh . '" class="" width="90%" height="95%">';
                        break;
                }
                echo '
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-10 col-md-12 col-lg-4 pb-2 content-detail">
                    <h1 class="pb-3 mb-3">' . $product->ten_san_pham . '</h1>
                    <p>' . $product->mo_ta_san_pham . '</p>
                    <hr>
                    <p class="fw-bold">DUNG TÍCH</p>
                    <p>' . $product->dung_tich . 'ml</p>
                    <p class="fw-bold">GIÁ SẢN PHẨM</p>
                    <p>' . number_format($product->gia_san_pham, 0, '.', ',') . ' VNĐ</p>
                    <p class="fw-bold">SỐ LƯỢNG</p>
                    <form action="/addCart" method="POST">
                        <input type="number" value="1" min="1" max="20" name="so-luong">
                        <input class=" border border-dark add-cart col-12 py-2 mt-3" type="submit" name="addCart" value="THÊM VÀO GIỎ HÀNG"></input>
                        <input type="hidden" name="masp" value="'. $product->ma_san_pham .'">
                    </form>
                    
                </div>
                </div>';
?>
    </div>
</main>

<?php $this->stop() ?>