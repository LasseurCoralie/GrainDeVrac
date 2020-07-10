<?php

namespace App\Controller\producer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProducerController extends AbstractController
{

    /**
     * @Route("/producteurs", name="producer")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/producers/producers.html.twig', [
            'title' => 'Liste des producteurs',
            'current_menu' => 'producer',
            'current_subMenu' => '',
        ]);
    }

}