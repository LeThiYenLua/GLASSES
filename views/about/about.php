<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/about.css">

<main class="mb-5">
    <div class="background mb-0">
        <video class='d-block' id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
            <source src="/assets/picture/product/Collection/CHANEL.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="gioithieu container-fluid">
        <div class="row justify-content-center gioithieu_p">
            <p class="col-8 text-center fw-bold">
                Không điều gì có thể giúp gương mặt thêm tỏa sáng bằng một thiết kế kính mắt CHANEL.<br>
                Chiến dịch mắt kính 2022 của Thương hiệu là một lời khẳng định về bản sắc mang tính biểu tượng và vượt thời gian này. Được chụp bởi Karim Sadli, các bức chân dung đen trắng của người mẫu Rianne Van Rompaey, Blesnya Minher và Pan Haowen được tối giản hóa để làm nổi bật từng thiết kế.
            </p>
        </div>
    </div>
    <div class='img__brand'>
        <img class=" d-block w-100" src='/assets/picture/product/Collection/c1.webp'>
    </div>
    <div class="collection_sp container-fluid">
        <div class="row ">
            <div class='col-sm-12 col-md-12 col-lg-6 m-0 p-0'>
                <img class='d-block w-100' src='/assets/picture/product/Collection/p1.jpg'>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-6 thong-tin text-center mx-auto">
                <div class="noi-dung">
                    <h3 class="fs-4 fw-bold align-self-center">KÍNH DÁNG CÁNH BƯỚM <br>BẰNG KIM LOẠI</h3>
                    <button class="btn btn-dark chitiet py-2 px-4 mt-3">CHI TIẾT</button>
                </div>
            </div>
        </div>
    </div>
    <div class='img__brand'>
        <img class="d-block w-100" src='/assets/picture/product/Collection/c4.webp'>
    </div>
    <div class=" container-fluid mb-5">
        <div class="row mb-5">
            <div class='col-sm-12 col-md-12 col-lg-6 m-0 p-0'>
                <img class='d-block w-100' src='/assets/picture/product/Collection/p2.jpg'>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-6 thong-tin text-center mx-auto">
                <div class="noi-dung">
                    <h3 class="fs-4 fw-bold align-self-center" style="text-transform: uppercase;">Chất liệu acetate,<br>Được tô điểm bởi chuỗi dây <br>xích đính hạt</h3>
                    <button class="btn btn-dark chitiet py-2 px-4 mt-3">CHI TIẾT</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <h3 class="fw-bold fs-5">CÁC LỰA CHỌN MẮT KÍNH HÀNG ĐẦU</h3>
        </div>
        <div class="list mx-5">
            <div>
                <img src="/assets/picture/product/collection/sp1.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">MẮT KÍNH DÁNG CÁNH BƯỚM</p>
            </div>
            <div>
                <img src="/assets/picture/product/collection/sp2.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">KÍNH MÁT DÁNG VUÔNG</p>
            </div>
            <div>
                <img src="/assets/picture/product/collection/sp3.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">KÍNH MÁT DÁNG VUÔNG</p>
            </div>
            <div>
                <img src="/assets/picture/product/collection/sp4.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">MẮT KÍNH DÁNG VUÔNG</p>
            </div>
            <div>
                <img src="/assets/picture/product/collection/sp5.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">MẮT KÍNH DÁNG BẦU DỤC</p>
            </div>
            <div>
                <img src="/assets/picture/product/collection/sp6.webp">
                <p class="text-center fw-bold mt-2" style="font-size: 14px;">MẮT KÍNH DÁNG SHIELD</p>
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
            autoplaySpeed: 1000,
        });
    });
</script>

<?php $this->stop()?>