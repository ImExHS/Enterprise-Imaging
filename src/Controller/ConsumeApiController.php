<?php

namespace App\Controller;

use App\Services\GetStudies;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsumeApiController extends AbstractController
{
    /**
     * @Route("/workList", name="app_consume_api")
     */
    public function index(GetStudies $studies, Request $request): Response
    {
        $method = 'GET';
        $domain = 'https://127.0.0.1:8000/gateway/' . 'pacs';

        $studyList = $studies->getRequest($method, $domain);

      
        return $this->render('consume_api/index.html.twig', [
            'studyList' => $studyList,
        ]);
    }

    
}
