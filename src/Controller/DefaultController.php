<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('default/default.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/expertises", name="expertises")
     */
    public function expertises(): Response
    {
        return $this->render('article-details.html', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('terms-conditions.html', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function blog(): Response
    {
        return $this->render('privacy-policy.html', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
