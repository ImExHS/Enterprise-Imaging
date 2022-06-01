<?php

namespace App\Controller;

use App\Handler\UtilsApi;
use App\Services\ConsumeApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorklistController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index(Request $request): Response
    {
        return $this->render('worklist/index.html.twig');
    }

    /**
     * @Route("/work/list", name="app_consume_api")
     */
    public function showWorklist(ConsumeApi $consumeApi, Request $request): Response
    {
        $studyList = [];
        
        if($request->query->get('nodeType') === 'initialnode'){
            $studyList = $consumeApi->getRequest('GET', 'https://127.0.0.1:8000/gateway/' . 'pacs'); 
        }
        
        return $this->render('worklist/worklist.html.twig', [
            'studyList' => $studyList,
        ]);
    }

}
