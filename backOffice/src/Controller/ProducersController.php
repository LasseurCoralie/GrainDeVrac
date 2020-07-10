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
        $forms = [
            [ 'name' => 'Mathieu',
              'firstName' => 'test'
            ],
            [ 'name' => 'Coco',
            'firstName' => 'test2'
            ],
            [ 'name' => 'Lala',
            'firstName' => 'test3'
            ],
            [ 'name' => 'CouCoule',
            'firstName' => 'quelNomALaCon'
            ],
            [ 'name' => 'Mathieu',
              'firstName' => 'test'
            ],
            [ 'name' => 'Coco',
            'firstName' => 'test'
            ],
            [ 'name' => 'Lala',
            'firstName' => 'test'
            ],
            [ 'name' => 'CouCoule',
            'firstName' => 'test'
            ]
        ];


        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'producteurs',
            'current_subMenu' => '',
            'title' => 'Liste des producteurs',
            'forms' => $forms,
            'page' => 'littleCard',
            'button' => 'Ajouter un nouveau produit',
            'actions' => [
                'modify' => 'modifier',
                'delete' => 'désactiver'
            ]
        ]);
    }
}