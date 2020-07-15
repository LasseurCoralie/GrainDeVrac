<?php

namespace App\Controller\producer;

use App\Controller\users\UsersController;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProducerController extends AbstractController
{

    /**
     * @Route("/producteurs", name="producer")
     * @param Request $request
     */

    public function index(Request $request, UsersController $usersCont): Response
    {

        $producers = $usersCont->findAll();

        dump($producers);

        return $this->render('pages/backOffice/producers/producers.html.twig', [
            'title' => 'Liste des producteurs',
            'current_menu' => 'producer',
            'current_subMenu' => '',
            'datas' => $producers,
            'pageStyle' => 'usersListStyle',
        ]);
    }

    /**
     * @Route("/producteurs/nouveau-producteur", name="producer.newProducer")
     * @param Request $request
     */

     public function newProducer(Request $request)
     {
         $producer = new User();
         $form = $this->createForm(UserType::class, $producer);

         $form->handleRequest($request);

         if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($producer);
            $em->flush();
            return $this->redirectToRoute('producer');    
         }

         return $this->render('pages/backOffice/producers/newProducers.html.twig', [
             'form' => $form->createView(),
             'current_subMenu' => '',
             'current_menu' => 'producer',
             'title' => 'Nouveau producteur',
             'pageStyle' => 'newDateForm'
         ]);

     }

}