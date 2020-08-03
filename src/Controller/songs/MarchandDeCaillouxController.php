<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MarchandDeCaillouxController extends AbstractController 
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
     * @Route("/marchandDeCailloux", name="marchandDeCailloux")
     */
    public function index()
    {
     
        $songs = $this->repository->find(17);

       return $this->render('songs/marchandDeCailloux.html.twig', compact('songs'));
    }
}