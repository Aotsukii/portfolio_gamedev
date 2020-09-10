<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/career", name="career")
     */
    public function career()
    {
        return $this->render('pages/career.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/productions", name="productions")
     */
    public function productions()
    {
        return $this->render('pages/productions.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/references", name="references")
     */
    public function references()
    {
        return $this->render('pages/references.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies()
    {
        return $this->render('pages/hobbies.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
