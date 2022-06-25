<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/dior.css">
<main class="container">
    <?php
    echo '<h4 class="ps-5 my-5 fw-bold fs-5">KẾT QUẢ TÌM KIẾM "' . $_POST['search']. '": </h4>';
    echo'<div class="row m-0">';
    foreach ($result as $r) {
        echo
        '<div class="col-sm-6 col-md-6 col-lg-4 text-center mb-5">
        <img src="/assets/picture/';
            switch ($r->ma_thuong_hieu) {
                case "TH01":
                    if ($r->ma_loai_san_pham == "L01")
                        echo 'CHANEL/man/' . $r->hinh_anh . '" class="mt-4" width="100%" height="auto">';
                    else echo 'CHANEL/woman/' . $r->hinh_anh . '" class="mt-4" width="100%" height="auto">';
                    break;
                case "TH02":
                    if ($r->ma_loai_san_pham == 'L01')
                        echo 'DIOR/man/' . $r->hinh_anh . ' " class=" " width="80%" height="80%">';
                    else echo 'DIOR/woman/' . $r->hinh_anh . ' " class=" " width="90%" height="80%">';
                    break;
                case "TH03":
                    if ($r->ma_loai_san_pham == 'L01')
                        echo 'GUCCI/man/' . $r->hinh_anh . '" class="" width="90%" height="65%">';
                    else echo 'GUCCI/woman/' . $r->hinh_anh . '" class="m-0" width="90%" height="75%">';
                    break;
                }

                echo '<p class="fw-bold mt-2">' . $r->ten_san_pham . '</p>
                <p>' . $r->mo_ta_san_pham . '</p>
                <a href="/detail?msp=' .$r->ma_san_pham. '" class="chi_tiet text-black">Xem chi tiết ></a></div>';
            
    };
    ?>

</main>
<?php $this->stop() ?>