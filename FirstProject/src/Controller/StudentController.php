<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\Student;
use App\Form\AddStudentType;
use App\Form\ClassroomType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }


    /**
     * @Route("/afficheS", name="afficheS")
     */
    public function afficheS(): Response
    {

        $s = $this->getDoctrine()
            ->getRepository(Student::class)->findAll();
        return $this->render('student/index.html.twig', [
            'afficheS' => $s
        ]);
    }

    /**
     * @Route("/addStudent", name="addStudent")
     */
    public function addClassroom(Request $request)
    {
        $student = new Student();
        $form = $this->createForm(AddStudentType::class,
            $student);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            var_dump($student->getEmail());
            $em->flush();
            return $this->redirectToRoute('afficheS');
        }
        return $this->render('student/AddStudent.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deleteStudent/{id}", name="deleteS")
     */
    public function deleteClassroom($id)
    {
        //Récupérer le classroom à supprimer
        $s = $this->getDoctrine()->getRepository(Student::class)
            ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($s);
        $em->flush();
//redirection vers la fonction qui permet de faire l’affichage en indiquant le nom de la route
        return $this->redirectToRoute("afficheS");
    }

    /**
     * @Route("/updateStudent/{id}", name="updateStudent")
     */
    public function updateClassroom(Request $request, int $id)
    {
        $student = new Student();
        $form = $this->createForm(AddStudentType::class,
            $student);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $ST = $em->getRepository(Student::class)->find($id);
            if (!$ST) {
                throw $this->createNotFoundException(
                    'No student found for id ' . $id
                );
            }
            $ST->setEmail($student->getEmail());
            $ST->setNSC($student->getNSC());
            var_dump($student->getEmail());
            $em->flush();
            return $this->redirectToRoute('afficheS');
        }
        return $this->render('student/updateStudent.html.twig', [
            'f' => $form->createView(),
        ]);
    }
}
