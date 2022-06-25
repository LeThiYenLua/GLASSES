<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="assets/css/chanel.css">
<main>
    <div class="container-fluid p-0 mb-5">
        <div class="row channel-banner m-0">
            <form method="POST" action="/chanel">
                <div class="row row-cols-lg-2 group p-0">
                    <div class="text-lg-end text-center"><button class="btn btn-dark shop-men" name="man">SHOP MEN</button></div>
                    <div class="text-lg-start text-center"><button class="btn btn-dark shop-women" name="woman">SHOP WOMEN</button></div>
                </div>
            </form>

        </div>
    </div>
    <div class="container shopmen text-center mb-5">
        <div class="row">
            <?php
            if (isset($products)) {
                foreach ($products as $product) {
                    echo
                    '<div class="col-sm-6 col-md-6 col-lg-4">
                    <img src="/assets/picture/CHANEL/';
                    if ($product->ma_loai_san_pham == "L01")
                        echo 'man/' . $product->hinh_anh . '" width="100%">';
                    else echo 'woman/' . $product->hinh_anh . '" width="100%" height="70%">';
                    echo '<p class="fw-bold">' . $product->ten_san_pham . '</p>
                    <p>' . $product->mo_ta_san_pham . '</p>
                    <a href="/detail?msp=' . $product->ma_san_pham . '" class="chi_tiet text-black">Xem chi tiết ></a>
                </div>';
                }
            }
            ?>
        </div>
    </div>


    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6 img_footer1 text-center">
                <img src="/assets/picture/CHANEL/chanel-footer.jpg" alt="" width="100%" height="75%">
                <h4 class="my-3">NHỮNG NỐT HƯƠNG VƯƠNG VẤN</h4>
                <a href="#" class="kham_pha text-black">Khám phá ></a>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6 img_footer2 text-center">
                <img src="/assets/picture/CHANEL/chanel-footer1.jpg" alt="" width="100%" height="75%">
                <h4 class="my-3">BỘ SƯU TẬP NƯỚC HOA CHANEL MINI</h4>
                <a href="#" class="kham_pha text-black">Khám phá ></a>
            </div>
        </div>
    </div>



</main>
<?php $this->stop() ?>