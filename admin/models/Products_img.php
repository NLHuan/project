<?php
require_once 'models/Model.php';
require_once 'Product.php';

class Products_img extends Model
{

    public $products_img_id;
    public $avatars;
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




    public function insert_products_img()
    {
//        $id_products_img = db2_last_insert_id($this->connection);
        $this->connection->exec();
        $last_id= $this->connection->lastInsertId();
//        var_dump($last_id);
        echo '<pre>';
        print_r($last_id);
//        die();
        $obj_insert_products_img = $this->connection
            ->prepare("INSERT INTO products_img(products_img_id, avatars) 
                                VALUES (:products_img_id, :avatars)");
        $arr_insert_products_img = [
            ':products_img_id' => $last_id,
            ':avatars' => $this->avatars
        ];
        $obj_insert_products_img->execute($arr_insert_products_img);
//        $id_products_img = mysqli_insert_id($this->connection);
//        var_dump($id_products_img);
//        die();
        echo '<pre>';
        print_r($obj_insert_products_img);
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


    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE products SET category_id=:category_id, title=:title, avatar=:avatar, price=:price,amount=:amount,
            summary=:summary, content=:content, seo_title=:seo_title, seo_description=:seo_description, seo_keywords=:seo_keywords, status=:status, updated_at=:updated_at 
                WHERE id = $id
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