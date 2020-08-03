<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LaMisereDenFaceController extends AbstractController 
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
     * @Route("/laMisèreDenFace", name="laMisèreDenFace")
     */
    public function index()
    {
     
        $songs = $this->repository->find(16);

       return $this->render('songs/laMisèreDenFace.html.twig', compact('songs'));
    }
}