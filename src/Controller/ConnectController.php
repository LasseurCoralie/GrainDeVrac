<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class ConnectController extends AbstractController
{
    /**
     * @Route("/", name="connexion")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('pages/connect/connect.html.twig');
    }

    /**
     * @Route("/mon-compte", name="myProfil")
     * @return Response
    */
    
    public function myProfil(): Response
    {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'myProfil',
            'current_subMenu' => 'myProfil',
            'title' => 'Mon profile',
        ]);
    }
}