<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/homePage.html.twig', [
            'title' => 'HomePage',
            'current_menu' => 'home',
            'current_subMenu' => '',
            'pageStyle' => 'homeStyle',
        ]);
    }

}