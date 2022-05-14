<?php

namespace Mvc\Controller;

use Config\Controller;
use Mvc\Model\ArticleModel;

class ArticleController extends Controller
{
    private ArticleModel $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        parent::__construct();
    }

    public function show4lastArticles()
    {
        $EconomieArticles = $this->articleModel->show4lastEconomieArticles();
        $TransportArticles = $this->articleModel->show4lastTransportArticles();
        $PolitiqueArticles = $this->articleModel->show4lastPolitiqueArticles();
        
        echo $this->twig->render('main/home.html.twig', [
            'economie' => $EconomieArticles,
            'transport' => $TransportArticles,
            'politique' => $PolitiqueArticles
        ]);
    }

    public function createArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $category = $_POST['category'];
            $category = strtolower($category);

            if (isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['description']) && isset($_POST['content']) && isset($category) && ($category === 'transport' || $category === 'politique' || $category === 'economie') && !empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['description']) && !empty($_POST['content'])) {
                
                $this->articleModel->createArticle($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['content'], $category, $_POST['banner'], $_SESSION['user']['id']);

            } 
        }

        echo $this->twig->render('main/createArticle.html.twig');
    }
}

?>