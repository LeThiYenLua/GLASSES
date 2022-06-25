<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH KHÁCH HÀNG L.PERFUME</h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-dark" id="update" style="border-radius:0">Cập Nhật Khách Hàng</button>
        </div>
        <table class="table table-light table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">TÊN KHÁCH HÀNG</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SỐ ĐIỆN THOẠI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($client as $index => $cli) {
                    echo '<tr>
                        <th scope="row">' . ($index + 1) . '</th>
                        <td>' . $cli->ten_nguoi_dung . '</td>
                        <td>' . $cli->email . '</td>
                        <td>' . $cli->so_dien_thoai . '</td>
                    </tr>';
                }
                ?>


            </tbody>
        </table>


    </div>

</div>

<script>
    $(document).ready(function() {
        $('#update').click(function() {
            window.location.reload();
        });
    });
</script>

<?php $this->stop(); ?>