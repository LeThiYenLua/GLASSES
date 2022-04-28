<div class="head pt-4">
    <h3>LUXEYE</h3>
</div>
<hr>
<div class="menu-main mb-4">
    <p class="text-secondary my-3">MENU MAIN</p>
    <div class="menu-body ms-4">
        <div class="tq mb-4 fs-5">
            <a href="/admin"><i class="fas fa-tachometer-alt me-3 "></i>Tổng Quan</a>
        </div>

        <p class="mb-4 san-pham fs-5">
            <a class="sp" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-box me-3 "></i>Quản Lý Sản Phẩm
            </a><i class="fas fa-angle-down arrow-down-1"></i><i class="fas fa-angle-right arrow-right-1"></i>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="qlsp mb-3">
                <a href="/qlsp">Danh Sách Sản Phẩm</a>
                <a href="#">Nhập Hàng</a>
                <a href="#">Kiểm Hàng</a>
            </div>
        </div>
        <p class="mb-4 fs-5">
            <a class="dh" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-file me-3 "></i>Quản Lý Đơn Hàng
            </a><i class="fas fa-angle-down arrow-down-2"></i><i class="fas fa-angle-right arrow-right-2"></i>
        </p>
        <div class="collapse" id="collapseExample1">
            <div class="qldh mb-3">
                <a href="/qldh">Danh Sách Đơn Hàng</a>
                <a href="#">Vận Chuyển</a>
            </div>
        </div>
        <p class="mb-4 fs-5">
            <a class="kh" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-user-circle me-3"></i>Quản Lý Khách Hàng
            </a><i class="fas fa-angle-down arrow-down-3"></i><i class="fas fa-angle-right arrow-right-3"></i>
        </p>
        <div class="collapse" id="collapseExample2">
            <div class="qlkh mb-3">
                <a href="/qlkh">Danh Sách Khách Hàng</a>
                <a href="#">Nhóm Khách Hàng</a>
            </div>
        </div>
    </div>


</div>
<hr>
<div class="setting ms-3">
    <a href="#"><i class="fas fa-cog fs-5 me-3"></i>Cài Đặt</a>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $('.sp').click(function() {
            $('.arrow-down-1').toggle();
            $('.arrow-right-1').toggle();
        })
        $('.dh').click(function() {
            $('.arrow-down-2').toggle();
            $('.arrow-right-2').toggle();
        })
        $('.kh').click(function() {
            $('.arrow-down-3').toggle();
            $('.arrow-right-3').toggle();
        })
    });
</script>