<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="assets/css/gucci.css">
<main>
    <div class="container-fluid p-0 mb-5">
        <div class="row channel-banner m-0">
            <div class="row">
                <h4 class="text-light text-center mt-3"><i>House of Gucci</i></h4>
            </div>
            <form action="/gucci" method="POST">
                <div class="row row-cols-lg-2 group p-0">
                    <div class="text-lg-end text-center"><button class="btn btn-light shop-men" name="man">SHOP MEN</button></div>
                    <div class="text-lg-start text-center"><button class="btn btn-light shop-women" name="woman">SHOP WOMEN</button></div>
                </div>
            </form>


        </div>
    </div>
    <div class="container shop-gucci text-center my-5">
        <div class="row">
        <?php
            if (isset($products)) {
                foreach ($products as $product) {
                    echo
                    '<div class="col-sm-6 col-md-6 col-lg-4">
                    <img src="/assets/picture/GUCCI/';
                    if ($product->ma_loai_san_pham == "L01")
                        echo 'man/' . $product->hinh_anh . '" width="100%" height="70%">';
                    else echo 'woman/' . $product->hinh_anh . '" width="100%" height="70%">';
                    echo '<p class="fw-bold mt-1">' . $product->ten_san_pham . '</p>
                    <p>' . $product->mo_ta_san_pham . '</p>
                    <a href="/detail?msp=' . $product->ma_san_pham . '" class="chi_tiet text-black fw-bold"><i>Xem chi tiết</i></a>
                </div>';
                }
            }
            ?>
        </div>
    </div>


    </div>




</main>
<?php $this->stop()?>