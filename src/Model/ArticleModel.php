<?php

namespace Mvc\Model;

use Config\Model;
use PDO;

class ArticleModel extends Model
{
    public function show4lastEconomieArticles()
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article` WHERE `category` = "economie" LIMIT 4');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function show4lastTransportArticles()
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article` WHERE `category` = "transport" LIMIT 4');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function show4lastPolitiqueArticles()
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article` WHERE `category` = "politique" LIMIT 4');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}