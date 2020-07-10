<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{

    /**
     * @Route("/home/liste-des-recettes", name="recipe")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/recipe.html.twig', [
            'title' => 'Liste des recettes',
            'current_menu' => 'home',
            'current_subMenu' => 'recipes',
        ]);
    }

}