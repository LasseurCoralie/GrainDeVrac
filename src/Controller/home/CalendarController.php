<?php

namespace App\Controller\home;

use App\Entity\City;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Date;
use App\Form\CalendarType;
use App\Form\CityType;

class CalendarController extends AbstractController
{

    /**
     * @Route("/home/calendrier", name="calendar")
     * @param Request $request
     */

    public function index(): Response
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

    public function newDate(Request $request): Response
    {

        $date = new Date();

        $form = $this->createForm(CalendarType::class, $date);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($date);
            $em->flush();
            return $this->redirectToRoute('calendar');
        }

        return $this->render('pages/backOffice/calendar/calendarNewDate.html.twig', [
            // 'datas' => $date,
            'form' => $form->createView(),
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Nouvelle date',
            'pageStyle' => 'newDateForm',
        ]);
    }

    /**
     * @Route("/home/calendrier/ajouter-ville", name="calendar.newCity")
     */

     public function newCity(Request $request): Response
     {

        $city = new City();

        $form = $this->createForm(CityType::class, $city);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($city);
            $em->flush();
            return $this->redirectToRoute("calendar.newDate");
        }

         return $this->render('pages/backOffice/calendar/calendarNewCity.html.twig', [
             'form' => $form->createView(),
             'title' => 'Ajouter une ville',
             'pageStyle' => 'newDateForm',
         ]);
     }

}
