<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class ClientsController extends AbstractController
{
    /**
     * @Route("/clients", name="custumers")
     * @return Response
     */


    public function index(): Response
    {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'custumers',
            'current_subMenu' => 'custumers',
            'title' => 'Liste des clients',
        ]);
    }

}