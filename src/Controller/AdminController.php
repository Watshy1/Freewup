<?php

namespace Mvc\Controller;

use Config\Controller;
use Mvc\Model\AdminModel;

class AdminController extends Controller
{
    private AdminModel $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        parent::__construct();
    }

    public function adminPage()
    {
        $articles = $this->adminModel->allArticle();
        $number = 0;

        echo $this->twig->render('main/admin.html.twig', [
            'articles' => $articles,
            'number' => $number,
        ]);
    }

    public function deleteArticle($id)
    {
        $this->adminModel->deleteArticle($id);

        header('Location: /admin');
        exit();
    }

}