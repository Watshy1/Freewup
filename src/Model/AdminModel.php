<?php

namespace Mvc\Model;

use Config\Model;
use PDO;

class AdminModel extends Model
{

    public function allArticle()
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article`');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteArticle($id)
    {
        $statement = $this->pdo->prepare('DELETE FROM `article` WHERE `id` = :id');
        $statement->execute([
            'id' => $id,
        ]);
    }

    public function deleteLikeArticle($article_id)
    {
        $statement = $this->pdo->prepare('DELETE FROM `user_as_likes` WHERE `article_id` = :article_id');
        $statement->execute([
            'article_id' => $article_id,
        ]);
    }

}