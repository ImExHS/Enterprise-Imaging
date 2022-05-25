<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsumeApiController extends AbstractController
{
    /**
     * @Route("/consume/api", name="app_consume_api")
     */
    public function index(): Response
    {
        return $this->render('consume_api/index.html.twig', [
            'controller_name' => 'ConsumeApiController',
        ]);
    }
}
