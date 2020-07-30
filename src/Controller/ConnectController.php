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
     */

    public function index(): Response
    {
        return $this->render('pages/connect/connect.html.twig');
    }
} 