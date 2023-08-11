<?php

namespace Plug\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plug\Services\Request;



class PlugController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        $RequestInstance = new Request();
        return $twig->render('Plug::Index');
    }
}