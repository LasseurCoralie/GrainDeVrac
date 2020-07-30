<?php

namespace App\Controller\profil;

use App\Form\ProfilType;
use App\Controller\users\UsersController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{

    /**
     * @Route("/mon-profil", name="profil")
     * @param Request $request
     */

    public function index(Request $request, UsersController $usersCont): Response
    {

        $admin = $usersCont->findAdmin();

        return $this->render('pages/backOffice/profil/profil.html.twig', [
            'title' => 'Mon profil',
            'current_menu' => 'profil',
            'current_subMenu' => '',
            'data' => $admin,
            'pageStyle' => 'profilStyle',
        ]);
    }

    /**
     * @Route("/mon-profil/edit", name="profil.edit", methods="POST|GET")
     * @param Date $date
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function editProducer(Request $request, UsersController $usersCont): Response
    {

        $admin = $usersCont->findAdmin();

        $form = $this->createForm(ProfilType::class, $admin);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($admin);
            $em->flush();
            return $this->redirectToRoute('profil');
        }

        return $this->render('pages/backOffice/profil/editProfil.html.twig', [
            'form' => $form->createView(),
            'current_menu' => 'home',
            'current_subMenu' => 'calendar',
            'title' => 'Editer le profil',
            'pageStyle' => 'newDateForm'
        ]);
    }

}