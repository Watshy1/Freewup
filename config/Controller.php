<?php

namespace Config;

use Twig\Extra\CssInliner\CssInlinerExtension;

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
        $this->twig->addExtension(new CssInlinerExtension());
        $this->twig->addGlobal('session', $_SESSION);
    }
}

?>