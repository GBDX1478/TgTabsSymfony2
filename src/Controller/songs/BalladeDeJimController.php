<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BalladeDeJimController extends AbstractController 
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
     * @Route("/balladeDeJim", name="balladeDeJim")
     */
    public function index()
    {
     
        $songs = $this->repository->find(15);

       return $this->render('songs/balladeDeJim.html.twig', compact('songs'));
    }
}