<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class ProducersController extends AbstractController
{
    /**
     * @Route("/producteurs", name="producers")
     * @return Response
     */


    public function index(): Response
    {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'producers',
            'current_subMenu' => 'producers',
            'title' => 'Liste des producteurs'
        ]);
    }
}