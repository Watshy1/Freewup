<?php

namespace Mvc\Controller;

use Config\Controller;

class PageController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function AuthorPage()
    {
        echo $this->twig->render('main/author.html.twig');
    }

    public function BlogPage()
    {
        echo $this->twig->render('main/blog.html.twig');
    }

    public function PrivateMessagePage()
    {
        echo $this->twig->render('private_message.html.twig');
    }

    public function ProfilPage()
    {
        echo $this->twig->render('main/profil.html.twig');
    }
}