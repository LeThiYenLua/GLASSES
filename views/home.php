<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/home.css">
<main class="container_body">
    <div class="background text-center">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
            <source src="assets/video/Chanel_No5.mp4" type="video/mp4" />
        </video>

        <div class="content-background">
            <div class="content-nd  col-md-6 col-lg-12">
                <p style="letter-spacing: 2px;">Nước hoa</p>
                <h1 style="letter-spacing: 1px;">Nước hoa là những cảm xúc của hoa</h1>
                <button class="btn btn-dark" type="button" style="border-radius: 0;letter-spacing: 1px;"><a href="/about" class="text-light timhieu">Tìm hiểu
                        thêm</a></button>
            </div>
        </div>
    </div>

    <div class="chanel container-fluid mx-0 px-0 mb-5">
        <div class="logo text-center mb-5 bg-dark text-secondary fs-3 fw-bold">
            CHANEL
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 mx-0 px-0">
                    <img src="/assets/picture/CHANEL/header-chanel.jpg" class="w-100">
                </div>
                <div class="col-sm-6 col-md-8 col-lg-6 thong-tin text-center">
                    <div class="noi-dung">
                        <p class="fw-bold fs-6" style="letter-spacing: 2px;">GABRIELLE CHANEL</p>
                        <h3 class="fs-2 fw-bold align-self-center" style="letter-spacing: 2px;">GABRIELLE. SỨC HÚT CỦA SỰ TỎA <br>SÁNG.</h3>
                        <button class="btn btn-outline-dark chitiet py-2 px-4 mt-3 fw-bold" style="border-radius: 0;font-size:13px">CHI TIẾT</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <h3 class='text-center fw-bolder py-5 mt-5' style="letter-spacing: 2px;">SẢN PHẨM CHỦ ĐẠO</h3>
            <div class="list mx-auto mb-5 w-75">
                <div>
                    <img class='d-block w-75 mx-auto img1' src="/assets/picture/CHANEL/man/allure2.webp">
                </div>
                <div>
                    <img class='d-block w-75 mx-auto img2' src="/assets/picture/CHANEL/woman/Nuoc-hoa-chanel3.jpg">
                </div>
                <div>
                    <img class='d-block w-75 mx-auto img3' src="/assets/picture/CHANEL/man/bleu_de.webp">
                </div>
                <div>
                    <img class='d-block w-75 mx-auto img4' src="/assets/picture/CHANEL/woman/no5_chanel.webp">
                </div>
                <div>
                    <img class='d-block w-75 mx-auto img5' src="/assets/picture/CHANEL/woman/Leau_1.webp">
                </div>
                <div class="mb-5">
                    <img class='d-block w-75 mx-auto img6' src="/assets/picture/CHANEL/man/egoiste.webp">
                </div>
            </div>
        </div>

    </div>

    <div class="dior container-fluid mx-0 px-0 mt-5">
        <div class="logo text-center my-5 bg-dark text-secondary fs-3 fw-bold">
            DIOR
        </div>

        <div class="miss_dior text-center">
            <div class="content_dior col-sm-6 col-md-3 col-lg-12 my-5 mx-auto" style="text-align: center;">
                <h2>Miss Dior</h2>
            </div>
            <div class="background_dior col-sm-4 col-md-12 col-lg-12">
                <div class="img_dior">
                    <img src="assets/picture/DIOR/miss_dior.webp" class="col-sm-4 col-md-12 col-lg-12 mx-auto">
                </div>

                <div class="kham_pha_dior">
                    <a href="/detail?msp=SP32"><button class="btn btn-dark">Khám phá</button>
                </div></a>
            </div>
            <div class="container img_miss_dior my-5 text-center">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="assets/picture/DIOR/woman/dior3.jpg" width="100%">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="assets/picture/DIOR/woman/dior4.jpg" width="100%">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="assets/picture/DIOR/woman/dior5.jpg" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <hr class="m-5">
        <div class="man_dior text-center">
            <div class="content_dior col-sm-6 col-md-3 col-lg-12 my-5" style="text-align: center;">
                <h2>Sauvage</h2>
            </div>
            <div class="background_dior col-sm-4 col-md-12 col-lg-12">
                <div class="img_dior">
                    <img src="assets/picture/DIOR/man_dior.webp" class="col-sm-4 col-md-12 col-lg-12">
                </div>

                <div class="kham_pha_dior">
                    <a href="/detail?msp=SP27"><button class="btn btn-dark">Khám phá</button>
                </div></a>
            </div>
        </div>
        <div class="container img_miss_dior my-5 text-center">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <img src="assets/picture/DIOR/man/sauvage1.jpg" width="100%">
                </div>
                <div class="col-sm-4 col-md- col-lg-4">
                    <img src="assets/picture/DIOR/man/sauvage.jpg" width="100%">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <img src="assets/picture/DIOR/man/sauvage2.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="gucci container-fluid mx-0 px-0">
        <div class="logo text-center mb-5 bg-dark text-secondary fs-3 fw-bold">
            GUCCI
        </div>

        <div class="miss_dior text-center">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-sm-3 col-md-0 col-lg-1"></div>
                    <div class="col-sm-3 col-md-12 col-lg-4 text-center mb-3">
                        <img src="assets/picture/GUCCI/gucci_guilty.png" width="100%">
                        <p class="mt-2">Nước hoa</p>
                        <h5 class="content_h5 mb-3">Gucci Guilty Absolute</h5>
                        <a href="/detail?msp=SP41" class="kham_pha_gucci text-black">Khám phá ></a>
                    </div>
                    <div class="col-sm-3 col-md-0 col-lg-2"></div>
                    <div class="col-sm-3 col-md-12 col-lg-4">
                        <img src="assets/picture/GUCCI/gucci_banner3.jpg" width="100%">
                        <p class="mt-2">Nước hoa</p>
                        <h5 class="content_h5 mb-3">Gucci Bloom</h5>
                        <a href="/detail?msp=SP51" class="kham_pha_gucci text-black">Khám phá ></a>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col"></div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <img src="assets/picture/GUCCI/gucci_bloom.png" width="100%">
                        <h5 class="content_h5 my-3">Gucci Bloom Hair Mist</h5>
                        <p class="content_p"><i>Nước hoa Gucci Bloom Hair Mist với thiết sang trọng và nhỏ gọn.</i>
                        </p>
                        <a href="/detail?msp=SP53" class="kham_pha_gucci text-black">Khám phá ></a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $('.list').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
<?php $this->stop() ?>