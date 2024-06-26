<?php
require_once 'models/Model.php';

class Product extends Model
{

    public $id;
    public $category_id;
    public $title;
    public $avatar;
    public $price;
    public $discount;
    public $amount;
    public $summary;
    public $content;
    public $status;
    public $created_at;
    public $updated_at;
//    public $products_img_id;
//    public $avatars;
    public $last_id;
    public $str_search = '';

    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
            $this->str_search .= " AND products.category_id = {$_GET['category_id']}";
        }
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
//    public function getAllImg() {
//        $obj_select = $this->connection
//            ->prepare("SELECT * FROM products_img
//                        INNER JOIN products ON products_img.products_img_id = products.id
//                        WHERE TRUE $this->str_search
//                        ORDER BY products_img.id DESC
//                        ");
//        $arr_select = [];
//        $obj_select->execute($arr_select);
//        $products_img = $obj_select->fetchAll(PDO::FETCH_ASSOC);
//
////        echo '<pre>';
////        print_r($products_img);
////        die();
//        return $products_img;
//    }

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
            ->prepare("INSERT INTO products(category_id, title, avatar, summary, content, price, discount, status) 
                                VALUES (:category_id, :title, :avatar, :summary, :content, :price, :discount, :status)");
        $arr_insert = [
            ':category_id' => $this->category_id,
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':price' => $this->price,
            ':discount' => $this->discount,
            // ':amount' => $this->amount,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':status' => $this->status
        ];
        return $obj_insert->execute($arr_insert);
    }


    public function last_id(){
        $last_id = $this->connection->lastInsertId();
//        echo '<pre>';
//        print_r($last_id);
        return $last_id;
    }
    public function insert_products_img()
    {
//        $id_products_img = db2_last_insert_id($this->connection);
//        $this->connection->exec();
//        $last_id= $this->connection->lastInsertId();
//        var_dump($last_id);
//        echo '<pre>';
//        print_r($this->products_img_id);
//        die();
//         $obj_insert_products_img = $this->connection
//             ->prepare("INSERT INTO products_img(products_img_id, avatars) 
//                                 VALUES (:products_img_id, :avatars)");
//         $arr_insert_products_img = [
//             ':products_img_id' => $this->products_img_id,
//             ':avatars' => $this->avatars
//         ];
//         return $obj_insert_products_img->execute($arr_insert_products_img);
//        $id_products_img = mysqli_insert_id($this->connection);
//        var_dump($id_products_img);
//        die();
//        echo '<pre>';
//        print_r($this->last_id);
//        die();
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
            ->prepare("UPDATE products SET category_id=:category_id, title=:title, avatar=:avatar,
            summary=:summary, content=:content, status=:status, updated_at=:updated_at 
                WHERE id = $id
");
        $arr_update = [
            ':category_id' => $this->category_id,
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            // ':price' => $this->price,
            // ':amount' => $this->amount,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];

        return $obj_update->execute($arr_update);
    }

    public function deleteUpdateImg($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM products_img WHERE products_img_id = $id");
        return $obj_delete->execute();
    }
    public function updateImg()
    {
        // $obj_insert_products_img = $this->connection
        //     ->prepare("INSERT INTO products_img(products_img_id, avatars) 
        //                         VALUES (:products_img_id, :avatars)");
        // $arr_insert_products_img = [
        //     ':products_img_id' => $this->products_img_id,
        //     ':avatars' => $this->avatars
        // ];
        // return $obj_insert_products_img->execute($arr_insert_products_img);
    }

    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM products WHERE id = $id;");
        return $obj_delete->execute();
    }
}