<?php
require_once 'controllers/Controller.php';
require_once 'models/Job.php';
//require_once 'models/Products_img.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';


class JobController extends Controller
{
    public function index()
    {
        $product_model = new Job();
        $count_total = $product_model->countTotal();
//        $products_img = $product_model->getAllImg();
//        die();
        $query_additional = '';
        if (isset($_GET['title'])) {
            $query_additional .= '&title=' . $_GET['title'];
        }
        if (isset($_GET['category_id'])) {
            $query_additional .= '&category_id=' . $_GET['category_id'];
        }
        $arr_params = [
            'total' => $count_total,
            'limit' => 10,
            'query_string' => 'page',
            'controller' => 'product',
            'action' => 'index',
            'full_mode' => false,
            'query_additional' => $query_additional,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $products = $product_model->getAllPagination($arr_params);
        $pagination = new Pagination($arr_params);

        $pages = $pagination->getPagination();
        $category_model = new Category();
        $categories = $category_model->getAll();

//        echo '<pre>';
//        print_r($products_img);
//        die();
        $this->content = $this->render('views/jobs/index.php', [
            'products' => $products,
            'categories' => $categories,
            'pages' => $pages,
//            'products_img' => $products_img
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $amount = $_POST['amount'];
            $address = $_POST['address'];
            $room = $_POST['room'];
            // $summary = $_POST['summary'];
            // $content = $_POST['content'];
            $status = $_POST['status'];
            if (empty($title)) {
                $this->error = 'Không được để trống title';
            }
            else if ($_FILES['avatar']['error'] != 0) {
                $this->error = 'Không được để trống avatar';
            }
            if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }
            if (empty($this->error)) {
                $filename = '';
                $filenames = '';
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $filename = time() . '-job-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $product_model = new Job();
                $product_model->title = $title;
                $product_model->avatar = $filename;
                $product_model->amount = $amount;
                $product_model->address = $address;
                $product_model->room = $room;
                // $product_model->summary = $summary;
                // $product_model->content = $content;
                $product_model->status = $status;
                $is_insert = $product_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }

                header('Location: index.php?controller=job');
                exit();
            }
        }
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/jobs/create.php', [
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=job');
            exit();
        }

        $id = $_GET['id'];
        $product_model = new Job();
        $product = $product_model->getById($id);
        $this->content = $this->render('views/jobs/detail.php', [
            'product' => $product
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=job');
            exit();
        }
        $id = $_GET['id'];
        $product_model = new Job();
        $product = $product_model->getById($id);
        // $products_img = $product_model->getByImgId($id);
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $amount = $_POST['amount'];
            $address = $_POST['address'];
            $room = $_POST['room'];
            // $summary = $_POST['summary'];
            // $content = $_POST['content'];
            $status = $_POST['status'];
            if (empty($title)) {
                $this->error = 'Không được để trống title';
            }
            if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }
            if (empty($this->error)) {
                $filename = $product['avatar'];
                //xử lý upload file nếu có
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $filename = time() . '-product-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $product_model->title = $title;
                $product_model->avatar = $filename;
                $product_model->amount = $amount;
                $product_model->address = $address;
                $product_model->room = $room;
                // $product_model->summary = $summary;
                // $product_model->content = $content;
                $product_model->status = $status;
                $product_model->updated_at = date('Y-m-d H:i:s');
                $is_update = $product_model->update($id);

//                $files_error = $_FILES['avatars']['error'];
                // if ($files_error[0] == 0) {
                //     $dir_uploads = 'assets/uploads';
                //     // $product_model->products_img_id = $id;
                //     foreach ($products_img as $key => $value) {
                //         @unlink($dir_uploads . '/' . $value['avatars']);
                //         if (!file_exists($dir_uploads)) {
                //             mkdir($dir_uploads);
                //         }

                //         $product_model->deleteUpdateImg($id);
                //         foreach ($_FILES['avatars']['name'] as $key => $value_name){
                //             $filenames = time() . '-product_detail-' . $value_name;
                //             move_uploaded_file($_FILES['avatars']['tmp_name'][$key], $dir_uploads . '/' . $filenames);
                //             $product_model->avatar = $filenames;
                //             $is_update_img = $product_model->updateImg();
                //         }
                //     }
                // }
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=job');
                exit();
            }
        }

        $this->content = $this->render('views/jobs/update.php', [
            'product' => $product,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }

        $id = $_GET['id'];
        $product_model = new Job();
        // $is_delete_img = $product_model->deleteUpdateImg($id);
        $is_delete = $product_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=job');
        exit();
    }
}