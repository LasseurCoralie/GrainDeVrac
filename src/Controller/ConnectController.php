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

        $forms = [
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Nom',
                'content' => 'Jean',
            ],
            [
                'name' => 'firstName',
                'type' => 'text',
                'label' => 'Prenom',
                'content' => 'Claude',
            ],
            [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email',
                'content' => 'Claude@j.com',
            ],
            [
                'name' => 'phone',
                'type' => 'text',
                'label' => 'Numéro de téléphone',
                'content' => '0642354358',
            ],
            [
                'name' => 'password',
                'type' => 'password',
                'label' => 'Mot de passe',
                'content' => '',
            ],
            [
                'name' => 'passwordConfirm',
                'type' => 'password',
                'label' => 'Confirmez votre mot de passe',
                'content' => '',
            ],
        ];

        return $this->render('pages/backOffice/backOffice.html.twig', [
            'current_menu' => 'mon-compte',
            'current_subMenu' => '',
            'title' => 'Mon profile',
            'page' => 'profilForm',
            'forms' => $forms,
            'action' => '/mon-compte'
        ]);
    }
}