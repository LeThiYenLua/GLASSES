<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/detail.css">
<main>
    <div class="container mb-5">

        <div class="row detail pt-5 ">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <img width="80%"  src="/assets/picture/product/<?php if ($product->ma_loai_san_pham == 'L01') echo 'Nam/';
                                                    else echo 'Nu/'; ?><?= $product->hinh_anh ?>"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-sm-10 col-md-12 col-lg-4 pb-2 mt-5">
                <h1 class="pb-3 mb-3"><?= $product->ten_san_pham ?></h1>
                <p><?= $product->mo_ta_san_pham ?></p>
                <hr>
                <p class="fw-bold">MÀU SẮC</p>
                <p><?= $product->mau_sac ?></p>
                <p class="fw-bold">GIÁ SẢN PHẨM</p>
                <p><?= number_format($product->gia_san_pham, 0, '.', ',') ?> VNĐ</p>
                <p class="fw-bold">SỐ LƯỢNG</p>
                <form action="/addCart" method="POST">
                    <input type="number" value="1" min="1" max="20" name="so-luong">
                    <input class=" border border-dark add-cart col-12 py-2 mt-3" type="submit" name="addCart" value="THÊM VÀO GIỎ HÀNG"></input>
                    <input type="hidden" name="masp" value="<?= $product->ma_san_pham ?>">
                </form>

            </div>
        </div>

    </div>
</main>

<?php $this->stop() ?>