<?php
require_once 'helpers/Helper.php';
?>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
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
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-dark m-0" style="font-family: 'Arial', sans-serif;">Muscle<span class="text-secondary">Food</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Trang chủ</a>
                <a href="about.html" class="nav-item nav-link">Giới thiệu</a>
                <a href="product.html" class="nav-item nav-link active">Sản phẩm</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog</a>
                        <a href="feature.html" class="dropdown-item">Cam kết chính hãng</a>
                        <a href="testimonial.html" class="dropdown-item">Phản hồi</a>
                        
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-user text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="cart.html">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Sản phẩm</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="#">Trang chủ</a></li>
                <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-dark active" aria-current="page">Sản phẩm</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Sản phẩm</h1>
                    <p>Tăng Cường Sức Mạnh và Phục Hồi Sau Tập Luyện với Thực Phẩm Chức Năng Độc Quyền</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Whey Protein</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Sữa tăng cân</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Khoáng chất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Concentrate (WPC)</a>
                                <span class="text-primary me-1">1.550.000đ</span>
                                <span class="text-body text-decoration-line-through">2.000.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Isolate (WPI)</a>
                                <span class="text-primary me-1">1.420.000đ</span>
                                <span class="text-body text-decoration-line-through">1.850.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Hydrolysate (WPH)</a>
                                <span class="text-primary me-1">1.680.000đ</span>
                                <span class="text-body text-decoration-line-through">2.109.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Native Whey Protein</a>
                                <span class="text-primary me-1">1.700.000đ</span>
                                <span class="text-body text-decoration-line-through">2.200.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Hydrolyzed Whey Protein Isolate</a>
                                <span class="text-primary me-1">1.800.000đ</span>
                                <span class="text-body text-decoration-line-through">2.250.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Blend</a>
                                <span class="text-primary me-1">1.380.000đ</span>
                                <span class="text-body text-decoration-line-through">1.820.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Matrix</a>
                                <span class="text-primary me-1">1.520.000đ</span>
                                <span class="text-body text-decoration-line-through">2.020.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Microfractions</a>
                                <span class="text-primary me-1">2.100.000đ</span>
                                <span class="text-body text-decoration-line-through">2.660.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Xem thêm sản phẩm</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Concentrate (WPC)</a>
                                <span class="text-primary me-1">1.550.000đ</span>
                                <span class="text-body text-decoration-line-through">2.000.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Isolate (WPI)</a>
                                <span class="text-primary me-1">1.420.000đ</span>
                                <span class="text-body text-decoration-line-through">1.850.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Hydrolysate (WPH)</a>
                                <span class="text-primary me-1">1.680.000đ</span>
                                <span class="text-body text-decoration-line-through">2.109.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Native Whey Protein</a>
                                <span class="text-primary me-1">1.700.000đ</span>
                                <span class="text-body text-decoration-line-through">2.200.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Hydrolyzed Whey Protein Isolate</a>
                                <span class="text-primary me-1">1.800.000đ</span>
                                <span class="text-body text-decoration-line-through">2.250.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Blend</a>
                                <span class="text-primary me-1">1.380.000đ</span>
                                <span class="text-body text-decoration-line-through">1.820.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Matrix</a>
                                <span class="text-primary me-1">1.520.000đ</span>
                                <span class="text-body text-decoration-line-through">2.020.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Microfractions</a>
                                <span class="text-primary me-1">2.100.000đ</span>
                                <span class="text-body text-decoration-line-through">2.660.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Xem thêm sản phẩm</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Concentrate (WPC)</a>
                                <span class="text-primary me-1">1.550.000đ</span>
                                <span class="text-body text-decoration-line-through">2.000.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Isolate (WPI)</a>
                                <span class="text-primary me-1">1.420.000đ</span>
                                <span class="text-body text-decoration-line-through">1.850.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Hydrolysate (WPH)</a>
                                <span class="text-primary me-1">1.680.000đ</span>
                                <span class="text-body text-decoration-line-through">2.109.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Native Whey Protein</a>
                                <span class="text-primary me-1">1.700.000đ</span>
                                <span class="text-body text-decoration-line-through">2.200.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Hydrolyzed Whey Protein Isolate</a>
                                <span class="text-primary me-1">1.800.000đ</span>
                                <span class="text-body text-decoration-line-through">2.250.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Blend</a>
                                <span class="text-primary me-1">1.380.000đ</span>
                                <span class="text-body text-decoration-line-through">1.820.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Matrix</a>
                                <span class="text-primary me-1">1.520.000đ</span>
                                <span class="text-body text-decoration-line-through">2.020.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Mới</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Whey Protein Microfractions</a>
                                <span class="text-primary me-1">2.100.000đ</span>
                                <span class="text-body text-decoration-line-through">2.660.000đ</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Chi tiết</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Xem thêm sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->


