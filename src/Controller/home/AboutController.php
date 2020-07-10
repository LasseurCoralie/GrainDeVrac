<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{

    /**
     * @Route("/home/qui-sommes-nous", name="about")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/about.html.twig', [
            'title' => 'Qui sommes nous',
            'current_menu' => 'home',
            'current_subMenu' => 'about',
        ]);
    }

}