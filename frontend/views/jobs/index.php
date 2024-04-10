<?php
require_once 'helpers/Helper.php';
?>

<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Tuyển dụng</h1>
                    <p class="mb-4">Giải pháp xây dựng đô thị thông minh giúp cho thành phố giải quyết được nhiều vấn đề. Duy trì tăng trưởng kinh tế bền vững và nâng cao mức sống. Đồng thời, giải pháp mang đến dịch vụ sống tốt nhất cho công dân. Tìm hiểu các giải pháp để xây dựng đô thị thông minh nhé!</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="assets/images/home1.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            <?php
            foreach ($jobs as $key => $job) :
            ?>
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="index.php?controller=contact&action=index">
                        <img src="../admin/assets/uploads/<?php echo $job['avatar'] ?>" class="img-fluid product-thumbnail">
                        <strong class="product-title"><?php echo $job['title'] ?></strong>
                        <br>
                        <h3 class="product-price"><i class="fa-solid fa-house"></i> Nơi làm việc: <?php echo $job['address'] ?></h3>
                        <h3 class="product-price"><i class="fa-solid fa-user-doctor"></i> Số lượng: <?php echo $job['amount'] ?></h3>
                        <h3 class="product-price"><i class="fa-solid fa-pen"></i> Phòng ban: <?php echo $job['room'] ?></h3>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>