<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white mb-3">Ghé thăm công ty của chúng tôi</h1>
                <p class="text-white mb-0">Chào mừng bạn đến với chúng tôi: Khám phá sứ mệnh và cam kết của công ty trong việc mang lại sự đổi mới, chất lượng và hài lòng khách hàng tối đa.</p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="contact.html">Liên hệ</a>
            </div>
        </div>
    </div>
</div>
<!-- Firm Visit End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Đánh giá của khách hàng</h1>
            <p>Tiếng Nói của Khách Hàng: Những Đánh Giá Chân Thực và Phản Hồi Quý Báu từ Người Sử Dụng Dịch Vụ.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Sản phẩm thực phẩm hỗ trợ tập thể hình của Muscle Food không chỉ cung cấp năng lượng mà còn giúp họ phục hồi nhanh chóng sau mỗi buổi tập. Tôi cảm thấy có thể tập luyện cứng rắn hơn mà không cảm thấy mệt mỏi sau đó.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Trần Ngọc Ánh</h5>
                        <span>Kỹ sư phần mềm</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Tôi cảm nhận thấy sự khác biệt rõ rệt sau khi sử dụng sản phẩm này trong quá trình tập luyện của mình. Không chỉ giúp tôi cảm thấy tự tin hơn trong việc vượt qua các mục tiêu tập luyện, mà còn giúp tôi đạt được kết quả nhanh hơn.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Nguyễn Văn Toàn</h5>
                        <span>Dược sĩ</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Sản phẩm này không chỉ là một loại thực phẩm bổ sung, mà còn là một người bạn đồng hành đáng tin cậy trên hành trình tập luyện của tôi.Nó khích lệ tôi, sản phẩm của Muscle Food không chỉ đóng vai trò là một sản phẩm, mà còn trở thành một phần không thể thiếu của cuộc sống và sức khỏe của tôi.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Trần Văn Trung</h5>
                        <span>Chuyên viên kiểm thử</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white p-5 mt-4">
                <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Sản phẩm này cung cấp cho tôi một loạt các dưỡng chất quan trọng giúp tăng cường cả về cơ bắp và sức khỏe tổng thể. Tôi thực sự cảm thấy thay đổi tích cực từ bên trong ra ngoài, và đó là một cảm giác không thể diễn tả.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Nguyễn Khánh Duy</h5>
                        <span>Đầu bếp</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold text-primary mb-4" style="font-family: 'Arial', sans-serif;">Muscle<span class="text-secondary">Food</span></h1>
                <p>"Muscle Food - Sự kết hợp hoàn hảo giữa dinh dưỡng chất lượng và hiệu suất tập luyện, mang đến cho bạn sức mạnh và sự phục hồi sau mỗi buổi tập.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Địa chỉ</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i>102, Trường Chinh, Phương Mai, Đống Đa, Hà Nội</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>musclefood@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Đường dẫn nhanh</h4>
                <a class="btn btn-link" href="">Giới thiệu</a>
                <a class="btn btn-link" href="">Liên hệ</a>
                <a class="btn btn-link" href="">Dịch vụ</a>
                <a class="btn btn-link" href="">Điều khoản và điều kiện</a>
                <a class="btn btn-link" href="">Hỗ trợ</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Bản tin</h4>
                <p>Cập Nhật Những Xu Hướng Mới Nhất về Thực Phẩm Chức Năng Hỗ Trợ Tập Thể Hình</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Email của bạn">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>