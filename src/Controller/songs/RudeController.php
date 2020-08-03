<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class RudeController extends AbstractController 
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
     * @Route("/rude", name="rude")
     */
    public function index()
    {
     
        $songs = $this->repository->find(20);

       return $this->render('songs/rude.html.twig', compact('songs'));
    }
}