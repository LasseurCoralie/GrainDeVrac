<?php

namespace App\Controller\costumer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CostumerController extends AbstractController
{

    /**
     * @Route("/clients", name="costumer")
     * @param Request $request
     */

    public function index(Request $request): Response
    {


        return $this->render('pages/backOffice/customers/customers.html.twig', [
            'title' => 'Liste des clients',
            'current_menu' => 'customers',
            'current_subMenu' => '',
            'pageStyle' => 'usersListStyle',
        ]);
    }

}