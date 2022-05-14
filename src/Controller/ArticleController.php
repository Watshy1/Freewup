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
        if ($_SERVER["REQUEST_METHOD"] === "GET") {

            $EconomieArticles = $this->articleModel->show4lastEconomieArticles();

            $TransportArticles = $this->articleModel->show4lastTransportArticles();

            $PolitiqueArticles = $this->articleModel->show4lastPolitiqueArticles();
        }
        
        echo $this->twig->render('main/home.html.twig', [
            'economie' => $EconomieArticles,
            'transport' => $TransportArticles,
            'politique' => $PolitiqueArticles
        ]);
    }

}

?>