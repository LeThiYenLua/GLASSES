<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/cart.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<main>
    <div class="container-fluid px-0 m-0 position-sticky free-ship" style="top:171px;z-index:1000;">
        <div class="row discount w-100 m-0">
            <p class="bg-secondary text-light text-center py-2"><i>Miễn phí giao hàng toàn quốc</i></p>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row table-product">
            <div class=" col-md-12 col-lg-8 pe-3 chitietdonhang">
                <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">HÌNH ẢNH</th>
                        <th scope="col">TÊN SẢN PHẨM</th>
                        <th scope="col">SỐ LƯỢNG</th>
                        <th scope="col">THÀNH TIỀN</th>
                        <th scope="col">XÓA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    $sumProduct = 0;
                    foreach ($carts as $index => $item) {

                        echo '<tr class="align-middle">
                        <th scope="row">' . $index + 1 . '</th>
                        <td class="col-img"> <a href="/detail?masp=' . $item->ma_san_pham . '""><img src="/assets/picture/';

                        $total = $total + $item->gia_san_pham * $item->so_luong_san_pham;
                        $sumProduct += $item->so_luong_san_pham;
                        switch ($item->ma_thuong_hieu) {
                            case "TH01":
                                if ($item->ma_loai_san_pham == "L01")
                                    echo 'CHANEL/man/' . $item->hinh_anh . '"';
                                else echo 'CHANEL/woman/' . $item->hinh_anh . '"';
                                break;
                            case "TH02":
                                if ($item->ma_loai_san_pham == 'L01')
                                    echo 'DIOR/man/' . $item->hinh_anh . ' "';
                                else echo 'DIOR/woman/' . $item->hinh_anh . ' "';
                                break;
                            case "TH03":
                                if ($item->ma_loai_san_pham == 'L01')
                                    echo 'GUCCI/man/' . $item->hinh_anh . '" ';
                                else echo 'GUCCI/woman/' . $item->hinh_anh . '"';
                                break;
                        }
                        echo 'width = "200px"></a></td>
            <td>' . $item->ten_san_pham . '</td>';
            if($item->so_luong_san_pham > 20){
                $item->so_luong_san_pham = 20;
            };
            echo '
            <td><input type="number" style="width:70px;" value = "' . $item->so_luong_san_pham . '" /></td>
            <td>' . number_format($item->gia_san_pham * $item->so_luong_san_pham, 0, '.', ',')  . ' VNĐ</td>
            <td><a href="/delCart?masp=' . $item->ma_san_pham . '"><button class="btn btn-dark text-light del">X</button></td></a>
            </tr>

            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
            
       <!-- </div>

        <div class="row total justify-content-center mt-5">-->
            <div class="col-sm-8 col-md-12 col-lg-4 ps-4">
                <h5 class="text-center border-bottom border-2 border-dark pb-3 fw-bold">ĐƠN HÀNG</h5>
                <div class="row my-3 text-right">
                    <p class="col-8 fw-bold">Tổng số lượng</p>
                    <div class="col-4"><?= $sumProduct ?></div>
                </div>
                <div class="row my-2">
                    <p class="col-8 fw-bold">Tổng tiền</p>
                    <div class="col-4"><?= number_format($total, 0, '.', ',') ?> VNĐ</div>
                </div>
                <div class="row my-2">
                    <p class="col-6 fw-bold">Hình thức thanh toán</p>
                    <div class="col-6">Thanh toán khi nhận hàng</div>
                </div>
                <?php
                if($sumProduct > 0){
                    echo'
                    <div class="row mb-2">
                        <button class="btn btn-dark text-light thanh-toan" data-bs-toggle="modal" data-bs-target="#confirm-pay">Đặt hàng</button>
                    </div>';
                }
                    
                ?>
                
                <div class="row mb-5">
                    <button class="btn btn-light text-dark border border-dark mua-hang" data-bs-toggle="modal" data-bs-target="#buy"><a href="/chanel">Tiếp tục mua hàng</a></button>
                </div>

                <div class="row pay">
                    <div class="col-4">
                        <a href="#"><img src="/assets/picture/visa.png" width="100%"></a>
                    </div>
                    <div class="col-4">
                        <a href="#"><img src="/assets/picture/discover.png" width="100%"></a>
                    </div>
                    <div class="col-4">
                        <a href="#"><img src="/assets/picture/mastercard.jpg" width="100%"></a>
                    </div>
                </div>
            </div>
            <div class="modal show" tabindex="-1" id="confirm-pay" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark fw-bold ps-5 ms-5">XÁC NHẬN ĐẶT HÀNG</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="/pay">
                            <input type="hidden" name="tong-tien" value="<?= $total ?>">
                            <div class="modal-body">
                                <div class="form-group mb-4">
                                    <label for="address" class="form-label">Địa Chỉ*:</label>
                                    <input type="text" class="form-control py-2" id="address" placeholder="NHẬP ĐỊA CHỈ" name="address" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">XÁC NHẬN</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">HỦY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->stop() ?>