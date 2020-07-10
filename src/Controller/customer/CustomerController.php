<?php

namespace App\Controller\customer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{

    /**
     * @Route("/clients", name="customer")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/customers/customers.html.twig', [
            'title' => 'Liste des clients',
            'current_menu' => 'customers',
            'current_subMenu' => '',
        ]);
    }

}