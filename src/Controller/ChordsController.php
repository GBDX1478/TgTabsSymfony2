<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChordsController extends AbstractController {

    /**
     * @Route("/chords", name="chords.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('chords.html.twig');
    }
}
