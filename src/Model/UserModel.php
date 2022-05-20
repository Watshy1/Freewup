<?php

namespace Mvc\Model;

use Config\Model;
use PDO;

class UserModel extends Model
{
    public function createUser(string $firstname, string $lastname, string $email, string $password, int $phone_number, string $date_of_birth)
    {
        $statement = $this->pdo->prepare('INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `phone_number`, `date_of_birth`) VALUES (:firstname, :lastname, :email, :password, :phone_number, :date_of_birth)');
        $statement->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password,
            'phone_number' => $phone_number,
            'date_of_birth' => $date_of_birth
        ]);
    }

    public function findOneByEmail(string $entry)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `user` WHERE `email` = :entry');
        $statement->execute([
            'entry' => $entry,
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function doesExist(string $email)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `user` WHERE  `email` = :email');
        $statement->execute([
            'email' => $email
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function profil(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `user` WHERE `id` = :id');
        $statement->execute([
            'id' => $id
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);

    }

    public function number_articles($userid)
    {
        $statement = $this->pdo->prepare('SELECT * FROM `article` WHERE `userid` = :userid');
        $statement->execute([
            'userid' => $userid
        ]);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}