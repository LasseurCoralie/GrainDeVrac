<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Date;
use App\Form\CalendarType;

class CalendarController extends AbstractController
{

    /**
     * @Route("/home/calendrier", name="calendar")
     * @param Request $request
     */

    public function index(): Response
    {

        $repository = $this->getDoctrine()->getRepository(Date::class);
        
        $date = $repository->findAll();


        return $this->render('pages/backOffice/calendar/calendar.html.twig', [
            'title' => 'Calendrier',
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'pageStyle' => 'imputFormStyle',
            'datas' => $date
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
     * @Route("/home/calendrier/date/edit/{id}", name="calendar.editDate", methods="POST|GET")
     * @param Date $date
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function editDate(Request $request, Date $date): Response
    {

        $form = $this->createForm(CalendarType::class, $date);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($date);
            $em->flush();
            return $this->redirectToRoute('calendar');
        }

        return $this->render('pages/backOffice/calendar/calendarNewDate.html.twig', [
            'form' => $form->createView(),
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Editer la date',
            'pageStyle' => 'newDateForm'
        ]);
    }


    /**
     * @Route("/home/calendrier/date/edit/{id}", name="calendar.delete", methods="DELETE")
     * @param Date $date
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function delete(Date $date, Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$date->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($date);
            $em->flush();
        }
        
        return $this->redirectToRoute('calendar');
    }

}
