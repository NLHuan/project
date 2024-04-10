<?php
require_once 'models/Model.php';

class Job extends Model
{

    public $id;
    public $category_id;
    public $title;
    public $avatar;
    public $price;
    public $amount;
    public $address;
    public $room;
    public $summary;
    public $content;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
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
            $this->str_search .= " AND jobs.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
            $this->str_search .= " AND jobs.category_id = {$_GET['category_id']}";
        }
    }

    public function getAll()
    {
        $obj_select = $this->connection
            ->prepare("SELECT jobs.*, categories.name AS category_name FROM jobs 
                        INNER JOIN categories ON categories.id = jobs.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY jobs.created_at DESC
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
            ->prepare("SELECT * FROM jobs 
                        WHERE TRUE $this->str_search
                        ORDER BY jobs.updated_at DESC, jobs.created_at DESC
                        LIMIT $start, $limit
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM jobs WHERE TRUE $this->str_search");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO jobs(title, avatar, amount, address, room, status) 
                                VALUES (:title, :avatar, :amount, :address, :room, :status)");
        $arr_insert = [
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':amount' => $this->amount,
            ':address' => $this->address,
            ':room' => $this->room,
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

    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM jobs WHERE jobs.id = $id");

        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getByImgId($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM jobs_img 
          INNER JOIN jobs ON jobs_img.jobs_img_id = jobs.id WHERE jobs_img.jobs_img_id = $id");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $products_img = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products_img;
    }


    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE jobs SET title=:title, avatar=:avatar,amount=:amount,address=:address,room=:room, status=:status, updated_at=:updated_at 
                WHERE id = $id");
        $arr_update = [
            ':title' => $this->title,
            ':avatar' => $this->avatar,
            ':amount' => $this->amount,
            ':address' => $this->address,
            ':room' => $this->room,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];

        return $obj_update->execute($arr_update);
    }

    public function deleteUpdateImg($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM jobs_img WHERE jobs_img_id = $id");
        return $obj_delete->execute();
    }
    // public function updateImg()
    // {
    //     $obj_insert_products_img = $this->connection
    //         ->prepare("INSERT INTO products_img(products_img_id, avatars) 
    //                             VALUES (:products_img_id, :avatars)");
    //     $arr_insert_products_img = [
    //         ':products_img_id' => $this->products_img_id,
    //         ':avatars' => $this->avatars
    //     ];
    //     return $obj_insert_products_img->execute($arr_insert_products_img);
    // }

    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM jobs WHERE id = $id;");
        return $obj_delete->execute();
    }
}