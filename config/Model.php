<?php

namespace Config;

use PDO;

class Model
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=phpmyadmin.student-sup.info;dbname=gajc9642_freewup;charset=UTF8', "gajc9642_william-q", "3C&U2EaQLd!Y(vq5sz", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            ]
        );
    }
}