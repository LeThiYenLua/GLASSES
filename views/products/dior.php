<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="assets/css/dior.css">
<main>
    <div class="container-fluid pro-dior mb-5 mx-auto">
        <form action="/dior" method="POST">
            <div class="row">
                <div class="col-6 p-0 mx-auto box">
                    <button class="btn shop-men-dior text-light" name="man">SHOP MEN</button>
                </div>
                <div class="col-6 p-0 mx-auto box">
                    <button class="btn shop-women-dior text-light" name="woman">SHOP WOMEN</button>
                </div>
            </div>
        </form>


    </div>

    <div class="container text-left mb-3">
        <div class="row">
        <?php
            if (isset($products)) {
                foreach ($products as $product) {
                    echo
                    '<div class="col-sm-6 col-md-6 col-lg-4 mb-3">
                        <a href="/detail?msp=' .$product->ma_san_pham. '""><img src="/assets/picture/DIOR/';
                        if ($product->ma_loai_san_pham == "L01")
                            echo 'man/' . $product->hinh_anh . '" width="100%" ></a>';
                        else echo 'woman/'.$product->hinh_anh . '" width="100%" height="65%"></a>';
                        echo '<p class="fw-bold mt-3">' . $product->ten_san_pham . '</p>
                        <p>' . $product->mo_ta_san_pham . '</p>
                        <p class="fw-bold">' . number_format($product->gia_san_pham, 0, '.', ',') . ' VNĐ</p>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</main>
<?php $this->stop() ?>