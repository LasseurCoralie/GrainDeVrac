<?php

namespace App\Controller\users;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsersController extends AbstractController
{


    public function index(Request $request)
    {

        $users = $this->findAll();

        return $users;
    }

    public function findAll()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();

        return $users;
    }

    public function findAllProducer()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $producers = $repository->findBy(['role'=>'1']);

        return $producers;
    }

}