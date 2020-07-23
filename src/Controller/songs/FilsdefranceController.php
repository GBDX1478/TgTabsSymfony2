<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FilsdefranceController extends AbstractController 
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
     * @Route("/filsdefrance", name="filsdefrance")
     */
    public function index()
    {
     
        $songs = $this->repository->find(1);

       return $this->render('songs/filsdefrance.html.twig', compact('songs'));
    }
}