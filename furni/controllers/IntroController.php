<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'helpers/Helper.php';
require_once 'models/Category.php';


class IntroController extends Controller
{
    public function index()
    {
        $category_model = new Category();
        $categories = $category_model->getAll();

        $product_model = new Product();
        $products = $product_model->getProductInHomePage();

        $this->content = $this->render('views/intros/index.php', [
            'products' => $products,
        ]);
        require_once 'views/layouts/main.php';
    }
}
