<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class MaillerController extends AbstractController
{
    /**
     * @Route("/mes-messages", name="mailler")
     * @return Response
     */


    public function index(): Response
    {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'mailler',
            'current_subMenu' => 'mailler',
            'title' => 'Messagerie'
        ]);
    }

}