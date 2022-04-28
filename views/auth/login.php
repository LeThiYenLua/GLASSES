<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="/assets/css/login.css">
<main class="py-5" style="background-color: rgb(230, 228, 228);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <p class="text-center mb-4 content_signin">My LUXEYE account</p>
                <button type="button" class="btn btn-dark col-12 btn_create py-2 mb-4"><a href="/register">Create my account</a></button>
                <form id="signinForm" method="post" class="form-horizontal" action="/login">
                    <button class="btn btn-light mb-4 col-12 btn_gg">
                        <img src="assets/picture/Google_logo.webp" alt="" style="height: 40px;">
                        <a href="https://www.google.com/">CONTINUE WITH GOOGLE</a>
                    </button>
                    <button class="btn btn-light mb-4 col-12 btn_fb">
                        <img src="assets/picture/facebook_logo.webp" alt="" style="height: 40px;">
                        <a href="https://www.facebookcom/">CONTINUE WITH FACEBOOK</a>
                    </button>
                    <p class="text-center" style="font-size: 18px;">OR</p>
                    <?php
                    if(isset($errors)){
                        foreach ($errors as $err) {
                            echo "<p class='text-danger fw-bold'>".$err."</p>";
                        }
                    }
                    ?>
                    

                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email*:</label>
                        <input type="text" class="form-control py-2" id="email" placeholder="ENTER EMAIL" name="email" required>
                    </div>
                    <div class="form-group mb-4 passw">
                        <label for="pwd" class="form-label">Password*:</label>
                        <input type="password" class="form-control py-2" id="password" placeholder="ENTER PASSWORD" name="password" required>
                        <i class="fas fa-eye eye_open"></i>
                        <i class="fas fa-eye-slash eye_close"></i>
                    </div>
                    <div class="form-group form-check mb-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="remember_me"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark col-12 btn_submit py-2 mb-4">Sign in</button>
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
            $('#password').attr('type', 'text');
        });

        $('.eye_open').on('click', function() {
            $('.eye_open').hide();
            $('.eye_close').show();
            $('#password').attr('type', 'password');
        });

    });
</script>

<?php $this->stop() ?>