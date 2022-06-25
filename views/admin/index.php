<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <script src="/assets/libs/jquery-3.6.0.js"></script>
    <link rel="shortcut icon" href="/assets/picture/icon.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <?= $this->section("page_specific_css") ?>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-3 bg-dark text-light sidebars">
                    <?= $this->insert('admin/sidebar') ?>
                </div>
                <div class="col-9 main-admin p-0">
                    <?= $this->insert('admin/header') ?>

                    <?= $this->section("page") ?>

                    <div class=" container-fluid footer-admin text-center m-0">
                        <p class="py-3 m-0">Copyright © Designed By L.PERFUME</p>
                    </div>
                </div>
                <div class="backtop">
                    <i class="fas fa-chevron-circle-up"></i>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
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
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</html>