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

    public function createArticle(string $title, string $subtitle, string $description, string $content, string $category, string $banner, int $userid, string $image)
    {
        function dateToFrench($date, $format) 
        {
            $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
            $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
            $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
            return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
        };
        $date = dateToFrench("now" ,"l j F Y");

        $statement = $this->pdo->prepare('INSERT INTO `article` (create_at, `title`, `subtitle`, `description`, `content`, `category`, `background_banner`, `userid`, `image`) VALUES (:date, :title, :subtitle, :description, :content, :category, :banner, :userid, :image)');
        $statement->execute([
            'date' => $date,
            'title' => $title,
            'subtitle' => $subtitle,
            'description' => $description,
            'content' => $content,
            'category' => $category,
            'banner' => $banner,
            'userid' => $userid,
            'image' => $image
        ]);
    }

    // Show Article By Id

    public function showArticle($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article` WHERE `id` = :id');
        $statement->execute([
            'id' => $id
        ]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findUser($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `user` WHERE `id` = :id');
        $statement->execute([
            'id' => $id
        ]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}