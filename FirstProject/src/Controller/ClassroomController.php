<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

;

use App\Entity\Classroom;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ClassroomType;


class ClassroomController extends AbstractController
{
    /**
     * @Route("/classroom", name="classroom")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    /**
     * @Route("/afficheC", name="afficheC")
     */
    public function afficheC(): Response
    {

        $c = $this->getDoctrine()
            ->getRepository(Classroom::class)->findAll();
        return $this->render('classroom/afficheC.html.twig', [
            'afficheC' => $c
        ]);
    }

    /**
     * @Route("/deleteClassroom/{id}", name="deleteC")
     */
    public function deleteClassroom($id)
    {
        //Récupérer le classroom à supprimer
        $c = $this->getDoctrine()->getRepository(Classroom::class)
            ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($c);
        $em->flush();
//redirection vers la fonction qui permet de faire l’affichage en indiquant le nom de la route
        return $this->redirectToRoute("afficheC");
    }

    /**
     * @Route("/addClassroom", name="addClassroom")
     */
    public function addClassroom(Request $request)
    {
        $classroom = new Classroom();
        $form = $this->createForm(ClassroomType::class,
            $classroom);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($classroom);
            var_dump($classroom->getName());
            $em->flush();
            return $this->redirectToRoute('afficheC');
        }
        return $this->render('classroom/newClassroom.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function updateClassroom(Request $request, int $id)
    {
        $classroom = new Classroom();
        $form = $this->createForm(ClassroomType::class,
            $classroom);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $CR = $em->getRepository(Classroom::class)->find($id);
            if (!$CR) {
                throw $this->createNotFoundException(
                    'No classroom found for id ' . $id
                );
            }
            $CR->setName($classroom->getName());
            var_dump($classroom->getName());
            $em->flush();
            return $this->redirectToRoute('afficheC');
        }
        return $this->render('classroom/update.html.twig', [
            'f' => $form->createView(),
        ]);
    }


}
