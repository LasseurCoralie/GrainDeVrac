<?php

namespace App\Controller\profil;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{

    /**
     * @Route("/mon-profil", name="profil")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/profil/profil.html.twig', [
            'title' => 'Mon profil',
            'current_menu' => 'profil',
            'current_subMenu' => '',
        ]);
    }

}