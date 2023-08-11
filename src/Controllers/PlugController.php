<?php

namespace Plug\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class PlugController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('Plug::Index');
    }
}