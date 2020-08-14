<?php

namespace App\Controller;

use App\Entity\Date;
use App\Form\CalendarType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalendarController extends AbstractController
{

    private $menu = 'home';

    /**
     * @Route("/admin/home/calendrier", name="calendar")
     * @param Request $request
     */

    public function index(): Response
    {

        $repository = $this->getDoctrine()->getRepository(Date::class);
        
        $date = $repository->findAll();

        for($i = 0; $i < count($date); ++$i){
            if($date[$i]->getDeliveryMode()->getId() === 1){
                $date[$i]->setCity(null);
            }
        }


        return $this->render('backOffice/calendarCardList.html.twig', [
            'title' => 'Calendrier',
            'menu' => $this->getMenu(),
            'subMenu' => 'calendar',
            'datas' => $date
        ]);
    }

     /**
     * @Route("/admin/home/calendrier/nouvelle-date", name="calendar.newDate")
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

        return $this->render('backOffice/newDate.html.twig', [
            // 'datas' => $date,
            'form' => $form->createView(),
            'menu' => $this->getMenu(),
            'subMenu' => 'calendar',
            'title' => 'Nouvelle date',
            'pageStyle' => 'newDateForm',
            'buttonValue' => 'Valider la nouvelle date'
        ]);
    }

            /**
     * @Route("/admin/home/calendrier/date/edit/{id}", name="calendar.editDate", methods="POST|GET")
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

        return $this->render('backOffice/newDate.html.twig', [
            'form' => $form->createView(),
            'menu' => $this->getMenu(),
            'subMenu' => 'calendar',
            'title' => 'Editer la date',
            'pageStyle' => 'newDateForm',
            'buttonValue' => 'Editer la date'
        ]);
    }

      /**
     * @Route("/admin/home/calendrier/date/edit/{id}", name="calendar.delete", methods="DELETE")
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


    /**
     * Get the value of menu
     */ 
    public function getMenu()
    {
        return $this->menu;
    }
}