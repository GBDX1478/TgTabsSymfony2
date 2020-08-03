<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WatsonController extends AbstractController 
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
     * @Route("/watson", name="watson")
     */
    public function index()
    {
     
        $songs = $this->repository->find(18);

       return $this->render('songs/watson.html.twig', compact('songs'));
    }
}