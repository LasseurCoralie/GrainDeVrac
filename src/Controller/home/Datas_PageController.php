<?php

namespace App\Controller\home;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\DatasPage;
use App\Entity\Mode;
use App\Form\DataHomePageType;

class Datas_PageController extends AbstractController
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

        return $this->render('pages/backOffice/datas_page/data_pageForm.html.twig', [
            'title' => 'HomePage',
            'current_menu' => 'home',
            'current_subMenu' => '',
            'pageStyle' => 'datas_pageStyle',
            'datas' => $datas_page
        ]);
    }


    /**
     * @Route("/home/qui-sommes-nous", name="about")
     * @param Request $request
     */

    public function about(Request $request): Response
    {

        $repository = $this->getDoctrine()->getRepository(DatasPage::class);
        
        $datas_page[] = $repository->findBy(['type' => 'about'])[0];

        return $this->render('pages/backOffice/datas_page/data_pageForm.html.twig', [
            'title' => 'Qui sommes nous',
            'current_menu' => 'home',
            'current_subMenu' => 'about',
            'pageStyle' => 'datas_pageStyle',
            'datas' => $datas_page

        ]);
    }

    /**
     * @Route("/home/mentions-legales", name="cgu")
     * @param Request $request
     */

    public function cgu(Request $request): Response
    {

        // $datas_page = new Mode();
        // $datas_page->setMode('livraison');
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($datas_page);
        // $em->flush();

        $repository = $this->getDoctrine()->getRepository(DatasPage::class);
        
        $datas_page[] = $repository->findBy(['type' => 'cgu'])[0];

        return $this->render('pages/backOffice/datas_page/data_pageForm.html.twig', [
            'title' => 'Mentions Légales',
            'current_menu' => 'home',
            'current_subMenu' => 'cgu',
            'pageStyle' => 'datas_pageStyle',
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
            return $this->redirectToRoute($datas_page->getPage());
        }

        return $this->render('pages/backOffice/datas_page/data_pageFormEdit.html.twig', [
            'datas' => $datas_page,
            'current_menu' => 'home',
            'form' => $form->createView(),
            'title' => $datas_page->getTitle() . ' :Editer'
        ]);
    }

}