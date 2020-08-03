<?php

namespace App\Controller;

use App\Repository\MusicStyleRepository;
use App\Repository\SongsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SongsController extends AbstractController 
{   
    /**
     * @var SongsRepository
     */
    private $repository;

    public function __construct(SongsRepository $repository, MusicStyleRepository $musicStyleRepository)
    {
        $this->repository = $repository;
        $this->musicStyleRepository = $musicStyleRepository;
    }

    /**
     * @Route("/chansons", name="songs.index")
     * @return \Symfony\Component\Httmfoundation\Response
     */
    public function index(): Response
    {
       $songs = $this->repository->findBy([], ['Name' => 'ASC']);
       $musicStyle = $this->musicStyleRepository->findAll();
     
        return $this->render('songs.html.twig', [
            'songs' => $songs,
            'musicStyle' => $musicStyle,
        ]);
    }
}