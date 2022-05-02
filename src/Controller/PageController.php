<?php

namespace Mvc\Controller;

use Config\Controller;

class PageController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function HomePage()
    {
        echo $this->twig->render('home.html.twig');
    }

    public function RegisterPage()
    {
        echo $this->twig->render('register.html.twig');
    }

    public function LoginPage()
    {
        echo $this->twig->render('login.html.twig');
    }

    public function AuthorPage()
    {
        echo $this->twig->render('author.html.twig');
    }

    public function BlogPage()
    {
        echo $this->twig->render('blog.html.twig');
    }

    public function PrivateMessagePage()
    {
        echo $this->twig->render('private_message.html.twig');
    }

    public function ProfilPage()
    {
        echo $this->twig->render('profil.html.twig');
    }
}