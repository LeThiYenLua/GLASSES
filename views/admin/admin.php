<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <div class=" border bg-white my-3 py-3 text-center fw-bold fs-5 shadow-sm">
        KẾT QUẢ KINH DOANH TRONG NĂM
    </div>
    <div class=" row tong-hop mt-4 p-0">
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-dollar-sign fs-1 border border-3 border-success text-success px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9">
                        <p class="mt-3 ms-4">LỢI NHUẬN</p>
                        <p class="ms-5 fs-3">11M</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-cubes fs-1 border border-3 border-primary text-primary px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9">
                        <p class="mt-3 ms-4">SẢN PHẨM</p>
                        <p class="ms-5 fs-3">62</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-receipt fs-1 border border-3 border-danger text-danger px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9">
                        <p class="mt-3 ms-4">HÓA ĐƠN</p>
                        <p class="ms-5 fs-3">50K</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-users fs-1 border border-3 border-warning text-warning px-2 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9">
                        <p class="mt-3 ms-4">KHÁCH HÀNG</p>
                        <p class="ms-5 fs-3">100K</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row san-pham mt-4">
        <div class="thong-ke">
            <p class="fw-bold text-secondary">DANH SÁCH SẢN PHẨM TIÊU BIỂU</p>
        </div>
        <table class="table table-hover table-light text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">LOẠI SẢN PHẨM</th>
                    <th scope="col">SỐ LƯỢNG ĐẶT HÀNG</th>
                </tr>
            </thead>
            <tbody class="fw-bold">
                <tr class="text-warning">
                    <th scope="row">1</th>
                    <td>BLEU DE CHANEL</td>
                    <td>CHANEL</td>
                    <td>25K</td>
                </tr>

                <tr class="text-warning">
                    <th scope="row">2</th>
                    <td>N°5</td>
                    <td>CHANEL</td>
                    <td>32K</td>
                </tr>
                <tr class="text-warning">
                    <th scope="row">3</th>
                    <td>POUR MONSIEUR</td>
                    <td>CHANEL</td>
                    <td>14K</td>
                </tr>

                <tr class="text-success">
                    <th scope="row">4</th>
                    <td>MISS DIOR</td>
                    <td>DIOR</td>
                    <td>13K</td>
                </tr>
                <tr class="text-success">
                    <th scope="row">5</th>
                    <td>DIOR HOMME SPORT</td>
                    <td>DIOR</td>
                    <td>20K</td>
                </tr>
                <tr class="text-success">
                    <th scope="row">6</th>
                    <td>J'ADORE</td>
                    <td>DIOR</td>
                    <td>10K</td>
                </tr>
                <tr class="text-success">
                    <th scope="row">7</th>
                    <td>SAUVAGE</td>
                    <td>DIOR</td>
                    <td>8K</td>
                </tr>

                <tr class="text-primary">
                    <th scope="row">8</th>
                    <td>Gucci Guilty Oud</td>
                    <td>GUCCI</td>
                    <td>30K</td>
                </tr>
                <tr class="text-primary">
                    <th scope="row">9</th>
                    <td>The Voice of the Snake</td>
                    <td>GUCCI</td>
                    <td>16K</td>
                </tr>
                <tr class="text-primary">
                    <th scope="row">10</th>
                    <td>Gucci Bloom</td>
                    <td>GUCCI</td>
                    <td>12K</td>
                </tr>

            </tbody>
        </table>


    </div>

    <div class="follow my-4">
        <div class="row">
            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-facebook text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-facebook-f fs-2 text-light"></i></span>
                    </div>
                    <div class="row fb">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center ">
                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-google text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-google-plus-g fs-2 text-light"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center card-body">
                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-twitter text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-twitter fs-2 text-light "></i></span>
                    </div>
                    <div class="row">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center card-body">
                                <h4 class="m-1"><span class="counter t">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->stop(); ?>