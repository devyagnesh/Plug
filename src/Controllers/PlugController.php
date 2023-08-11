<?php

namespace Plug\Controllers;

use Exception;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;




class PlugController extends Controller
{

    function fetchData($url)
    {
        try {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            if ($response === false) {
                throw new Exception('Error fetching data from API');
            }

            return json_decode($response, true);
        } catch (Exception $th) {
            die($th);
        }
    }


    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig): string
    {
        $data = $this->fetchData('../../data/data.json');
        return $twig->render('Plug::Index', [
            'data' => $data,
        ]);
    }
}
