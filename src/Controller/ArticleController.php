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
                
                $this->articleModel->createArticle($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['content'], $category, $_POST['banner'], $_SESSION['user']['id'], $_FILES["uploadedFile"]["name"]);

                $from = $_FILES["uploadedFile"]["tmp_name"];
                $to = 'ImageArticle/' . basename($_FILES["uploadedFile"]["name"]);

                move_uploaded_file($from, $to);

            } 
        }

        echo $this->twig->render('main/createArticle.html.twig');
    }

    public function showArticle($id)
    {
        $article = $this->articleModel->showArticle($id);

        if (empty($article)) {
            header('Location: /');
            exit();
        }

        $userInfo = $this->articleModel->findUser($article[0]['userid']);

        $userLike = $this->articleModel->findUserLike($_SESSION["user"]["id"], $article[0]["id"]);

        $articleLikes = $this->articleModel->ArticleLikes($article[0]["id"]);

        $numbersLikes = sizeof($articleLikes);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["act"] === "like") {

            if (empty($userLike)) {
                $this->articleModel->addLike($_SESSION["user"]["id"], $article[0]["id"]);
                $numbersLikes = $numbersLikes + 1;
            } else {
                $this->articleModel->suppLike($_SESSION["user"]["id"], $article[0]["id"]);
                $numbersLikes = $numbersLikes - 1;
            }   
            
        }
        
        if (empty($article)) {
            header('Location: /');
            exit();
        }

        echo $this->twig->render('main/article.html.twig', [
            'article' => $article,
            'userInfo' => $userInfo,
            'numberLikes' => $numbersLikes,
        ]);

    }
}

?>