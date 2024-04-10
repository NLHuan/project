<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Job.php';
require_once 'helpers/Helper.php';
require_once 'models/Category.php';


class JobController extends Controller
{
    public function index()
    {
        $category_model = new Category();
        $categories = $category_model->getAll();

        $job_model = new Job();
        $jobs = $job_model->getJob();

        $this->content = $this->render('views/jobs/index.php', [
            'jobs' => $jobs,
        ]);
        require_once 'views/layouts/main.php';
    }
}
