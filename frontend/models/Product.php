<?php
require_once 'models/Model.php';
class Product extends Model {

    public function getProductInHomePage($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= " AND categories.id IN $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= " AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.name
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          WHERE products.status = 1 $str_filter";

        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
    public function getProductHomePage()
    {
        $sql_select_all = "SELECT * FROM products WHERE `status` = 1 ORDER BY id DESC LIMIT 3";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        $productHome = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $productHome;
    }
    public function getProduct()
    {
        $sql_select_all = "SELECT * FROM products WHERE `status` = 1 ORDER BY id DESC";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        $productHome = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $productHome;
    }

//    public function getById($id)
//    {
//        $obj_select = $this->connection
//            ->prepare("SELECT products.*, categories.name AS category_name FROM products
//          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");
//
//        $obj_select->execute();
//        $product =  $obj_select->fetch(PDO::FETCH_ASSOC);
//        return $product;
//    }
//    public $id;
//    public $category_id;
//    public $title;
//    public $avatar;
//    public $price;
//    public $amount;
//    public $summary;
//    public $content;
//    public $seo_title;
//    public $seo_description;
//    public $seo_keywords;
//    public $status;
//    public $created_at;
//    public $updated_at;
//
//    public $str_search = '';
//
//    public function __construct()
//    {
//        parent::__construct();
//        if (isset($_GET['title']) && !empty($_GET['title'])) {
//            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
//        }
//    }
//
//    public function getAll()
//    {
//        $obj_select = $this->connection
//            ->prepare("SELECT products.*, categories.name AS category_name FROM products
//                        INNER JOIN categories ON categories.id = products.category_id
//                        WHERE TRUE $this->str_search
//                        ORDER BY products.created_at DESC
//                        ");
//
//        $arr_select = [];
//        $obj_select->execute($arr_select);
//        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
//
//        return $products;
//    }
//
//    public function getAllPagination($arr_params)
//    {
//        $limit = $arr_params['limit'];
//        $page = $arr_params['page'];
//        $start = ($page - 1) * $limit;
//        $obj_select = $this->connection
//            ->prepare("SELECT products.*, categories.name AS category_name FROM products
//                        INNER JOIN categories ON categories.id = products.category_id
//                        WHERE TRUE $this->str_search
//                        ORDER BY products.updated_at DESC, products.created_at DESC
//                        LIMIT $start, $limit
//                        ");
//
//        $arr_select = [];
//        $obj_select->execute($arr_select);
//        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
//
//        return $products;
//    }
//
//    public function countTotal()
//    {
//        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM products WHERE TRUE $this->str_search");
//        $obj_select->execute();
//
//        return $obj_select->fetchColumn();
//    }

    public $id;
    public $category_id;
    public $title;
    public $avatar;
    public $price;
    public $amount;
    public $summary;
    public $content;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $status;
    public $created_at;
    public $updated_at;
    public $str_search = '';

    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
        }
//        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
//            $this->str_search .= " AND products.category_id = {$_GET['category_id']}";
//        }
    }

    public function getAll()
    {
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = products.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.created_at DESC
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    public function getAllPagination($arr_params)
    {
        $limit = $arr_params['limit'];
        $page = $arr_params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = products.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.updated_at DESC, products.created_at DESC
                        LIMIT $start, $limit
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM products WHERE TRUE $this->str_search");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO products(category_id, title, avatar, price, amount, summary, content, seo_title, seo_description, seo_keywords, status) 
                                VALUES (:category_id, :title, :avatar, :price, :amount, :summary, :content, :seo_title, :seo_description, :seo_keywords, :status)");
        $arr_insert = [
            ':category_id' => $this->category_id,
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':price' => $this->price,
            ':amount' => $this->amount,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':seo_title' => $this->seo_title,
            ':seo_description' => $this->seo_description,
            ':seo_keywords' => $this->seo_keywords,
            ':status' => $this->status,
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function getByImgId($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM products_img 
          INNER JOIN products ON products_img.products_img_id = products.id WHERE products_img.products_img_id = $id");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $products_img = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products_img;
    }

    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE products SET category_id=:category_id, title=:title, avatar=:avatar, price=:price,amount=:amount,
            summary=:summary, content=:content, seo_title=:seo_title, seo_description=:seo_description, seo_keywords=:seo_keywords, status=:status, updated_at=:updated_at WHERE id = $id
");
        $arr_update = [
            ':category_id' => $this->category_id,
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':price' => $this->price,
            ':amount' => $this->amount,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':seo_title' => $this->seo_title,
            ':seo_description' => $this->seo_description,
            ':seo_keywords' => $this->seo_keywords,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];
        return $obj_update->execute($arr_update);
    }

    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM products WHERE id = $id");
        return $obj_delete->execute();
    }
}

