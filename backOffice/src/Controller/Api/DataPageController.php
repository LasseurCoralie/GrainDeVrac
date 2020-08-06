<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\DataPage;

class DataPageController extends AbstractController
{

    /**
     * @Route("/api/dataPage", name="dataPage")
     * @param Request $request
     */

     public function index(): Response
     {

        $repository = $this->getDoctrine()->getRepository(DataPage::class);
        $datas_page = $repository->findAll();

        $json = [];

        foreach( $datas_page as $value){
           $json[] = [
               'id' => $value->getId(),
               'type' => $value->getType(),
               'content' => $value->getContent(),
               'upDate' => $value->getUpdateAt()
            ];
        }

        $response = new Response();
        $response->setContent(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
     }

}