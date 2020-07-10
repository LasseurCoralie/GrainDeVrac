<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalendarController extends AbstractController
{

    /**
     * @Route("/home/calendrier", name="calendar")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/calendar.html.twig', [
            'title' => 'Calendriers',
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
        ]);
    }

}