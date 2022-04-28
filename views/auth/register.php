<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/register.css">
<main class="py-5" style="background-color: rgb(230, 228, 228);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <p class="text-center mb-4 content_signin">Create my account</p>
                <form id="signupForm" name="signupForm" method="post" class="form-vertical" action="/register">
                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email*:</label>
                        <input type="email" class="form-control py-2" id="email" placeholder="ENTER EMAIL" name="email">
                    </div>
                    <div class="row m-0">
                        <div class="form-group mb-4 col-6 ps-0">
                            <label for="username" class="form-label">Name*:</label>
                            <input type="text" class="form-control py-2" id="username" placeholder=" ENTER NAME" name="username">
                        </div>
                        <div class="form-group mb-4 col-6 pe-0">
                            <label for="phone" class="form-label">Phone Number*:</label>
                            <input type="text" class="form-control py-2" id="phone" placeholder="ENTER PHONE" name="phone">
                        </div>
                    </div>
                    <div class="form-group mb-4 passw">
                        <label for="pwd" class="form-label">Password*:</label>
                        <input type="password" class="form-control py-2" id="pwd" placeholder="ENTER PASSWORD" name="pwd">
                        <i class="fas fa-eye eye_open"></i>
                        <i class="fas fa-eye-slash eye_close"></i>
                    </div>

                    <div class="form-group mb-4 passw1">
                        <label for="cpwd" class="form-label">Confirm Password*:</label>
                        <input type="password" class="form-control py-2" id="cpwd" placeholder="ENTER PASSWORD" name="cpwd">
                        <i class="fas fa-eye ceye_open"></i>
                        <i class="fas fa-eye-slash ceye_close"></i>
                    </div>
                    <div class="form-group form-check mb-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" required> I agree
                            with the terms and conditions of L.PERFUME.
                        </label>
                    </div>
                    <?php if (isset($errors)) {
                        foreach ($errors as $err) {
                            echo '<p class="text-danger fw-bold">'.$err.'</p>';
                      }} ?>

                    <button type="submit" name="btn_submit" class="btn btn-dark col-12 btn_submit py-2 mb-4">Create my
                        profile</button>
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

    });
</script>


<?php $this->stop() ?>