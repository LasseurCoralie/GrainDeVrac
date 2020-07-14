<?php

namespace App\Controller\home;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductsController extends AbstractController
{

    /**
     * @Route("/home/catalogue", name="catalog")
     * @param Request $request
     */

    public function index(Request $request): Response
    {

        dump("ok");
        $products = $this->findAll();

        return $this->render('pages/backOffice/products/products.html.twig', [
            'title' => 'Catalogue',
            'current_menu' => 'home',
            'current_subMenu' => 'catalog',
            'datas' => $products,
            'pageStyle' => 'imputFormStyle',
        ]);
    }

    public function findAll()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();

        return $products;
    }

    /**
     * @Route("home/catalogue/nouveau-produit", name="catalog.newProduct")
     */

    public function newProduct(Request $request): Response
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('catalog');
        }


        return $this->render('pages/backOffice/products/newProducts.html.twig', [
            'form' => $form->createView(),
            'current_menu'=>'home',
            'current_subMenu' => 'catalog',
            'title' => 'Nouveau produit',
            'pageStyle' => 'newProductStyle',
        ]);
    }

}