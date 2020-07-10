<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CguController extends AbstractController
{

    /**
     * @Route("/home/mentions-legales", name="cgu")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/cgu.html.twig', [
            'title' => 'Mentions legales',
            'current_menu' => 'home',
            'current_subMenu' => 'cgu',
        ]);
    }

}