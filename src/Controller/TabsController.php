<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabsController extends AbstractController {

    /**
     * @Route("/tabs", name="tabs.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('tabs.html.twig');
    }
}
