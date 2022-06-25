<link rel="stylesheet" href="assets/css/home.css">
<header class="position-sticky" style="top: 0; z-index: 1000;">
    <div class="logo">
        <a href="/">
            <h2 class="text-black text-center pt-3" style="font-weight: bold; letter-spacing: 3px;">L.PERFUME</h2>
        </a>
        <div class="row m-0">
            <div class="col">
                <form role="search" method="POST" class="search-form" action="/search" name="search-form">
                    <label>
                        <input type="search" class="search-field" placeholder="Bạn đang tìm sản phẩm nào?" value="" name="search" />
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                </form>
            </div>

            <?php if (App\SessionGuard::isUserLoggedIn()) : ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <div class="col-sm-12 col-md-5 col-lg-3 user-login">
                    <div class="user">
                        <i class="far fa-user text-dark"></i>
                        <?= App\SessionGuard::user()['email'] ?>
                        |
                        <a href="/logout" class="text-danger fw-bold me-2">
                            Đăng Xuất
                        </a>
                        <a href="/memory" class="text-secondary memory" data-bs-toggle="tooltip" data-bs-placement="top" title="Lịch sử mua hàng">
                            <i class="fas fa-receipt fs-5"></i>
                        </a>
                    </div>

                </div>
            <?php else : ?>
                <div class="col-sm-12 col-md-5 col-lg-3 user-login">
                    <div class="user">
                        <i class="far fa-user text-dark"></i>
                        <a href="/login" class="ms-2 text-dark fw-bold">Đăng Nhập</a>
                        |
                        <a href="/register" class="text-dark fw-bold">Đăng Ký</a>
                    </div>

                </div>

            <?php endif; ?>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav fs-6" style="word-spacing: 4px; font-weight: 700;">
                        <li class="nav-item me-4">
                            <a class="nav-link text-black" href="/chanel">CHANEL</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-black" href="/dior">DIOR</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-black" href="/gucci">GUCCI</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-black" href="/about">VỀ CHÚNG TÔI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="/cart">GIỎ HÀNG</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>
</header>