<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/", name="teacher")
     */
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
            'name' => 'ahmed'
        ]);
    }

    /**
     * @Route("/afficheTable/{name}", name="afficheTable")
     */
    public function test($name): Response
    {
        return $this->render('teacher/affiche.html.twig', [
            'nom' => $name,
            'table' => ['ahmed', 'emna']
        ]);
    }

    /**
     * @Route("/affiche", name="affiche")
     */
    public function affiche(): Response
    {
        return new  Response('Bonsoir');
    }


}
