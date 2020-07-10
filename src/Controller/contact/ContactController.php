<?php

namespace App\Controller\contact;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{

    /**
     * @Route("/messagerie", name="contact")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/contact/contact.html.twig', [
            'title' => 'Messagerie',
            'current_menu' => 'contact',
            'current_subMenu' => '',
        ]);
    }

}