<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ViewerController extends AbstractController
{
    /**
     * @Route("/viewer/daniela", name="app_viewer")
     */
    public function index(Request $request): Response
    {
        $idStudy = $request->query->get('idStudy');
        return $this->redirect('http://143.198.25.142:8015/viewer/' . $idStudy);
    }
}
