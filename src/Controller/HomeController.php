<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */

    public function index(): Response
    {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'home',
            'current_subMenu' => '',
            'title' => 'home page',
        ]);
    }

    /**
     * @Route("/home/calendrier", name="home-calendar")
     * @return Response
     */

     public function calendar(): Response
     {
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Calendrier',
        ]);
     }

    /**
     * @Route("/home/catalogue", name="home-catalog")
     * @return Response
     */

    public function catalog(): Response
    {
       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'catalog',
           'title' => 'Catalogue',
       ]);
    }

     /**
     * @Route("/home/liste-des-recettes", name="home-recipe")
     * @return Response
     */

    public function recipes(): Response
    {
       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'recipes',
           'title' => 'Recettes',
       ]);
    }

    /**
     * @Route("/home/qui-sommes-nous", name="home-about")
     * @return Response
     */

    public function about(): Response
    {
       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'about',
           'title' => 'Qui sommes-nous',
       ]);
    }

    /**
     * @Route("/home/mentions-legales", name="home-cgv")
     * @return Response
     */

    public function cgv(): Response
    {
       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'cgv',
           'title' => 'Mention légales',
       ]);
    }
}