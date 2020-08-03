<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class OutOfTimeController extends AbstractController 
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
     * @Route("/outOfTime", name="outOfTime")
     */
    public function index()
    {
     
        $songs = $this->repository->find(21);

       return $this->render('songs/outOfTime.html.twig', compact('songs'));
    }
}