<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FouleSentimentaleController extends AbstractController 
{   

    /**
    * @var SongsRepository
    */
    private $repository;

    
    public function __construct(SongsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/FouleSentimentale", name="FouleSentimentale")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(6);
       return $this->render('songs/fouleSentimentale.html.twig' , compact('songs') );
    }
}