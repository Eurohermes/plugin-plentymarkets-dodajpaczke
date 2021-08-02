<?php

namespace DodajPaczke\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class DodajPaczkeController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('DodajPaczke::Index');
    }
}