<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogController extends AbstractController
{

    /**
     * @Route("/home/catalogue", name="catalog")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/catalog.html.twig', [
            'title' => 'Catalogue',
            'current_menu' => 'home',
            'current_subMenu' => 'catalog',
        ]);
    }

}