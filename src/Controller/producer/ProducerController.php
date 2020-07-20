<?php

namespace App\Controller\producer;

use App\Entity\Role;
use App\Entity\User;
use App\Form\NewProducerdType;
use App\Controller\users\UsersController;
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

    public function showAll(Request $request, UsersController $usersCont): Response
    {

        $producers = $usersCont->findAll();

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
         $form = $this->createForm(NewProducerdType::class, $producer);

         $roleRepository = $this->getDoctrine()->getRepository(Role::class);
         $role = $roleRepository->find(2);

         $form->handleRequest($request);

         if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $producer->setRole($role);
            $producer->setMute(false);
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

    /**
     * @Route("/producers/delete/{id}", name="producers.delete", methods="DELETE")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function delete(User $user, Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }
        
        return $this->redirectToRoute('producer');
    }

}