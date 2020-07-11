<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Date;
use App\Form\CalendarType;
use App\Repository\ModeRepository;

class CalendarController extends AbstractController
{

    /**
     * @Route("/home/calendrier", name="calendar")
     * @param Request $request
     */

    public function index(Request $request): Response
    {

        $repository = $this->getDoctrine()->getRepository(Date::class);
        
        $datas_page = $repository->findAll();


        return $this->render('pages/backOffice/calendar/calendar.html.twig', [
            'title' => 'Calendrier',
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'pageStyle' => 'imputFormStyle',
            'datas' => $datas_page
        ]);
    }

    /**
     * @Route("/home/calendrier/nouvelle-date", name="calendar.newDate")
     * @param Date $date
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function newDate(): Response
    {

        
        $form = $this->createForm(CalendarType::class);

        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid()){
        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($date);
        //     $em->flush();
        //     return $this->redirectToRoute('calendar');
        // }

        return $this->render('pages/backOffice/calendar/calendarNewDate.html.twig', [
            // 'datas' => $date,
            'form' => $form->createView(),
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Nouvelle date',
            'pageStyle' => 'newDateForm',
        ]);
    }

}
