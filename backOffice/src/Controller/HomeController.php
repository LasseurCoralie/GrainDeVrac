<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\DataPage;
use App\Form\DataPageType;

class HomeController extends AbstractController
{

   private $menu = 'home';


   /**
    * @Route("/", name="co")
    */

    public function co()
    {
      return $this->redirectToRoute('home');

    }

    /**
     * @Route("/admin/home", name="home")
     * @param Request $request
     */

     public function index(Request $request): Response
     {
         $repository = $this->getDoctrine()->getRepository(DataPage::class);
         
         $datas_page[] = $repository->findBy(['type' => 'slogan'])[0];
         $datas_page[] = $repository->findBy(['type' => 'infoSpe'])[0];

        return $this->render('backOffice/textAreaCardList.html.twig', [
           'menu' => $this->getMenu(),
           'subMenu' => 'home',
           'title' => 'HomePage',
           'datas' => $datas_page,
        ]);
     }

     /**
     * @Route("/admin/home/qui-sommes-nous", name="about")
     * @param Request $request
     */

    public function about(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(DataPage::class);
        
        $datas_page[] = $repository->findBy(['type' => 'about'])[0];

       return $this->render('backOffice/textAreaCardList.html.twig', [
          'menu' => $this->getMenu(),
          'subMenu' => 'about',
          'title' => 'Qui sommes nous',
          'datas' => $datas_page,
       ]);
    }

      /**
     * @Route("/admin/home/mentions-legales", name="cgu")
     * @param Request $request
     */

    public function cgu(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(DataPage::class);
        
        $datas_page[] = $repository->findBy(['type' => 'cgu'])[0];

       return $this->render('backOffice/textAreaCardList.html.twig', [
          'menu' => $this->getMenu(),
          'subMenu' => 'cgu',
          'title' => 'Mention légales',
          'datas' => $datas_page,
       ]);
    }


    /**
     * @Route("/admin/home/homepage/edit/{id}", name="home.edit")
     * @param Request $request
     * @param DataPage $datas_page
     */

    public function edit(DataPage $datas_page, Request $request)
    {
      $form = $this->createForm(DataPageType::class, $datas_page);

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
         $em = $this->getDoctrine()->getManager();
         $em->flush();
         return $this->redirectToRoute($datas_page->getPage());
     }

      return $this->render('backOffice/textAreaCardListEdit.html.twig', [
            'datas' => $datas_page,
            'menu' => $this->getMenu(),
            'subMenu' => $datas_page->getPage(),
            'form' => $form->createView(),
            'title' => $datas_page->getTitle() . ' :Editer'
        ]);
    }

   /**
    * Get the value of menu
    */ 
   public function getMenu()
   {
      return $this->menu;
   }
}