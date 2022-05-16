<?php

namespace Mvc\Controller;

use Config\Controller;

class PageController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ProfilPage()
    {
        echo $this->twig->render('main/profil.html.twig');
    }
}