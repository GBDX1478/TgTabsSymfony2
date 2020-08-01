<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LetsGetItStartedController extends AbstractController 
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
     * @Route("/letsGetItStarted", name="letsGetItStarted")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(5);
       return $this->render('songs/letsGetItStarted.html.twig' , compact('songs') );
    }
}