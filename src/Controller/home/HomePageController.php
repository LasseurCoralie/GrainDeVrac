<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\DatasPage;
use App\Form\DataHomePageType;

class HomePageController extends AbstractController
{



    /**
     * @Route("/home", name="home")
     * @param Request $request
     */

    public function index(Request $request): Response
    {

        $repository = $this->getDoctrine()->getRepository(DatasPage::class);
        
        $datas_page[] = $repository->findBy(['type' => 'slogan'])[0];
        $datas_page[] = $repository->findBy(['type' => 'infoSpe'])[0];

        return $this->render('pages/backOffice/home/homePage.html.twig', [
            'title' => 'HomePage',
            'current_menu' => 'home',
            'current_subMenu' => '',
            'pageStyle' => 'homeStyle',
            'datas' => $datas_page
        ]);
    }


    /**
     * @Route("home/homepage/edit/{id}", name="home.homepage.edit")
     * @param Request $request
     * @param DatasPage $datas_page
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function edit(DatasPage $datas_page, Request $request)
    {
        $form = $this->createForm(DataHomePageType::class, $datas_page);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/backOffice/home/homePageEdit.html.twig', [
            'datas' => $datas_page,
            'form' => $form->createView(),
            'title' => $datas_page->getTitle() . ' :Editer'
        ]);
    }

}