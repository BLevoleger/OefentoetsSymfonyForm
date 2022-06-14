<?php

namespace App\Controller;

use App\Entity\Klant;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
            'klant' => $klanten[0],
        ]);
    }

}
