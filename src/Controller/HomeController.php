<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home_page")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Bonjour', "test" => "Bastien",
        ]);
    }


    /**
     * @Route("/test", name="test_page")
     */
    public function test()
    {
        $tableau = [2, 3, 5, 10, 89, 50];
        return $this->render('home/test.html.twig', [
            "tableau"=>$tableau,
        ]);
    }
}
