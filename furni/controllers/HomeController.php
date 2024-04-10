<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'helpers/Helper.php';
require_once 'models/Category.php';


class HomeController extends Controller
{
    public function index()
    {
        $category_model = new Category();
        $categories = $category_model->getAll();

        $product_model = new Product();
        $products = $product_model->getProductInHomePage();

        $product_model = new Product();
        $productHome = $product_model->getProductHomePage();

        $this->content = $this->render('views/homes/index.php', [
            'products' => $products,
            'productHome' => $productHome,
        ]);
        require_once 'views/layouts/main.php';
    }
}
