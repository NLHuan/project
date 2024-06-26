<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>102, Trường Chinh, Phương Mai, Đống Đa, Hà Nội</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>musclefood@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Liên hệ:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-dark m-0" style="font-family: 'Arial', sans-serif;">Muscle<span class="text-secondary">Food</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                    <a href="index.php?controller=product&action=index" class="nav-item nav-link">Giới thiệu</a>
                    <a href="index.php?controller=product&action=index" class="nav-item nav-link">Sản phẩm</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                        <div class="dropdown-menu m-0">
                            <a href="index.php?controller=product&action=index" class="dropdown-item">Blog</a>
                            <a href="index.php?controller=product&action=index" class="dropdown-item">Cam kết chính hãng</a>
                            <a href="index.php?controller=product&action=index" class="dropdown-item">Phản hồi</a>
                        </div>
                    </div>
                    <a href="index.php?controller=product&action=index" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <!-- <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a> -->
                    <!-- <a class="btn-sm-square bg-white rounded-circle ms-3" href="index.php?controller=cart&action=index"> -->
                        <!-- <small class="fa fa-shopping-bag text-body"></small> -->
                        <div class="cart">
                            <a href="index.php?controller=cart&action=index" class="cart-number">
                                <small class="fa fa-shopping-bag text-body"></small>
                                <?php
                                $cart_total = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] AS $cart) {
                                        $cart_total += $cart['quantity'];
                                    }
                                }
                                ?>
                                <span class="cart-amount">
                                    <?php echo $cart_total; ?>
                                </span>
                            </a>
                        </div>
                    <!-- </a> -->
                </div>
            </div>
        </nav>
    </div>