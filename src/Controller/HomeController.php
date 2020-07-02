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

        $forms = [
            [
                'name' => 'slogan',
                'title' => 'slogan',
                'label' => 'Modifier le contenu du slogan',
                'content' => 'je suis le slogan',
            ],
            [ 
                'name' => 'info',
                'title' => 'Information spéciale',
                'label' => 'Modifier le contenu de l\'information spéciale',
                'content' => 'je suis l\'information spéciale',
            ]
            ];

        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'home',
            'current_subMenu' => '',
            'title' => 'home page',
            'page' => 'bigForm',
            'forms' => $forms,
            'action' => '/home'
        ]);
    }

    /**
     * @Route("/home/calendrier", name="home-calendar")
     * @return Response
     */

     public function calendar(): Response
     {

        $forms = [
            [
                'date' => '24/34/2043',
                'mode' => 'Marché',
                'horraireMin' => '8',
                'horraireMax' => '12',
                'target' => 'dansTonCul'
            ],
            [
                'date' => '26/23/2033',
                'mode' => 'Livraison',
                'horraireMin' => '12',
                'horraireMax' => '15',
                'target' => ''
            ],
            [
                'date' => '22/13/2047',
                'mode' => 'Marché',
                'horraireMin' => '3',
                'horraireMax' => '18',
                'target' => 'pasDansTonCul'
            ],
            [
                'date' => '24/34/2043',
                'mode' => 'Marché',
                'horraireMin' => '8',
                'horraireMax' => '12',
                'target' => 'dansTonCul'
            ],
            [
                'date' => '26/23/2033',
                'mode' => 'Livraison',
                'horraireMin' => '12',
                'horraireMax' => '15',
                'target' => ''
            ],
            [
                'date' => '22/13/2047',
                'mode' => 'Marché',
                'horraireMin' => '3',
                'horraireMax' => '18',
                'target' => 'pasDansTonCul'
            ]
        ];

     
        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Calendrier',
            'page' => 'calendarList',
            'button' => 'ajouter une nouvelle date',
            'forms' => $forms,
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

        $forms = [
            [
                'name' => 'about',
                'title' => 'Qui sommes-nous ?',
                'label' => 'Modifier le contenu du Qui sommes-nous',
                'content' => 'je suis qui sommes nous',
            ],
            [ 
                'name' => 'concepte',
                'title' => 'le concept',
                'label' => 'Modifier le contenu du concept',
                'content' => 'je suis le concepte',
            ]
            ];

       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'about',
           'title' => 'Qui sommes-nous',
           'page' => 'bigForm',
           'forms' => $forms,
           'action' => '/home/qui-sommes-nous'
       ]);
    }

    /**
     * @Route("/home/mentions-legales", name="home-cgv")
     * @return Response
     */

    public function cgv(): Response
    {

        $forms = [
                [
                    'name' => 'cvg',
                    'title' => 'Mentions légales',
                    'label' => 'Modifier les mentions légales',
                    'content' => 'je suis qui les mentions légale',
                ],
            ];

       return $this->render('pages/backOffice/backOffice.html.twig', [
           'current_menu' => 'home',
           'current_subMenu' => 'cgv',
           'title' => 'Mention légales',
           'page' => 'bigForm',
           'forms' => $forms,
            'action' => '/home/mentions-legales'
       ]);
    }
}