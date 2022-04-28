<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/product.css">
<main class="container">
    <?php
    echo '<h4 class="ps-5 my-5">Kết quả tìm kiếm từ khóa "' . $_POST['search']. '": </h4>';
    echo'<div class="row m-0">';
    foreach ($result as $r) {
        echo
        '
        <div class="col-sm-6 col-md-6 col-lg-4">
        <a href="/detail?masp=' .$r->ma_san_pham. '""><img src="/assets/picture/product/';
        if ($r->ma_loai_san_pham == "L01")
            echo 'Nam/' . $r->hinh_anh . '" width="100%"  height="65%"></a>';
        else echo 'Nu/'.$r->hinh_anh . '" width="100%" height="65%"></a>';
        echo '<p class="fw-bold mt-2">' . $r->ten_san_pham . '</p>
        <p>' . $r->mo_ta_san_pham . '</p></div>';
    }
    ?>

</main>
<?php $this->stop() ?>