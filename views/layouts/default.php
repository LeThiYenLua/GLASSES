<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->e($title)?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <script src="/assets/libs/jquery-3.6.0.js"></script>
    <link rel="shortcut icon" href="/assets/picture/icon.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="/assets/css/home.css">
    
    <?=$this->section("page_specific_css")?>
</head>
<body>
    <?= $this->insert('layouts/header')?>

    <?=$this->section("page")?>
    <?= $this->insert('layouts/footer')?>
    <!-- Scripts -->
    
    <?=$this->section("page_specific_js")?>
    <div class="backtop">
        <i class="fas fa-chevron-circle-up"></i>
    </div>
    <script>
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
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>
</html>
