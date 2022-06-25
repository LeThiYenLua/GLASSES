<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/register.css">
<main class="py-5" style="background-color: rgb(230, 228, 228);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <p class="text-center mb-4 content_signin fw-bold">TẠO TÀI KHOẢN L.PERFUME</p>
                <form id="signupForm" name="signupForm" method="post" class="form-vertical" action="/register">
                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email*:</label>
                        <input type="email" class="form-control py-2" id="email" placeholder="NHẬP EMAIL" name="email">
                    </div>
                    <div class="row m-0">
                        <div class="form-group mb-4 col-6 ps-0">
                            <label for="username" class="form-label">Tên Đăng Nhập*:</label>
                            <input type="text" class="form-control py-2" id="username" placeholder="NHẬP TÊN" name="username">
                        </div>
                        <div class="form-group mb-4 col-6 pe-0">
                            <label for="phone" class="form-label">Số Điện Thoại*:</label>
                            <input type="text" class="form-control py-2" id="phone" placeholder="NHẬP SĐT" name="phone">
                        </div>
                    </div>
                    <div class="form-group mb-4 passw">
                        <label for="pwd" class="form-label">Mật Khẩu*:</label>
                        <input type="password" class="form-control py-2" id="pwd" placeholder="NHẬP MẬT KHẨU" name="pwd">
                        <i class="fas fa-eye eye_open"></i>
                        <i class="fas fa-eye-slash eye_close"></i>
                    </div>

                    <div class="form-group mb-4 passw1">
                        <label for="cpwd" class="form-label">Xác Nhận Mật Khẩu*:</label>
                        <input type="password" class="form-control py-2" id="cpwd" placeholder="NHẬP LẠI MẬT KHẨU" name="cpwd">
                        <i class="fas fa-eye ceye_open"></i>
                        <i class="fas fa-eye-slash ceye_close"></i>
                    </div>
                    <div class="form-group form-check mb-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" required> Đồng ý với những điều khoản của L.PERFUME.
                        </label>
                    </div>
                    <?php if (isset($errors)) {
                        foreach ($errors as $err) {
                            echo '<p class="text-danger fw-bold">'.$err.'</p>';
                      }} ?>

                    <button type="submit" name="btn_submit" class="btn btn-dark col-12 btn_submit py-2 mb-4">TẠO TÀI KHOẢN</button>
                </form>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        $('.close1').on('click', function() {
            $('#multiCollapseExample1').hide();
        })
        $('.close2').on('click', function() {
            $('#multiCollapseExample2').hide();
        })
        $('.search').on('click', function() {
            $('#multiCollapseExample1').show();
        })
        $('.bag').on('click', function() {
            $('#multiCollapseExample2').show();
        })

        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('.backtop').fadeIn();
            } else {
                $('.backtop').fadeOut();
            }
        });
        $('.backtop').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 100);
        });

        $('.eye_close').on('click', function() {
            $('.eye_open').show();
            $('.eye_close').hide();
            $('#pwd').attr('type', 'text');
        });

        $('.eye_open').on('click', function() {
            $('.eye_open').hide();
            $('.eye_close').show();
            $('#pwd').attr('type', 'password');
        });
        $('.ceye_close').on('click', function() {
            $('.ceye_open').show();
            $('.ceye_close').hide();
            $('#cpwd').attr('type', 'text');
        });

        $('.ceye_open').on('click', function() {
            $('.ceye_open').hide();
            $('.ceye_close').show();
            $('#cpwd').attr('type', 'password');
        });

    });
</script>


<?php $this->stop() ?>