<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="demo")
     * @return Response
     */


    public function index(): Response
    {
        return $this->render('pages/demo/demo.html.twig', [
            'current_menu' => 'demo'
        ]);
    }

    /**
     * @Route("/demo/test", name="demoTest")
     * @return Response
     */

    public function test(): Response
    {
        return $this->render('pages/demo/demo.html.twig');
    }
}