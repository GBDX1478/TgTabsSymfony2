<?php

namespace App\Controller;


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

    public function __construct(SongsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/chansons", name="songs.index")
     * @return \Symfony\Component\Httmfoundation\Response
     */
    public function index(): Response
    {
       $songs = $this->repository->findBy([], ['Name' => 'ASC']);
     
        return $this->render('songs.html.twig', [
            'songs' => $songs
        ]);
    }
}