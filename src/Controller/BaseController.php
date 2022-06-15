<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Klant;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="app_base")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $klanten = $em->getRepository(Klant::class)->findAll();




        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
            'klant' => $klanten,
        ]);


    }
    /**
     * @Route("/success", name="success")
     */
    public function success(): Response
    {
        return new Response('SUCCESSS');


    }
    /**
     * @Route("/form", name="app_form")
     */
    public function form(Request $request, CategoryRepository $categoryRepository): Response
    {
        $category = new Category();

        $form = $this->createFormBuilder($category)
            ->add('naam', TextType::class)
            ->add('image', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])

            ->getForm();


        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $category = $form->getData();
            $categoryRepository->add($category);

            return $this->redirectToRoute('success');

        }






        return $this->renderForm('base/form.html.twig', [
            'controller_name' => 'BaseController',
            'form' => $form,
        ]);


    }
}


