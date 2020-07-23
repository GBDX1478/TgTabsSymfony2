<?php

namespace App\Controller\songs;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DepuisToujoursController extends AbstractController 
{   


    /**
     * @Route("/depuistoujours", name="depuisToujours")
     * 
     */
    public function index()
    {
     
       return $this->render('songs/depuisToujours.html.twig');
    }
}