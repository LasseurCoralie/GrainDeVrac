<?php

namespace App\Controller\home;

use App\Entity\City;
use App\Form\CityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CityController extends AbstractController
{

    /**
     * @Route("/home/villes", name="city")
     * @param Request $request
     */

    public function index(Request $request): Response
    {
        return $this->render('pages/backOffice/home/catalog.html.twig', [
            'title' => 'Catalogue',
            'current_menu' => 'home',
            'current_subMenu' => 'catalog',
        ]);
    }

    /**
     * @Route("/home/calendrier/ajouter-ville", name="city.calendar.newCity")
     */

    public function newCalendarCity(Request $request): Response
    {

       $city = new City();

       $form = $this->createForm(CityType::class, $city);

       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em = $this->getDoctrine()->getManager();
           $em->persist($city);
           $em->flush();
           return $this->redirectToRoute("calendar");
       }

        return $this->render('pages/backOffice/calendar/calendarNewCity.html.twig', [
            'form' => $form->createView(),
            'title' => 'Ajouter une ville',
            'pageStyle' => 'newDateForm',
        ]);
    }

        /**
     * @Route("/home/villes/ajouter-ville", name="city.newCity")
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
           return $this->redirectToRoute("calendar");
       }

        return $this->render('pages/backOffice/calendar/calendarNewCity.html.twig', [
            'form' => $form->createView(),
            'title' => 'Ajouter une ville',
            'pageStyle' => 'newDateForm',
        ]);
    }

}