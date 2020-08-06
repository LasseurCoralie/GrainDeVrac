<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Date;

class DateController extends AbstractController
{

    /**
     * @Route("/api/date", name="dateApi")
     * @param Request $request
     */

     public function index(): Response
     {

        $repository = $this->getDoctrine()->getRepository(Date::class);
        $date = $repository->findAll();

        $json = [];

        foreach( $date as $value){
           $json[] = [
               'id' => $value->getId(),
               'date' => $value->getDate(),
               'startHour' => $value->getStartHour(),
               'endHour' => $value->getEndHour(),
               'deliveryMode' => $value->getDeliveryMode()->getMode(),
               'city'=> $value->getCity()->getName(),
            ];
        }

        $response = new Response();
        $response->setContent(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
     }

}