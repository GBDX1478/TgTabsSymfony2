<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class VivaLaVidaController extends AbstractController 
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
     * @Route("/vivaLaVida", name="vivaLaVida")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(9);
        return $this->render('songs/vivaLaVida.html.twig', compact('songs'));
    }
}