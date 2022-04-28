<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/home.css">
<main class="container_body">
    <div class='container_body-main border d-flex justify-content-center align-items-end'>
        <div class='container_body-child text-center my-5'>
            <h5>EYEWEAR</h5>
            <h4>2022 CAMPAIGN</h4>
            <p class='bg-white py-2 fw-bold'>
                <a class='text-decoration-none text-dark' href='/about'>SEE MORE</a>
            </p>
        </div>
    </div>
    <h3 class='text-center fw-bolder py-5 mt-5'>SUNGLASSES SELECTION</h3>

    <div class="list mx-5 mb-5">
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp1.webp">
        </div>
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp2.webp">
        </div>
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp3.webp">
        </div>
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp5.webp">
        </div>
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp4.webp">
        </div>
        <div>
            <img class='d-block w-100' src="/assets/picture/Home/sp6.webp">
        </div>
    </div>
    <div class="container-fluid pb-5 ">
        <div class="row first-row justify-content-center">
            <div class="col-9">
                <img class='d-block w-100' src='/assets/picture/Home/p1.webp'>
                <div class='text-center first-row--child align-center'>
                    <p>The new collection by Ms.LUATRAN</p>
                    <a href='#' class='text-decoration-none text-dark'>DISCOVER MORE
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="background">
                <video class='d-block' id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
                    <source src="/assets/picture/Home/GUCCI.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
        <div class="row d-flex justify-content-center second-row">
            <h3 class='text-center fw-bolder pb-5'>STORIES</h3>
            <div class="col-3 first-child" style="background-image: url('/assets/picture/Home/c1.webp')">
                <p class="align-items-end">
                    STORY <br>
                    <a class='text-decoration-none text-dark' href='#'>URBAN LIGHTS</a>
                </p>
            </div>
            <div class="col-3 first-child" style="background-image: url('/assets/picture/Home/c2.jpg')">
                <p class="align-items-end">
                    STORY <br>
                    <a class='text-decoration-none text-dark' href='#'>EMBLEMATIC TWO-TONE</a>
                </p>
            </div>
            <div class="col-3 first-child" style="background-image: url('/assets/picture/Home/c3.jpg')">
                <p class='align-items-end'>
                    STORY <br>
                    <a class='text-decoration-none text-dark' href='#'> MINIMALIST SPIRIT</a>
                </p>
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
<?php $this->stop() ?>