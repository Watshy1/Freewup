<?php

namespace Freewup\Controller;

use Config\Controller;

class UserController extends Controller
{
    private UserModel $userModel;

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        echo $this->twig->render('home.html.twig');
    }
}