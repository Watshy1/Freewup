<?php

namespace Mvc\Model;

use Config\Model;
use PDO;

class ArticleModel extends Model
{

    // Home page

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


    // Create Article Page

    public function createArticle(string $title, string $subtitle, string $description, string $content, string $category, string $banner, int $userid)
    {
        $statement = $this->pdo->prepare('INSERT INTO `article` (`title`, `subtitle`, `description`, `content`, `category`, `background_banner`, `userid`) VALUES (:title, :subtitle, :description, :content, :category, :banner, :userid)');
        $statement->execute([
            'title' => $title,
            'subtitle' => $subtitle,
            'description' => $description,
            'content' => $content,
            'category' => $category,
            'banner' => $banner,
            'userid' => $userid
        ]);
    }

}


// INSERT INTO `article` (`id`, `title`, `subtitle`, `description`, `content`, `category`, `background_banner`, `userid`) VALUES (NULL, 'titre test', 'sous titre test', 'description test', 'content test', 'transport', 'banner test', '8');