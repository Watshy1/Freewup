<?php

namespace Config;

class Controller
{
    protected \Twig\Environment $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../src/View');
        $this->twig = new \Twig\Environment($loader, [
            'debug' => true,
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->twig->addGlobal('session', $_SESSION);
    }
}

?>